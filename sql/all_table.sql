------ member-----
CREATE TABLE `hms_ab`.`member` ( 
    `m_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `m_name` VARCHAR(255) NOT NULL , 
    `m_gurdian_name` VARCHAR(255) NOT NULL , 
    `m_occupation` VARCHAR(255) NOT NULL , 
    `m_education` VARCHAR(255) NOT NULL , 
    `m_address` VARCHAR(255) NOT NULL , 
    `m_mobile` VARCHAR(255) NOT NULL , 
    `m_password` VARCHAR(255) NOT NULL , 
    `m_room_no` VARCHAR(255) NOT NULL , 
    `m_social_media` VARCHAR(255) NOT NULL , 
    `m_image` VARCHAR(255) NOT NULL , 
    `m_created_at` DATETIME NOT NULL, 
    `m_created_by` INT NOT NULL , 
    `m_updated_at` DATETIME NULL, 
    `m_updated_by` INT NOT NULL , 
    `m_status` INT NOT NULL , 
    PRIMARY KEY (`m_id`)) ENGINE = InnoDB;

---- Decoration_fee-----
CREATE TABLE `hms_ab`.`decoration_fee` ( 
    `df_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `df_m_id` int NOT NULL , 
    `df_date` DATE NOT NULL , 
    `df_reference` VARCHAR(255) NOT NULL , 
    `df_ammount` VARCHAR(255) NOT NULL , 
    `df_comment` VARCHAR(255) NOT NULL , 
    `df_created_at` DATETIME NOT NULL, 
    `df_created_by` INT NOT NULL , 
    `df_updated_at` DATETIME NULL, 
    `df_updated_by` INT NOT NULL , 
    `df_status` INT NOT NULL , 
    PRIMARY KEY (`df_id`)) ENGINE = InnoDB;

------ Manager Set-----
CREATE TABLE `hms_ab`.`manager_set` ( 
    `ms_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `ms_month` DATE NOT NULL , 
    `ms_fm_id` int NOT NULL , 
    `ms_sm_id` int NOT NULL , 
    `ms_created_at` DATETIME NOT NULL, 
    `ms_created_by` INT NOT NULL , 
    `ms_updated_at` DATETIME NULL, 
    `ms_updated_by` INT NOT NULL , 
    `ms_status` INT NOT NULL , 
    PRIMARY KEY (`ms_id`)) ENGINE = InnoDB;


 ------ Notice-----
CREATE TABLE `hms_ab`.`notice` ( 
    `n_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `n_date` DATE NOT NULL , 
    `n_title`  VARCHAR(255) NOT NULL ,
    `n_created_at` DATETIME NOT NULL, 
    `n_created_by` INT NOT NULL , 
    `n_updated_at` DATETIME NULL, 
    `n_updated_by` INT NOT NULL , 
    `n_status` INT NOT NULL , 
    PRIMARY KEY (`n_id`)) ENGINE = InnoDB;

 ------ Meeting Control-----
CREATE TABLE `hms_ab`.`meeting_control` ( 
    `mc_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `mc_date` DATE NOT NULL , 
    `mc_time` TIME NOT NULL , 
    `mc_subject`  VARCHAR(255) NOT NULL ,
    `mc_created_at` DATETIME NOT NULL, 
    `mc_created_by` INT NOT NULL , 
    `mc_updated_at` DATETIME NULL, 
    `mc_updated_by` INT NOT NULL , 
    `mc_status` INT NOT NULL , 
    PRIMARY KEY (`mc_id`)) ENGINE = InnoDB;

 ------ FrontEnd Control-----
CREATE TABLE `hms_ab`.`frontend` ( 
    `f_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `f_mess_name`  VARCHAR(255) NOT NULL ,
    `f_logo`  VARCHAR(255) NOT NULL ,
    `f_mobile`  VARCHAR(255) NOT NULL ,
    `f_mail`  VARCHAR(255) NOT NULL ,
    `f_address`  VARCHAR(255) NOT NULL ,
    `f_admin_name`  VARCHAR(255) NOT NULL ,
    `f_created_at` DATETIME NOT NULL, 
    `f_created_by` INT NOT NULL , 
    `f_updated_at` DATETIME NULL, 
    `f_updated_by` INT NOT NULL , 
    `f_status` INT NOT NULL , 
    PRIMARY KEY (`f_id`)) ENGINE = InnoDB;

 ------ Daily Meal-----
