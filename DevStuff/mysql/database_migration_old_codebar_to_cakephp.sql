DROP SCHEMA IF EXISTS `codebarcakephp`;
CREATE SCHEMA `codebarcakephp` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `codebarcakephp` ;

-- codebar_tbl_article TO articles
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` LIKE `codebar`.`codebar_tbl_article`;
INSERT INTO `articles` SELECT * FROM `codebar`.`codebar_tbl_article`;
ALTER TABLE `articles` ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,ADD COLUMN `is_available` TINYINT(1) NOT NULL DEFAULT 1 AFTER `is_active`
  ,ADD COLUMN `article_type_id` INT NOT NULL AFTER `is_available`
  ,ADD COLUMN `etat` VARCHAR(45) NULL AFTER `article_type_id`
  ,ADD COLUMN `date_of_purchase` DATE NULL AFTER `etat`
  ,CHANGE COLUMN `Article_Id` `serial_number` VARCHAR(50) NOT NULL DEFAULT ''
  ,CHANGE COLUMN `Article_Description` `description` VARCHAR(50) NOT NULL DEFAULT ''
  ,CHANGE COLUMN `Article_Appartient_A` `part_of` VARCHAR(50) NULL DEFAULT NULL
  ,CHANGE COLUMN `Article_Localisation` `localisation_id` VARCHAR(20) NOT NULL DEFAULT 'Co171'
  ,CHANGE COLUMN `BoolActif` `is_active` TINYINT NULL DEFAULT 1
  ,DROP PRIMARY KEY 
  ,ADD PRIMARY KEY (`id`);

-- codebar_tbl_person TO people
DROP TABLE IF EXISTS `people`;
CREATE TABLE `people` LIKE `codebar`.`codebar_tbl_personne`;
INSERT INTO `people` SELECT * FROM `codebar`.`codebar_tbl_personne`;
ALTER TABLE `people` ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,ADD COLUMN `is_technician` TINYINT(1) NOT NULL DEFAULT 0 AFTER `phone_number`
  ,ADD COLUMN `language_id` INT NOT NULL AFTER `is_banned`
  ,CHANGE COLUMN `Pers_Sciper` `sciper` INT(8) NOT NULL
  ,CHANGE COLUMN `Pers_Prenom` `first_name` VARCHAR(20) NOT NULL DEFAULT ''
  ,CHANGE COLUMN `Pers_Nom` `last_name` VARCHAR(30) NOT NULL DEFAULT ''
  ,CHANGE COLUMN `Pers_Email` `email` TEXT NULL DEFAULT NULL  
  ,CHANGE COLUMN `Pers_Telephone` `phone_number` VARCHAR(60) NULL DEFAULT NULL
  ,CHANGE COLUMN `Pers_Bannie_Jusqua` `is_banned` INT(15) NULL DEFAULT NULL
  ,DROP PRIMARY KEY 
  ,ADD PRIMARY KEY (`id`);
CREATE UNIQUE INDEX `sciper_UNIQUE` ON `people` (`sciper` ASC);
  
-- codebar_tbl_technicien to people
INSERT INTO `people` (`sciper`, `first_name`, `last_name`, `email`, `phone_number`, `is_technician`, `is_banned`, `language_id`) 
    SELECT `Tech_Id` AS `sciper`, `Tech_Prenom` AS `first_name`, `Tech_Nom` AS `last_name`, `Tech_Email` AS `email`, `Tech_Tel` AS `phone_number`, '1', NULL, '0'
    FROM `codebar`.`codebar_tbl_technicien`
    LEFT OUTER JOIN `people`
    ON `codebar`.`codebar_tbl_technicien`.`Tech_Id` = `people`.`sciper`
    WHERE `people`.`sciper` IS NULL;

-- codebar_tbl_machine TO devices
DROP TABLE IF EXISTS `devices`;
CREATE TABLE `devices` LIKE `codebar`.`codebar_tbl_machine`;
INSERT INTO `devices` SELECT * FROM `codebar`.`codebar_tbl_machine`;
ALTER TABLE `devices` ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,ADD COLUMN `date_first_seen` DATETIME AFTER `id`
  ,ADD COLUMN `date_end_of_warranty` DATETIME AFTER `id`
  ,CHANGE COLUMN `Mach_ServiceTag` `serial_number` VARCHAR(30) NOT NULL DEFAULT ''
  ,CHANGE COLUMN `Mach_IdxTypeMachine` `device_type_id` INT(6) NOT NULL DEFAULT '0'
  ,CHANGE COLUMN `Mach_IdxSciper` `person_id` INT(8) NOT NULL DEFAULT '0'
  ,DROP PRIMARY KEY 
  ,ADD PRIMARY KEY (`id`);
  
-- codebar_tbl_type_machine TO device_types
DROP TABLE IF EXISTS `device_types`;
CREATE TABLE `device_types` LIKE `codebar`.`codebar_tbl_type_machine`;
INSERT INTO `device_types` SELECT * FROM `codebar`.`codebar_tbl_type_machine`;
ALTER TABLE `device_types` CHANGE COLUMN `TypeMachine_ID` `id` INT(6) NOT NULL AUTO_INCREMENT
  ,CHANGE COLUMN `TypeMachine` `device_type_id` VARCHAR(45) NOT NULL DEFAULT ''
  ,CHANGE COLUMN `BoolActif` `is_active` TINYINT(1) NOT NULL DEFAULT '1';
  
-- codebar_tbl_emprunt TO loans
DROP TABLE IF EXISTS `loans`;
CREATE TABLE `loans` LIKE `codebar`.`codebar_tbl_emprunt`;
INSERT INTO `loans` SELECT * FROM `codebar`.`codebar_tbl_emprunt`;
ALTER TABLE `loans` CHANGE COLUMN `Emprunt_Id` `id` INT(8) NOT NULL AUTO_INCREMENT
  ,CHANGE COLUMN `Emprunt_IdxSciper` `person_customer_id` INT(8) NOT NULL DEFAULT '0'
  ,CHANGE COLUMN `Emprunt_IdxTechnicien` `person_technician_id` INT(8) NOT NULL DEFAULT '0'
  ,CHANGE COLUMN `Emprunt_Date` `borrow_date` INT(15) NOT NULL DEFAULT '0';
  
-- codebar_tbl_emprunt TO personal_loans
DROP TABLE IF EXISTS `personal_loans`;
CREATE TABLE `personal_loans` LIKE `codebar`.`codebar_tbl_emprunt`;
INSERT INTO `personal_loans` SELECT * FROM `codebar`.`codebar_tbl_emprunt` WHERE `codebar`.`codebar_tbl_emprunt`.`Emprunt_DateRetour` <> '0';
ALTER TABLE `personal_loans` ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,CHANGE COLUMN `Emprunt_Id` `loan_id` INT(8) NOT NULL
  ,CHANGE COLUMN `Emprunt_Raison` `personal_loan_reason_id` TEXT NULL DEFAULT NULL
  ,CHANGE COLUMN `Emprunt_DateRetour` `planned_return_date` INT(15) NULL DEFAULT NULL
  ,DROP PRIMARY KEY 
  ,ADD PRIMARY KEY (`id`);
  
-- codebar_tbl_article_emprunte To loan_articles
DROP TABLE IF EXISTS `loan_articles`;
CREATE TABLE `loan_articles` AS 
  (SELECT `codebarcakephp`.`articles`.`id` AS `article_id`, `codebar`.`codebar_tbl_article_emprunte`.* 
   FROM  `codebar`.`codebar_tbl_article_emprunte` 
   JOIN `codebarcakephp`.`articles` 
   ON `codebarcakephp`.`articles`.`serial_number` = `codebar`.`codebar_tbl_article_emprunte`.`ArtEmp_Idx_Article`);
ALTER TABLE `loan_articles` CHANGE COLUMN `ArtEmp_ID` `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,CHANGE COLUMN `ArtEmp_Idx_Emprunt` `loan_id` INT NOT NULL
  ,CHANGE COLUMN `ArtEmp_VisaTechnicien` `person_technician_return_id` INT NULL DEFAULT NULL
  ,CHANGE COLUMN `ArtEmp_DateRetourReel` `actual_return_date` INT(15) NULL DEFAULT NULL
  ,DROP COLUMN `ArtEmp_Idx_Article`
  ,ADD PRIMARY KEY (`id`);
  
