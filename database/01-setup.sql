/*
 Navicat MySQL Data Transfer

 Source Server         : Devstation
 Source Server Type    : MariaDB
 Source Server Version : 100315
 Source Host           : 192.168.56.101:3306
 Source Schema         : login_course

 Target Server Type    : MariaDB
 Target Server Version : 100315
 File Encoding         : 65001

 Date: 13/08/2019 22:48:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;


CREATE DATABASE IF NOT EXISTS `login_course` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `login_course`;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
                         `user_id` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User Id',
                         `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Users email address',
                         `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User password',
                         `reg_time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'The time and date the user registered',
                         PRIMARY KEY (`user_id`),
                         UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Users table';