CREATE TABLE `hms_ab`.`daily_meal` ( 
    `dm_id` INT(11) NOT NULL AUTO_INCREMENT ,
    `dm_m_id` INT NOT NULL ,
    `dm_reguler_meal` INT NOT NULL ,
    `dm_guest_meal` INT NOT NULL ,
    `dm_created_at` DATETIME NOT NULL, 
    `dm_created_by` INT NOT NULL , 
    `dm_updated_at` DATETIME NULL, 
    `dm_updated_by` INT NOT NULL , 
    `dm_status` INT NOT NULL , 
    PRIMARY KEY (`dm_id`)) ENGINE = InnoDB;

 ------Balance-----
CREATE TABLE `hms_ab`.`balance` ( 
    `b_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `b_m_id` INT NOT NULL ,
    `b_date` DATE NOT NULL , 
    `b_ammount`  VARCHAR(255) NOT NULL ,
    `b_created_at` DATETIME NOT NULL, 
    `b_created_by` INT NOT NULL , 
    `b_updated_at` DATETIME NULL, 
    `b_updated_by` INT NOT NULL , 
    `b_status` INT NOT NULL , 
    PRIMARY KEY (`b_id`)) ENGINE = InnoDB;

 ------Marketer-----
CREATE TABLE `hms_ab`.`marketer` ( 
    `mk_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `mk_date` DATE NOT NULL , 
    `mk_fm_id` INT NOT NULL ,
    `mk_sm_id` INT NOT NULL ,
    `mk_created_at` DATETIME NOT NULL, 
    `mk_created_by` INT NOT NULL , 
    `mk_updated_at` DATETIME NULL, 
    `mk_updated_by` INT NOT NULL , 
    `mk_status` INT NOT NULL , 
    PRIMARY KEY (`mk_id`)) ENGINE = InnoDB;

 ------Marketing Cost-----
CREATE TABLE `hms_ab`.`marketing_cost` ( 
    `mcost_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `mcost_date` DATE NOT NULL , 
    `mcost_fm_id` INT NOT NULL ,
    `mcost_sm_id` INT NOT NULL ,
    `mcost_ammount` INT NOT NULL ,
    `mcost_created_at` DATETIME NOT NULL, 
    `mcost_created_by` INT NOT NULL , 
    `mcost_updated_at` DATETIME NULL, 
    `mcost_updated_by` INT NOT NULL , 
    `mcost_status` INT NOT NULL , 
    PRIMARY KEY (`mcost_id`)) ENGINE = InnoDB;

 ------Extra Cost-----
CREATE TABLE `hms_ab`.`extra_cost` ( 
    `ec_id` INT(11) NOT NULL AUTO_INCREMENT , 
    `ec_date` DATE NOT NULL , 
    `ec_fm_id` INT NOT NULL ,
    `ec_sm_id` INT NOT NULL ,
    `ec_for` VARCHAR(255) NOT NULL ,
    `ec_ammount` INT NOT NULL ,
    `ec_created_at` DATETIME NOT NULL, 
    `ec_created_by` INT NOT NULL , 
    `ec_updated_at` DATETIME NULL, 
    `ec_updated_by` INT NOT NULL , 
    `ec_status` INT NOT NULL , 
    PRIMARY KEY (`ec_id`)) ENGINE = InnoDB;

 ------User Comment-----
CREATE TABLE `hms_ab`.`user_comment` ( 
    `uc_id` INT(11) NOT NULL AUTO_INCREMENT ,
    `uc_m_id` INT NOT NULL ,
    `uc_subject` VARCHAR(255) NOT NULL ,
    `uc_comment` VARCHAR(255) NOT NULL ,
    `uc_created_at` DATETIME NOT NULL, 
    `uc_created_by` INT NOT NULL , 
    `uc_updated_at` DATETIME NULL, 
    `uc_updated_by` INT NOT NULL , 
    `uc_status` INT NOT NULL , 
    PRIMARY KEY (`uc_id`)) ENGINE = InnoDB;

 ------Meal Off Control-----
CREATE TABLE `hms_ab`.`meal_off_by_user` ( 
    `mu_id` INT(11) NOT NULL AUTO_INCREMENT ,
    `mu_m_id` INT NOT NULL ,
    `mu_date` DATE NOT NULL ,
    `mu_time` TIME NOT NULL ,
    `mu_created_at` DATETIME NOT NULL, 
    `mu_created_by` INT NOT NULL , 
    `mu_updated_at` DATETIME NULL, 
    `mu_updated_by` INT NOT NULL , 
    `mu_status` INT NOT NULL , 
    PRIMARY KEY (`mu_id`)) ENGINE = InnoDB;