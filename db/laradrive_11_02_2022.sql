/*
 Navicat MySQL Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : laradrive

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 11/02/2022 18:24:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_folders
-- ----------------------------
DROP TABLE IF EXISTS `tbl_folders`;
CREATE TABLE `tbl_folders`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `folder_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent_status` tinyint(1) NOT NULL DEFAULT 0,
  `child_status` tinyint(1) NOT NULL DEFAULT 0,
  `sub_child_status` tinyint(1) NOT NULL DEFAULT 0,
  `parent_item_id` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `serial` double UNSIGNED NOT NULL,
  `created_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `last_opened_at` timestamp(0) NULL DEFAULT NULL,
  `csrf_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id_UNIQUE`(`id`) USING BTREE,
  INDEX `indx_folder`(`id`, `item_id`, `folder_name`, `parent_item_id`, `status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_folders
-- ----------------------------
INSERT INTO `tbl_folders` VALUES (1, 1, 'Test Folder', 1, 0, 0, 0, 1, 0.0000000001, '', '2022-02-11 06:26:26', NULL, NULL, NULL, 'VWMWn257UJzNeGYn9NfZoxw21Vphg2qWT7LdRsKm');
INSERT INTO `tbl_folders` VALUES (2, 2, 'Test Folder_20220211062635', 1, 0, 0, 0, 1, 0.0000000002, '', '2022-02-11 06:26:35', NULL, NULL, NULL, 'VWMWn257UJzNeGYn9NfZoxw21Vphg2qWT7LdRsKm');
INSERT INTO `tbl_folders` VALUES (3, 3, 'Test Folder_20220211062644', 1, 0, 0, 1, 1, 0.0000000003, '', '2022-02-11 06:26:44', NULL, NULL, NULL, 'VWMWn257UJzNeGYn9NfZoxw21Vphg2qWT7LdRsKm');
INSERT INTO `tbl_folders` VALUES (4, 4, 'Test Folder 1', 1, 0, 0, 1, 1, 0.0000000004, '', '2022-02-11 06:26:53', NULL, NULL, NULL, 'VWMWn257UJzNeGYn9NfZoxw21Vphg2qWT7LdRsKm');
INSERT INTO `tbl_folders` VALUES (5, 5, 'sdasdsadsad', 1, 0, 0, 0, 1, 0.0000000005, '', '2022-02-11 08:18:07', NULL, NULL, NULL, 'VWMWn257UJzNeGYn9NfZoxw21Vphg2qWT7LdRsKm');

-- ----------------------------
-- Table structure for tbl_items
-- ----------------------------
DROP TABLE IF EXISTS `tbl_items`;
CREATE TABLE `tbl_items`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folder_id` int(11) NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_size` double NOT NULL,
  `item_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `serial` double NULL DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `last_opened_at` timestamp(0) NULL DEFAULT NULL,
  `csrf_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id_UNIQUE`(`id`) USING BTREE,
  INDEX `item_indx`(`id`, `folder_id`, `item_name`, `status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_items
-- ----------------------------
INSERT INTO `tbl_items` VALUES (1, 1, 'screencapture-127-0-0-1-8000-2022-02-10-13_47_52.png', 'image/png', 41943040, 'file-manager/uploads/20220211115013_screencapture-127-0-0-1-8000-2022-02-10-13_47_52.png', 1, 1.0000000001, '', '2022-02-11 11:50:13', NULL, NULL, NULL, 'xScfJWnnRaqJf51Y8tL0DCC6la3acUpiuUbHJnnc');
INSERT INTO `tbl_items` VALUES (2, 1, 'IMG-20220207-WA0009.jpg', 'image/jpeg', 41943040, 'file-manager/uploads/20220211115148_IMG-20220207-WA0009.jpg', 1, 1.0000000002, '', '2022-02-11 11:51:48', NULL, NULL, NULL, 'xScfJWnnRaqJf51Y8tL0DCC6la3acUpiuUbHJnnc');
INSERT INTO `tbl_items` VALUES (3, 1, 'screencapture-127-0-0-1-8000-2022-02-10-13_47_52.png', 'image/png', 41943040, 'file-manager/uploads/20220211115833_screencapture-127-0-0-1-8000-2022-02-10-13_47_52.png', 1, 1.0000000003, '', '2022-02-11 11:58:33', NULL, NULL, NULL, 'xScfJWnnRaqJf51Y8tL0DCC6la3acUpiuUbHJnnc');
INSERT INTO `tbl_items` VALUES (4, 1, 'earth_PNG10.png', 'image/png', 41943040, 'file-manager/uploads/20220211115949_earth_PNG10.png', 1, 1.0000000004, '', '2022-02-11 11:59:49', NULL, NULL, NULL, 'xScfJWnnRaqJf51Y8tL0DCC6la3acUpiuUbHJnnc');

SET FOREIGN_KEY_CHECKS = 1;
