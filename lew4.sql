/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : lew4

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 18/01/2019 21:47:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activations
-- ----------------------------
DROP TABLE IF EXISTS `activations`;
CREATE TABLE `activations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of activations
-- ----------------------------
INSERT INTO `activations` VALUES (1, 1, 'CIeEclUFCTyihosWZbFLqG4LsAKycmCS', 1, '2019-01-01 08:31:52', '2019-01-01 08:31:52', '2019-01-01 08:31:52');

-- ----------------------------
-- Table structure for answer__answer_translations
-- ----------------------------
DROP TABLE IF EXISTS `answer__answer_translations`;
CREATE TABLE `answer__answer_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `answer_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `answer__answer_translations_answer_id_locale_unique`(`answer_id`, `locale`) USING BTREE,
  INDEX `answer__answer_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `answer__answer_translations_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answer__answers` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for answer__answers
-- ----------------------------
DROP TABLE IF EXISTS `answer__answers`;
CREATE TABLE `answer__answers`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `a1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `a2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `a3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `a4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `a5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `song_id` tinyint(4) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of answer__answers
-- ----------------------------
INSERT INTO `answer__answers` VALUES (1, 'thousand', 'down', 'hill', 'fast', 'gate', 8, '2019-01-09 15:31:12', '2019-01-10 04:25:44');

-- ----------------------------
-- Table structure for blogs__blog_translations
-- ----------------------------
DROP TABLE IF EXISTS `blogs__blog_translations`;
CREATE TABLE `blogs__blog_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `blogs__blog_translations_blog_id_locale_unique`(`blog_id`, `locale`) USING BTREE,
  INDEX `blogs__blog_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `blogs__blog_translations_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs__blogs` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for blogs__blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs__blogs`;
CREATE TABLE `blogs__blogs`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of blogs__blogs
-- ----------------------------
INSERT INTO `blogs__blogs` VALUES (1, 'Adjectives', 'jghdfskghdfkghdfkghdfkgjhd', 'shhighghggighigghkgh', '<p>kl;kl;</p>', '2019-01-18 14:21:23', '2019-01-18 14:21:23');
INSERT INTO `blogs__blogs` VALUES (2, 'verbs', 'jghdfskghdfkghdfkghdfkgjhd', 'none', '<p>kkklkl</p>', '2019-01-18 14:40:04', '2019-01-18 14:40:04');

-- ----------------------------
-- Table structure for categories__categories
-- ----------------------------
DROP TABLE IF EXISTS `categories__categories`;
CREATE TABLE `categories__categories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `router_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories__categories
-- ----------------------------
INSERT INTO `categories__categories` VALUES (1, 'Songs', '<p>Listening a lot of great songs.</p>', '2019-01-07 07:42:20', '2019-01-07 08:50:53', 'frontend.list.song');
INSERT INTO `categories__categories` VALUES (2, 'Listening Lessons', '<p>Listening to the amazing listening lessons.</p>', '2019-01-07 07:46:21', '2019-01-07 08:50:40', 'frontend.list.listening');
INSERT INTO `categories__categories` VALUES (3, 'Stories', '<p>Reading a lot of interesting stories.</p>', '2019-01-07 07:47:50', '2019-01-07 08:50:20', 'frontend.list.story');
INSERT INTO `categories__categories` VALUES (4, 'Games', '<p>Playing fascinating games.</p>\r\n\r\n<p>&nbsp;</p>', '2019-01-07 07:50:37', '2019-01-07 09:50:22', 'frontend.game');
INSERT INTO `categories__categories` VALUES (5, 'Grammar', '<p>Learning useful grammar lessons.</p>', '2019-01-07 07:51:18', '2019-01-07 08:49:27', 'frontend.list.grammar');
INSERT INTO `categories__categories` VALUES (6, 'Blog', '<p>Find more useful tips, funny infomation about how to learn English effectively.</p>', '2019-01-07 07:53:34', '2019-01-07 07:53:34', '');

-- ----------------------------
-- Table structure for categories__category_translations
-- ----------------------------
DROP TABLE IF EXISTS `categories__category_translations`;
CREATE TABLE `categories__category_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categories__category_translations_category_id_locale_unique`(`category_id`, `locale`) USING BTREE,
  INDEX `categories__category_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `categories__category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories__categories` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for choose__choose_translations
-- ----------------------------
DROP TABLE IF EXISTS `choose__choose_translations`;
CREATE TABLE `choose__choose_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `choose_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `choose__choose_translations_choose_id_locale_unique`(`choose_id`, `locale`) USING BTREE,
  INDEX `choose__choose_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `choose__choose_translations_choose_id_foreign` FOREIGN KEY (`choose_id`) REFERENCES `choose__chooses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for choose__chooses
-- ----------------------------
DROP TABLE IF EXISTS `choose__chooses`;
CREATE TABLE `choose__chooses`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `option1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of choose__chooses
-- ----------------------------
INSERT INTO `choose__chooses` VALUES (1, 4, '10:00', '11:00', '12:00', '2019-01-10 09:02:29', '2019-01-10 09:13:50');
INSERT INTO `choose__chooses` VALUES (2, 5, 'Ho Chi Minh city', 'Hanoi', 'Danang', '2019-01-10 09:15:35', '2019-01-10 09:15:35');
INSERT INTO `choose__chooses` VALUES (3, 5, '10', '20', '30', '2019-01-10 09:15:51', '2019-01-18 04:34:23');

-- ----------------------------
-- Table structure for dashboard__widgets
-- ----------------------------
DROP TABLE IF EXISTS `dashboard__widgets`;
CREATE TABLE `dashboard__widgets`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `widgets` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `dashboard__widgets_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `dashboard__widgets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for frontend__frontend_translations
-- ----------------------------
DROP TABLE IF EXISTS `frontend__frontend_translations`;
CREATE TABLE `frontend__frontend_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `frontend_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `frontend__frontend_translations_frontend_id_locale_unique`(`frontend_id`, `locale`) USING BTREE,
  INDEX `frontend__frontend_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `frontend__frontend_translations_frontend_id_foreign` FOREIGN KEY (`frontend_id`) REFERENCES `frontend__frontends` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for frontend__frontends
-- ----------------------------
DROP TABLE IF EXISTS `frontend__frontends`;
CREATE TABLE `frontend__frontends`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for games__game_translations
-- ----------------------------
DROP TABLE IF EXISTS `games__game_translations`;
CREATE TABLE `games__game_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `game_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `games__game_translations_game_id_locale_unique`(`game_id`, `locale`) USING BTREE,
  INDEX `games__game_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `games__game_translations_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games__games` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for games__games
-- ----------------------------
DROP TABLE IF EXISTS `games__games`;
CREATE TABLE `games__games`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for grammar__grammar_translations
-- ----------------------------
DROP TABLE IF EXISTS `grammar__grammar_translations`;
CREATE TABLE `grammar__grammar_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `grammar_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `grammar__grammar_translations_grammar_id_locale_unique`(`grammar_id`, `locale`) USING BTREE,
  INDEX `grammar__grammar_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `grammar__grammar_translations_grammar_id_foreign` FOREIGN KEY (`grammar_id`) REFERENCES `grammar__grammars` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for grammar__grammars
-- ----------------------------
DROP TABLE IF EXISTS `grammar__grammars`;
CREATE TABLE `grammar__grammars`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grammar__grammars
-- ----------------------------
INSERT INTO `grammar__grammars` VALUES (2, 'Adjectives', '<h1 style=\"line-height: 1.5em; font-size: 1.5em; margin-top: 0.375em; margin-bottom: 0.375em; font-family: bangwhackpow, Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; letter-spacing: 0.3px; color: rgb(0, 0, 0); background-color: rgb(254, 247, 229);\">Grammar Rule</h1>\r\n\r\n<h2 style=\"line-height: 2em; margin-top: 0.5em; margin-bottom: 0.5em; font-family: bangwhackpow, Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; letter-spacing: 0.3px; color: rgb(223, 70, 0); background-color: rgb(254, 247, 229);\">Examples</h2>\r\n\r\n<p style=\"margin: 1em 0px; color: rgb(0, 0, 0); font-family: Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(254, 247, 229);\"><em>We have a&nbsp;<strong>small&nbsp;</strong>car.<br />\r\nI saw a&nbsp;<strong>white</strong>&nbsp;bird.<br />\r\nShe watched an&nbsp;<strong>old</strong>&nbsp;film.</em></p>\r\n\r\n<h2 style=\"line-height: 2em; margin-top: 0.5em; margin-bottom: 0.5em; font-family: bangwhackpow, Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; letter-spacing: 0.3px; color: rgb(223, 70, 0); background-color: rgb(254, 247, 229);\">Remember!</h2>\r\n\r\n<p style=\"margin: 1em 0px; color: rgb(0, 0, 0); font-family: Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(254, 247, 229);\">Adjectives don&#39;t have a plural form.<br />\r\n<em>We have two&nbsp;<strong>small&nbsp;</strong>car<strong>s</strong>.<br />\r\nI saw five&nbsp;<strong>white</strong>&nbsp;bird<strong>s</strong>.<br />\r\nShe watched some&nbsp;<strong>old</strong>&nbsp;film<strong>s</strong>.</em></p>\r\n\r\n<h2 style=\"line-height: 2em; margin-top: 0.5em; margin-bottom: 0.5em; font-family: bangwhackpow, Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; letter-spacing: 0.3px; color: rgb(223, 70, 0); background-color: rgb(254, 247, 229);\">Be careful!</h2>\r\n\r\n<p style=\"margin: 1em 0px; color: rgb(0, 0, 0); font-family: Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(254, 247, 229);\">Size before colour.<br />\r\n<em>We have a&nbsp;<strong>small, blue</strong>&nbsp;car.<br />\r\nI saw a<strong>&nbsp;large, white</strong>&nbsp;bird.</em></p>\r\n\r\n<h2 style=\"line-height: 2em; margin-top: 0.5em; margin-bottom: 0.5em; font-family: bangwhackpow, Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; letter-spacing: 0.3px; color: rgb(223, 70, 0); background-color: rgb(254, 247, 229);\">We say... We don&rsquo;t say...</h2>\r\n\r\n<p style=\"margin: 1em 0px; color: rgb(0, 0, 0); font-family: Sniglet-Regular, arial, Verdana, Tahoma, sans-serif; font-size: 14px; background-color: rgb(254, 247, 229);\"><em>We have a&nbsp;small, blue&nbsp;car. (NOT&nbsp;We have a small and blue car.)<br />\r\nI saw five large, white birds. (NOT I saw five large and white birds.)</em></p>', '2019-01-08 10:24:46', '2019-01-08 10:34:26');

-- ----------------------------
-- Table structure for listening__listening_translations
-- ----------------------------
DROP TABLE IF EXISTS `listening__listening_translations`;
CREATE TABLE `listening__listening_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `listening_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `listening__listening_translations_listening_id_locale_unique`(`listening_id`, `locale`) USING BTREE,
  INDEX `listening__listening_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `listening__listening_translations_listening_id_foreign` FOREIGN KEY (`listening_id`) REFERENCES `listening__listenings` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for listening__listenings
-- ----------------------------
DROP TABLE IF EXISTS `listening__listenings`;
CREATE TABLE `listening__listenings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of listening__listenings
-- ----------------------------
INSERT INTO `listening__listenings` VALUES (4, 'Clap clap clap', 'none', '<p><span style=\"left: 95.7998px; top: 239.514px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00141);\">Clap! Clap! Clap! Stamp! Stamp! Stamp! </span><span style=\"left: 95.7998px; top: 266.309px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00113);\">Hear what a lovely noise we make. </span><span style=\"left: 95.7998px; top: 293.104px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00154);\">Stretch up high! Shake! Shake! Shake! </span><span style=\"left: 95.7998px; top: 320.015px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00135);\">Are we wide awake? </span><span style=\"left: 95.7998px; top: 373.605px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00141);\">Clap! Clap! Clap! Stamp! Stamp! Stamp! </span><span style=\"left: 95.7998px; top: 400.517px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00113);\">Hear what a lovely noise we make. </span><span style=\"left: 95.7998px; top: 427.312px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00154);\">Stretch up high! Shake! Shake! Shake! </span><span style=\"left: 95.7998px; top: 454.107px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00135);\">Are we wide awake? </span><span style=\"left: 95.7998px; top: 507.813px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00122);\">Now wiggle your fingers. Scrunchy up your nose. </span><span style=\"left: 95.7998px; top: 534.608px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.01124);\">Touch your head, should</span><span style=\"left: 352.706px; top: 534.608px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00147);\">ers, knees and toes. </span><span style=\"left: 95.7998px; top: 561.403px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00087);\">Dance all around, sing tra-la-la-la-la. </span><span style=\"left: 95.7998px; top: 588.315px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00124);\">Now run on the spot and stop! </span><span style=\"left: 95.7998px; top: 641.905px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00215);\">Brilliant everybody! Let&rsquo;s do it all over again. </span><span style=\"left: 95.7998px; top: 688.81px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00136);\">Clap Clap! Clap! Stamp! Stamp! Stamp! </span><span style=\"left: 95.7998px; top: 715.605px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00113);\">Hear what a lovely noise we make. </span><span style=\"left: 95.7998px; top: 742.4px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00154);\">Stretch up high! Shake! Shake! Shake! </span><span style=\"left: 95.7998px; top: 769.312px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00135);\">Are we wide awake? </span><span style=\"left: 95.7998px; top: 822.902px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00141);\">Clap! Clap! Clap! Stamp! Stamp! Stamp! </span><span style=\"left: 95.7998px; top: 849.813px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00113);\">Hear what a lovely noise we make. </span><span style=\"left: 95.7998px; top: 876.608px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00154);\">Stretch up high! Shake! Shake! Shake! </span><span style=\"left: 95.7998px; top: 903.403px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00135);\">Are we wide awake? </span><span style=\"left: 95.7998px; top: 957.11px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00122);\">Now wiggle your fingers. Scrunchy up your nose. </span><span style=\"left: 95.7998px; top: 983.905px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.01124);\">Touch your head, should</span><span style=\"left: 352.706px; top: 983.905px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00147);\">ers, knees and toes. </span><span style=\"left: 95.7998px; top: 1010.7px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00087);\">Dance all around, sing tra-la-la-la-la. </span><span style=\"left: 95.7998px; top: 1037.61px; font-size: 23.3px; font-family: sans-serif; transform: scaleX(1.00126);\">Now run on the spot and stop!</span></p>', '2019-01-07 21:14:16', '2019-01-13 20:29:19');
INSERT INTO `listening__listenings` VALUES (9, 'Button up', 'KGvEQTQaTbQ', '<p>Button up your coats. It&#39;s time to play! What English game will Sam and Pam play today?</p>', '2019-01-15 14:59:59', '2019-01-15 14:59:59');
INSERT INTO `listening__listenings` VALUES (10, 'Christmas', 'shhighghggighigghkgh', '<p>gcvfchvshfvshf</p>', '2019-01-18 00:35:45', '2019-01-18 00:35:45');

-- ----------------------------
-- Table structure for media__file_translations
-- ----------------------------
DROP TABLE IF EXISTS `media__file_translations`;
CREATE TABLE `media__file_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alt_attribute` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `keywords` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `media__file_translations_file_id_locale_unique`(`file_id`, `locale`) USING BTREE,
  INDEX `media__file_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `media__file_translations_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `media__files` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for media__files
-- ----------------------------
DROP TABLE IF EXISTS `media__files`;
CREATE TABLE `media__files`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_folder` tinyint(1) NOT NULL DEFAULT 0,
  `filename` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `extension` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mimetype` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `filesize` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `folder_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of media__files
-- ----------------------------
INSERT INTO `media__files` VALUES (22, 1, 'listening', '/assets/media/listening', NULL, NULL, NULL, '0', '2019-01-15 09:46:23', '2019-01-15 09:46:23');
INSERT INTO `media__files` VALUES (23, 0, '4.jpg', '/assets/media/listening/4.jpg', 'jpg', 'image/jpeg', '11405', '22', '2019-01-15 09:46:37', '2019-01-15 09:46:37');
INSERT INTO `media__files` VALUES (25, 1, 'grammar', '/assets/media/grammar', NULL, NULL, NULL, '0', '2019-01-16 06:14:40', '2019-01-16 06:14:40');
INSERT INTO `media__files` VALUES (26, 0, '1.jpg', '/assets/media/grammar/1.jpg', 'jpg', 'image/jpeg', '4717', '25', '2019-01-16 06:15:03', '2019-01-16 06:15:03');
INSERT INTO `media__files` VALUES (27, 1, 'song', '/assets/media/song', NULL, NULL, NULL, '0', '2019-01-16 06:46:39', '2019-01-16 06:46:39');
INSERT INTO `media__files` VALUES (28, 1, 'story', '/assets/media/story', NULL, NULL, NULL, '0', '2019-01-16 06:46:54', '2019-01-16 06:46:54');
INSERT INTO `media__files` VALUES (31, 0, '1.jpg', '/assets/media/song/1.jpg', 'jpg', 'image/jpeg', '5284', '27', '2019-01-16 06:49:20', '2019-01-16 06:49:20');
INSERT INTO `media__files` VALUES (32, 0, '2.jpg', '/assets/media/song/2.jpg', 'jpg', 'image/jpeg', '4706', '27', '2019-01-16 06:49:28', '2019-01-16 06:49:28');
INSERT INTO `media__files` VALUES (33, 0, '3.jpg', '/assets/media/song/3.jpg', 'jpg', 'image/jpeg', '5528', '27', '2019-01-16 06:49:36', '2019-01-16 06:49:36');
INSERT INTO `media__files` VALUES (34, 0, '4.jpg', '/assets/media/song/4.jpg', 'jpg', 'image/jpeg', '6293', '27', '2019-01-16 06:49:44', '2019-01-16 06:49:44');
INSERT INTO `media__files` VALUES (35, 0, '5.jpg', '/assets/media/song/5.jpg', 'jpg', 'image/jpeg', '3546', '27', '2019-01-16 06:49:52', '2019-01-16 06:49:52');
INSERT INTO `media__files` VALUES (36, 0, '6.jpg', '/assets/media/song/6.jpg', 'jpg', 'image/jpeg', '2624', '27', '2019-01-16 06:49:59', '2019-01-16 06:49:59');
INSERT INTO `media__files` VALUES (37, 0, '7.jpg', '/assets/media/song/7.jpg', 'jpg', 'image/jpeg', '2586', '27', '2019-01-16 06:50:07', '2019-01-16 06:50:07');
INSERT INTO `media__files` VALUES (38, 0, '8.jpg', '/assets/media/song/8.jpg', 'jpg', 'image/jpeg', '4214', '27', '2019-01-16 06:50:15', '2019-01-16 06:50:15');

