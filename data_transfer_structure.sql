/*
Navicat MySQL Data Transfer

Source Server         : tebet
Source Server Version : 50524
Source Host           : 180.211.92.132:3306
Source Database       : mritransferapi

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2020-01-24 16:30:57
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
