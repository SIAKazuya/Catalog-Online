/*
 Navicat Premium Data Transfer

 Source Server         : Catalog
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : catalog

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 31/05/2021 20:59:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for elevi
-- ----------------------------
DROP TABLE IF EXISTS `elevi`;
CREATE TABLE `elevi`  (
  `id_elev` int NOT NULL AUTO_INCREMENT,
  `Nume` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Prenume` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Telefon` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Adresa` varchar(95) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Data_Nastere` datetime NULL DEFAULT NULL,
  `Informatica` int NULL DEFAULT NULL,
  `Matematica` int NULL DEFAULT NULL,
  `Clasa` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Romana` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_elev`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of elevi
-- ----------------------------
INSERT INTO `elevi` VALUES (5, 'Margineanu', 'Cosmin', 'margineanu@yahoo.com', '0723892323', 'Bucuresti', '2009-05-06 11:53:31', NULL, NULL, '4', NULL);
INSERT INTO `elevi` VALUES (23, 'Pop', 'Marian', 'ioan.alex43@gmail.com', '0743479409', 'iasi', '2021-05-21 00:00:00', NULL, 8, '2', NULL);
INSERT INTO `elevi` VALUES (24, 'Scutar', 'Beatrice', 'beatrice@yahoo.com', '0723892323', 'Bucuresti', '2009-05-06 11:53:31', 10, 10, '4', 9);
INSERT INTO `elevi` VALUES (25, 'Pop', 'Ioan', 'ioan.alex43@gmail.com', '0743479409', 'iasi', '2021-05-31 00:00:00', 10, 10, '12', 9);

-- ----------------------------
-- Table structure for profesori
-- ----------------------------
DROP TABLE IF EXISTS `profesori`;
CREATE TABLE `profesori`  (
  `id_profesor` int NOT NULL,
  `Nume` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Prenume` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefon` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Materie` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Parola` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_profesor`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profesori
-- ----------------------------
INSERT INTO `profesori` VALUES (1, 'Columbeanu', 'Andrei', 'andreicolumbeanu@yahoo.com', '112', 'Matematica', '123');
INSERT INTO `profesori` VALUES (2, 'Macarov', 'Cecilia', 'ceciliamacarov@yahoo.com', '0745555221', 'Informatica', '123');

SET FOREIGN_KEY_CHECKS = 1;