-- ----------------------------
-- Table structure for media__imageables
-- ----------------------------
DROP TABLE IF EXISTS `media__imageables`;
CREATE TABLE `media__imageables`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_id` int(11) NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of media__imageables
-- ----------------------------
INSERT INTO `media__imageables` VALUES (8, 24, 9, 'Modules\\Listening\\Entities\\Listening', 'featured_image', NULL, '2019-01-15 15:00:00', '2019-01-15 15:00:42');
INSERT INTO `media__imageables` VALUES (9, 23, 4, 'Modules\\Listening\\Entities\\Listening', 'featured_image', NULL, '2019-01-16 06:17:05', '2019-01-16 06:19:18');
INSERT INTO `media__imageables` VALUES (10, 26, 4, 'Modules\\Listening\\Entities\\Listening', 'gallery', 0, '2019-01-16 06:18:48', '2019-01-16 06:19:18');
INSERT INTO `media__imageables` VALUES (11, 23, 4, 'Modules\\Listening\\Entities\\Listening', 'gallery', 1, '2019-01-16 06:18:48', '2019-01-16 06:19:18');
INSERT INTO `media__imageables` VALUES (12, 38, 8, 'Modules\\Songs\\Entities\\Song', 'featured_image', NULL, '2019-01-16 10:13:40', '2019-01-16 10:53:13');
INSERT INTO `media__imageables` VALUES (13, 31, 2, 'Modules\\Stories\\Entities\\Story', 'featured_image', NULL, '2019-01-16 10:54:18', '2019-01-16 10:54:35');
INSERT INTO `media__imageables` VALUES (14, 38, 1, 'Modules\\Rules\\Entities\\Rule', 'featured_image', NULL, '2019-01-16 11:09:53', '2019-01-16 11:10:07');
INSERT INTO `media__imageables` VALUES (15, 38, 9, 'Modules\\Songs\\Entities\\Song', 'featured_image', NULL, '2019-01-17 04:12:02', '2019-01-17 04:12:02');
INSERT INTO `media__imageables` VALUES (16, 38, 10, 'Modules\\Listening\\Entities\\Listening', 'featured_image', NULL, '2019-01-18 00:35:46', '2019-01-18 00:35:46');
INSERT INTO `media__imageables` VALUES (17, 38, 1, 'Modules\\Blogs\\Entities\\Blog', 'featured_image', NULL, '2019-01-18 14:21:23', '2019-01-18 14:23:43');
INSERT INTO `media__imageables` VALUES (18, 37, 2, 'Modules\\Blogs\\Entities\\Blog', 'featured_image', NULL, '2019-01-18 14:40:04', '2019-01-18 14:40:04');

-- ----------------------------
-- Table structure for menu__menu_translations
-- ----------------------------
DROP TABLE IF EXISTS `menu__menu_translations`;
CREATE TABLE `menu__menu_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `menu__menu_translations_menu_id_locale_unique`(`menu_id`, `locale`) USING BTREE,
  INDEX `menu__menu_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `menu__menu_translations_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu__menus` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for menu__menuitem_translations
-- ----------------------------
DROP TABLE IF EXISTS `menu__menuitem_translations`;
CREATE TABLE `menu__menuitem_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menuitem_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `uri` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `menu__menuitem_translations_menuitem_id_locale_unique`(`menuitem_id`, `locale`) USING BTREE,
  INDEX `menu__menuitem_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `menu__menuitem_translations_menuitem_id_foreign` FOREIGN KEY (`menuitem_id`) REFERENCES `menu__menuitems` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for menu__menuitems
-- ----------------------------
DROP TABLE IF EXISTS `menu__menuitems`;
CREATE TABLE `menu__menuitems`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `target` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `link_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `class` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  `module_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int(11) NULL DEFAULT NULL,
  `lft` int(11) NULL DEFAULT NULL,
  `rgt` int(11) NULL DEFAULT NULL,
  `depth` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `is_root` tinyint(1) NOT NULL DEFAULT 0,
  `icon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menu__menuitems_menu_id_foreign`(`menu_id`) USING BTREE,
  CONSTRAINT `menu__menuitems_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu__menus` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for menu__menus
-- ----------------------------
DROP TABLE IF EXISTS `menu__menus`;
CREATE TABLE `menu__menus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 73 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_07_02_230147_migration_cartalyst_sentinel', 1);
INSERT INTO `migrations` VALUES (2, '2016_06_24_193447_create_user_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_14_200250_create_settings_table', 2);
INSERT INTO `migrations` VALUES (4, '2014_10_15_191204_create_setting_translations_table', 2);
INSERT INTO `migrations` VALUES (5, '2015_06_18_170048_make_settings_value_text_field', 2);
INSERT INTO `migrations` VALUES (6, '2015_10_22_130947_make_settings_name_unique', 2);
INSERT INTO `migrations` VALUES (7, '2017_09_17_164631_make_setting_value_nullable', 2);
INSERT INTO `migrations` VALUES (8, '2014_11_03_160015_create_menus_table', 3);
INSERT INTO `migrations` VALUES (9, '2014_11_03_160138_create_menu-translations_table', 3);
INSERT INTO `migrations` VALUES (10, '2014_11_03_160753_create_menuitems_table', 3);
INSERT INTO `migrations` VALUES (11, '2014_11_03_160804_create_menuitem_translation_table', 3);
INSERT INTO `migrations` VALUES (12, '2014_12_17_185301_add_root_column_to_menus_table', 3);
INSERT INTO `migrations` VALUES (13, '2015_09_05_100142_add_icon_column_to_menuitems_table', 3);
INSERT INTO `migrations` VALUES (14, '2016_01_26_102307_update_icon_column_on_menuitems_table', 3);
INSERT INTO `migrations` VALUES (15, '2016_08_01_142345_add_link_type_colymn_to_menuitems_table', 3);
INSERT INTO `migrations` VALUES (16, '2016_08_01_143130_add_class_column_to_menuitems_table', 3);
INSERT INTO `migrations` VALUES (17, '2017_09_18_192639_make_title_field_nullable_menu_table', 3);
INSERT INTO `migrations` VALUES (18, '2014_10_26_162751_create_files_table', 4);
INSERT INTO `migrations` VALUES (19, '2014_10_26_162811_create_file_translations_table', 4);
INSERT INTO `migrations` VALUES (20, '2015_02_27_105241_create_image_links_table', 4);
INSERT INTO `migrations` VALUES (21, '2015_12_19_143643_add_sortable', 4);
INSERT INTO `migrations` VALUES (22, '2017_09_20_144631_add_folders_columns_on_files_table', 4);
INSERT INTO `migrations` VALUES (23, '2014_11_30_191858_create_pages_tables', 5);
INSERT INTO `migrations` VALUES (24, '2017_10_13_103344_make_status_field_nullable_on_page_translations_table', 5);
INSERT INTO `migrations` VALUES (25, '2018_05_23_145242_edit_body_column_nullable', 5);
INSERT INTO `migrations` VALUES (26, '2015_04_02_184200_create_widgets_table', 6);
INSERT INTO `migrations` VALUES (27, '2013_04_09_062329_create_revisions_table', 7);
INSERT INTO `migrations` VALUES (28, '2015_11_20_184604486385_create_translation_translations_table', 7);
INSERT INTO `migrations` VALUES (29, '2015_11_20_184604743083_create_translation_translation_translations_table', 7);
INSERT INTO `migrations` VALUES (30, '2015_12_01_094031_update_translation_translations_table_with_index', 7);
INSERT INTO `migrations` VALUES (31, '2016_07_12_181155032011_create_tag_tags_table', 8);
INSERT INTO `migrations` VALUES (32, '2016_07_12_181155289444_create_tag_tag_translations_table', 8);
INSERT INTO `migrations` VALUES (33, '2019_01_01_134630626622_create_listening_listenings_table', 9);
INSERT INTO `migrations` VALUES (34, '2019_01_01_134630907746_create_listening_listening_translations_table', 9);
INSERT INTO `migrations` VALUES (35, '2019_01_01_134733525222_create_grammar_grammars_table', 9);
INSERT INTO `migrations` VALUES (36, '2019_01_01_134733790349_create_grammar_grammar_translations_table', 9);
INSERT INTO `migrations` VALUES (37, '2019_01_01_134828931346_create_questions_questions_table', 9);
INSERT INTO `migrations` VALUES (38, '2019_01_01_134829197603_create_questions_question_translations_table', 9);
INSERT INTO `migrations` VALUES (39, '2019_01_01_134850450993_create_songs_songs_table', 9);
INSERT INTO `migrations` VALUES (40, '2019_01_01_134850717133_create_songs_song_translations_table', 9);
INSERT INTO `migrations` VALUES (41, '2019_01_01_134920041007_create_stories_stories_table', 9);
INSERT INTO `migrations` VALUES (42, '2019_01_01_134920316390_create_stories_story_translations_table', 9);
INSERT INTO `migrations` VALUES (43, '2019_01_01_134940723861_create_frontend_frontends_table', 9);
INSERT INTO `migrations` VALUES (44, '2019_01_01_134940997708_create_frontend_frontend_translations_table', 9);
INSERT INTO `migrations` VALUES (45, '2019_01_06_022133283348_create_games_games_table', 10);
INSERT INTO `migrations` VALUES (46, '2019_01_06_022133709278_create_games_game_translations_table', 10);
INSERT INTO `migrations` VALUES (47, '2019_01_07_072919832839_create_categories_categories_table', 10);
INSERT INTO `migrations` VALUES (48, '2019_01_07_072920185308_create_categories_category_translations_table', 10);
INSERT INTO `migrations` VALUES (49, '2019_01_07_083932_add_router_name_colums_to_categories_table', 11);
INSERT INTO `migrations` VALUES (50, '2019_01_07_084226_add_router_name_colums_to_categories_categories_table', 11);
INSERT INTO `migrations` VALUES (51, '2019_01_08_101136294441_create_songs_alphabets_table', 12);
INSERT INTO `migrations` VALUES (52, '2019_01_08_101136603307_create_songs_alphabet_translations_table', 12);
INSERT INTO `migrations` VALUES (55, '2019_01_09_150926350434_create_answer_answers_table', 13);
INSERT INTO `migrations` VALUES (56, '2019_01_09_150926642040_create_answer_answer_translations_table', 13);
INSERT INTO `migrations` VALUES (59, '2019_01_10_084356568566_create_choose_chooses_table', 15);
INSERT INTO `migrations` VALUES (60, '2019_01_10_084356837326_create_choose_choose_translations_table', 15);
INSERT INTO `migrations` VALUES (61, '2019_01_12_060606355740_create_rules_rules_table', 16);
INSERT INTO `migrations` VALUES (62, '2019_01_12_060606674204_create_rules_rule_translations_table', 16);
INSERT INTO `migrations` VALUES (65, '2019_01_12_092935465356_create_sortings_sortings_table', 18);
INSERT INTO `migrations` VALUES (66, '2019_01_12_092935734951_create_sortings_sorting_translations_table', 18);
INSERT INTO `migrations` VALUES (67, '2019_01_13_050758819147_create_orderings_orderings_table', 19);
INSERT INTO `migrations` VALUES (68, '2019_01_13_050759138591_create_orderings_ordering_translations_table', 19);
INSERT INTO `migrations` VALUES (69, '2019_01_13_050821877088_create_results_results_table', 19);
INSERT INTO `migrations` VALUES (70, '2019_01_13_050822150006_create_results_result_translations_table', 19);
INSERT INTO `migrations` VALUES (71, '2019_01_18_135409387747_create_blogs_blogs_table', 20);
INSERT INTO `migrations` VALUES (72, '2019_01_18_135409689775_create_blogs_blog_translations_table', 20);

-- ----------------------------
-- Table structure for orderings__ordering_translations
-- ----------------------------
DROP TABLE IF EXISTS `orderings__ordering_translations`;
CREATE TABLE `orderings__ordering_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ordering_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `orderings__ordering_translations_ordering_id_locale_unique`(`ordering_id`, `locale`) USING BTREE,
  INDEX `orderings__ordering_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `orderings__ordering_translations_ordering_id_foreign` FOREIGN KEY (`ordering_id`) REFERENCES `orderings__orderings` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for orderings__orderings
-- ----------------------------
DROP TABLE IF EXISTS `orderings__orderings`;
CREATE TABLE `orderings__orderings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_id` int(11) NOT NULL,
  `order1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order7` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order8` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orderings__orderings
-- ----------------------------
INSERT INTO `orderings__orderings` VALUES (1, 2, 'Clap! Clap! Clap! Stamp! Stamp! Stamp! Hear what a lovely noise we make. Stretch up high! Shake! Shake! Shake! Are we wide awake? Clap! Clap! Clap! Stamp! Stamp! Stamp! Hear what a lovely noise we make. Stretch up high! Shake! Shake! Shake! Are we wide awake? Now wiggle your fingers. Scrunchy up your nose. Touch your head, shoulders, knees and toes. Dance all around, sing tra-la-la-la-la. Now run on the spot and stop! Brilliant everybody! Let’s do it all over again. Clap Clap! Clap! Stamp! Stamp! Stamp! Hear what a lovely noise we make. Stretch up high! Shake! Shake! Shake! Are we wide awake? Clap! Clap! Clap! Stamp! Stamp! Stamp! Hear what a lovely noise we make. Stretch up high! Shake! Shake! Shake! Are we wide awake? Now wiggle your fingers. Scrunchy up your nose. Touch your head, shoulders, knees and toes. Dance all around, sing tra-la-la-la-la. Now run on the spot and stop!', '1jkldfjngjdffjkdfjkgnbfdgk', '1njkfgdfgkdgdg', '1jkfggjkdfjgndfjkdsfjkgfdjgd', '1jondfgnjdfgjfdgjkdfjkdfjkg', '1jknjnkfdgnjfdgnjdfgnjgjnkgjnkgjkngjnk', '1jio;jkdfggjhkdgjhkdfghjkdfjhkgdfjhkfdjkg', '1kl;jdghkjgjkhjfhdjfgkghjkdfhkljdfg', '2019-01-13 05:40:39', '2019-01-13 16:09:36');
INSERT INTO `orderings__orderings` VALUES (2, 3, '2', '14', '1', '1', '1', '1', '1', '1', '2019-01-13 05:42:48', '2019-01-13 07:47:46');

-- ----------------------------
-- Table structure for page__page_translations
-- ----------------------------
DROP TABLE IF EXISTS `page__page_translations`;
CREATE TABLE `page__page_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '1',
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `og_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `og_description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `og_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `og_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `page__page_translations_page_id_locale_unique`(`page_id`, `locale`) USING BTREE,
  INDEX `page__page_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `page__page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page__pages` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of page__page_translations
-- ----------------------------
INSERT INTO `page__page_translations` VALUES (1, 1, 'en', 'Home page', 'home', '1', '<p><strong>You made it!</strong></p>\n<p>You&#39;ve installed AsgardCMS and are ready to proceed to the <a href=\"/en/backend\">administration area</a>.</p>\n<h2>What&#39;s next ?</h2>\n<p>Learn how you can develop modules for AsgardCMS by reading our <a href=\"https://github.com/AsgardCms/Documentation\">documentation</a>.</p>\n', 'Home page', NULL, NULL, NULL, NULL, NULL, '2019-01-01 08:32:40', '2019-01-01 08:32:40');

-- ----------------------------
-- Table structure for page__pages
-- ----------------------------
DROP TABLE IF EXISTS `page__pages`;
CREATE TABLE `page__pages`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_home` tinyint(1) NOT NULL DEFAULT 0,
  `template` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of page__pages
-- ----------------------------
INSERT INTO `page__pages` VALUES (1, 1, 'home', '2019-01-01 08:32:40', '2019-01-01 08:32:40');

