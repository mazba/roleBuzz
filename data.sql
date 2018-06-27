/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:3306
 Source Schema         : role_buzz

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 01/04/2018 15:11:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2018_02_22_055308_create_user_groups', 1);
INSERT INTO `migrations` VALUES (2, '2018_02_22_060129_create_user_permission', 1);
INSERT INTO `migrations` VALUES (3, '2018_02_22_061459_create_group_permission_logs', 1);
INSERT INTO `migrations` VALUES (4, '2018_02_27_065843_create_user', 2);

-- ----------------------------
-- Table structure for sys_group_permission_logs
-- ----------------------------
DROP TABLE IF EXISTS `sys_group_permission_logs`;
CREATE TABLE `sys_group_permission_logs`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `old_roles` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_roles` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sys_group_permissions
-- ----------------------------
DROP TABLE IF EXISTS `sys_group_permissions`;
CREATE TABLE `sys_group_permissions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sys_group_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_verbs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `as` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 200 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sys_group_permissions
-- ----------------------------
INSERT INTO `sys_group_permissions` VALUES (194, '1', 'admin/permissions', 'GET,HEAD', 'permissions', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (195, '1', 'admin/permissions/create-group', 'GET,HEAD', 'create_group', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (196, '1', 'admin/permissions/store', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (197, '1', 'admin/permissions/build/{id}', 'GET,HEAD', 'build_permission', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (198, '1', 'admin/permissions/set/{id}', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (199, '1', 'admin', 'GET,HEAD', 'admin_dashboard', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for sys_user_groups
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_groups`;
CREATE TABLE `sys_user_groups`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sys_user_groups
-- ----------------------------
INSERT INTO `sys_user_groups` VALUES (1, NULL, 'Super Admin', NULL, NULL, '2018-02-26 08:25:21', '2018-02-26 08:25:21');
INSERT INTO `sys_user_groups` VALUES (2, NULL, 'Admin', NULL, NULL, '2018-02-26 08:39:45', '2018-02-26 08:39:45');
INSERT INTO `sys_user_groups` VALUES (3, NULL, 'Editor', NULL, NULL, '2018-02-27 06:30:48', '2018-02-27 06:30:48');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sys_group_id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, '01728389462', '$2y$10$0DNyH.5tTP6sBvSfTfxPn.HCS9niHn6LLrasNDUO2/zwqEgf.vLH.', '2018-02-27 09:15:06', '2018-02-27 09:15:06');

SET FOREIGN_KEY_CHECKS = 1;
