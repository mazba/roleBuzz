/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : role_buzz

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 10/01/2019 16:10:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
) ENGINE = InnoDB AUTO_INCREMENT = 474 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sys_group_permissions
-- ----------------------------
INSERT INTO `sys_group_permissions` VALUES (212, '4', 'admin/permissions/build/{id}', 'GET,HEAD', 'build_permission', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (346, '2', 'api/user', 'GET,HEAD', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (347, '2', 'admin/permissions', 'GET,HEAD', 'permissions', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (348, '2', 'admin/permissions/create-group', 'GET,HEAD', 'create_group', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (349, '2', 'admin/permissions/store', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (350, '2', 'admin/permissions/build/{id}', 'GET,HEAD', 'build_permission', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (351, '2', 'admin/permissions/set/{id}', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (352, '2', 'admin/permissions/menu', 'POST', 'menu.store', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (353, '2', 'admin/permissions/menu/{menu}', 'GET,HEAD', 'menu.show', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (354, '2', 'admin/permissions/menu/{menu}/edit', 'GET,HEAD', 'menu.edit', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (355, '2', 'admin/permissions/menu/{menu}', 'PUT,PATCH', 'menu.update', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (356, '2', 'admin/permissions/menu/{menu}', 'DELETE', 'menu.destroy', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (357, '2', 'admin', 'GET,HEAD', 'admin_dashboard', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (358, '2', '/', 'GET,HEAD', 'login', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (359, '2', 'register', 'GET,HEAD', 'register', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (360, '2', 'register', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (361, '2', 'login', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (362, '2', 'logout', 'GET,HEAD', 'logout', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (455, '1', 'api/user', 'GET,HEAD', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (456, '1', 'admin/permissions', 'GET,HEAD', 'permissions', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (457, '1', 'admin/permissions/create-group', 'GET,HEAD', 'create_group', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (458, '1', 'admin/permissions/store', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (459, '1', 'admin/permissions/build/{id}', 'GET,HEAD', 'build_permission', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (460, '1', 'admin/permissions/set/{id}', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (461, '1', 'admin/permissions/menu', 'GET,HEAD', 'menu.index', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (462, '1', 'admin/permissions/menu/create', 'GET,HEAD', 'menu.create', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (463, '1', 'admin/permissions/menu', 'POST', 'menu.store', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (464, '1', 'admin/permissions/menu/{menu}', 'GET,HEAD', 'menu.show', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (465, '1', 'admin/permissions/menu/{menu}/edit', 'GET,HEAD', 'menu.edit', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (466, '1', 'admin/permissions/menu/{menu}', 'PUT,PATCH', 'menu.update', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (467, '1', 'admin/permissions/menu/{menu}', 'DELETE', 'menu.destroy', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (468, '1', 'admin', 'GET,HEAD', 'admin_dashboard', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (469, '1', '/', 'GET,HEAD', 'login', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (470, '1', 'register', 'GET,HEAD', 'register', NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (471, '1', 'register', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (472, '1', 'login', 'POST', NULL, NULL, NULL, NULL);
INSERT INTO `sys_group_permissions` VALUES (473, '1', 'logout', 'GET,HEAD', 'logout', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for sys_menu
-- ----------------------------
DROP TABLE IF EXISTS `sys_menu`;
CREATE TABLE `sys_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `uri` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'same as route',
  `title` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alt_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `icon` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'md md-apps',
  `order` int(5) NULL DEFAULT 999,
  `status` tinyint(2) NULL DEFAULT 1,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sys_menu
-- ----------------------------
INSERT INTO `sys_menu` VALUES (1, NULL, 'admin', 'admin', 'Dashboard', 'Home', NULL, 'md md-assessment', NULL, 1, NULL, NULL, '2018-07-29 09:05:44', '2018-09-12 09:32:24');
INSERT INTO `sys_menu` VALUES (2, NULL, NULL, NULL, 'System Management', 'For Super Admin', NULL, 'md md-tune', 999, 1, NULL, NULL, '2018-07-29 09:14:32', '2018-07-30 09:09:37');
INSERT INTO `sys_menu` VALUES (3, 2, 'admin/permissions/menu', 'admin/permissions/menu', 'Menu Management', 'Left Menu Management', NULL, 'md md-view-list', 999, 1, NULL, NULL, '2018-07-29 09:14:59', '2018-07-29 09:14:59');
INSERT INTO `sys_menu` VALUES (5, NULL, NULL, NULL, 'Permission Management', NULL, NULL, 'md md-lock', 999, 1, NULL, NULL, '2018-07-30 08:34:34', '2018-07-30 09:34:07');
INSERT INTO `sys_menu` VALUES (6, 5, 'admin/permissions', 'admin/permissions', 'Group Permission', 'User Group Permission Management', NULL, 'md md-security', 999, 1, NULL, NULL, '2018-07-30 08:37:14', '2018-07-30 09:10:02');
INSERT INTO `sys_menu` VALUES (7, NULL, NULL, NULL, 'User Group', 'User Group Management', NULL, 'md md-account-circle', 999, 1, NULL, NULL, '2018-07-30 08:38:04', '2018-07-30 08:38:04');
INSERT INTO `sys_menu` VALUES (8, 7, 'admin/permissions/create-group', 'admin/permissions/create-group', 'Create New Group', 'New User Group', NULL, 'md md-my-library-add', 999, 1, NULL, NULL, '2018-07-30 08:38:49', '2018-07-30 08:38:49');

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sys_user_groups
-- ----------------------------
INSERT INTO `sys_user_groups` VALUES (1, NULL, 'Super Admin', NULL, NULL, '2018-02-26 08:25:21', '2018-02-26 08:25:21');
INSERT INTO `sys_user_groups` VALUES (2, NULL, 'Admin', NULL, NULL, '2018-02-26 08:39:45', '2018-02-26 08:39:45');
INSERT INTO `sys_user_groups` VALUES (3, NULL, 'Editor', NULL, NULL, '2018-02-27 06:30:48', '2018-02-27 06:30:48');
INSERT INTO `sys_user_groups` VALUES (4, NULL, 'test', NULL, NULL, '2018-06-27 06:19:45', '2018-06-27 06:19:45');

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
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sys_group_id` int(11) NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(2) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'Mazba Kamal', 'mazba', '$2y$12$rvy2iSFeA4VdhMBailF.GuBDhfYbpY7VunRWdQ7zGzPSy3wiO8FCO', 'img/demo.png', NULL, 1, '2018-02-27 09:15:06', '2018-02-27 09:15:06');

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

SET FOREIGN_KEY_CHECKS = 1;