-- ----------------------------
-- Table structure for persistences
-- ----------------------------
DROP TABLE IF EXISTS `persistences`;
CREATE TABLE `persistences`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `persistences_code_unique`(`code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 405 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of persistences
-- ----------------------------
INSERT INTO `persistences` VALUES (1, 1, 'ZkIKHkwbdwqSuFaZRzN5tcVD9i8a7Qd7', '2019-01-01 08:39:48', '2019-01-01 08:39:48');
INSERT INTO `persistences` VALUES (2, 1, '4nFDDCrRdgAwFdFWyVU43TO0qkvKKZ2u', '2019-01-01 13:38:48', '2019-01-01 13:38:48');
INSERT INTO `persistences` VALUES (3, 1, 't7fZVi4myNn8AxLy13n4QNKitM2oeewU', '2019-01-01 14:28:45', '2019-01-01 14:28:45');
INSERT INTO `persistences` VALUES (4, 1, '1YkVIBBzXr2Pi94pDkUs1q73sz0dw4cY', '2019-01-01 15:20:10', '2019-01-01 15:20:10');
INSERT INTO `persistences` VALUES (5, 1, 'NbzYTVOglzQRYqvFE3qa765d1fh2J9Ty', '2019-01-01 15:20:16', '2019-01-01 15:20:16');
INSERT INTO `persistences` VALUES (6, 1, 'FbsNqtGuXJTlRMrtVbmVEqGpfA2JhV5O', '2019-01-01 15:20:21', '2019-01-01 15:20:21');
INSERT INTO `persistences` VALUES (7, 1, 'v14UwqGuPPHmi98DNAbvqhzxRTkwUFTY', '2019-01-01 15:20:21', '2019-01-01 15:20:21');
INSERT INTO `persistences` VALUES (8, 1, 'OraRsr7cbTwMOOpyTa74oPjdIdMh2rn6', '2019-01-01 15:20:30', '2019-01-01 15:20:30');
INSERT INTO `persistences` VALUES (9, 1, 'gqde8jPG2i8J4SBauigKdC7bzkTkrbQC', '2019-01-01 15:20:31', '2019-01-01 15:20:31');
INSERT INTO `persistences` VALUES (10, 1, 'EaeQt14epCMVF0Cxz5zc0xDHmw8Z7Le5', '2019-01-01 16:35:06', '2019-01-01 16:35:06');
INSERT INTO `persistences` VALUES (11, 1, 'GQIdFU8n3RDYoLMY7ePSA7bk6roKlnnR', '2019-01-01 16:35:09', '2019-01-01 16:35:09');
INSERT INTO `persistences` VALUES (12, 1, 'KAj26GdSonND1Pzi5mwZWXfFVGF7napP', '2019-01-01 16:35:10', '2019-01-01 16:35:10');
INSERT INTO `persistences` VALUES (13, 1, 'aBNYaqd6zfN5FOND1TcaM3GCqde1w4Df', '2019-01-01 16:35:20', '2019-01-01 16:35:20');
INSERT INTO `persistences` VALUES (14, 1, 'mqZgPf1rbsDq545Yg1Kppc9POBwnvLjF', '2019-01-01 16:35:21', '2019-01-01 16:35:21');
INSERT INTO `persistences` VALUES (15, 1, 'BnnFpfIfcsDLKV64a0HZt6fXq2bLEPET', '2019-01-02 04:10:56', '2019-01-02 04:10:56');
INSERT INTO `persistences` VALUES (16, 1, 'FlmRDzPIDfkSD8xgExRXQFus0IE8VVaX', '2019-01-05 04:28:29', '2019-01-05 04:28:29');
INSERT INTO `persistences` VALUES (17, 1, '8TBQtN8yxE5kMPW1l5Ee3KEXsqb8dRFR', '2019-01-05 05:44:39', '2019-01-05 05:44:39');
INSERT INTO `persistences` VALUES (18, 1, 'LQCYdFckK2Rh1bSXc2vvMOrMZ4qWXLA3', '2019-01-05 09:53:53', '2019-01-05 09:53:53');
INSERT INTO `persistences` VALUES (19, 1, 'IuZlE0pD5vrj9tOPVJp1SW6vq7ivOChR', '2019-01-06 02:20:36', '2019-01-06 02:20:36');
INSERT INTO `persistences` VALUES (20, 1, 'srM59VENxm8EOu91skFof4l4n97PY51l', '2019-01-06 02:22:04', '2019-01-06 02:22:04');
INSERT INTO `persistences` VALUES (21, 1, 'tt8pWqjA7nwFBZEjsGjY5N7mbhs5gKgs', '2019-01-06 02:22:12', '2019-01-06 02:22:12');
INSERT INTO `persistences` VALUES (22, 1, '7PHmY7oUFuxNIeSj9YRd0JJX7BfXIuq0', '2019-01-06 02:22:16', '2019-01-06 02:22:16');
INSERT INTO `persistences` VALUES (23, 1, 'HDupuNn5UkxzrFdfxL3vjLPyIMZKhDnv', '2019-01-06 02:22:17', '2019-01-06 02:22:17');
INSERT INTO `persistences` VALUES (24, 1, 'd5dUrIqOqtkIDJssjOjFLWLpHQTWagDA', '2019-01-06 02:22:26', '2019-01-06 02:22:26');
INSERT INTO `persistences` VALUES (25, 1, 'pI5l5GVZw6Hu6DJPEPVJTX8WoIvBMjwL', '2019-01-06 02:22:27', '2019-01-06 02:22:27');
INSERT INTO `persistences` VALUES (26, 1, '2nbEajS5OpDhZKMDbg8nKQVjiC9Fwwb0', '2019-01-06 13:29:22', '2019-01-06 13:29:22');
INSERT INTO `persistences` VALUES (27, 1, 'ZUFtgPv7GYabsSXMyTtBNgbn3b7tF9Hr', '2019-01-07 07:36:42', '2019-01-07 07:36:42');
INSERT INTO `persistences` VALUES (28, 1, 'qz5nn0MEYjzcWtOSNwFHUoqI9aiA2rX6', '2019-01-07 07:37:24', '2019-01-07 07:37:24');
INSERT INTO `persistences` VALUES (29, 1, 'UMXcNq1H9AadlT1Wxzd4SaE19KUQ5TZ2', '2019-01-07 07:37:29', '2019-01-07 07:37:29');
INSERT INTO `persistences` VALUES (30, 1, '9avMDfA9RNXGiaXFVDm1qqIqRKETiGJ8', '2019-01-07 07:37:29', '2019-01-07 07:37:29');
INSERT INTO `persistences` VALUES (31, 1, '7QwYETbzRHN7zNu6dsLyDKD0JwUz6f1A', '2019-01-07 07:37:41', '2019-01-07 07:37:41');
INSERT INTO `persistences` VALUES (32, 1, 'OMDBKafVqntULD9Mek0BmXmC2DlCi8fx', '2019-01-07 07:37:43', '2019-01-07 07:37:43');
INSERT INTO `persistences` VALUES (33, 1, 'crREWSyNSCOu15yfqrE9C2fIIHW1EYWM', '2019-01-07 07:40:56', '2019-01-07 07:40:56');
INSERT INTO `persistences` VALUES (34, 1, 'MpuuNDtNN3uDyVYgbSSCHhuulvkZideF', '2019-01-07 20:07:20', '2019-01-07 20:07:20');
INSERT INTO `persistences` VALUES (35, 1, 'CTvxcpIuf3dQNhq10vCqsasDIr3gCilM', '2019-01-07 20:35:08', '2019-01-07 20:35:08');
INSERT INTO `persistences` VALUES (36, 1, 'wesKgbsBjuuANSeOmqwaP6u8M6l0t6aJ', '2019-01-07 20:41:08', '2019-01-07 20:41:08');
INSERT INTO `persistences` VALUES (37, 1, 'A1pI8WEodIbkYn9K91qfgvuv4ZTckdFG', '2019-01-08 03:13:13', '2019-01-08 03:13:13');
INSERT INTO `persistences` VALUES (38, 1, '1891YlobpA4elLvsJrU8H7IyrLCECQ2U', '2019-01-08 03:34:21', '2019-01-08 03:34:21');
INSERT INTO `persistences` VALUES (39, 1, 'e3rODmAhUq2TRi7g50TvEHCW1upEv9sp', '2019-01-08 09:37:55', '2019-01-08 09:37:55');
INSERT INTO `persistences` VALUES (40, 1, 'zt2YucjsEaVvIHvB1gVgiW8NC1B0F4M5', '2019-01-08 10:21:53', '2019-01-08 10:21:53');
INSERT INTO `persistences` VALUES (41, 1, 'ZFTLRPpzf5oRZgxaJ36S6o3fpGbDczri', '2019-01-08 10:21:57', '2019-01-08 10:21:57');
INSERT INTO `persistences` VALUES (42, 1, 'olsfBY6pyTsKFhzKoHZwkbjl177qfcRO', '2019-01-08 10:21:57', '2019-01-08 10:21:57');
INSERT INTO `persistences` VALUES (43, 1, 'k0zdcDnTHGvK78Bmx6NjoRpsS5Uq8Mps', '2019-01-08 10:22:08', '2019-01-08 10:22:08');
INSERT INTO `persistences` VALUES (44, 1, 'W6PFbt6hEmUKdBvFldiTFm6p18eBsRXq', '2019-01-08 10:22:09', '2019-01-08 10:22:09');
INSERT INTO `persistences` VALUES (45, 1, 'wWMQETS96Mv8joFjTD5nunEfLkmSuIlN', '2019-01-09 04:56:39', '2019-01-09 04:56:39');
INSERT INTO `persistences` VALUES (46, 1, 'af0gD1HwCc64rY4hR3oPby18CjAK1El4', '2019-01-09 13:42:35', '2019-01-09 13:42:35');
INSERT INTO `persistences` VALUES (47, 1, 'Bjv8b32mQh1E2ED2T2HIeK3wMWoYEJPD', '2019-01-09 14:28:41', '2019-01-09 14:28:41');
INSERT INTO `persistences` VALUES (48, 1, 'xNA1132bD6HEiL8eDjSGaYRhC34TyKZv', '2019-01-09 14:28:54', '2019-01-09 14:28:54');
INSERT INTO `persistences` VALUES (49, 1, 'yGbySCqIGPxSYnYuefe5MWqNbslCWoqI', '2019-01-09 14:28:54', '2019-01-09 14:28:54');
INSERT INTO `persistences` VALUES (50, 1, 'jU4nVPxx1YExJeCfdmIckhI4ws54Jtor', '2019-01-09 14:29:04', '2019-01-09 14:29:04');
INSERT INTO `persistences` VALUES (51, 1, 'azLpscMHtZEXZuDWkyyyYDQwzMNDSXks', '2019-01-09 14:29:06', '2019-01-09 14:29:06');
INSERT INTO `persistences` VALUES (52, 1, 'hNEnI3XJgrWD6razfrGHJ7G9AO2k5QOh', '2019-01-09 14:29:12', '2019-01-09 14:29:12');
INSERT INTO `persistences` VALUES (53, 1, 'KIapRTg3GnBy4amPHQGwRWOJ2DIqWV9X', '2019-01-09 15:17:51', '2019-01-09 15:17:51');
INSERT INTO `persistences` VALUES (54, 1, '9oPGaUmQUJc3yOrR6hBM2cY7SccCAZRK', '2019-01-09 15:17:56', '2019-01-09 15:17:56');
INSERT INTO `persistences` VALUES (55, 1, 'n6hKb2fH6gXJZG6sCGIlZuTwjzuedgL5', '2019-01-09 15:17:56', '2019-01-09 15:17:56');
INSERT INTO `persistences` VALUES (56, 1, 'A0RICFEwiIet3uxVNr78oSpFoAbQE9ue', '2019-01-09 15:17:56', '2019-01-09 15:17:56');
INSERT INTO `persistences` VALUES (57, 1, 'iP00pnMw712KUg0RhoFrgpe4LGysymgw', '2019-01-09 15:18:21', '2019-01-09 15:18:21');
INSERT INTO `persistences` VALUES (58, 1, '3Rcu91tvgjsVNZSsInAtaMjF53XSSf1P', '2019-01-09 15:18:26', '2019-01-09 15:18:26');
INSERT INTO `persistences` VALUES (59, 1, 'XvBagOHcVVgVEVSEEO0hmbruxb0JSvkM', '2019-01-09 15:18:26', '2019-01-09 15:18:26');
INSERT INTO `persistences` VALUES (60, 1, 'wdbPcO7dWX9iZN4XuzLE6q9aCYRNPjJg', '2019-01-09 15:18:38', '2019-01-09 15:18:38');
INSERT INTO `persistences` VALUES (61, 1, 'mPOClGwP4lOpi5uDyUp2OjuC2g6lXZII', '2019-01-09 15:18:40', '2019-01-09 15:18:40');
INSERT INTO `persistences` VALUES (62, 1, '8sHN50dFP6BRevU6MuwkxjVOkDyIWAH0', '2019-01-09 15:19:13', '2019-01-09 15:19:13');
INSERT INTO `persistences` VALUES (63, 1, 'DGU55ZxPtYm76Jeb1pbaC66FJQnJUDQQ', '2019-01-09 17:02:50', '2019-01-09 17:02:50');
INSERT INTO `persistences` VALUES (64, 1, 'Npb0zRokRKxw0ZOp4n3QEVqhq23O1dvv', '2019-01-09 17:02:54', '2019-01-09 17:02:54');
INSERT INTO `persistences` VALUES (65, 1, '6QUHn8u6PXTRNqcepLG85uzbuDfNat0B', '2019-01-09 17:02:54', '2019-01-09 17:02:54');
INSERT INTO `persistences` VALUES (66, 1, 'cpNG6C4KNrldLXEVRERGDVv1bso1nZ3x', '2019-01-09 17:03:13', '2019-01-09 17:03:13');
INSERT INTO `persistences` VALUES (67, 1, 'lqp3ohwOGdSWA9MzNVIpXZwZz5D6YUmu', '2019-01-09 17:03:14', '2019-01-09 17:03:14');
INSERT INTO `persistences` VALUES (68, 1, 'bTLyMNd80aH1cb8ZzGgwN3nr5Lw0sPcz', '2019-01-10 03:29:57', '2019-01-10 03:29:57');
INSERT INTO `persistences` VALUES (69, 1, 'acKTd9rZq82ROjtvUF72qo39ub8pwCjr', '2019-01-10 03:30:05', '2019-01-10 03:30:05');
INSERT INTO `persistences` VALUES (70, 1, 'ZYKJDD6Jg5NuWLf0IXV7VscrHxCzF0Cu', '2019-01-10 08:08:26', '2019-01-10 08:08:26');
INSERT INTO `persistences` VALUES (71, 1, 'M6o1qfgZWWhe47AzCBj034eq2uoqOxx8', '2019-01-10 08:08:37', '2019-01-10 08:08:37');
INSERT INTO `persistences` VALUES (72, 1, 'DraHMWaY6upZYxMLQqiQOG4rMNlwS37I', '2019-01-10 08:08:40', '2019-01-10 08:08:40');
INSERT INTO `persistences` VALUES (73, 1, 'BIn9RK59zMl2NA6c3xRtiG0sbO62TlpP', '2019-01-10 08:08:40', '2019-01-10 08:08:40');
INSERT INTO `persistences` VALUES (74, 1, 'o71mz4BQGH52M46DT2WiqWYhAIKAInbf', '2019-01-10 08:08:54', '2019-01-10 08:08:54');
INSERT INTO `persistences` VALUES (75, 1, '7GL6QZAEoV9sxVUQwb30pfYj5oBpHzwx', '2019-01-10 08:08:56', '2019-01-10 08:08:56');
INSERT INTO `persistences` VALUES (76, 1, 'f1Aj0Tqixop1C4hfPw22Twu1JnWzz2q3', '2019-01-10 08:10:06', '2019-01-10 08:10:06');
INSERT INTO `persistences` VALUES (77, 1, 'aYAN0kPjKYJtDWQpqmmUi2GHldu9W0kR', '2019-01-10 09:00:17', '2019-01-10 09:00:17');
INSERT INTO `persistences` VALUES (78, 1, 'RTTCMIRvxVfoW3tg47tslBJsb9jG771m', '2019-01-10 09:00:28', '2019-01-10 09:00:28');
INSERT INTO `persistences` VALUES (79, 1, 'x5yWyAHnPbETQdpHEqwUYG05BlF7FXr3', '2019-01-10 09:00:32', '2019-01-10 09:00:32');
INSERT INTO `persistences` VALUES (80, 1, 'h618tab0KnieXoeTZFThtYhozKv16nwY', '2019-01-10 09:00:32', '2019-01-10 09:00:32');
INSERT INTO `persistences` VALUES (81, 1, '1hGHtiDwmM1vYaCm8rDni89js0h1Xs1X', '2019-01-10 09:00:41', '2019-01-10 09:00:41');
INSERT INTO `persistences` VALUES (82, 1, 'P06JURxHkMPMCCMAeM2LOumvRrtkDJ9f', '2019-01-10 09:00:42', '2019-01-10 09:00:42');
INSERT INTO `persistences` VALUES (83, 1, 'KXmXmIs4mD5E26yuhronmtqzlOCzklhA', '2019-01-10 09:00:46', '2019-01-10 09:00:46');
INSERT INTO `persistences` VALUES (84, 1, 'mxDAMSMvtauReNjpmTed94uhk6MabH0O', '2019-01-11 02:45:27', '2019-01-11 02:45:27');
INSERT INTO `persistences` VALUES (85, 1, '9rJzDHNXtz3oE1iKMB6cgX26LwNnb0Bw', '2019-01-12 05:03:44', '2019-01-12 05:03:44');
INSERT INTO `persistences` VALUES (86, 1, 'Y1Qe4aHXjCdFY6Z2uEw06FmPL2d1qSOQ', '2019-01-12 06:45:50', '2019-01-12 06:45:50');
INSERT INTO `persistences` VALUES (87, 1, 'CUJ3bcbtBf1Gow2kxMI8IkLNPGpcGnQH', '2019-01-12 06:45:59', '2019-01-12 06:45:59');
INSERT INTO `persistences` VALUES (88, 1, 'M0rUXWDaV62x4rRRNvOf60b4E3LX05La', '2019-01-12 06:46:10', '2019-01-12 06:46:10');
INSERT INTO `persistences` VALUES (89, 1, '0CrG0GIJHRhgaWMXojEw1IoXL489W6DW', '2019-01-12 06:46:15', '2019-01-12 06:46:15');
INSERT INTO `persistences` VALUES (90, 1, 'KNcII1Eb52y3YV8F5CFwZ7yxSAicIGzU', '2019-01-12 06:46:15', '2019-01-12 06:46:15');
INSERT INTO `persistences` VALUES (91, 1, 'DZ5d5eaVnPQ6wn3W47WNgVEATdalYsX4', '2019-01-12 06:46:29', '2019-01-12 06:46:29');
INSERT INTO `persistences` VALUES (92, 1, 'Hf0K6YESBzk5K8s7EqzbsPEazXwOUlsx', '2019-01-12 06:46:30', '2019-01-12 06:46:30');
INSERT INTO `persistences` VALUES (93, 1, 'a9P6EkjXgzmLY2I3qqsakdLsB6bZfOYw', '2019-01-12 06:46:45', '2019-01-12 06:46:45');
INSERT INTO `persistences` VALUES (94, 1, 'Z9k0KFD7sTKaIuoyvnAGV1jF5pl6WAvx', '2019-01-12 08:14:46', '2019-01-12 08:14:46');
INSERT INTO `persistences` VALUES (95, 1, 'dlUwmCfRJeX238SI0UDjRndxvBS6qrZT', '2019-01-12 08:53:31', '2019-01-12 08:53:31');
INSERT INTO `persistences` VALUES (96, 1, 'cTdH7QfP5hC5ViOStSfyF77mOCf4ZnqV', '2019-01-12 08:53:35', '2019-01-12 08:53:35');
INSERT INTO `persistences` VALUES (97, 1, 'UpMf1MaFLa4EYDjsLwzKRr8Vvl2bRh2V', '2019-01-12 08:53:35', '2019-01-12 08:53:35');
INSERT INTO `persistences` VALUES (98, 1, 'CGD2LkK6A9AhBem20hffeErpg2a3FKXB', '2019-01-12 08:53:45', '2019-01-12 08:53:45');
INSERT INTO `persistences` VALUES (99, 1, '5b35CWCWaD8vKFxKo779S23ipQflbD5j', '2019-01-12 08:53:47', '2019-01-12 08:53:47');
INSERT INTO `persistences` VALUES (100, 1, 'Cx6JrexVBt0F7JTrhCqtg1vnQkbmwARb', '2019-01-12 08:53:52', '2019-01-12 08:53:52');
INSERT INTO `persistences` VALUES (101, 1, 'q2AF6OkpVGQZkGgjXNl2yBlXH03S6Be0', '2019-01-12 09:40:44', '2019-01-12 09:40:44');
INSERT INTO `persistences` VALUES (102, 1, 'ZmfWLK1GmskYuzrp9u9Ia8eHpvDBy40N', '2019-01-12 09:40:47', '2019-01-12 09:40:47');
INSERT INTO `persistences` VALUES (103, 1, 'bcE63Hw4v3s5bSFfkI29EofLPf00toPf', '2019-01-12 09:40:47', '2019-01-12 09:40:47');
INSERT INTO `persistences` VALUES (104, 1, 'Ti31gSsJSgOGJwalk6nfEG292uA3bdZl', '2019-01-12 09:40:56', '2019-01-12 09:40:56');
INSERT INTO `persistences` VALUES (105, 1, 'lgiR2DaaKIjk4ihwEhylyQrtkIbuL1RP', '2019-01-12 09:40:57', '2019-01-12 09:40:57');
INSERT INTO `persistences` VALUES (106, 1, 'z775lkxwBKfvlpib4E08AImrix3ab04g', '2019-01-12 09:41:09', '2019-01-12 09:41:09');
INSERT INTO `persistences` VALUES (107, 1, 'pBCzfC209hJtOWXL6nDKolYI6BLSEuYU', '2019-01-12 12:54:51', '2019-01-12 12:54:51');
INSERT INTO `persistences` VALUES (108, 1, 'GSAO1YLrPNJVwSwBN6FKS9zO1qDX975d', '2019-01-12 14:25:44', '2019-01-12 14:25:44');
INSERT INTO `persistences` VALUES (109, 1, '8BNPUQpEcwdTqf1o6IyK1XtTCVqqNDpr', '2019-01-13 03:32:05', '2019-01-13 03:32:05');
INSERT INTO `persistences` VALUES (110, 1, 'EY9bBS47ScK3oIDeAyJ12ZZyQ7JT13Qb', '2019-01-13 05:36:41', '2019-01-13 05:36:41');
INSERT INTO `persistences` VALUES (111, 1, 'vaQ4tvHFoGfRNxjRfn6L3bTL3pwYR5wD', '2019-01-13 05:36:44', '2019-01-13 05:36:44');
INSERT INTO `persistences` VALUES (112, 1, 'UAeRhIcXwcURZi2WSzXQjKJc0HBKboY1', '2019-01-13 05:36:44', '2019-01-13 05:36:44');
INSERT INTO `persistences` VALUES (113, 1, 'ZAcyuKFQqpChivsGu9aaIsE9AdbfI6RJ', '2019-01-13 05:36:54', '2019-01-13 05:36:54');
INSERT INTO `persistences` VALUES (114, 1, '5O52rWThOEOuLM6qmphf6y6dtDRwJD64', '2019-01-13 05:36:55', '2019-01-13 05:36:55');
INSERT INTO `persistences` VALUES (115, 1, 'VM3eKmfL9N4giNzo2VtongXW6pO0Mtoc', '2019-01-13 05:36:59', '2019-01-13 05:36:59');
INSERT INTO `persistences` VALUES (116, 1, 'MyampCfHpiXZ0MfImIYGW5E0YpNmwPha', '2019-01-13 14:21:42', '2019-01-13 14:21:42');
INSERT INTO `persistences` VALUES (117, 1, 'OkH4Eeh3ZqK3UiZ00vTTcju5ozzWST40', '2019-01-13 17:05:06', '2019-01-13 17:05:06');
INSERT INTO `persistences` VALUES (118, 1, 'w5FphBL5zlCOTvxinDcSvOegBvqAQINz', '2019-01-13 20:25:44', '2019-01-13 20:25:44');
INSERT INTO `persistences` VALUES (119, 1, 'ELXZcZk0ishxU3dn6FPuKQSlYgfGsegS', '2019-01-13 20:26:33', '2019-01-13 20:26:33');
INSERT INTO `persistences` VALUES (120, 1, 'G68mI1HFEtglbyKiqU8ccopmP1T6OlL7', '2019-01-13 20:27:18', '2019-01-13 20:27:18');
INSERT INTO `persistences` VALUES (121, 1, 'SSZXUbsNDTz9q1QFwnBz5hQxDADPIQKn', '2019-01-13 20:27:22', '2019-01-13 20:27:22');
INSERT INTO `persistences` VALUES (122, 1, 'xZZaGuSGrTfyxDdLTgzHDJbnIpNxJ2MJ', '2019-01-14 00:54:46', '2019-01-14 00:54:46');
INSERT INTO `persistences` VALUES (123, 1, 'xDvX1v4BDVso6ziJdOuihbvhulaRa1Is', '2019-01-14 00:56:20', '2019-01-14 00:56:20');
INSERT INTO `persistences` VALUES (124, 1, 'byiAsvXzdo03NCt8LQ9aXvKEGaFsM0KH', '2019-01-14 00:58:08', '2019-01-14 00:58:08');
INSERT INTO `persistences` VALUES (125, 1, 'Bio6kFNVLzrUhdikEgywVMzX4SOVAsoD', '2019-01-14 00:58:28', '2019-01-14 00:58:28');
INSERT INTO `persistences` VALUES (126, 1, '9Rscw7ZO5ieOYim8bU0INMDpMYFWiaSr', '2019-01-14 00:58:29', '2019-01-14 00:58:29');
INSERT INTO `persistences` VALUES (127, 1, 'awhkCiiBEtgPaVzLkHIK03HV5Q4SozvZ', '2019-01-14 03:45:16', '2019-01-14 03:45:16');
INSERT INTO `persistences` VALUES (128, 1, 'BoueSXZqTJ6blCYeSUVBgGXof1LoxhwK', '2019-01-14 04:52:37', '2019-01-14 04:52:37');
INSERT INTO `persistences` VALUES (129, 1, '3FRtXVhQ1VvOrAPDxGqSmoDffJEqzTnT', '2019-01-14 04:52:43', '2019-01-14 04:52:43');
INSERT INTO `persistences` VALUES (130, 1, 'PK3Z36mj1V8Q1bRn3JceQPul82Nw8uIQ', '2019-01-14 05:03:38', '2019-01-14 05:03:38');
INSERT INTO `persistences` VALUES (131, 1, 'KOJi0tuuCZkIglOWEIX0SoDdrvtLIpVW', '2019-01-14 05:04:03', '2019-01-14 05:04:03');
INSERT INTO `persistences` VALUES (132, 1, 'GqcAy6EYFVtxoYebaNk6U7EgEE8CQtZf', '2019-01-14 05:04:06', '2019-01-14 05:04:06');
INSERT INTO `persistences` VALUES (133, 1, 'TaClgvGZF6D9S2FSrIhb19pNVed3yZtU', '2019-01-14 05:04:07', '2019-01-14 05:04:07');
INSERT INTO `persistences` VALUES (134, 1, 'cHWHz18GBdpkjwW0ADUYdInzkX73aVKm', '2019-01-14 05:04:38', '2019-01-14 05:04:38');
INSERT INTO `persistences` VALUES (135, 1, 'eqqJOgTFkN8lApuiqmRKmId7TI7v4Tqh', '2019-01-14 05:05:29', '2019-01-14 05:05:29');
INSERT INTO `persistences` VALUES (136, 1, '0XIxr69yHTIWSWKEgLj0py4GAsMW2sRN', '2019-01-14 05:05:32', '2019-01-14 05:05:32');
INSERT INTO `persistences` VALUES (137, 1, 'nIH45VTDxeXvcnzVpv59Uf3KLvTeKXwC', '2019-01-14 05:14:29', '2019-01-14 05:14:29');
INSERT INTO `persistences` VALUES (138, 1, 'oUO0L0h8ocP8RWXOFFyIvuEBR6uAljgT', '2019-01-14 05:17:23', '2019-01-14 05:17:23');
INSERT INTO `persistences` VALUES (139, 1, 'Dbn6JgPONyxAjxkYQnAULdYzDWa7QFk2', '2019-01-14 05:17:33', '2019-01-14 05:17:33');
INSERT INTO `persistences` VALUES (140, 1, 'klj1axtlzoPhJecFfbjrgIOBsdgTo4Fi', '2019-01-14 05:22:52', '2019-01-14 05:22:52');
INSERT INTO `persistences` VALUES (141, 1, 'U3NzC5rf6ur5nxgUrFlufelhGNNSn6OC', '2019-01-14 05:22:57', '2019-01-14 05:22:57');
INSERT INTO `persistences` VALUES (142, 1, 'cWjTfrOZg6MdA1ViyuwJTGQAHaNDUMWC', '2019-01-14 05:23:03', '2019-01-14 05:23:03');
INSERT INTO `persistences` VALUES (143, 1, 'AuV3PZ9vgaTxQDhqOp2Cv1v91rZmdQU6', '2019-01-14 05:43:26', '2019-01-14 05:43:26');
INSERT INTO `persistences` VALUES (144, 1, 'OyvXYvWcwNFtn8432zgsQC1JVdLAFgKE', '2019-01-14 05:43:33', '2019-01-14 05:43:33');
INSERT INTO `persistences` VALUES (145, 1, 'F07ItQXeJmD9KEPbEotf0srFcBB0geaX', '2019-01-14 06:31:45', '2019-01-14 06:31:45');
INSERT INTO `persistences` VALUES (146, 1, 'p4H4Oy7BTBWBd7EZBkkP8SxxdzxQogWP', '2019-01-14 06:31:45', '2019-01-14 06:31:45');
INSERT INTO `persistences` VALUES (147, 1, 'BFB7ivaMAzZey3MOjgGVPv8ciR1ACYno', '2019-01-14 06:31:47', '2019-01-14 06:31:47');
INSERT INTO `persistences` VALUES (148, 1, 'j6qNxdyKn0NGs4EiiF624Xrxpwiqfcc9', '2019-01-14 06:31:47', '2019-01-14 06:31:47');
INSERT INTO `persistences` VALUES (149, 1, 'jFo3VOby29E5VbQ9ULIYSmBRSjDFwal8', '2019-01-14 06:31:49', '2019-01-14 06:31:49');
INSERT INTO `persistences` VALUES (150, 1, 'mCjgvwCfcpGk4JrW6I1AJmcl9BLO5OLr', '2019-01-14 06:31:49', '2019-01-14 06:31:49');
INSERT INTO `persistences` VALUES (151, 1, 'fvppAG0EME7Ahijg25L5rOv0zZRfsjn5', '2019-01-14 06:31:51', '2019-01-14 06:31:51');
INSERT INTO `persistences` VALUES (152, 1, 'm8bUGwI5QHq3hsuqh7kDG9nqMDBYnjbQ', '2019-01-14 06:31:51', '2019-01-14 06:31:51');
INSERT INTO `persistences` VALUES (153, 1, 'dXHxZO1bIjWDNXTVQBGCwaGZFb4M32qS', '2019-01-14 06:32:16', '2019-01-14 06:32:16');
INSERT INTO `persistences` VALUES (154, 1, 'DgvYiLYlJt0neIbRtaQGDGzlKNxXHxzH', '2019-01-14 06:32:19', '2019-01-14 06:32:19');
INSERT INTO `persistences` VALUES (155, 1, 'P2afEMt4PBQnJobOjcqnbQsztQUkKhu6', '2019-01-14 06:32:20', '2019-01-14 06:32:20');
INSERT INTO `persistences` VALUES (156, 1, 'A24DeU4glX6SiH8QbUSSA9q8lboxbnc7', '2019-01-14 06:32:23', '2019-01-14 06:32:23');
INSERT INTO `persistences` VALUES (157, 1, 'WmPjpHGjCLCBpkSw0PsbrEtfLijmPEg7', '2019-01-14 06:32:23', '2019-01-14 06:32:23');
INSERT INTO `persistences` VALUES (158, 1, 'B2VDHCxWf5zIPBX37LQooWMxH0fxSsoW', '2019-01-14 06:32:23', '2019-01-14 06:32:23');
INSERT INTO `persistences` VALUES (159, 1, 'S3V5sKjZPowiny71DN1EBgZ47dtAdNRj', '2019-01-14 06:32:28', '2019-01-14 06:32:28');
INSERT INTO `persistences` VALUES (160, 1, 'JHncIuH8M5v7WLJNbXSr4zjKDa28jgLX', '2019-01-14 06:32:43', '2019-01-14 06:32:43');
INSERT INTO `persistences` VALUES (161, 1, 'HyEsWZgBaixXvOyBUT34nrL5hvr1kul6', '2019-01-14 06:32:43', '2019-01-14 06:32:43');
INSERT INTO `persistences` VALUES (162, 1, 'tqYy8ZL3ytvdyPSRpulbGdAkWOrHEWV1', '2019-01-14 06:32:44', '2019-01-14 06:32:44');
INSERT INTO `persistences` VALUES (163, 1, 'GOr9FMFLL5GZ5bAm1aOcmEoepuy7U3cL', '2019-01-14 06:34:14', '2019-01-14 06:34:14');
INSERT INTO `persistences` VALUES (164, 1, 'aFzq7yytRdWuGWfLGL646VQUE3CGwRsP', '2019-01-14 06:34:14', '2019-01-14 06:34:14');
INSERT INTO `persistences` VALUES (165, 1, 'QtSQlKodD7n9fNt1EtOnuru1nyuh4Yde', '2019-01-14 06:34:15', '2019-01-14 06:34:15');
INSERT INTO `persistences` VALUES (166, 1, 'oEAMpVU6n9lKmIBHZvJSSnawx29QnwqH', '2019-01-14 06:34:15', '2019-01-14 06:34:15');
INSERT INTO `persistences` VALUES (167, 1, 'nbsM0UiUg2DhwKrIHQidOo9T26avGtan', '2019-01-14 06:34:17', '2019-01-14 06:34:17');
INSERT INTO `persistences` VALUES (168, 1, '6tKkveXGBDlwb0CDQkrBnsKiarWl8Veb', '2019-01-14 06:34:22', '2019-01-14 06:34:22');
INSERT INTO `persistences` VALUES (169, 1, 'AhfTwsugpc0bSYtZjfECMdP0irnGDSbv', '2019-01-14 06:34:29', '2019-01-14 06:34:29');
INSERT INTO `persistences` VALUES (170, 1, 'XuqYxy0xBd8yrsCWhHBv2GWsgvrcvGAH', '2019-01-14 06:34:30', '2019-01-14 06:34:30');
INSERT INTO `persistences` VALUES (171, 1, 'Uf7mtqNg6IxPOvIotGWAthnuhK5MlZW0', '2019-01-14 06:34:30', '2019-01-14 06:34:30');
INSERT INTO `persistences` VALUES (172, 1, 'rYzoDl7h9uiMPHEvlXUi011MPsPmtcaN', '2019-01-14 06:34:30', '2019-01-14 06:34:30');
INSERT INTO `persistences` VALUES (173, 1, 'odU6neqQ3JQBXl6ZUTiFPmR6KsbkEZn1', '2019-01-14 06:34:30', '2019-01-14 06:34:30');
INSERT INTO `persistences` VALUES (174, 1, 'U286pVN8jXmHAIaVLOC6bfFODVCYo1Mg', '2019-01-14 06:34:31', '2019-01-14 06:34:31');
INSERT INTO `persistences` VALUES (175, 1, '8S6I5oe5aqJKjzR5Ddf8HmxmQqFwPoF7', '2019-01-14 06:34:32', '2019-01-14 06:34:32');
INSERT INTO `persistences` VALUES (176, 1, 'shX9ZDMmY08cmJvEwByD9mC9joOXEHrh', '2019-01-14 06:34:32', '2019-01-14 06:34:32');
INSERT INTO `persistences` VALUES (177, 1, 'Ws9oDUIyV8LtnznrvPRFFv1RXOfYv4Wp', '2019-01-14 06:34:32', '2019-01-14 06:34:32');
INSERT INTO `persistences` VALUES (178, 1, 'O5kfflsv3u0GOY8IjJfnMHvZNiUrTkxw', '2019-01-14 06:34:33', '2019-01-14 06:34:33');
INSERT INTO `persistences` VALUES (179, 1, 'f86LjhbwhEqqfeO07O3l4nSX0CIi8DtM', '2019-01-14 06:34:33', '2019-01-14 06:34:33');
INSERT INTO `persistences` VALUES (180, 1, '4blZ3mtzTqGfW0fpyQkhe2J5Wq3grkEx', '2019-01-14 06:34:33', '2019-01-14 06:34:33');
INSERT INTO `persistences` VALUES (181, 1, 'h7842KA7P6xUXft0HXtYtyN3bwBzN98D', '2019-01-14 06:35:30', '2019-01-14 06:35:30');
INSERT INTO `persistences` VALUES (182, 1, 'zGZj6Qd75bJcBS2xtTBTRruQhoU9xwpk', '2019-01-14 06:35:31', '2019-01-14 06:35:31');
INSERT INTO `persistences` VALUES (183, 1, 'OHluIC1cjmhbbHACm59oE70lghy7p2wu', '2019-01-14 06:35:31', '2019-01-14 06:35:31');
INSERT INTO `persistences` VALUES (184, 1, 'xuCIOg8LGLojbFLMx4T2ulhW3lKinkQj', '2019-01-14 06:35:32', '2019-01-14 06:35:32');
INSERT INTO `persistences` VALUES (185, 1, '7UP2GqV0yZKGoWtDRcqQ5aP7wMhq1yKn', '2019-01-14 06:35:32', '2019-01-14 06:35:32');
INSERT INTO `persistences` VALUES (186, 1, 'KaBTmjIWqMM7d9Xmnma3Q8RkA7Tvg2c2', '2019-01-14 06:35:33', '2019-01-14 06:35:33');
INSERT INTO `persistences` VALUES (187, 1, 'pgFsEOeTwLqbTGShIBVx7oaNamnS76F1', '2019-01-14 06:35:33', '2019-01-14 06:35:33');
INSERT INTO `persistences` VALUES (188, 1, 'zlxCoQwCXYdQt3ANojGdqcE5kQWU0mgQ', '2019-01-14 06:35:33', '2019-01-14 06:35:33');
INSERT INTO `persistences` VALUES (189, 1, '7FUEqYk0dv1evDpjIqhnMdpXNXtBlQ9y', '2019-01-14 06:35:33', '2019-01-14 06:35:33');
INSERT INTO `persistences` VALUES (190, 1, 'sZyk87tmE18a4vTfykAKU6LWXTxd7VVO', '2019-01-14 06:35:34', '2019-01-14 06:35:34');
INSERT INTO `persistences` VALUES (191, 1, 'DOCUkLyd5fbRgPx69Uyvl70wt8wgMQ5e', '2019-01-14 06:35:34', '2019-01-14 06:35:34');
INSERT INTO `persistences` VALUES (192, 1, '7vjajE6jH6CYm4SgZc9XpXH0rPqGudAt', '2019-01-14 06:35:34', '2019-01-14 06:35:34');
INSERT INTO `persistences` VALUES (193, 1, 'r9HAE45nyu8cqDbj9xmLEwNJ4UXXhF5C', '2019-01-14 06:39:49', '2019-01-14 06:39:49');
INSERT INTO `persistences` VALUES (194, 1, 'AYUarw19FViXk8rwXM4956FQtdveYhPh', '2019-01-14 06:39:49', '2019-01-14 06:39:49');
INSERT INTO `persistences` VALUES (195, 1, 'BTtDscCvBS0waYepWESuqzuEnOGJD8av', '2019-01-14 06:39:50', '2019-01-14 06:39:50');
INSERT INTO `persistences` VALUES (196, 1, 'cVGHua7s5DtEv0LHjS75Lacnk4YA60jV', '2019-01-14 06:39:50', '2019-01-14 06:39:50');
INSERT INTO `persistences` VALUES (197, 1, 'r0Kw176WX3duyVO8DUBepFG7SO48pwx4', '2019-01-14 06:39:51', '2019-01-14 06:39:51');
INSERT INTO `persistences` VALUES (198, 1, 'XxHNi6pKDgz0NQrmE7AWOvJuuJ4s8xoG', '2019-01-14 06:39:51', '2019-01-14 06:39:51');
INSERT INTO `persistences` VALUES (199, 1, 'cnSeJmhkHjcM9Z1F4TwMlb96o8Fohj13', '2019-01-14 06:39:51', '2019-01-14 06:39:51');
INSERT INTO `persistences` VALUES (200, 1, 'cC0cqY3aQgYuwavQwpkHqJT5VUX6ySRJ', '2019-01-14 06:39:51', '2019-01-14 06:39:51');
INSERT INTO `persistences` VALUES (201, 1, 'KO2yHTiW3OeI19cOG6vainkh8iPb3HWw', '2019-01-14 06:39:52', '2019-01-14 06:39:52');
INSERT INTO `persistences` VALUES (202, 1, 'm1dEsw4H3bUROBwWqYtnrv6pPuRKSHGJ', '2019-01-14 06:47:40', '2019-01-14 06:47:40');
INSERT INTO `persistences` VALUES (203, 1, 'jnitjeQmvPDxzBDo5ht0OIPF3usawsl0', '2019-01-14 06:48:03', '2019-01-14 06:48:03');
INSERT INTO `persistences` VALUES (204, 1, 'v4RO738MuQrjDx0svh3xXw5iYThr5SK7', '2019-01-14 06:48:05', '2019-01-14 06:48:05');
INSERT INTO `persistences` VALUES (205, 1, '5Dbv1y41GmRYTISfFbHn4EOrZkyN7n4Y', '2019-01-14 06:48:42', '2019-01-14 06:48:42');
INSERT INTO `persistences` VALUES (206, 1, 'oxQZdM9v4J9w2HzKC408YjSXh855yvrV', '2019-01-14 06:48:44', '2019-01-14 06:48:44');
INSERT INTO `persistences` VALUES (207, 1, 'vwXkuYpS1D6rIpk4loBqvosIInSVVezP', '2019-01-14 06:48:48', '2019-01-14 06:48:48');
INSERT INTO `persistences` VALUES (208, 1, 'gpUoYqZ4VX16tufKu6MhSxnPlq4Nl6BL', '2019-01-14 06:48:49', '2019-01-14 06:48:49');
INSERT INTO `persistences` VALUES (209, 1, '48NbD4HUD0Fye7jsd2pkAXr4TvxgTJty', '2019-01-14 06:49:00', '2019-01-14 06:49:00');
INSERT INTO `persistences` VALUES (210, 1, 'UuM0uSgcl3nMZkxSalzlgHFk9fKsHx2P', '2019-01-14 06:49:02', '2019-01-14 06:49:02');
INSERT INTO `persistences` VALUES (211, 1, 'g5KuxLyYMABdRuvQtnDjEZQM97utPKYW', '2019-01-14 06:54:37', '2019-01-14 06:54:37');
INSERT INTO `persistences` VALUES (212, 1, 'E3YmHaDoxlPsRV94vHG5aXtoFsiCbrZl', '2019-01-14 06:55:01', '2019-01-14 06:55:01');
INSERT INTO `persistences` VALUES (213, 1, 'fi4yK0oDPnrBzynNJr7XAXpp6jwd7fyR', '2019-01-14 06:56:24', '2019-01-14 06:56:24');
INSERT INTO `persistences` VALUES (214, 1, '0Agv0Dcu8mRzLH1vDQlP7tQucAvVy5pN', '2019-01-14 06:56:29', '2019-01-14 06:56:29');
INSERT INTO `persistences` VALUES (215, 1, 'cYbCIpR5wFqvdITSkUFY0NHJb10GipKd', '2019-01-14 06:56:34', '2019-01-14 06:56:34');
INSERT INTO `persistences` VALUES (216, 1, 'gCEm4vRdJxgnwHX3Wq0YjRWjstnYeKAI', '2019-01-14 06:56:37', '2019-01-14 06:56:37');
INSERT INTO `persistences` VALUES (217, 1, 'ecD600pymqdtFFB1sfYb3dn1fExcHuhv', '2019-01-14 06:56:40', '2019-01-14 06:56:40');
INSERT INTO `persistences` VALUES (218, 1, 'HDSkLu6sHklfheSr45X5otRsteYBgmDC', '2019-01-14 06:56:42', '2019-01-14 06:56:42');
INSERT INTO `persistences` VALUES (219, 1, 'fH7DgMmVz68eOOkQCwBF31q6xV7NtrCD', '2019-01-14 06:56:46', '2019-01-14 06:56:46');
INSERT INTO `persistences` VALUES (220, 1, 'xsnvVKTksfuIcZ0ubw1OltkR00Wqq5O4', '2019-01-14 06:56:52', '2019-01-14 06:56:52');
INSERT INTO `persistences` VALUES (221, 1, 'NHoedbc8PdlCfRq6UOGAyWQqqzDtBPou', '2019-01-14 06:56:55', '2019-01-14 06:56:55');
INSERT INTO `persistences` VALUES (222, 1, 'qenhTMJJy7A96jRMHXKtMe6IBq30poqO', '2019-01-14 06:56:58', '2019-01-14 06:56:58');
INSERT INTO `persistences` VALUES (223, 1, 'vg3pnmsaxs5EGPwoq4LuyvfNghwJrnJw', '2019-01-14 06:57:01', '2019-01-14 06:57:01');
INSERT INTO `persistences` VALUES (224, 1, 'smRxd2ARJn4u0WHkijc1ZtHyOFWptGew', '2019-01-14 06:59:23', '2019-01-14 06:59:23');
INSERT INTO `persistences` VALUES (225, 1, 'wCF2tMdmUTx8bfjX1RdfC5eZ5XoSgTEi', '2019-01-14 06:59:31', '2019-01-14 06:59:31');
INSERT INTO `persistences` VALUES (226, 1, 'iNn0Lpr0RKMeJdNSz1SNScfrValolPCT', '2019-01-14 06:59:34', '2019-01-14 06:59:34');
INSERT INTO `persistences` VALUES (227, 1, 'rMNlx5ECqwdRyb4oSq7NE8VLKJp2zexV', '2019-01-14 06:59:39', '2019-01-14 06:59:39');
INSERT INTO `persistences` VALUES (228, 1, '7jxER3YCe3mfshmagaEmrqdWyBQn5q7g', '2019-01-14 07:00:04', '2019-01-14 07:00:04');
INSERT INTO `persistences` VALUES (229, 1, 'D1w8XLb56abSm5yeqtHjcVbe27VALaGM', '2019-01-14 07:00:18', '2019-01-14 07:00:18');
INSERT INTO `persistences` VALUES (230, 1, 'geo9yTcY1tcC0zBciuA8mImNQd4hkuy6', '2019-01-14 07:00:23', '2019-01-14 07:00:23');
INSERT INTO `persistences` VALUES (231, 1, 'a75c66qYGm5eibshQykVipZAXHeDvGaB', '2019-01-14 07:00:32', '2019-01-14 07:00:32');
INSERT INTO `persistences` VALUES (232, 1, 'anij3x0izfO2GMY99H4r187EL05Ax8VD', '2019-01-14 07:00:36', '2019-01-14 07:00:36');
INSERT INTO `persistences` VALUES (233, 1, 'itFxx7ssGCPtZ4n6PBafbcZl5N5bYq9S', '2019-01-14 07:00:46', '2019-01-14 07:00:46');
INSERT INTO `persistences` VALUES (234, 1, '56SgnzkdMPoXQ7B70VE5krG0cIeSUNc0', '2019-01-14 07:01:00', '2019-01-14 07:01:00');
INSERT INTO `persistences` VALUES (235, 1, 'VY2uk07aNnHBoPFbs50bBZ8dkNjyhEFb', '2019-01-14 07:01:40', '2019-01-14 07:01:40');
INSERT INTO `persistences` VALUES (236, 1, 'KGZgrCpuyfZ2QOYhKmir9zuGnOe4YPSM', '2019-01-14 07:02:46', '2019-01-14 07:02:46');
INSERT INTO `persistences` VALUES (237, 1, '1oYfAx78oHrDPCljAUDpv1IhHK9MKYi6', '2019-01-14 07:03:14', '2019-01-14 07:03:14');
INSERT INTO `persistences` VALUES (238, 1, 'eDZgKuWokMf1v7Kkb1Yl2TpTfrHVYMtv', '2019-01-14 07:05:20', '2019-01-14 07:05:20');
INSERT INTO `persistences` VALUES (239, 1, 'X6TT09kuXWpko4dkHl34Fb6g2pageZpf', '2019-01-14 07:05:28', '2019-01-14 07:05:28');
INSERT INTO `persistences` VALUES (240, 1, 'har6fn1rmQEUhLztPqzamlfUQKIhifgp', '2019-01-14 07:05:35', '2019-01-14 07:05:35');
INSERT INTO `persistences` VALUES (241, 1, 'hsxsdhTx7xm39JQDTJTY6EI3pjCo4zC2', '2019-01-14 07:05:41', '2019-01-14 07:05:41');
INSERT INTO `persistences` VALUES (242, 1, '5hzsVvKYOIVd1sWC4luH91fDSHYfh1ls', '2019-01-14 07:05:46', '2019-01-14 07:05:46');
INSERT INTO `persistences` VALUES (243, 1, 'cIgqOJzIKm49isSLuRfIbDzGMm6uAxrF', '2019-01-14 07:05:54', '2019-01-14 07:05:54');
INSERT INTO `persistences` VALUES (244, 1, 'ZrBfsMxsSd1KbQg0yayNH6i9ZBgutKyO', '2019-01-14 07:05:57', '2019-01-14 07:05:57');
INSERT INTO `persistences` VALUES (245, 1, 'jyUy0qq2jOLh32xZi42x5tagbf1aA5PG', '2019-01-14 07:06:01', '2019-01-14 07:06:01');
INSERT INTO `persistences` VALUES (246, 1, 'mruIP8476lmo0rwX4tCukPzVPdl7ZDGZ', '2019-01-14 07:06:04', '2019-01-14 07:06:04');
INSERT INTO `persistences` VALUES (247, 1, 'BHXD3jFtYPP6vnvVinesGAyHqtUrKdDi', '2019-01-14 07:06:09', '2019-01-14 07:06:09');
INSERT INTO `persistences` VALUES (248, 1, 'ZBuExRb7HoGpsUKopVlekot1jMqDqCj2', '2019-01-14 07:06:24', '2019-01-14 07:06:24');
INSERT INTO `persistences` VALUES (249, 1, '7gMTkkdX6lxTmvp7i4vnZtcsD78IGQPy', '2019-01-14 07:07:35', '2019-01-14 07:07:35');
INSERT INTO `persistences` VALUES (250, 1, 'sUyzH4aEmZO1nqAgNyK9TQq8JF1MUAMZ', '2019-01-14 07:07:36', '2019-01-14 07:07:36');
INSERT INTO `persistences` VALUES (251, 1, 'CKtfK5KwbrGPPSlJMSGm9GAmvlkrfUFr', '2019-01-14 07:08:14', '2019-01-14 07:08:14');
INSERT INTO `persistences` VALUES (252, 1, 'or6zqYDzTl1Egqvjn89elQCQ8CZxx32t', '2019-01-14 07:09:25', '2019-01-14 07:09:25');
INSERT INTO `persistences` VALUES (253, 1, 'm7WJFdckXvTigGj7Cc9KlMItrlJSkAOH', '2019-01-14 07:09:30', '2019-01-14 07:09:30');
INSERT INTO `persistences` VALUES (254, 1, 'OtECxOeL6IaGH5al3CryPOaL9SltHGNF', '2019-01-14 07:09:36', '2019-01-14 07:09:36');
INSERT INTO `persistences` VALUES (255, 1, 'fSjdWQqGGkqNQfHh7cGqtt84OZqXCWbm', '2019-01-14 07:13:03', '2019-01-14 07:13:03');
INSERT INTO `persistences` VALUES (256, 1, 'HoIJ9chdBjgo0Vam1XaNfxcHeLNdOsZa', '2019-01-14 07:13:12', '2019-01-14 07:13:12');
INSERT INTO `persistences` VALUES (257, 1, 'NI4BxLrZJoY9vzmvC7fDSe31hgdUM9nf', '2019-01-14 07:13:48', '2019-01-14 07:13:48');
INSERT INTO `persistences` VALUES (258, 1, 'KBMq4V5UThJ6D5GtCXksGr67aYxPLLrf', '2019-01-14 07:13:53', '2019-01-14 07:13:53');
INSERT INTO `persistences` VALUES (259, 1, '2MB5ysSKRI6rAp5Qh1D5GbV4HGOtdiaU', '2019-01-14 07:13:56', '2019-01-14 07:13:56');
INSERT INTO `persistences` VALUES (260, 1, 'kXDoEVHUglNkKRFJmar8QrMcen3JxH2U', '2019-01-14 07:14:01', '2019-01-14 07:14:01');
INSERT INTO `persistences` VALUES (261, 1, '37q0IzE6xDMx4wnIlcH4SZtltvL9DATR', '2019-01-14 07:14:23', '2019-01-14 07:14:23');
INSERT INTO `persistences` VALUES (262, 1, 'OxZuNZ3SYL0vSPhLBnLkufnhfvZ6UctD', '2019-01-14 07:14:24', '2019-01-14 07:14:24');
INSERT INTO `persistences` VALUES (263, 1, 'DxOWTHcfXGtay5UDqhi8MEaxKYBgKes9', '2019-01-14 07:14:25', '2019-01-14 07:14:25');
INSERT INTO `persistences` VALUES (264, 1, '0oP7RDKWkWNLeIcPTPr6jayICUTFZ1aX', '2019-01-14 07:14:28', '2019-01-14 07:14:28');
INSERT INTO `persistences` VALUES (265, 1, 't51NcBAWFrXQj2YTL4TG5pV528cVFp3D', '2019-01-14 07:14:43', '2019-01-14 07:14:43');
INSERT INTO `persistences` VALUES (266, 1, 'N5i3VankwfbrtNeeHAA4oQ15TJbzP1Jm', '2019-01-14 07:14:44', '2019-01-14 07:14:44');
INSERT INTO `persistences` VALUES (267, 1, 'Dkbs4q2PrtFTbPGuSsJuBfpQNmHN8ZZI', '2019-01-14 07:15:03', '2019-01-14 07:15:03');
INSERT INTO `persistences` VALUES (268, 1, '6LXmTD6BwswbqS4S6rByP5XHCIrcdzfs', '2019-01-14 07:15:09', '2019-01-14 07:15:09');
INSERT INTO `persistences` VALUES (269, 1, 'piqdy2Gl9YnztByDVkBNJsGlXL3b85rz', '2019-01-14 07:15:11', '2019-01-14 07:15:11');
INSERT INTO `persistences` VALUES (270, 1, '0HosO6pe7e7ZfKMQnjopYKbAVQZ5l7Ue', '2019-01-14 07:15:12', '2019-01-14 07:15:12');
INSERT INTO `persistences` VALUES (271, 1, 'yy24cQzq5szdmiMcoGgMxZBDiZaX9zxB', '2019-01-14 07:15:13', '2019-01-14 07:15:13');
INSERT INTO `persistences` VALUES (272, 1, 'u1Xf4e0yZn3pftCsWhg1Lb6gomxouaLR', '2019-01-14 07:15:13', '2019-01-14 07:15:13');
INSERT INTO `persistences` VALUES (273, 1, 'D4QUCUMFBliDPl32MJe4vmrv9Hm0rdnW', '2019-01-14 07:15:13', '2019-01-14 07:15:13');
INSERT INTO `persistences` VALUES (274, 1, 'nbBQwb9GW76hpWf96ISRdUO6h9IlehGl', '2019-01-14 07:15:14', '2019-01-14 07:15:14');
INSERT INTO `persistences` VALUES (275, 1, 'rD9KnSRTPTXXSPEZ7ttI0m8Em7SuS064', '2019-01-14 07:15:15', '2019-01-14 07:15:15');
INSERT INTO `persistences` VALUES (276, 1, 'jauuMSVF7A2pllEMMUXa1dSydHmTiEXe', '2019-01-14 12:44:19', '2019-01-14 12:44:19');
INSERT INTO `persistences` VALUES (277, 1, 'HPwNZBUWQJnJaUdBAiHZVUJQgrqGW9og', '2019-01-15 04:04:41', '2019-01-15 04:04:41');
INSERT INTO `persistences` VALUES (278, 1, 's7jr3ffkZ5MxMTErJy9MDGMv2rOTsREi', '2019-01-15 08:29:44', '2019-01-15 08:29:44');
INSERT INTO `persistences` VALUES (279, 1, 'jfQEmd2gCFTJzvm3MgCuSAEL0VpqGSlc', '2019-01-15 09:15:10', '2019-01-15 09:15:10');
INSERT INTO `persistences` VALUES (280, 1, 'QUq7LhZfoUbZ7tSzH4rjKSde635e7MQT', '2019-01-15 09:22:18', '2019-01-15 09:22:18');
INSERT INTO `persistences` VALUES (281, 1, 'ZCLGt3i8e9wBmGAkRNqy1bHFjnFJQ5iM', '2019-01-15 09:22:25', '2019-01-15 09:22:25');
INSERT INTO `persistences` VALUES (282, 1, '285g731rYeoWjgdDAGBC0SrZRgfdSMTS', '2019-01-15 09:41:11', '2019-01-15 09:41:11');
INSERT INTO `persistences` VALUES (283, 1, 'hGJ70ImERHWpXZ9Pl11kCpLAwcw1c6hg', '2019-01-15 09:46:07', '2019-01-15 09:46:07');
INSERT INTO `persistences` VALUES (284, 1, 'WEKRdcEi62QXUYuADpijkLyWnfH3EDg5', '2019-01-15 09:46:22', '2019-01-15 09:46:22');
INSERT INTO `persistences` VALUES (285, 1, 'Oxll3UNjvfO2WFBBwbEmzadV1buVFXtK', '2019-01-15 09:46:24', '2019-01-15 09:46:24');
INSERT INTO `persistences` VALUES (286, 1, 'GM7o53sv5rcMCLiBfhpCIC6u1QuLzOhU', '2019-01-15 09:46:28', '2019-01-15 09:46:28');
INSERT INTO `persistences` VALUES (287, 1, 'zzZGGK3uqDbBdijMEVr6ZSkuyqDqsJDI', '2019-01-15 09:46:28', '2019-01-15 09:46:28');
INSERT INTO `persistences` VALUES (288, 1, 'w2VSOY4C3XYD78kj4ZMaZGqnYhM2PetA', '2019-01-15 09:46:36', '2019-01-15 09:46:36');
INSERT INTO `persistences` VALUES (289, 1, '3bGZFloPk39I3mDqeVix6AWmV2gDM66F', '2019-01-15 09:46:40', '2019-01-15 09:46:40');
INSERT INTO `persistences` VALUES (290, 1, 'T3L3rgLtjUbzOvWDC0itgT3EospRvWaX', '2019-01-15 09:47:03', '2019-01-15 09:47:03');
INSERT INTO `persistences` VALUES (291, 1, 'pRcXFT6kyi1IOLBDgvWs5JfXAyYJpjCJ', '2019-01-15 09:47:15', '2019-01-15 09:47:15');
INSERT INTO `persistences` VALUES (292, 1, 'BLWOVpEK8NCjAtqsuAr7ugThervGCSPp', '2019-01-15 09:47:15', '2019-01-15 09:47:15');
INSERT INTO `persistences` VALUES (293, 1, 'aIgRrU55wi3IHa2yCt14QMSye16YspNL', '2019-01-15 09:47:22', '2019-01-15 09:47:22');
INSERT INTO `persistences` VALUES (294, 1, 'm5QkhdJTFCwbG2Hpxxej7jPiJ4HnihNf', '2019-01-15 09:47:24', '2019-01-15 09:47:24');
INSERT INTO `persistences` VALUES (295, 1, 'S29ciSL1WERtln6ILOYVnHJ3Rf7tKLYG', '2019-01-15 10:22:31', '2019-01-15 10:22:31');
INSERT INTO `persistences` VALUES (296, 1, 'oNCKfuR0DC5lBjObMMt5b0FnVKd1E87m', '2019-01-15 13:44:48', '2019-01-15 13:44:48');
INSERT INTO `persistences` VALUES (297, 1, '2aRwkD3mnNLBELNI6JAWHjZfLbAiJgp7', '2019-01-15 14:18:35', '2019-01-15 14:18:35');
INSERT INTO `persistences` VALUES (298, 1, '9WSZjwd2ZN4J7S2YLTT1nALOmQVia1lI', '2019-01-16 02:45:03', '2019-01-16 02:45:03');
INSERT INTO `persistences` VALUES (299, 1, '4wnSw6jFJftmyhHFh87efZ9UsqlLPd7u', '2019-01-16 02:45:21', '2019-01-16 02:45:21');
INSERT INTO `persistences` VALUES (300, 1, '1Obt2ffaPboCqiZzW3MCC1HwBmfpQo4y', '2019-01-16 02:45:34', '2019-01-16 02:45:34');
INSERT INTO `persistences` VALUES (301, 1, 'he0ah5A5gungRu5hFQWZeW6cKmfInX1F', '2019-01-16 02:45:34', '2019-01-16 02:45:34');
INSERT INTO `persistences` VALUES (302, 1, 'MeIsCLkWqanu6bR5GKggNuMu7avpuBt7', '2019-01-16 02:45:35', '2019-01-16 02:45:35');
INSERT INTO `persistences` VALUES (303, 1, 'MAuPQLlu0wUSpgKAGGW4SeM50Fqeb9lr', '2019-01-16 02:59:55', '2019-01-16 02:59:55');
INSERT INTO `persistences` VALUES (304, 1, 'OZ2sGUtlZ3i3X5Pz9426FQTfzqX8um3c', '2019-01-16 03:00:11', '2019-01-16 03:00:11');
INSERT INTO `persistences` VALUES (305, 1, '2VUhvsOPNw9BfmIo8b3xt6yOOVbQ4lfX', '2019-01-16 03:00:11', '2019-01-16 03:00:11');
INSERT INTO `persistences` VALUES (306, 1, 'V0lLUrB1pIsvupgK6naGrw96WAj9gncu', '2019-01-16 03:00:38', '2019-01-16 03:00:38');
INSERT INTO `persistences` VALUES (307, 1, 'MJwZR50pmXbMwx3GG2qMLPxb8I389Cuo', '2019-01-16 06:14:15', '2019-01-16 06:14:15');
INSERT INTO `persistences` VALUES (308, 1, 'k21ONgI3Q67sr09hayuKzQjcN1iwEo1d', '2019-01-16 06:14:29', '2019-01-16 06:14:29');
INSERT INTO `persistences` VALUES (309, 1, 'jGt6rnFJo5ZtMcTghK6vTzTA6E89ULtM', '2019-01-16 06:14:39', '2019-01-16 06:14:39');
INSERT INTO `persistences` VALUES (310, 1, 'kcyh3ATyrYz8SjzNttoSnbTiQmxsIWHw', '2019-01-16 06:14:41', '2019-01-16 06:14:41');
INSERT INTO `persistences` VALUES (311, 1, 'dF0d9glt626JiIOQsmiIEOUD2KaUj7wt', '2019-01-16 06:14:55', '2019-01-16 06:14:55');
INSERT INTO `persistences` VALUES (312, 1, 'XCJHwYRQsdPtSFJ1VjvTFWPH3kwQ5tlx', '2019-01-16 06:14:55', '2019-01-16 06:14:55');
INSERT INTO `persistences` VALUES (313, 1, 's7hDrBps2qegvt6nwmma4Lx6Nf5pserQ', '2019-01-16 06:15:02', '2019-01-16 06:15:02');
INSERT INTO `persistences` VALUES (314, 1, '1yz3wowOOTzhXFZHIcAOb8O1P4Ew7WFt', '2019-01-16 06:15:06', '2019-01-16 06:15:06');
INSERT INTO `persistences` VALUES (315, 1, 'pP1TQDyWZc9kwyYQPVkEkDmabOp5yqwW', '2019-01-16 06:15:10', '2019-01-16 06:15:10');
INSERT INTO `persistences` VALUES (316, 1, 'UTPf7fLzLf8te4AXThfrG39NU9xlJY9q', '2019-01-16 06:15:19', '2019-01-16 06:15:19');
INSERT INTO `persistences` VALUES (317, 1, 'WbDb6fWvBsl35e418O6Gx297WzB3Gg1s', '2019-01-16 06:15:19', '2019-01-16 06:15:19');
INSERT INTO `persistences` VALUES (318, 1, 'DOtNRk1ZiuTxfp1h8C7b4jgjKfU6k5HO', '2019-01-16 06:15:52', '2019-01-16 06:15:52');
INSERT INTO `persistences` VALUES (319, 1, 'vAleGffLVfjqu75uA6H8DkMl8mxA5V7I', '2019-01-16 06:15:56', '2019-01-16 06:15:56');
INSERT INTO `persistences` VALUES (320, 1, 'CA9CYPouHjaHQ7ARLfdTLzeConjjfWOa', '2019-01-16 06:15:56', '2019-01-16 06:15:56');
INSERT INTO `persistences` VALUES (321, 1, 'C1HBMNR18GbWsS9gwev33NYYpYwPO0wS', '2019-01-16 06:16:02', '2019-01-16 06:16:02');
INSERT INTO `persistences` VALUES (322, 1, 'SBwvpnB9RbbiLgCL6d326OCcbEwzyCGa', '2019-01-16 06:16:06', '2019-01-16 06:16:06');
INSERT INTO `persistences` VALUES (323, 1, '98j1wKHoL8hpXDS20WDxt1jAdcSmAj3T', '2019-01-16 06:16:06', '2019-01-16 06:16:06');
INSERT INTO `persistences` VALUES (324, 1, 'e7Xv1MOhfO3wx4TJxcuvh2k6qFGQ7kHW', '2019-01-16 06:16:10', '2019-01-16 06:16:10');
INSERT INTO `persistences` VALUES (325, 1, '7veZXFtA96NNquflNbN5dM52zEPxFOFV', '2019-01-16 06:46:27', '2019-01-16 06:46:27');
INSERT INTO `persistences` VALUES (326, 1, 'k28l5Fc1d0IrnaoARh342Mg3SxsekCnT', '2019-01-16 06:46:39', '2019-01-16 06:46:39');
INSERT INTO `persistences` VALUES (327, 1, 'kYWUk2aTgpZxYMQUtP4Jew1B8q5Bezyd', '2019-01-16 06:46:40', '2019-01-16 06:46:40');
INSERT INTO `persistences` VALUES (328, 1, '5SxmVzqx9bRgEmCC64mMOSQj7NwwG2uc', '2019-01-16 06:46:54', '2019-01-16 06:46:54');
INSERT INTO `persistences` VALUES (329, 1, 'A8JUf3vJCOrpnOo80bs1WYmV7Y2MUlLf', '2019-01-16 06:46:55', '2019-01-16 06:46:55');
INSERT INTO `persistences` VALUES (330, 1, 'uXPtd8QLlLZIIxioYHXkPHgYL5btNIgg', '2019-01-16 06:47:08', '2019-01-16 06:47:08');
INSERT INTO `persistences` VALUES (331, 1, 'rBMhiXzKEFtJhz3B5OgWt1ZCGHTmahMR', '2019-01-16 06:47:09', '2019-01-16 06:47:09');
INSERT INTO `persistences` VALUES (332, 1, 'KsVKSWsMqlZBHqHnGsEf4HS84LQD46pZ', '2019-01-16 06:47:20', '2019-01-16 06:47:20');
INSERT INTO `persistences` VALUES (333, 1, 'OVzHOFwr0YG4MI89stLTLJN1jf4r8wS3', '2019-01-16 06:47:22', '2019-01-16 06:47:22');
INSERT INTO `persistences` VALUES (334, 1, '20eifkaEfyq0CXvcSOMbTBNxlENzzoSJ', '2019-01-16 06:47:51', '2019-01-16 06:47:51');
INSERT INTO `persistences` VALUES (335, 1, 'tO4RqqT9KWDZhDtCEgn8uHbbId5jgsif', '2019-01-16 06:48:00', '2019-01-16 06:48:00');
INSERT INTO `persistences` VALUES (336, 1, 'bV4SoBjr4dL9doOtag7M2VxOuLsq8uXb', '2019-01-16 06:48:00', '2019-01-16 06:48:00');
INSERT INTO `persistences` VALUES (337, 1, 'pMSDkNqSODBiV0hzJvmYaUuj7eYDcv9Z', '2019-01-16 06:48:08', '2019-01-16 06:48:08');
INSERT INTO `persistences` VALUES (338, 1, 'DbW7jK8XjOi6hvCBBJeNhfrmcslqX4L1', '2019-01-16 06:48:12', '2019-01-16 06:48:12');
INSERT INTO `persistences` VALUES (339, 1, 'SmOsXtXEzdNjTg9zFuMH3ma0EsuQR0y0', '2019-01-16 06:48:12', '2019-01-16 06:48:12');
INSERT INTO `persistences` VALUES (340, 1, 'YjRJuSI68LqqTaAvDJ538kV8orEWsSS7', '2019-01-16 06:48:15', '2019-01-16 06:48:15');
INSERT INTO `persistences` VALUES (341, 1, 'oLfCTSCi7t0OHzafl7dQDd816iZMDsMa', '2019-01-16 06:48:28', '2019-01-16 06:48:28');
INSERT INTO `persistences` VALUES (342, 1, 'DRDCrfGrrBA9PlQGxaywU6b3sSo0NruW', '2019-01-16 06:48:29', '2019-01-16 06:48:29');
INSERT INTO `persistences` VALUES (343, 1, '7DHSFuDb65P8UFtto96A7Pb5kxwmp5E6', '2019-01-16 06:48:30', '2019-01-16 06:48:30');
INSERT INTO `persistences` VALUES (344, 1, 'l8WMUxqgH7PlvLHh6WnBWuyQMdSsVXBj', '2019-01-16 06:48:50', '2019-01-16 06:48:50');
INSERT INTO `persistences` VALUES (345, 1, 'Fc4MKYRLEWWaXmU7YrqKDhVoPGpfQYNV', '2019-01-16 06:48:52', '2019-01-16 06:48:52');
INSERT INTO `persistences` VALUES (346, 1, 'drtf1hvtWczVBNNV9c33v92PnioO1XEz', '2019-01-16 06:48:52', '2019-01-16 06:48:52');
INSERT INTO `persistences` VALUES (347, 1, 'jnaA6Bh5Z3Jfea3aSRUCXCB8nR5o0T2q', '2019-01-16 06:49:05', '2019-01-16 06:49:05');
INSERT INTO `persistences` VALUES (348, 1, 'km0sxtPnXOnh6bONbzIPU3yys4uDai5h', '2019-01-16 06:49:09', '2019-01-16 06:49:09');
INSERT INTO `persistences` VALUES (349, 1, 'lp4vbUnTCVIlKBtrCEyEX4iRghxvvweJ', '2019-01-16 06:49:14', '2019-01-16 06:49:14');
INSERT INTO `persistences` VALUES (350, 1, 'WibMziLcCNrkb7dqheKQLek3xlkvUQZa', '2019-01-16 06:49:14', '2019-01-16 06:49:14');
INSERT INTO `persistences` VALUES (351, 1, 'Ve5z50yToRsWG0anF3IK9dKX1kf5fLgl', '2019-01-16 06:49:20', '2019-01-16 06:49:20');
INSERT INTO `persistences` VALUES (352, 1, 'QkXJXPOZP9W0WADR7iohuNkZWgW2dX8j', '2019-01-16 06:49:21', '2019-01-16 06:49:21');
INSERT INTO `persistences` VALUES (353, 1, 'r6Wr0ewtNGcCo7oaqKKZREM88O3OzNw0', '2019-01-16 06:49:22', '2019-01-16 06:49:22');
INSERT INTO `persistences` VALUES (354, 1, 'JxEpM4qYMsqj2cEW6h8UA1L5SrWSHMZD', '2019-01-16 06:49:23', '2019-01-16 06:49:23');
INSERT INTO `persistences` VALUES (355, 1, 'YttaU9yxVBTPkhyUt0fP0jqNO3McYI5E', '2019-01-16 06:49:28', '2019-01-16 06:49:28');
INSERT INTO `persistences` VALUES (356, 1, 'cyoVRHhgthEgC5Gi1joPnNNeKxy98D5p', '2019-01-16 06:49:29', '2019-01-16 06:49:29');
INSERT INTO `persistences` VALUES (357, 1, 'lUyRn4cTMAVOpBq62qJv72MdSYztss59', '2019-01-16 06:49:30', '2019-01-16 06:49:30');
INSERT INTO `persistences` VALUES (358, 1, '0GWtkCGx6OiRzUdSkvUIF0p8s7QTTst4', '2019-01-16 06:49:30', '2019-01-16 06:49:30');
INSERT INTO `persistences` VALUES (359, 1, 'WToK8yfybpIfPC7Uxn9uQN6MVaoFShAj', '2019-01-16 06:49:36', '2019-01-16 06:49:36');
INSERT INTO `persistences` VALUES (360, 1, 'vvJnZfK1z7HQWAqnqy9IOqNAGdKYXZqw', '2019-01-16 06:49:37', '2019-01-16 06:49:37');
INSERT INTO `persistences` VALUES (361, 1, '5PPPpnslJBEZTCBBr7QeAO0tRS2wH1Si', '2019-01-16 06:49:38', '2019-01-16 06:49:38');
INSERT INTO `persistences` VALUES (362, 1, '3P1LC4wxCPbILDMQEtipPjLzsqYGhjgj', '2019-01-16 06:49:39', '2019-01-16 06:49:39');
INSERT INTO `persistences` VALUES (363, 1, 'PiIKOcZqdmZ6UufhkfwTxs04H6ICWAfg', '2019-01-16 06:49:44', '2019-01-16 06:49:44');
INSERT INTO `persistences` VALUES (364, 1, 'r72ac62ZgBhwEufsDfSwHfIakibsq7D7', '2019-01-16 06:49:45', '2019-01-16 06:49:45');
INSERT INTO `persistences` VALUES (365, 1, 'Ld19qWZlMQ2Vlrb4xKMeLo7x8J9AjS3G', '2019-01-16 06:49:46', '2019-01-16 06:49:46');
INSERT INTO `persistences` VALUES (366, 1, '5LRbvFochovfmZ0LWvHkxw9tn8ZeBOQN', '2019-01-16 06:49:47', '2019-01-16 06:49:47');
INSERT INTO `persistences` VALUES (367, 1, 'BNmstXuUWJQ0tKl60Pe0tQElZJGMsJul', '2019-01-16 06:49:52', '2019-01-16 06:49:52');
INSERT INTO `persistences` VALUES (368, 1, 'wfcj4Q5JUtR6E33St1B4xZKqiA30xtEs', '2019-01-16 06:49:53', '2019-01-16 06:49:53');
INSERT INTO `persistences` VALUES (369, 1, 'G9uITKCWzGSlT4fEuSgocMPE7nlMh30h', '2019-01-16 06:49:54', '2019-01-16 06:49:54');
INSERT INTO `persistences` VALUES (370, 1, 'WatxrhaqqcFu5u93iWPEalrwJz0l5YR9', '2019-01-16 06:49:55', '2019-01-16 06:49:55');
INSERT INTO `persistences` VALUES (371, 1, 'YuYtOXI7HSywtyE9O3LDZ42JqBBsa8yP', '2019-01-16 06:49:59', '2019-01-16 06:49:59');
INSERT INTO `persistences` VALUES (372, 1, 'DfiHq79BmKFL1e7qol5LZNJXKCd6YxzT', '2019-01-16 06:50:00', '2019-01-16 06:50:00');
INSERT INTO `persistences` VALUES (373, 1, 'KPOfpFrLo8ftvvKlYN1C8vqlqbobsdff', '2019-01-16 06:50:01', '2019-01-16 06:50:01');
INSERT INTO `persistences` VALUES (374, 1, 'z34hLL9PQtk5cMu1VkWjDkZ6oj5gIWie', '2019-01-16 06:50:02', '2019-01-16 06:50:02');
INSERT INTO `persistences` VALUES (375, 1, 'lhRZLPCHIcA6p4xui3NtwohXvcWj4ndD', '2019-01-16 06:50:07', '2019-01-16 06:50:07');
INSERT INTO `persistences` VALUES (376, 1, 'QVZwXlCpI5mrte6F5PEVc3bowVudEmU7', '2019-01-16 06:50:08', '2019-01-16 06:50:08');
INSERT INTO `persistences` VALUES (377, 1, '0qNQG3iiZwyAM7Q04wpr3TzdGJpzJa0d', '2019-01-16 06:50:09', '2019-01-16 06:50:09');
INSERT INTO `persistences` VALUES (378, 1, 'AK839BB7U2ibCOCVIQ7RvHdZyJTdVwb1', '2019-01-16 06:50:10', '2019-01-16 06:50:10');
INSERT INTO `persistences` VALUES (379, 1, 'tP41vDSWWII2Yd4ERlXfkHJh1X5G11Fl', '2019-01-16 06:50:15', '2019-01-16 06:50:15');
INSERT INTO `persistences` VALUES (380, 1, 'RHkKLD000vnAdpXOJa8o3RlXlgQukz1l', '2019-01-16 06:50:16', '2019-01-16 06:50:16');
INSERT INTO `persistences` VALUES (381, 1, 'MNN0zLqB0jxE5CQ7cAP2i40bhBaCXOH2', '2019-01-16 06:50:17', '2019-01-16 06:50:17');
INSERT INTO `persistences` VALUES (382, 1, 'wadFqjsqlEkGwpAdS3EMgMctkEo8A7M1', '2019-01-16 06:50:18', '2019-01-16 06:50:18');
INSERT INTO `persistences` VALUES (383, 1, 'r7efL8hDjfWixjHb8DHWacLOfQAK1Dmx', '2019-01-16 09:44:31', '2019-01-16 09:44:31');
INSERT INTO `persistences` VALUES (384, 1, 'R9TmhW2YFfDhhcRYBW8Nn1JBnFZi6rXf', '2019-01-17 02:30:42', '2019-01-17 02:30:42');
INSERT INTO `persistences` VALUES (385, 1, 'iM2us9FmKHVx955JDqSEkZHyhh8WafmQ', '2019-01-18 00:11:03', '2019-01-18 00:11:03');
INSERT INTO `persistences` VALUES (386, 1, 'ZKyrzC3hCODXKoFzkV3LCuCKfpZDeFFQ', '2019-01-18 00:11:13', '2019-01-18 00:11:13');
INSERT INTO `persistences` VALUES (387, 1, 'ItnHi8v9e0RDCF48wINTjfYguSQ4Z2wy', '2019-01-18 04:04:29', '2019-01-18 04:04:29');
INSERT INTO `persistences` VALUES (388, 1, 'IdpsiMgjOOR7hK0pw2X4tgFddkpJS962', '2019-01-18 04:04:34', '2019-01-18 04:04:34');
INSERT INTO `persistences` VALUES (389, 1, 'oIYT0HicJmtTuI6hUOkkDN6ujfyC4cij', '2019-01-18 04:04:35', '2019-01-18 04:04:35');
INSERT INTO `persistences` VALUES (390, 1, 'nvLp9QMmJptIlBx8qus7vnXVdvCXgy7Y', '2019-01-18 04:05:16', '2019-01-18 04:05:16');
INSERT INTO `persistences` VALUES (391, 1, 'M5pnO0fE5jWy4JXIWDeWMGzkYp7clK7a', '2019-01-18 04:06:14', '2019-01-18 04:06:14');
INSERT INTO `persistences` VALUES (392, 1, 'KcljgaaCJBArXYfB5EnyrtxVF81eAQBM', '2019-01-18 04:06:26', '2019-01-18 04:06:26');
INSERT INTO `persistences` VALUES (393, 1, 'knazLpgTeazU5JSjq0Kto6eObGFMAR5Q', '2019-01-18 04:06:26', '2019-01-18 04:06:26');
INSERT INTO `persistences` VALUES (394, 1, 'CxwxFhahHitWW2RQT8rbKgEo4Gsfc8uO', '2019-01-18 04:06:31', '2019-01-18 04:06:31');
INSERT INTO `persistences` VALUES (395, 1, 'M2ZQVfNAGfozBCgfPaKdEOa5XtLTC0uD', '2019-01-18 04:06:59', '2019-01-18 04:06:59');
INSERT INTO `persistences` VALUES (396, 1, 'V3EwFkVXHkQzT18q4tLuoxFxsVLUG9Yr', '2019-01-18 04:06:59', '2019-01-18 04:06:59');
INSERT INTO `persistences` VALUES (397, 1, 'AK0A7r1prL8qgJnAUFhajx8Itu8IaZ90', '2019-01-18 08:43:22', '2019-01-18 08:43:22');
INSERT INTO `persistences` VALUES (398, 1, 'xxwES9Sukcrpdw1ySgx9VAH3oVus5Lrv', '2019-01-18 14:20:15', '2019-01-18 14:20:15');
INSERT INTO `persistences` VALUES (399, 1, '9utfwSwjXA8BWgUcQUGaxa4QapbX6KCq', '2019-01-18 14:20:21', '2019-01-18 14:20:21');
INSERT INTO `persistences` VALUES (400, 1, 'AWszcXfc0xs6SMBWfaWQSfMbn7kgxG4X', '2019-01-18 14:20:27', '2019-01-18 14:20:27');
INSERT INTO `persistences` VALUES (401, 1, '4tl3MKCZlksP8J2gROVaHpgPsue6bLTD', '2019-01-18 14:20:27', '2019-01-18 14:20:27');
INSERT INTO `persistences` VALUES (402, 1, '1hMiI5BAyOsJkwIheO7ncdeYJPCjuuyN', '2019-01-18 14:20:36', '2019-01-18 14:20:36');
INSERT INTO `persistences` VALUES (403, 1, 'B9b53fYb4GbbNW2bzcyev2SHdeSXJMxE', '2019-01-18 14:20:38', '2019-01-18 14:20:38');
INSERT INTO `persistences` VALUES (404, 1, 'a77tuA8oFCtGCH6q6uKgcBcdqS45KWWx', '2019-01-18 14:20:46', '2019-01-18 14:20:46');

-- ----------------------------
-- Table structure for questions__question_translations
-- ----------------------------
DROP TABLE IF EXISTS `questions__question_translations`;
CREATE TABLE `questions__question_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `questions__question_translations_question_id_locale_unique`(`question_id`, `locale`) USING BTREE,
  INDEX `questions__question_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `questions__question_translations_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions__questions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for questions__questions
-- ----------------------------
DROP TABLE IF EXISTS `questions__questions`;
CREATE TABLE `questions__questions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `listening_id` int(11) NOT NULL,
  `question_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of questions__questions
-- ----------------------------
INSERT INTO `questions__questions` VALUES (3, 4, '<p>How old are you?</p>', '<p>I am 20.</p>', '2019-01-10 09:01:51', '2019-01-10 09:01:51');
INSERT INTO `questions__questions` VALUES (4, 10, '<p>What time is it?</p>', '<p>10:00.</p>', '2019-01-10 09:04:06', '2019-01-18 04:03:30');
INSERT INTO `questions__questions` VALUES (5, 9, '<p>Where do you live?</p>', '<p>Hanoi</p>', '2019-01-10 09:12:13', '2019-01-18 00:37:01');

-- ----------------------------
-- Table structure for reminders
-- ----------------------------
DROP TABLE IF EXISTS `reminders`;
CREATE TABLE `reminders`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for results__result_translations
-- ----------------------------
DROP TABLE IF EXISTS `results__result_translations`;
CREATE TABLE `results__result_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `result_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `results__result_translations_result_id_locale_unique`(`result_id`, `locale`) USING BTREE,
  INDEX `results__result_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `results__result_translations_result_id_foreign` FOREIGN KEY (`result_id`) REFERENCES `results__results` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for results__results
-- ----------------------------
DROP TABLE IF EXISTS `results__results`;
CREATE TABLE `results__results`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_id` int(11) NOT NULL,
  `result1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `result2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `result3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `result4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `result5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `result6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `result7` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `result8` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of results__results
-- ----------------------------
INSERT INTO `results__results` VALUES (1, 2, '1', '3', '5', '7', '2', '4', '6', '8', '2019-01-13 07:24:32', '2019-01-13 07:24:32');

-- ----------------------------
-- Table structure for revisions
-- ----------------------------
DROP TABLE IF EXISTS `revisions`;
CREATE TABLE `revisions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `revisionable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `new_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `revisions_revisionable_id_revisionable_type_index`(`revisionable_id`, `revisionable_type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users`  (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`, `role_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_users
-- ----------------------------
INSERT INTO `role_users` VALUES (1, 1, '2019-01-01 08:31:52', '2019-01-01 08:31:52');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'admin', 'Admin', '{\"answer.answers.index\":true,\"answer.answers.create\":true,\"answer.answers.edit\":true,\"answer.answers.destroy\":true,\"blogs.blogs.index\":true,\"blogs.blogs.create\":true,\"blogs.blogs.edit\":true,\"blogs.blogs.destroy\":true,\"categories.categories.index\":true,\"categories.categories.create\":true,\"categories.categories.edit\":true,\"categories.categories.destroy\":true,\"choose.chooses.index\":true,\"choose.chooses.create\":true,\"choose.chooses.edit\":true,\"choose.chooses.destroy\":true,\"core.sidebar.group\":true,\"dashboard.index\":true,\"dashboard.update\":true,\"dashboard.reset\":true,\"frontend.frontends.index\":true,\"frontend.frontends.create\":true,\"frontend.frontends.edit\":true,\"frontend.frontends.destroy\":true,\"games.games.index\":true,\"games.games.create\":true,\"games.games.edit\":true,\"games.games.destroy\":true,\"grammar.grammars.index\":true,\"grammar.grammars.create\":true,\"grammar.grammars.edit\":true,\"grammar.grammars.destroy\":true,\"listening.listenings.index\":true,\"listening.listenings.create\":true,\"listening.listenings.edit\":true,\"listening.listenings.destroy\":true,\"media.medias.index\":true,\"media.medias.create\":true,\"media.medias.edit\":true,\"media.medias.destroy\":true,\"media.folders.index\":true,\"media.folders.create\":true,\"media.folders.edit\":true,\"media.folders.destroy\":true,\"menu.menus.index\":true,\"menu.menus.create\":true,\"menu.menus.edit\":true,\"menu.menus.destroy\":true,\"menu.menuitems.index\":true,\"menu.menuitems.create\":true,\"menu.menuitems.edit\":true,\"menu.menuitems.destroy\":true,\"orderings.orderings.index\":true,\"orderings.orderings.create\":true,\"orderings.orderings.edit\":true,\"orderings.orderings.destroy\":true,\"page.pages.index\":true,\"page.pages.create\":true,\"page.pages.edit\":true,\"page.pages.destroy\":true,\"questions.questions.index\":true,\"questions.questions.create\":true,\"questions.questions.edit\":true,\"questions.questions.destroy\":true,\"results.results.index\":true,\"results.results.create\":true,\"results.results.edit\":true,\"results.results.destroy\":true,\"rules.rules.index\":true,\"rules.rules.create\":true,\"rules.rules.edit\":true,\"rules.rules.destroy\":true,\"setting.settings.index\":true,\"setting.settings.edit\":true,\"songs.songs.index\":true,\"songs.songs.create\":true,\"songs.songs.edit\":true,\"songs.songs.destroy\":true,\"songs.alphabets.index\":true,\"songs.alphabets.create\":true,\"songs.alphabets.edit\":true,\"songs.alphabets.destroy\":true,\"sortings.sortings.index\":true,\"sortings.sortings.create\":true,\"sortings.sortings.edit\":true,\"sortings.sortings.destroy\":true,\"stories.stories.index\":true,\"stories.stories.create\":true,\"stories.stories.edit\":true,\"stories.stories.destroy\":true,\"tag.tags.index\":true,\"tag.tags.create\":true,\"tag.tags.edit\":true,\"tag.tags.destroy\":true,\"translation.translations.index\":true,\"translation.translations.edit\":true,\"translation.translations.import\":true,\"translation.translations.export\":true,\"user.users.index\":true,\"user.users.create\":true,\"user.users.edit\":true,\"user.users.destroy\":true,\"user.roles.index\":true,\"user.roles.create\":true,\"user.roles.edit\":true,\"user.roles.destroy\":true,\"account.api-keys.index\":true,\"account.api-keys.create\":true,\"account.api-keys.destroy\":true,\"workshop.sidebar.group\":true,\"workshop.modules.index\":true,\"workshop.modules.show\":true,\"workshop.modules.update\":true,\"workshop.modules.disable\":true,\"workshop.modules.enable\":true,\"workshop.modules.publish\":true,\"workshop.themes.index\":true,\"workshop.themes.show\":true,\"workshop.themes.publish\":true}', '2019-01-01 08:31:15', '2019-01-18 14:20:36');
INSERT INTO `roles` VALUES (2, 'user', 'User', NULL, '2019-01-01 08:31:15', '2019-01-01 08:31:15');

-- ----------------------------
-- Table structure for rules__rule_translations
-- ----------------------------
DROP TABLE IF EXISTS `rules__rule_translations`;
CREATE TABLE `rules__rule_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rule_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `rules__rule_translations_rule_id_locale_unique`(`rule_id`, `locale`) USING BTREE,
  INDEX `rules__rule_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `rules__rule_translations_rule_id_foreign` FOREIGN KEY (`rule_id`) REFERENCES `rules__rules` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for rules__rules
-- ----------------------------
DROP TABLE IF EXISTS `rules__rules`;
CREATE TABLE `rules__rules`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `example` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `be_careful` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `we_say` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rules__rules
-- ----------------------------
INSERT INTO `rules__rules` VALUES (1, 'Adjectives', '<p>We have a small car.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I saw a white bird.</p>\r\n\r\n<p>She watched an old film.</p>', '<p>Adjectives don&#39;t have a plural form.</p>\r\n\r\n<p>We have two small cars.</p>\r\n\r\n<p>I saw five white birds.</p>\r\n\r\n<p>She watched some old films.</p>', '<p>Size before colour.</p>\r\n\r\n<p>We have a small, blue car.</p>\r\n\r\n<p>I saw a large, white bird.</p>', '<p>We have a small, blue car. (NOT We have a small and blue car.)</p>\r\n\r\n<p>I saw five large, white birds. (NOT I saw five large and white birds.)</p>', '<p>Do you want to practise using adjectives in English?</p>', '2019-01-12 07:01:41', '2019-01-12 07:36:10');
INSERT INTO `rules__rules` VALUES (2, 'adverbs', '<p>kofjgsdfjfgjufid</p>', '<p>dfl;gkdfjklgdfjkl</p>', '<p>iko;jkbjodfjhikdfbj</p>', '<p>fdbjknljgkffdgbjkndfgkl</p>', '<p>l;k,kldfghfdgklfdgklfd</p>', '2019-01-18 10:21:02', '2019-01-18 10:21:02');
INSERT INTO `rules__rules` VALUES (3, 'verbs', '<p>kjfdkjfgkj</p>', '<p>ikojjkiodfgjifgdjidfgs</p>', '<p>kmldfgkldfbkldfgklgkgk</p>', '<p>kopdfgkfgkdfgkgdf</p>', '<p>okpdfkjogjfklfgdjklfdgjkl</p>', '2019-01-18 10:21:56', '2019-01-18 10:21:56');

-- ----------------------------
-- Table structure for setting__setting_translations
-- ----------------------------
DROP TABLE IF EXISTS `setting__setting_translations`;
CREATE TABLE `setting__setting_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `setting__setting_translations_setting_id_locale_unique`(`setting_id`, `locale`) USING BTREE,
  INDEX `setting__setting_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `setting__setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `setting__settings` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for setting__settings
-- ----------------------------
DROP TABLE IF EXISTS `setting__settings`;
CREATE TABLE `setting__settings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plainValue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `isTranslatable` tinyint(1) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `setting__settings_name_unique`(`name`) USING BTREE,
  INDEX `setting__settings_name_index`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setting__settings
-- ----------------------------
INSERT INTO `setting__settings` VALUES (1, 'core::template', 'Flatly', 0, '2019-01-01 08:32:39', '2019-01-01 08:32:39');
INSERT INTO `setting__settings` VALUES (2, 'core::locales', '[\"en\"]', 0, '2019-01-01 08:32:39', '2019-01-01 08:32:39');

-- ----------------------------
-- Table structure for songs__alphabet_translations
-- ----------------------------
DROP TABLE IF EXISTS `songs__alphabet_translations`;
CREATE TABLE `songs__alphabet_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `alphabet_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `songs__alphabet_translations_alphabet_id_locale_unique`(`alphabet_id`, `locale`) USING BTREE,
  INDEX `songs__alphabet_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `songs__alphabet_translations_alphabet_id_foreign` FOREIGN KEY (`alphabet_id`) REFERENCES `songs__alphabets` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for songs__alphabets
-- ----------------------------
DROP TABLE IF EXISTS `songs__alphabets`;
CREATE TABLE `songs__alphabets`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for songs__song_translations
-- ----------------------------
DROP TABLE IF EXISTS `songs__song_translations`;
CREATE TABLE `songs__song_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `song_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `songs__song_translations_song_id_locale_unique`(`song_id`, `locale`) USING BTREE,
  INDEX `songs__song_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `songs__song_translations_song_id_foreign` FOREIGN KEY (`song_id`) REFERENCES `songs__songs` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for songs__songs
-- ----------------------------
DROP TABLE IF EXISTS `songs__songs`;
CREATE TABLE `songs__songs`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lyric` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of songs__songs
-- ----------------------------
INSERT INTO `songs__songs` VALUES (1, 'A bear named Sue', 'none', '<p>I have a bear. And her name is Sue. She can do anything that I can do. I can do anything that she can do. In the morning I stretch and Sue does her best I put on trousers and a shirt and Sue wears a skirt On with my socks and on with my shoes And on goes the same for dear old Sue And we&rsquo;re ready for breakfast in the twinkling of an eye So we go downstairs my Sue and I. I&rsquo;m hungry. Can we go downstairs and have some breakfast? A cup for Sue, a cup for me Sue likes apple juice but I like tea I like juice and she likes tea. Hot buttered toast. Who can eat the most? Cover it in jam then wash our sticky hands Down with our breakfast and on with our coats And now for the part that we like the most And we&rsquo;re ready for play in the twinkling of an eye So we go outside my Sue and I. Yes, we&rsquo;re ready for play in the twinkling of an eye So we wave goodbye my Sue and I Goodbye, goodbye, goodbye.</p>', NULL, '2019-01-01 16:56:00', '2019-01-05 09:58:26');
INSERT INTO `songs__songs` VALUES (2, 'Abracadabra', 'none', '<p>I make two circles, then one more Touch my nose and then the floor Here&rsquo;s the first spell we will try Abracadabra! You will fly! Just two circles in the air One down here and one up there Touch your shoulder, then your shoe Abracadabra! You turn blue! I think I know what&rsquo;s going wrong So chant with me &ndash; sing along! One, two, three, four circles in the air Abracadabra! You&rsquo;ve got no hair! Let&rsquo;s hold it together, here we go! Make big circles head to toe Touch your chin, then your nose Abracadabra! And your head grows! Let&rsquo;s try one more time and see If a spell will work for me Touch your elbow, then your knee Abracadabra! You&rsquo;re a bumblebee! The spells don&rsquo;t work but we&rsquo;re OK It isn&rsquo;t real, it&rsquo;s only play We&rsquo;ve had some fun with our silly game Abracadabra! And we&rsquo;re just the same.&nbsp;</p>', NULL, '2019-01-05 09:59:53', '2019-01-05 09:59:53');
INSERT INTO `songs__songs` VALUES (3, 'Bean bag hello', 'none', '<p>Bean bag hello Bean bag hello Let&rsquo;s have a go at bean bag hello Bean bag hello Bean bag hello Let&rsquo;s have a go at bean bag hello. My name is Claire My name is Claire My name is Claire Now I&rsquo;ll pass the bag to Leroy. Pass the bag and say your name. Pass the bag and say your name. My name is Leroy My name is Leroy My name is Leroy Now I&rsquo;ll pass the bag to Jamie. Pass the bag and say your name. Pass the bag and say your name. My name is Jamie My name is Jamie My name is Jamie Now I&rsquo;ll pass the bag to Fatima. Pass the bag and say your name. Pass the bag and say your name. Bean bag hello Bean bag hello Let&rsquo;s have a go at bean bag hello Bean bag hello Bean bag hello Let&rsquo;s have a go at bean bag hello</p>', NULL, '2019-01-05 10:00:56', '2019-01-05 10:00:56');
INSERT INTO `songs__songs` VALUES (4, 'Chocolate cake', 'none', '<p>Words have rhythms We can use our sticks and drums To tap out the rhythms of the words Let&rsquo;s tap out the rhythms of a really delicious meal. What shall we start with? How about &hellip;? Chicken rice and peas, chicken rice and peas Chicken rice and peas, chicken rice and peas Chicken rice and peas, chicken rice and peas Hands up who likes chicken rice and peas Yummy, yummy, yummy Put it in my tummy I like, you like, chicken rice and peas. Chicken rice and peas, chicken rice and peas Hands up who likes chicken rice and peas Yummy, yummy, yummy Put it in my tummy I like, you like, chicken rice and peas. Chicken rice and peas, chicken rice and peas Hands up who likes chicken rice and peas Yummy, yummy, yummy Put it in my tummy I like, you like, chicken rice and peas. I&rsquo;m so thirsty. What shall we have to drink? How about &hellip;? Blackcurrant juice, blackcurrant juice Blackcurrant juice, blackcurrant juice Blackcurrant juice, blackcurrant juice Hands up who likes blackcurrant juice Yummy, yummy, yummy Put it in my tummy I like, you like, blackcurrant juice. Blackcurrant juice, blackcurrant juice Hands up who likes blackcurrant juice</p>', NULL, '2019-01-05 10:02:07', '2019-01-05 10:02:07');
INSERT INTO `songs__songs` VALUES (5, 'People work', 'U8v16WEVszM', '<p>Nigel Naylor, he&#39;s a tailor He makes trousers, suits and shirts Penny Proctor, she&#39;s a doctor Comes to see you when it hurts. Peter Palmer, he&#39;s a farmer He&#39;s got cows and pigs and sheep Wendy Witter, babysitter Minds the kids when they&#39;re asleep. People work in the country People work in the town People work day and night To make the world go round. Mabel Meacher, language teacher Teaches English, French and Greek Gary Gummer, he&#39;s a plumber Call him when you&#39;ve got a leak. Patty Prentice, she&#39;s a dentist Keeps your teeth both clean and white Ronnie Ryman, he&#39;s a fireman Comes when there&#39;s a fire to fight. People work in the country People work in the town People work day and night To make the world go round. People work in the country People work in the town People work day and night To make the world go round.</p>', NULL, '2019-01-05 10:03:13', '2019-01-10 06:40:44');
INSERT INTO `songs__songs` VALUES (6, 'Don\'t put your trousers in your head', 'MF5pbroiSoA', '<p>Don&#39;t put your trousers on your head, Fred You know you should put your legs in those Fasten up your buttons and your zip, Pip That&#39;s the way to wear your clothes. Velcro fasteners, buttons or zip Got to do them up or you will trip If you run around with shoes undone You&#39;re going to fall and it&#39;s not much fun! Don&#39;t put the zipper round the back, Jack The hood will cover up your face And don&#39;t wear gloves upon your feet, Pete You&#39;ll be last in every race. Velcro fasteners, buttons or zip Got to do them up or you will trip If you run around with shoes undone You&#39;re going to fall and it&#39;s not much fun! A belt for your skirt is very handy, Mandy It stops it falling to your knees And when you know just what to do, Sue You&#39;ll be as neat as you can be. Velcro fasteners, buttons or zip Got to do them up or you will trip If you run around with shoes undone You&#39;re going to fall and it&#39;s not much fun! Don&#39;t put your trousers on your head!</p>', NULL, '2019-01-05 10:04:25', '2019-01-10 06:28:47');
INSERT INTO `songs__songs` VALUES (7, 'Flying from the sun to the stars', '_Q9mBoqlzKQ', '<p>We&rsquo;re flying from the sun to the stars Through this solar system of ours. Mercury, Venus, Earth and Mars Flying from the sun to the stars. Mercury&rsquo;s hot and Venus is bright Earth is where we live and Mars is red at night Flying from the sun to the stars. Jupiter, Saturn, Uranus and Neptune Last of all is little biddy Pluto. Flying from the sun to the stars Through this solar system of ours Flying from the sun to the stars. Mercury, Venus, Earth and Mars Flying from the sun to the stars. Mercury&rsquo;s hot and Venus is bright Earth is where we live and Mars is red at night Flying from the sun to the stars Jupiter, Saturn, Uranus and Neptune Last of all is little biddy Pluto. Flying from the sun to the stars Flying from the sun to the stars Flying from the sun to the stars Flying from the sun to the stars Flying from the sun to the stars Flying from the sun to the stars.</p>', NULL, '2019-01-05 10:15:58', '2019-01-10 06:25:11');
INSERT INTO `songs__songs` VALUES (8, 'Grand Old Duke', 'KGvEQTQaTbQ', '<p>Oh the Grand Old Duke of York He had ten (1).......... men He marched them up to the top of the hill And he marched them down again.</p>\r\n\r\n<p>And when they were up they were up And when they were down they were (2).......... And when they were only halfway up They were neither up nor down. Oh the Grand Old Duke of York He had ten thousand men They tiptoed up to the top of the (3).......... To see the dragon in his den.</p>\r\n\r\n<p>But when the dragon saw them it roared When the dragon saw them it roared When the dragon saw them it roared so loud They came running down again. Run, run, don&rsquo;t wait! Run, run, don&rsquo;t wait! Run, run as (4).......... as you can And can the last one shut the (5)..........? &lsquo;Ssshhh,&rsquo; the Duchess said &lsquo;Ssshhh,&rsquo; the Duchess said</p>\r\n\r\n<p>The Grand Old Duke and all of his men Are hiding in their beds.</p>', NULL, '2019-01-05 10:16:39', '2019-01-10 03:57:48');
INSERT INTO `songs__songs` VALUES (9, 'Songs', 'shhighghggighigghkgh', '<p>sdffdsfds</p>', '<p>fgfg</p>', '2019-01-17 04:12:02', '2019-01-17 04:12:02');

-- ----------------------------
-- Table structure for sortings__sorting_translations
-- ----------------------------
DROP TABLE IF EXISTS `sortings__sorting_translations`;
CREATE TABLE `sortings__sorting_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sorting_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `sortings__sorting_translations_sorting_id_locale_unique`(`sorting_id`, `locale`) USING BTREE,
  INDEX `sortings__sorting_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `sortings__sorting_translations_sorting_id_foreign` FOREIGN KEY (`sorting_id`) REFERENCES `sortings__sortings` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sortings__sortings
-- ----------------------------
DROP TABLE IF EXISTS `sortings__sortings`;
CREATE TABLE `sortings__sortings`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rule_id` int(11) NOT NULL,
  `question` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `i1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `i2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `i3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `i4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `i5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sortings__sortings
-- ----------------------------
INSERT INTO `sortings__sortings` VALUES (1, 1, 'a / house / we / small / have', 'we', 'have', 'a', 'small', 'house', '2019-01-12 09:42:03', '2019-01-12 09:49:06');
INSERT INTO `sortings__sortings` VALUES (2, 2, 'bird / a / I / saw / white', 'i', 'saw', 'a', 'white', 'bird', '2019-01-12 09:45:40', '2019-01-18 10:22:31');
INSERT INTO `sortings__sortings` VALUES (3, 3, 'an / we / old / film / watched', 'we', 'watched', 'an', 'old', 'film', '2019-01-12 09:52:16', '2019-01-18 10:22:53');

-- ----------------------------
-- Table structure for stories__stories
-- ----------------------------
DROP TABLE IF EXISTS `stories__stories`;
CREATE TABLE `stories__stories`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of stories__stories
-- ----------------------------
INSERT INTO `stories__stories` VALUES (2, 'A dog\'s life', '<p>Hi. I&rsquo;m Dino, the family dog. I help keep people safe, especially on the roads. Take a look at my diary to see what I did last week. Sunday Some children really don&rsquo;t think. Our neighbour&rsquo;s boy ran in front of a car to get his ball. The car almost hit him. I saved him though. Remember, always look and listen. Monday Walking on the street at night can be very dangerous, especially if you wear dark clothes. Car drivers can&rsquo;t see you very well, just like these two I had to take home. Luckily I never go out without my reflective jacket and collar. Remember, BE SEEN! Tuesday People can get very angry when driving, usually for silly reasons. One driver started shouting at Mum today when she stopped to let some children cross the road. I soon made him stop. Wednesday One thing makes me really mad. Grrrrrr. People walking on a dangerous road when they can walk on the safe pavement. I saw two girls doing that today but I soon made them change their minds. Thursday Seat belts can save your life! I make sure everyone in our car wears their seat belt. If they forget, I soon remind them. Even I&rsquo;ve got one. Friday I like Fridays. The roads are quieter. But you still have to be careful. I caught Dad talking on his mobile phone while driving. I soon stopped him though. Don&rsquo;t worry, he got his phone back. Saturday Today Mum took me for a walk. One car was parked in a very dangerous place. It was right on the corner of the street. Don&rsquo;t worry though. I left him a message!</p>', '2019-01-07 20:10:59', '2019-01-07 20:10:59');
INSERT INTO `stories__stories` VALUES (3, 'Cinderella', '<p>content</p>\r\n\r\n<p>&nbsp;</p>', '2019-01-13 07:47:23', '2019-01-13 07:47:23');

-- ----------------------------
-- Table structure for stories__story_translations
-- ----------------------------
DROP TABLE IF EXISTS `stories__story_translations`;
CREATE TABLE `stories__story_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `stories__story_translations_story_id_locale_unique`(`story_id`, `locale`) USING BTREE,
  INDEX `stories__story_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `stories__story_translations_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories__stories` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tag__tag_translations
-- ----------------------------
DROP TABLE IF EXISTS `tag__tag_translations`;
CREATE TABLE `tag__tag_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tag__tag_translations_tag_id_locale_unique`(`tag_id`, `locale`) USING BTREE,
  INDEX `tag__tag_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `tag__tag_translations_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tag__tags` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tag__tagged
-- ----------------------------
DROP TABLE IF EXISTS `tag__tagged`;
CREATE TABLE `tag__tagged`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `taggable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tag__tagged_taggable_type_taggable_id_index`(`taggable_type`, `taggable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tag__tags
-- ----------------------------
DROP TABLE IF EXISTS `tag__tags`;
CREATE TABLE `tag__tags`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `namespace` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for throttle
-- ----------------------------
DROP TABLE IF EXISTS `throttle`;
CREATE TABLE `throttle`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `throttle_user_id_index`(`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of throttle
-- ----------------------------
INSERT INTO `throttle` VALUES (1, NULL, 'global', NULL, '2019-01-05 05:44:35', '2019-01-05 05:44:35');
INSERT INTO `throttle` VALUES (2, NULL, 'ip', '::1', '2019-01-05 05:44:35', '2019-01-05 05:44:35');
INSERT INTO `throttle` VALUES (3, 1, 'user', NULL, '2019-01-05 05:44:35', '2019-01-05 05:44:35');
INSERT INTO `throttle` VALUES (4, NULL, 'global', NULL, '2019-01-16 02:44:46', '2019-01-16 02:44:46');
INSERT INTO `throttle` VALUES (5, NULL, 'ip', '::1', '2019-01-16 02:44:46', '2019-01-16 02:44:46');
INSERT INTO `throttle` VALUES (6, 1, 'user', NULL, '2019-01-16 02:44:46', '2019-01-16 02:44:46');
INSERT INTO `throttle` VALUES (7, NULL, 'global', NULL, '2019-01-16 02:44:55', '2019-01-16 02:44:55');
INSERT INTO `throttle` VALUES (8, NULL, 'ip', '::1', '2019-01-16 02:44:55', '2019-01-16 02:44:55');
INSERT INTO `throttle` VALUES (9, 1, 'user', NULL, '2019-01-16 02:44:55', '2019-01-16 02:44:55');

-- ----------------------------
-- Table structure for translation__translation_translations
-- ----------------------------
DROP TABLE IF EXISTS `translation__translation_translations`;
CREATE TABLE `translation__translation_translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `translations_trans_id_locale_unique`(`translation_id`, `locale`) USING BTREE,
  INDEX `translation__translation_translations_locale_index`(`locale`) USING BTREE,
  CONSTRAINT `translation__translation_translations_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translation__translations` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for translation__translations
-- ----------------------------
DROP TABLE IF EXISTS `translation__translations`;
CREATE TABLE `translation__translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `translation__translations_key_index`(`key`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user_tokens
-- ----------------------------
DROP TABLE IF EXISTS `user_tokens`;
CREATE TABLE `user_tokens`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `access_token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `user_tokens_access_token_unique`(`access_token`) USING BTREE,
  INDEX `user_tokens_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `user_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_tokens
-- ----------------------------
INSERT INTO `user_tokens` VALUES (1, 1, 'f5ca2460-c740-44de-a5ba-dff803c30738', '2019-01-01 08:31:53', '2019-01-01 08:31:53');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_login` timestamp(0) NULL DEFAULT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'dinhyensamagada98@gmail.com', '$2y$10$2fmPEE/CRL8z9Do.PuStZ.T0ObA00oKNOxQlLo4T20lngDPuMpHa6', NULL, '2019-01-18 14:20:46', 'kasea', 'kyra', '2019-01-01 08:31:51', '2019-01-18 14:20:46');

SET FOREIGN_KEY_CHECKS = 1;
