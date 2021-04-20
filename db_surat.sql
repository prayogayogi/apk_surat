-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `data_dosen`;
CREATE TABLE `data_dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `data_magang`;
CREATE TABLE `data_magang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `npm` int(15) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `data_pegawai`;
CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `suratkeluar`;
CREATE TABLE `suratkeluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_agenda` varchar(225) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `no_surat` int(255) NOT NULL,
  `isi_surat` varchar(500) NOT NULL,
  `tgl_surat` int(20) NOT NULL,
  `tgl_diterima` int(23) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `suratmasuk`;
CREATE TABLE `suratmasuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_agenda` varchar(200) NOT NULL,
  `pengirim` varchar(200) NOT NULL,
  `no_surat` int(250) NOT NULL,
  `isi_surat` varchar(250) NOT NULL,
  `tgl_surat` int(255) NOT NULL,
  `tgl_diterima` int(255) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL,
  `active` varchar(5) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `nama`, `email`, `role_id`, `active`, `gambar`, `password`) VALUES
(15,	'admin',	'admin@gmail.com',	1,	'1',	'photo1.jpg',	'$2y$10$USjYPTl/oaIJfHzRQqllPOqgryuj.dWW.oGmcffJNvjY50slgqaQm'),
(18,	'yogik',	'yogik@gmail.com',	2,	'1',	'Screenshot_(222)1.png',	'$2y$10$CnN1nrPzxIdOQx64BxTMMOB5AmAKYZDyAdAFNUqfU4ir8nxYUVU0i');

-- 2021-04-20 02:42:29
