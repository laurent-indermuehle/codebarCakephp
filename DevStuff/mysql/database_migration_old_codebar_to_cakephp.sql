DROP SCHEMA IF EXISTS `codebarcakephp`;
CREATE SCHEMA `codebarcakephp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `codebarcakephp` ;

### codebar_tbl_person TO people
CREATE TABLE `people` LIKE `codebar`.`codebar_tbl_personne`;
INSERT INTO `people` SELECT * FROM `codebar`.`codebar_tbl_personne`;
# Je reserve l'id 1 pour Poseidon
ALTER TABLE `people` AUTO_INCREMENT = 2 
  ,ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,ADD COLUMN `is_technician` TINYINT(1) NOT NULL DEFAULT 0 AFTER `phone_number`
  ,ADD COLUMN `language_id` INT NOT NULL AFTER `is_banned_unix`
  ,ADD COLUMN `partner_id` INT NULL AFTER `is_banned_unix`
  ,CHANGE COLUMN `Pers_Sciper` `sciper` INT(8) NOT NULL
  ,CHANGE COLUMN `Pers_Prenom` `first_name` VARCHAR(20) NOT NULL DEFAULT ''
  ,CHANGE COLUMN `Pers_Nom` `last_name` VARCHAR(30) NOT NULL DEFAULT ''
  ,CHANGE COLUMN `Pers_Email` `email` TEXT NULL DEFAULT NULL  
  ,CHANGE COLUMN `Pers_Telephone` `phone_number` VARCHAR(60) NULL DEFAULT NULL
  ,CHANGE COLUMN `Pers_Bannie_Jusqua` `is_banned_unix` INT NULL DEFAULT NULL
  ,ADD COLUMN `is_banned` DATE NULL DEFAULT NULL AFTER `is_banned_unix`
  ,DROP PRIMARY KEY 
  ,ADD PRIMARY KEY (`id`);
CREATE UNIQUE INDEX `sciper_UNIQUE` ON `people` (`sciper` ASC);
UPDATE `people` SET `is_banned` = from_unixtime(`is_banned_unix`);
ALTER TABLE `people` DROP COLUMN `is_banned_unix`;
ALTER TABLE `people` ENGINE = InnoDB;
  
### codebar_tbl_technicien to people
INSERT INTO `people` 
    (
        `sciper`, 
        `first_name`, 
        `last_name`, 
        `email`, 
        `phone_number`, 
        `is_technician`, 
        `is_banned`, 
        `language_id`,
        `partner_id`
    ) 
    SELECT 
        `Tech_Id`       AS `sciper`,
        `Tech_Prenom`   AS `first_name`, 
        `Tech_Nom`      AS `last_name`, 
        `Tech_Email`    AS `email`, 
        `Tech_Tel`      AS `phone_number`, 
        '1', 
        NULL, 
        '0',
        NULL
    FROM `codebar`.`codebar_tbl_technicien`
    LEFT OUTER JOIN `people`
    ON `codebar`.`codebar_tbl_technicien`.`Tech_Id` = `people`.`sciper`
    WHERE `people`.`sciper` IS NULL;

### codebar_tbl_machine TO devices
CREATE TABLE `devices` LIKE `codebar`.`codebar_tbl_machine`;
INSERT INTO `devices` SELECT * FROM `codebar`.`codebar_tbl_machine`;
ALTER TABLE `devices` ADD COLUMN `person_id` INT NOT NULL DEFAULT '0';
UPDATE `devices` SET `person_id` = (SELECT `id` AS `person_id`
  FROM `people`
  WHERE `devices`.`Mach_IdxSciper` = `people`.`sciper`);
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'D90W';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'CaRe';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'L3-FTV28';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '5G37S1J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'FLDBS1J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '8XKNB1J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '7WY6S1J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '1PQ9B1J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '7G4CS1J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'A85W5';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W8610219VJ3';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W861021AVJ3';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'L3-A0496';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'L3-D4386';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'BC2482J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'BKC5B2J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '8KVCJ1J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '9KNBQ2J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '44TBQ2J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'D90W7';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'JP7ZY2J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = '2KW403J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'JYP143J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W880113GZ66';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W8801011XAG';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'BW8801011XAG';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W88151H8Y51';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'L3-A0201';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W88461WP1B5';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W88467WG1GN';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W88455WQ1AX';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'JZB034J';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W894822264C';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W86133LQVJ3';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'CND0103LG4';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'B058067';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'B058080';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'R8-64GPG';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'R8-77YTP';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W8016JVNAGU';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'W8016JWJAGU';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'R8-4Z33B';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'R8-4Z32X';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'CZC047C700';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'CND0480X88';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'C02FJ10CDH2M';
DELETE FROM `devices` WHERE `Mach_ServiceTag` = 'C02FJ10CDH2M';
ALTER TABLE `devices` ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,ADD COLUMN `date_first_seen` DATETIME AFTER `id`
  ,ADD COLUMN `date_end_of_warranty` DATE AFTER `id`
  ,ADD COLUMN `date_of_purchase` DATE AFTER `id`
  ,ADD COLUMN `is_active` BOOL NOT NULL DEFAULT '1'
  ,ADD COLUMN `location_id` INT NULL
  ,ADD COLUMN `Article_Appartient_A` VARCHAR(100)
  ,CHANGE COLUMN `Mach_ServiceTag` `serial_number` VARCHAR(30) NOT NULL DEFAULT '0' UNIQUE
  ,CHANGE COLUMN `Mach_IdxTypeMachine` `device_type_id` INT NOT NULL DEFAULT '0'
  ,DROP COLUMN `Mach_IdxSciper`
  ,DROP PRIMARY KEY 
  ,ADD PRIMARY KEY (`id`);
   
### codebar_tbl_article TO devices
INSERT INTO `devices` (`serial_number`, `is_active`, `location_id`, `person_id`, `Article_Appartient_A`) SELECT 
     `codebar`.`codebar_tbl_article`.`Article_Id` AS `serial_number`,
     `codebar`.`codebar_tbl_article`.`BoolActif` AS `is_active`,
     '1' AS `location_id`,
     '1' AS `person_id`,
     `codebar`.`codebar_tbl_article`.`Article_Appartient_A`
    FROM `codebar`.`codebar_tbl_article`;

### devices_tmp
# J'utiliser create table pour faire cette table temporaire. Car en faisant via un update 
# on ne pourait pas joindre une table sur elle même.
CREATE TABLE `devices_tmp` AS
  (SELECT `d1`.*, `d2`.`id` AS `device_id`
  FROM `devices` AS `d1`
  LEFT JOIN `devices` AS `d2`
  ON `d1`.`Article_Appartient_A` = `d2`.`serial_number`);
ALTER TABLE `devices_tmp` DROP COLUMN `Article_Appartient_A`;
DROP TABLE `devices`;
ALTER TABLE `codebarcakephp`.`devices_tmp` RENAME TO  `codebarcakephp`.`devices` ;
ALTER TABLE `codebarcakephp`.`devices` 
  CHANGE COLUMN `device_id` `device_id` INT NULL DEFAULT '0'  AFTER `serial_number`
  ,CHANGE COLUMN `device_type_id` `device_type_id` INT NOT NULL DEFAULT '0'  
  ,CHANGE COLUMN `person_id` `person_id` INT NOT NULL DEFAULT '0'  
  ,CHANGE COLUMN `location_id` `location_id` INT NULL DEFAULT NULL;
ALTER TABLE `devices` ENGINE = InnoDB;
  
### codebar_tbl_type_machine TO device_types
CREATE TABLE `device_types` LIKE `codebar`.`codebar_tbl_type_machine`;
INSERT INTO `device_types` SELECT * FROM `codebar`.`codebar_tbl_type_machine`;
ALTER TABLE `device_types` CHANGE COLUMN `TypeMachine_ID` `id` INT(6) NOT NULL AUTO_INCREMENT
  ,CHANGE COLUMN `TypeMachine` `name` VARCHAR(50) NOT NULL
  ,CHANGE COLUMN `BoolActif` `is_active` TINYINT(1) NOT NULL DEFAULT '1'
  ,ADD COLUMN `brand_id` INT NOT NULL
  ,ADD COLUMN `device_category_id` INT NOT NULL;
ALTER TABLE `device_types` ENGINE = InnoDB;
  
### codebar_tbl_emprunt TO loans
CREATE TABLE `loans` LIKE `codebar`.`codebar_tbl_emprunt`;
INSERT INTO `loans` SELECT * FROM `codebar`.`codebar_tbl_emprunt`;
ALTER TABLE `loans` CHANGE COLUMN `Emprunt_Id` `id` INT NOT NULL AUTO_INCREMENT
  ,CHANGE COLUMN `Emprunt_IdxSciper` `person_customer_id` INT NOT NULL DEFAULT '0'
  ,CHANGE COLUMN `Emprunt_IdxTechnicien` `person_technician_id` INT NOT NULL DEFAULT '0'
  ,CHANGE COLUMN `Emprunt_Date` `borrow_date_unix` INT NOT NULL
  ,ADD COLUMN `borrow_date` DATETIME NOT NULL
  ,DROP COLUMN `Emprunt_Raison`
  ,DROP COLUMN `Emprunt_DateRetour`;
UPDATE `loans` SET `borrow_date` = from_unixtime(`borrow_date_unix`);
ALTER TABLE `loans` DROP COLUMN `borrow_date_unix`;
UPDATE `loans` SET `person_customer_id` = (SELECT `id` AS `person_customer_id`
  FROM `people`
  WHERE `loans`.`person_customer_id` = `people`.`sciper`);
UPDATE `loans` SET `person_technician_id` = (SELECT `id` AS `person_technician_id`
  FROM `people`
  WHERE `loans`.`person_technician_id` = `people`.`sciper`);
ALTER TABLE `loans` ENGINE = InnoDB;
  
### codebar_tbl_emprunt TO personal_loans
CREATE TABLE `personal_loans` LIKE `codebar`.`codebar_tbl_emprunt`;
INSERT INTO `personal_loans` SELECT * FROM `codebar`.`codebar_tbl_emprunt` WHERE `codebar`.`codebar_tbl_emprunt`.`Emprunt_DateRetour` <> '0';
ALTER TABLE `personal_loans` AUTO_INCREMENT = 1
  ,ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,ADD COLUMN `personal_loan_reason_id` INT NOT NULL DEFAULT '1' AFTER `loan_id`
  ,CHANGE COLUMN `Emprunt_Id` `loan_id` INT NOT NULL
  ,CHANGE COLUMN `Emprunt_DateRetour` `planned_return_date_unix` INT NULL DEFAULT NULL
  ,ADD COLUMN `planned_return_date` DATETIME NULL DEFAULT NULL
  ,DROP COLUMN `Emprunt_Raison`
  ,DROP COLUMN `Emprunt_Date`
  ,DROP COLUMN `Emprunt_IdxSciper`
  ,DROP COLUMN `Emprunt_IdxTechnicien`
  ,DROP PRIMARY KEY 
  ,ADD PRIMARY KEY (`id`);
UPDATE `personal_loans` SET `planned_return_date` = from_unixtime(`planned_return_date_unix`);
ALTER TABLE `personal_loans` DROP COLUMN `planned_return_date_unix`;
ALTER TABLE `personal_loans` ENGINE = InnoDB;

### codebar_tbl_emprunt TO technical_loans
CREATE TABLE `technical_loans` LIKE `codebar`.`codebar_tbl_emprunt`;
INSERT INTO `technical_loans` SELECT * FROM `codebar`.`codebar_tbl_emprunt` WHERE `codebar`.`codebar_tbl_emprunt`.`Emprunt_DateRetour` = '0';
ALTER TABLE `technical_loans` AUTO_INCREMENT = 1
  ,ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,ADD COLUMN `intervention_id` INT NOT NULL DEFAULT '0'
  ,CHANGE COLUMN `Emprunt_Id` `loan_id` INT NOT NULL
  ,DROP COLUMN `Emprunt_DateRetour`
  ,DROP COLUMN `Emprunt_Raison`
  ,DROP COLUMN `Emprunt_Date`
  ,DROP COLUMN `Emprunt_IdxSciper`
  ,DROP COLUMN `Emprunt_IdxTechnicien`
  ,DROP PRIMARY KEY 
  ,ADD PRIMARY KEY (`id`);
ALTER TABLE `technical_loans` ENGINE = InnoDB;
  
### codebar_tbl_article_emprunte To device_loans
CREATE TABLE `device_loans` AS 
  (SELECT `codebarcakephp`.`devices`.`id` AS `device_id`, `codebar`.`codebar_tbl_article_emprunte`.* 
   FROM  `codebar`.`codebar_tbl_article_emprunte` 
   JOIN `codebarcakephp`.`devices` 
   ON `codebarcakephp`.`devices`.`serial_number` = `codebar`.`codebar_tbl_article_emprunte`.`ArtEmp_Idx_Article`);
ALTER TABLE `device_loans` CHANGE COLUMN  `ArtEmp_Idx_Emprunt` `loan_id` INT NOT NULL
  ,CHANGE COLUMN `ArtEmp_VisaTechnicien` `person_technician_return_id` INT NULL DEFAULT NULL
  ,CHANGE COLUMN `ArtEmp_DateRetourReel` `actual_return_date_unix` INT NULL DEFAULT NULL
  ,DROP COLUMN `ArtEmp_Idx_Article`
  ,DROP COLUMN `ArtEmp_ID`
  ,ADD COLUMN `actual_return_date` DATETIME NULL DEFAULT NULL
  ,ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,ADD PRIMARY KEY (`id`);
UPDATE `device_loans` SET `actual_return_date` = from_unixtime(`actual_return_date_unix`) WHERE `actual_return_date_unix` > '1';
ALTER TABLE `device_loans` DROP COLUMN `actual_return_date_unix`;
UPDATE `device_loans` SET `person_technician_return_id` = (SELECT `id` AS `person_technician_return_id`
  FROM `people`
  WHERE `device_loans`.`person_technician_return_id` = `people`.`sciper`);
ALTER TABLE `device_loans` ENGINE = InnoDB;
  
### codebar_tbl_email TO emails
CREATE TABLE `emails` LIKE `codebar`.`codebar_tbl_email`;
INSERT INTO `emails` SELECT * FROM `codebar`.`codebar_tbl_email`;
ALTER TABLE `emails` CHANGE COLUMN `Email_ID` `id` INT NOT NULL AUTO_INCREMENT
  ,CHANGE COLUMN `Email_Header` `header` TEXT NOT NULL
  ,CHANGE COLUMN `Email_Sujet` `title` VARCHAR(255) NOT NULL
  ,CHANGE COLUMN `Email_Message` `message` TEXT NOT NULL
  ,CHANGE COLUMN `Email_IdxEmprunt` `loan_id` INT NULL
  ,CHANGE COLUMN `Email_IdxIntervention` `intervention_id` INT NULL
  ,CHANGE COLUMN `Email_To` `to_person_email` VARCHAR(255) NOT NULL
  ,CHANGE COLUMN `Email_Date` `date_unix` INT NOT NULL
  ,CHANGE COLUMN `Email_From` `from_person_email` VARCHAR(255) NULL
  ,ADD COLUMN `date` DATETIME NOT NULL
  ,ADD COLUMN `from_person_id` INT NOT NULL AFTER `from_person_email`
  ,ADD COLUMN `to_person_id` INT NOT NULL AFTER `to_person_email`;
UPDATE `emails` SET `date` = from_unixtime(`date_unix`);
ALTER TABLE `emails` DROP COLUMN `date_unix`;
ALTER TABLE `emails` ENGINE = InnoDB;
ALTER TABLE `codebarcakephp`.`emails` CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;
  
### codebar_tbl_intervention TO interventions
CREATE TABLE `interventions` AS 
  (SELECT `codebarcakephp`.`devices`.`id` AS `device_id`, `codebar`.`codebar_tbl_intervention`.* 
   FROM  `codebar`.`codebar_tbl_intervention` 
   LEFT JOIN `codebarcakephp`.`devices` 
   ON `codebarcakephp`.`devices`.`serial_number` = `codebar`.`codebar_tbl_intervention`.`Inter_IdxServiceTag`);
ALTER TABLE `interventions` CHANGE COLUMN `Inter_ID` `id` INT NOT NULL
  ,CHANGE COLUMN `Inter_Symptome` `description` TEXT NOT NULL
  ,CHANGE COLUMN `Inter_Diagnostic` `diagnostic` TEXT NULL
  ,CHANGE COLUMN `Inter_Commentaires` `comment` TEXT NULL
  ,CHANGE COLUMN `Inter_PanneTrouvee` `breakdown_found` TEXT NULL
  ,DROP COLUMN `Inter_DateReparation`
  ,DROP COLUMN `Inter_Date`
  ,DROP COLUMN `Inter_IdxTechnicien`
  ,DROP COLUMN `Inter_IdxServiceTag`
  ,DROP COLUMN `Inter_IdxTypeIntervention`
  ,DROP COLUMN `Inter_Repare`;
ALTER TABLE `codebarcakephp`.`interventions` 
  CHANGE COLUMN `id` `id` INT NOT NULL AUTO_INCREMENT  FIRST 
  ,CHANGE COLUMN `device_id` `device_id` INT NOT NULL
  ,ADD INDEX `device_id` USING BTREE (`device_id` ASC)
  ,ADD PRIMARY KEY (`id`) ;
ALTER TABLE `interventions` ENGINE = InnoDB;
  
### codebar_tbl_intervention_etat TO operations
CREATE TABLE `operations` LIKE `codebar`.`codebar_tbl_intervention_etat`;
INSERT INTO `operations` SELECT * FROM `codebar`.`codebar_tbl_intervention_etat`;
ALTER TABLE `operations` CHANGE COLUMN `InterEtat_Id` `id` INT NOT NULL AUTO_INCREMENT FIRST
  ,CHANGE COLUMN `InterEtat_IdxIntervention` `intervention_id` INT NULL
  ,CHANGE COLUMN `InterEtat_IdxEtat` `operation_type_id` INT NOT NULL
  ,CHANGE COLUMN `InterEtat_IdxTechnicien` `person_technician_id` INT NOT NULL
  ,CHANGE COLUMN  `InterEtat_Timestamp` `date_unix` INT NOT NULL
  ,ADD COLUMN `date` DATETIME NOT NULL
  ,ADD COLUMN `location_id` INT NOT NULL
  ,ADD COLUMN `estimate_id` INT NULL;
UPDATE `operations` SET `date` = from_unixtime(`date_unix`);
ALTER TABLE `operations` DROP COLUMN `date_unix`;
UPDATE `operations` SET `person_technician_id` = (SELECT `id` AS `person_technician_id`
  FROM `people`
  WHERE `operations`.`person_technician_id` = `people`.`sciper`);
ALTER TABLE `operations` ENGINE = InnoDB;