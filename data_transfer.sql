/*
Navicat MySQL Data Transfer

Source Server         : tebet
Source Server Version : 50524
Source Host           : 180.211.92.132:3306
Source Database       : mritransferapi

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2020-01-24 16:24:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for data_transfer
-- ----------------------------
DROP TABLE IF EXISTS `data_transfer`;
CREATE TABLE `data_transfer` (
  `transfer_id` int(11) NOT NULL AUTO_INCREMENT,
  `transfer_req_id` varchar(8) NOT NULL,
  `transfer_type` tinyint(4) NOT NULL,
  `jenis_pembayaran_id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `waktu_request` datetime NOT NULL,
  `jadwal_transfer` datetime NOT NULL,
  `norek` varchar(34) NOT NULL,
  `pemilik_rekening` varchar(70) NOT NULL,
  `bank` varchar(25) NOT NULL,
  `kode_bank` varchar(8) NOT NULL,
  `berita_transfer` varchar(18) NOT NULL,
  `jumlah` int(16) NOT NULL,
  `terotorisasi` tinyint(4) NOT NULL,
  `hasil_transfer` tinyint(4) NOT NULL,
  `ket_transfer` text NOT NULL,
  `nm_pembuat` varchar(50) NOT NULL,
  `nm_validasi` varchar(50) NOT NULL,
  `nm_otorisasi` varchar(50) NOT NULL,
  `nm_manual` varchar(50) NOT NULL,
  `jenis_project` varchar(50) NOT NULL,
  `nm_project` varchar(50) NOT NULL,
  PRIMARY KEY (`transfer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of data_transfer
-- ----------------------------
INSERT INTO `data_transfer` VALUES ('21', '1', '0', '0', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '0', '0', '0', '', '', '', '', '', '', '');
INSERT INTO `data_transfer` VALUES ('22', '19120072', '2', '1', 'honor test', '2019-11-18 00:00:00', '2020-01-09 02:52:00', '0611111231', 'teguh', 'BCA', '14', 'test', '500000', '2', '1', 'Antri', 'Admin', 'Admin', '', '', 'Project', 'Project\r');
INSERT INTO `data_transfer` VALUES ('23', '19120073', '3', '1', 'honor test', '2019-11-18 00:00:00', '2020-01-09 11:24:49', '', 'teguh', 'BCA', '14', 'test', '500000', '2', '1', 'Antri', 'Admin', 'Admin', '', 'Administrator', 'Project', 'Project\r');
INSERT INTO `data_transfer` VALUES ('24', '19120075', '1', '1', 'honor test', '2019-11-18 00:00:00', '2020-01-09 12:07:52', '0613106224', 'teguh', 'BCA', '14', 'test', '1650000', '2', '1', 'Antri', 'Admin', 'Admin', 'Administrator', '', 'Project', 'Project\r');
INSERT INTO `data_transfer` VALUES ('25', '19120076', '1', '1', 'honor test', '2019-11-18 00:00:00', '2020-01-09 02:52:00', '0613106224', 'teguh', 'BCA', '14', 'test', '6000000', '2', '1', 'Antri', 'Admin', 'Admin', '', '', 'Project', 'Project\r');
INSERT INTO `data_transfer` VALUES ('26', '19120072', '2', '1', 'honor test', '2019-11-18 00:00:00', '2020-01-09 02:52:00', '0613106224', 'teguh', 'BCA', '14', 'test', '500000', '2', '1', 'Antri', 'Admin', 'Admin', '', '', 'Project', 'Project\r');
INSERT INTO `data_transfer` VALUES ('27', '19120077', '2', '1', 'honor test', '2019-11-18 00:00:00', '2020-01-09 02:52:00', '0613106224', 'teguh', 'BCA', '14', 'test', '500000', '2', '1', 'Antri', 'Admin', 'Admin', '', '', 'Project', 'Project\r');
INSERT INTO `data_transfer` VALUES ('28', '19120078', '2', '1', 'honor test', '2019-11-18 00:00:00', '2020-01-09 02:52:00', '0613106224', 'teguh', 'BCA', '14', 'test', '500000', '2', '1', 'Antri', 'Admin', 'Admin', '', '', 'Project', 'Project\r');
INSERT INTO `data_transfer` VALUES ('29', '19120079', '3', '1', 'honor test', '2019-11-18 00:00:00', '2020-01-09 11:08:42', '1111111111', 'teguh', 'BCA', '14', 'test', '500000', '2', '1', 'Antri', 'Admin', 'Admin', '', 'Administrator', 'Project', 'Project');
INSERT INTO `data_transfer` VALUES ('30', '20010001', '1', '1', 'Honor', '2020-01-17 07:15:31', '2020-02-13 14:00:00', '123', 'Tedi', 'Apa Aja', '014', 'pembyaran MRI', '150000', '2', '1', 'Antri', 'dummy', '', '', '', '', '');
INSERT INTO `data_transfer` VALUES ('31', '20010001', '1', '1', 'Honor', '2020-01-17 07:15:31', '2020-02-13 14:00:00', '123', 'Tedi', 'Apa Aja', '014', 'pembyaran MRI', '150000', '2', '1', 'Antri', 'dummy', '', '', '', '', '');
INSERT INTO `data_transfer` VALUES ('32', '20010001', '1', '1', 'Honor', '2020-01-17 07:15:31', '2020-02-13 14:00:00', '123', 'Tedi', 'Apa Aja', '014', 'pembyaran MRI', '150000', '2', '1', 'Antri', 'dummy', '', '', '', '', '');
INSERT INTO `data_transfer` VALUES ('33', '20010001', '1', '1', 'Biaya Lumpsum', '2019-11-04 19:17:35', '0000-00-00 14:00:00', '0', 'Tiyas ', 'Indosat ', '123', 'MRI', '500000', '2', '1', 'Antri', 'Priyati Cahyaningtiyas', '', '', '', 'NATUNA', 'B1');
INSERT INTO `data_transfer` VALUES ('34', '20010001', '1', '1', 'Biaya', '2018-10-29 14:13:47', '2018-10-29 14:00:00', '', 'Tim Telepon Cabang', '@200.000 Ke nomor HP 1. 0', '123', 'MRI', '1000000', '2', '1', 'Antri', 'Indira Eka Melia Wardhani', '', '', '', 'Poisson', 'B1');
INSERT INTO `data_transfer` VALUES ('35', '20010001', '1', '1', 'UM', '2019-04-18 17:47:21', '0000-00-00 14:00:00', '1520007387273', 'Darmawati', 'Mandiri', '123', 'MRI', '250000', '2', '1', 'Antri', 'Meinari Claudia Mamengko', '', '', '', 'Hachilito', 'B2');
INSERT INTO `data_transfer` VALUES ('36', '20010001', '1', '1', 'UM', '2020-01-08 14:15:58', '0000-00-00 14:00:00', '1240009894362', 'Frenky Ardiansyah', 'Mandiri', '123', 'MRI', '1500000', '2', '1', 'Antri', 'Frenky Ardiansyah', '', '', '', 'NOVEMBER RAIN', 'B2');
INSERT INTO `data_transfer` VALUES ('37', '20010002', '1', '1', '', '2020-01-22 13:27:32', '2020-01-22 14:00:00', '085711234541', 'IwayRiway', 'BRI', '123', 'MRI', '100000', '2', '1', 'Antri', 'Tedi Hermawan', '', '', '', 'Tes Rutin Untuk API', 'Rutin');
INSERT INTO `data_transfer` VALUES ('38', '20010003', '1', '1', '', '2020-01-22 13:41:47', '2020-01-22 14:00:00', '02345684', 'Riway Restu Islami Yudha', 'BRI', '123', 'MRI', '500000', '2', '1', 'Antri', 'Tedi Hermawan', '', '', '', 'Tes Rutin Untuk API', 'Rutin');
INSERT INTO `data_transfer` VALUES ('39', '20010004', '1', '1', 'UM', '2019-01-08 16:43:42', '0000-00-00 14:00:00', '', 'Ina Puspito', '', '123', 'MRI', '2222000', '2', '1', 'Antri', 'SRI DEWI MARPAUNG', '', '', '', 'Calmic Periode 23 Jan 18 - 23 Jan 2019 (HP)', 'Non Rutin');
INSERT INTO `data_transfer` VALUES ('40', '20010005', '1', '1', 'UM', '2019-01-17 19:23:29', '0000-00-00 14:00:00', '1240005527487', 'Dede Soleman', 'Mandiri', '123', 'MRI', '2916000', '2', '1', 'Antri', 'Dede Soleman', '', '', '', 'Upgrade Absen SOHO-Tebet', 'Non Rutin');
INSERT INTO `data_transfer` VALUES ('41', '20010006', '1', '1', '', '2020-01-22 13:51:21', '2020-01-22 14:00:00', '02314569', 'Riway Restu Islami Yudha', 'BRI', '123', 'MRI', '200000', '2', '1', 'Antri', 'Tedi Hermawan', '', '', '', 'Tes Rutin Untuk API', 'Rutin');
