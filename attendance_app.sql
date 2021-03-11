-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jan 2021 pada 04.42
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absen`
--

CREATE TABLE IF NOT EXISTS `tbl_absen` (
`id_absen` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  `catatan` text,
  `surat_bukti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_absen`
--

INSERT INTO `tbl_absen` (`id_absen`, `nip`, `tanggal`, `jam`, `keterangan`, `catatan`, `surat_bukti`) VALUES
(1, '0901210001', '2021-01-09', '07:30:11', 'Datang', '', ''),
(2, '0901210001', '2021-01-09', '16:44:29', 'Pulang', '', ''),
(3, '1001210002', '2021-01-10', '07:28:07', 'Izin', 'Saya berhalangan hadir', 'izin.png'),
(4, '1001210003', '2021-01-11', '10:37:06', 'Datang', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `email`, `password`, `no_telp`, `jenis_kelamin`, `foto`) VALUES
(1, 'Muhammad Erlangga', 'erllanggaaa@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '0895347399934', 'L', 'erlang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
`id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Pegawai'),
(2, 'Supervisor'),
(3, 'Manajer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `nip` varchar(10) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `aktif` varchar(2) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip`, `id_jabatan`, `nama_pegawai`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_telp`, `email`, `password`, `foto`, `aktif`, `id_admin`) VALUES
('0901210001', 3, 'Nida Salshabila', '2000-09-27', 'P', 'Islam', 'Jl. H. Jum II', '081238283312', 'nidasalshabila@gmail.com', '2d5f67e3192667a68853b495c37568e8', 'IMG_20200620_180342.jpg', 'Y', 1),
('1001210002', 2, 'Attalla Hasan', '2012-03-29', 'L', 'Islam', 'Jl. Karya Bakti', '085642427211', 'attallahasan@gmail.com', '89b1c19f4fbd89fc0baabc4bf889aac0', '20150809_171226.jpg', 'Y', 1),
('1001210003', 1, 'Jaka Bagus Wibowo', '2020-10-26', 'L', 'Islam', 'Jl. Bojong Gede Raya', '081292819983', 'jakabaguswibowo@gmail.com', '78f3197f175850d13057dc8dfc59b912', 'IMG-20201202-WA0022.jpg', 'Y', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
 ADD PRIMARY KEY (`id_absen`), ADD KEY `FK_PEGAWAI` (`nip`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
 ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
 ADD PRIMARY KEY (`nip`), ADD KEY `FK_JABATAN` (`id_jabatan`), ADD KEY `FK_ADMIN` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absen`
--
ALTER TABLE `tbl_absen`
MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_absen`
--
ALTER TABLE `tbl_absen`
ADD CONSTRAINT `FK_PEGAWAI` FOREIGN KEY (`nip`) REFERENCES `tbl_pegawai` (`nip`);

--
-- Ketidakleluasaan untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
ADD CONSTRAINT `FK_ADMIN` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`),
ADD CONSTRAINT `FK_JABATAN` FOREIGN KEY (`id_jabatan`) REFERENCES `tbl_jabatan` (`id_jabatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
