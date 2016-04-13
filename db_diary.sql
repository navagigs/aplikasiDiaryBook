-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Des 2014 pada 16.21
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_diary`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
  `diary_id` int(5) NOT NULL AUTO_INCREMENT,
  `diary_judul` varchar(50) NOT NULL,
  `diary_isi` text NOT NULL,
  `pembuat_nama` varchar(50) NOT NULL,
  `diary_foto` varchar(100) NOT NULL,
  `diary_post` date NOT NULL,
  PRIMARY KEY (`diary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data untuk tabel `diary`
--

INSERT INTO `diary` (`diary_id`, `diary_judul`, `diary_isi`, `pembuat_nama`, `diary_foto`, `diary_post`) VALUES
(82, 'coding', 'Saya membuat Aplikasi ini untuk pembelajaran dan tugas Web diperkuliahan saya.', 'Nava Gia Ginasta', 'bg.jpg', '2014-12-26'),
(96, '1', '1', 'Vava Aldava', '', '2014-12-26'),
(97, '343', '4343', 'Politeknik Pos Indonesia', '', '2014-12-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembuat`
--

CREATE TABLE IF NOT EXISTS `pembuat` (
  `pembuat_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pembuat_nama` varchar(50) NOT NULL,
  `pembuat_foto` varchar(100) NOT NULL,
  `pembuat_background` varchar(100) NOT NULL,
  `pembuat_akses` enum('user','admin') NOT NULL DEFAULT 'user',
  `pembuat_post` date NOT NULL,
  PRIMARY KEY (`pembuat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `pembuat`
--

INSERT INTO `pembuat` (`pembuat_id`, `username`, `password`, `pembuat_nama`, `pembuat_foto`, `pembuat_background`, `pembuat_akses`, `pembuat_post`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Nava Gia Ginasta', 'nava10.jpg', 'in_summer_by_bwaworga-d7vcezz.jpg', 'admin', '2014-12-26'),
(20, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Anggi Sholihatus', 'SUBANG.jpg', 'bg.jpg', 'user', '2014-12-26'),
(21, 'va', '43b1cc1db7be63d899dd4280f578691a', 'Politeknik Pos Indonesia', 'logo politeknik pos.png', 'IMG_2144.jpg', 'user', '2014-12-26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
