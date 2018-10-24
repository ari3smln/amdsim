/*
Navicat MySQL Data Transfer

Source Server         : localserver
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : amd

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-10-23 16:19:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ekspedisi`
-- ----------------------------
DROP TABLE IF EXISTS `ekspedisi`;
CREATE TABLE `ekspedisi` (
  `id_ekspedisi` int(4) NOT NULL AUTO_INCREMENT,
  `id_surat_keluar` int(4) NOT NULL,
  `nama_penerima` varchar(25) NOT NULL,
  `tgl_terima` date NOT NULL,
  PRIMARY KEY (`id_ekspedisi`),
  KEY `id_surat_keluar` (`id_surat_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ekspedisi
-- ----------------------------

-- ----------------------------
-- Table structure for `jenis_surat`
-- ----------------------------
DROP TABLE IF EXISTS `jenis_surat`;
CREATE TABLE `jenis_surat` (
  `id_jenis_surat` int(2) NOT NULL AUTO_INCREMENT,
  `kd_surat` varchar(5) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_jenis_surat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis_surat
-- ----------------------------
INSERT INTO `jenis_surat` VALUES ('1', 'A', 'Sudin', 'Seluruh dinas');
INSERT INTO `jenis_surat` VALUES ('2', 'A1', 'Koordinator Yayasan', '');

-- ----------------------------
-- Table structure for `surat_keluar`
-- ----------------------------
DROP TABLE IF EXISTS `surat_keluar`;
CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(4) NOT NULL AUTO_INCREMENT,
  `id_jenis_surat` int(2) NOT NULL,
  `id_user` int(5) NOT NULL,
  `no_surat_keluar` varchar(25) NOT NULL,
  `tgl_surat_keluar` date NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `isi_surat` text NOT NULL,
  `waktu_input` datetime NOT NULL,
  `status` enum('proses','selesai') NOT NULL,
  PRIMARY KEY (`id_surat_keluar`),
  KEY `id_jenis_surat` (`id_jenis_surat`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of surat_keluar
-- ----------------------------
INSERT INTO `surat_keluar` VALUES ('6', '0', '2', '', '0000-00-00', '', '', '<p>testing <strong>testing</strong></p>\n', '2018-10-23 14:09:57', 'proses');
INSERT INTO `surat_keluar` VALUES ('7', '0', '2', '', '0000-00-00', '', '', '<p>tes123</p>\n', '2018-10-23 16:09:28', 'proses');

-- ----------------------------
-- Table structure for `surat_masuk`
-- ----------------------------
DROP TABLE IF EXISTS `surat_masuk`;
CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(4) NOT NULL AUTO_INCREMENT,
  `id_user` int(5) NOT NULL,
  `no_surat_masuk` varchar(25) NOT NULL,
  `tgl_surat_masuk` date NOT NULL,
  `asal` varchar(100) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `scan_surat` varchar(100) NOT NULL,
  `waktu_input` date NOT NULL,
  PRIMARY KEY (`id_surat_masuk`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of surat_masuk
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jabatan` enum('tu','kepsek','admin') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'admin', 'admin', 'Muhammad Fauzi Perwira Nugraha', 'admin');