-- codebar_tbl_email TO emails
DROP TABLE IF EXISTS `emails`;
CREATE TABLE `emails` LIKE `codebar`.`codebar_tbl_email`;
INSERT INTO `emails` SELECT * FROM `codebar`.`codebar_tbl_email`;
ALTER TABLE `emails` CHANGE COLUMN `Email_ID` `id` INT NOT NULL AUTO_INCREMENT
  ,CHANGE COLUMN `Email_Header` `header` TEXT NOT NULL
  ,CHANGE COLUMN `Email_Sujet` `title` VARCHAR(255) NOT NULL
  ,CHANGE COLUMN `Email_Message` `message` TEXT NOT NULL
  ,CHANGE COLUMN `Email_IdxEmprunt` `loan_id` INT NULL
  ,CHANGE COLUMN `Email_IdxIntervention` `intervention_id` INT NULL
  ,CHANGE COLUMN `Email_To` `to_person_email` VARCHAR(255) NOT NULL
  ,CHANGE COLUMN `Email_Date` `date` INT(15) NOT NULL
  ,CHANGE COLUMN `Email_From` `from_person_email` VARCHAR(255) NULL
  ,ADD COLUMN `from_person_id` INT NOT NULL AFTER `from_person_email`
  ,ADD COLUMN `to_person_id` INT NOT NULL AFTER `to_person_email`;
  
