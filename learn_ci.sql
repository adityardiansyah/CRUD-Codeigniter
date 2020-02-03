/*
 Navicat Premium Data Transfer

 Source Server         : Aditya
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : learn_ci

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 03/02/2020 21:10:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jurusan
-- ----------------------------
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jurusan
-- ----------------------------
INSERT INTO `jurusan` VALUES (1, 'Teknik Informatika');
INSERT INTO `jurusan` VALUES (2, 'Teknik Mesin');
INSERT INTO `jurusan` VALUES (3, 'Teknik Elektro');
INSERT INTO `jurusan` VALUES (4, 'Teknik Pertanian');

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nrp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES (1, 'AdityaSyah', '12321334324', 'adityasyah@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (4, 'Dimas', '1234', 'asdatun@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (5, 'Pija', '4342', 'superadmin@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (6, 'Paimen', '34342', 'sutejo@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (7, 'Adi', '23423', 'eksbpn@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (8, 'Natan', '43534', 'naufalnibros@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (9, 'Adi S', '234', 'superadmin@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (10, 'Adi A', '3453', 'add@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (11, 'Adi Sp', '2323', 'Adi@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (12, 'Adi Aas', '32423423', 'sutejo@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (13, 'QE', '23423423423', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (14, 'Ipin', '123', 'ipin@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (15, 'Opang', '903940323', 'opang@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (16, 'Anjay', '34234234', 'anjay@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (17, 'Pipo', '0344239042', 'pipo@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (18, 'asdas', '23423432', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (19, 'asdas', '23423423423', 'asdatun@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (20, 'asdas', '23423423423', 'asdatun@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (21, 'asdas', '23423423423', 'asdatun@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (22, 'asdas', '123', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (23, 'asdas', '123', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (24, 'Aditya Ardiansyah', '123', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (25, 'Aditya Ardiansyah', '123', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (26, 'Bejo', '2342342', 'bejo@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (27, 'Aditya Ardiansyah', '23423423423', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (28, 'Aditya Ardiansyah', '23423423423', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (29, 'asdas', '23423423423', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (30, 'Putri', '02392323', 'adityasyah.mail@gmail.com', '1');
INSERT INTO `mahasiswa` VALUES (31, 'Wahyuni', '92304834', 'adityasyah.mail@gmail.com', '1');

SET FOREIGN_KEY_CHECKS = 1;
