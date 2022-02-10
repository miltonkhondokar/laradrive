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

 Date: 10/02/2022 17:58:18
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
  `serial` decimal(10, 10) UNSIGNED NOT NULL,
  `created_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `last_opened_at` timestamp(0) NULL DEFAULT NULL,
  `csrf_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_folders
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_items
-- ----------------------------
DROP TABLE IF EXISTS `tbl_items`;
CREATE TABLE `tbl_items`  (
  `id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `item_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `item_size` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `serial` decimal(10, 10) NULL DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `last_opened_at` timestamp(0) NULL DEFAULT NULL,
  `csrf_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_items
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