-- codebar_tbl_intervention TO interventions
DROP TABLE IF EXISTS `interventions`;
CREATE TABLE `interventions` AS 
  (SELECT `codebarcakephp`.`devices`.`id` AS `device_id`, `codebar`.`codebar_tbl_intervention`.* 
   FROM  `codebar`.`codebar_tbl_intervention` 
   JOIN `codebarcakephp`.`devices` 
   ON `codebarcakephp`.`devices`.`serial_number` = `codebar`.`codebar_tbl_intervention`.`Inter_IdxServiceTag`);
ALTER TABLE `interventions` CHANGE COLUMN `Inter_ID` `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,CHANGE COLUMN `Inter_Date` `entry_date` INT NOT NULL
  ,CHANGE COLUMN `Inter_Symptome` `description` TEXT NOT NULL
  ,CHANGE COLUMN `Inter_Diagnostic` `diagnostic` TEXT NULL
  ,CHANGE COLUMN `Inter_Commentaires` `comment` TEXT NULL
  ,CHANGE COLUMN `Inter_PanneTrouvee` `breakdown_found` TEXT NULL
  ,CHANGE COLUMN `Inter_DateReparation` `resolved_date` INT NULL
  ,ADD COLUMN `exit_date` INT NULL
  ,DROP COLUMN `Inter_IdxTechnicien`
  ,DROP COLUMN `Inter_IdxServiceTag`
  ,DROP COLUMN `Inter_IdxTypeIntervention`
  ,DROP COLUMN `Inter_Repare`
  ,ADD PRIMARY KEY (`id`);
  
-- codebar_tbl_intervention_etat TO operations
DROP TABLE IF EXISTS `operations`;
CREATE TABLE `operations` LIKE `codebar`.`codebar_tbl_intervention_etat`;
INSERT INTO `operations` SELECT * FROM `codebar`.`codebar_tbl_intervention_etat`;
ALTER TABLE `operations` CHANGE COLUMN `InterEtat_Id` `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,CHANGE COLUMN `InterEtat_IdxIntervention` `intervention_id` INT NULL
  ,CHANGE COLUMN `InterEtat_IdxEtat` `operation_type_id` INT NOT NULL
  ,CHANGE COLUMN `InterEtat_IdxTechnicien` `person_technician_id` INT NOT NULL
  ,CHANGE COLUMN `InterEtat_Timestamp` `date` INT NOT NULL
  ,ADD COLUMN `location_id` INT NOT NULL
  ,ADD COLUMN `estimate_id` INT NULL;

  
