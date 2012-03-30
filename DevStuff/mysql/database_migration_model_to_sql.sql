SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `codebarcakephp` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `codebarcakephp` ;

-- -----------------------------------------------------
-- Table `codebarcakephp`.`locations`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`locations` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`article_types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`article_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `description` VARCHAR(45) NULL ,
  `parent` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`articles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`articles` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `serial_number` VARCHAR(50) NOT NULL ,
  `description` VARCHAR(50) NOT NULL ,
  `part_of` VARCHAR(50) NULL ,
  `is_available` TINYINT(1) NOT NULL DEFAULT 1 ,
  `is_actif` TINYINT(1) NULL DEFAULT 1 ,
  `location_id` INT NOT NULL ,
  `article_type_id` INT NOT NULL ,
  `state` VARCHAR(45) NULL ,
  `date_of_purchase` DATE NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`brands`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`brands` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(50) NOT NULL ,
  `link_to_warranty_check` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `Name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`device_categories`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`device_categories` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`device_types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`device_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(50) NOT NULL ,
  `device_brand_id` INT NOT NULL ,
  `device_category_id` INT NOT NULL ,
  `is_active` TINYINT(1) NOT NULL DEFAULT 1 ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `NameAndBrand_UNIQUE` (`name` ASC, `device_brand_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`languages`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`languages` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `language_full_name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`partners`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`partners` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`persons`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`persons` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `language_id` VARCHAR(2) NOT NULL ,
  `partner_id` INT NULL ,
  `sciper` INT NOT NULL ,
  `first_name` VARCHAR(50) NOT NULL ,
  `last_name` VARCHAR(50) NOT NULL ,
  `email` VARCHAR(50) NOT NULL ,
  `phone_number` VARCHAR(50) NULL ,
  `is_technician` TINYINT(1) NOT NULL ,
  `is_banned` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `sciper_UNIQUE` (`sciper` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`devices`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`devices` (
  `id` INT(10) NOT NULL AUTO_INCREMENT ,
  `serial_number` VARCHAR(30) NOT NULL ,
  `device_type_id` INT NOT NULL ,
  `device_id` INT(10) NULL ,
  `person_id` INT NOT NULL ,
  `date_first_seen` DATETIME NULL ,
  `date_end_of_warranty` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`interventions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`interventions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `device_id` INT NOT NULL ,
  `entry_date` DATETIME NOT NULL ,
  `description` TEXT NOT NULL ,
  `resolved_date` DATETIME NULL ,
  `exit_date` DATETIME NULL ,
  `diagnostic` TEXT NULL ,
  `comment` TEXT NULL ,
  `breakdown_found` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`technical_loans`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`technical_loans` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `intervention_id` INT NOT NULL ,
  `loan_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`loans`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`loans` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `borrow_date` DATETIME NOT NULL ,
  `person_technician_id` INT NOT NULL ,
  `person_customer_id` INT NOT NULL ,
  `technical_loans_id` INT NULL ,
  `technical_loans_intervention_id` INT NULL ,
  `technical_loans_loan_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`loan_articles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`loan_articles` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `loan_id` INT NOT NULL ,
  `article_id` INT NOT NULL ,
  `actual_return_date` DATETIME NULL DEFAULT NULL ,
  `person_technician_return_id` INT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`operation_categories`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`operation_categories` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`operation_types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`operation_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(50) NOT NULL ,
  `operation_category_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`external_intervention_number_types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`external_intervention_number_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `partners_id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`external_intervention_numbers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`external_intervention_numbers` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `intervention_id` INT NOT NULL ,
  `partner_id` INT NOT NULL ,
  `external_intervention_number_types_id` INT NOT NULL ,
  `number` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`estimates`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`estimates` (
  `id` INT NOT NULL ,
  `entry_date` DATETIME NOT NULL ,
  `deadline_date` DATETIME NOT NULL ,
  `interventions_id` INT NOT NULL ,
  `external_intervention_number_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`operations`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`operations` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `location_id` INT NOT NULL ,
  `operation_type_id` INT NOT NULL ,
  `person_technician_id` INT NOT NULL ,
  `intervention_id` INT NULL ,
  `estimate_id` INT NULL ,
  `date` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`personal_loan_reasons`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`personal_loan_reasons` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `reason` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`personal_loans`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`personal_loans` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `loan_id` INT NOT NULL ,
  `personal_loan_reason_id` INT NOT NULL ,
  `planned_return_date` DATE NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`documents`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`documents` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `intervention_id` INT NOT NULL ,
  `format` VARCHAR(45) NOT NULL ,
  `link` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`article_damages`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`article_damages` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `article_id` INT NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  `location` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`brands_partners`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`brands_partners` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `brand_id` INT NOT NULL ,
  `partner_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`estimate_items`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`estimate_items` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `quantity` INT NOT NULL DEFAULT 1 ,
  `price` VARCHAR(45) NOT NULL ,
  `estimates_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`diagnostics`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`diagnostics` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `question` VARCHAR(255) NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`causes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`causes` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`problem_categories`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`problem_categories` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`problems`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`problems` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `problem_category_id` INT NOT NULL ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`causes_devices_problems`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`causes_devices_problems` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `problem_id` INT NOT NULL ,
  `device_id` INT(10) NOT NULL ,
  `cause_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`causes_diagnostics`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`causes_diagnostics` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `diagnostics_id` INT NOT NULL ,
  `causes_id` INT NOT NULL ,
  `answer` TINYINT(1) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`interventions_problems`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`interventions_problems` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `problem_id` INT NOT NULL ,
  `intervention_id` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`event_types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`event_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL ,
  `color` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `event_type_id` INT NOT NULL ,
  `title` VARCHAR(255) NOT NULL ,
  `details` TEXT NOT NULL ,
  `start` DATETIME NOT NULL ,
  `end` DATETIME NOT NULL ,
  `all_day` TINYINT(1) NOT NULL DEFAULT 1 ,
  `status` VARCHAR(20) NOT NULL DEFAULT 'Scheduled' ,
  `active` TINYINT(1) NOT NULL DEFAULT 1 ,
  `created` DATE NULL ,
  `modified` DATE NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `codebarcakephp`.`emails`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `codebarcakephp`.`emails` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `loan_id` INT NULL ,
  `intervention_id` INT NULL ,
  `header` TEXT NOT NULL ,
  `title` VARCHAR(255) NOT NULL ,
  `message` TEXT NOT NULL ,
  `to_person_email` VARCHAR(255) NULL ,
  `to_person_id` INT NOT NULL ,
  `from_person_email` VARCHAR(255) NULL ,
  `from_person_id` INT NOT NULL ,
  `date` INT(15) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
