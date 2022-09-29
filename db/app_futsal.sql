-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jan 2021 pada 17.05
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `ID_ABOUT` int(11) NOT NULL,
  `TENTANG` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`ID_ABOUT`, `TENTANG`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis facere accusantium est obcaecati ratione dolorem suscipit veritatis in, praesentium distinctio magni cum ut, doloremque. Optio quo illum, natus minima ipsam necessitatibus exercitationem, quod laudantium numquam hic! Quae, ducimus, delectus. Rem tempore deserunt molestias, nihil voluptatibus.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` varchar(10) NOT NULL,
  `USERNAME_ADMIN` varchar(50) DEFAULT NULL,
  `PASSWORD_ADMIN` varchar(50) DEFAULT NULL,
  `NAMA_ADMIN` varchar(250) DEFAULT NULL,
  `EMAIL_ADMIN` varchar(250) DEFAULT NULL,
  `TELP_ADMIN` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `USERNAME_ADMIN`, `PASSWORD_ADMIN`, `NAMA_ADMIN`, `EMAIL_ADMIN`, `TELP_ADMIN`) VALUES
('0', NULL, NULL, NULL, NULL, NULL),
('ADM001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Rifqi', 'rifqi@gmail.com', '083844995690');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `ID_BOOKING` int(11) NOT NULL,
  `ID_JADWAL` int(11) DEFAULT NULL,
  `ID_LAPANGAN` int(11) DEFAULT NULL,
  `ID_HARGA` int(11) DEFAULT NULL,
  `ID_PELANGGAN` varchar(10) DEFAULT NULL,
  `ID_ADMIN` varchar(10) DEFAULT NULL,
  `DP` varchar(25) DEFAULT NULL,
  `TANGGAL` date DEFAULT NULL,
  `SISA` varchar(25) DEFAULT NULL,
  `KETERANGAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`ID_BOOKING`, `ID_JADWAL`, `ID_LAPANGAN`, `ID_HARGA`, `ID_PELANGGAN`, `ID_ADMIN`, `DP`, `TANGGAL`, `SISA`, `KETERANGAN`) VALUES
(4, 33, 3, 1, 'PLG002', '0', '80000', '2021-01-18', '0', 'LUNAS'),
(9, 14, 1, 2, 'PLG002', '0', '90000', '2021-01-21', '0', 'BELUM LUNAS'),
(16, 36, 3, 1, 'PLG003', '0', '0', '2021-01-20', '80000', 'BELUM LUNAS'),
(18, 29, 2, 4, 'PLG002', '0', '0', '2021-01-20', '100000', 'BELUM LUNAS'),
(19, 5, 1, 1, 'PLG002', '0', '0', '2021-01-18', '80000', 'BELUM LUNAS'),
(20, 8, 1, 1, 'PLG002', '0', '0', '2021-01-18', '80000', 'BELUM LUNAS'),
(21, 1, 1, 1, 'PLG002', '0', '0', '2021-01-18', '80000', 'BELUM LUNAS'),
(22, 17, 2, 3, 'PLG002', '0', '0', '2021-01-18', '90000', 'BELUM LUNAS'),
(23, 34, 3, 1, 'PLG002', '0', '0', '2021-01-18', '80000', 'BELUM LUNAS'),
(24, 33, 3, 1, 'PLG002', '0', '0', '2021-01-18', '80000', 'Tertunda'),
(25, 35, 3, 1, 'PLG002', '0', '0', '2021-01-18', '80000', 'Tertunda'),
(26, 18, 2, 3, 'PLG002', '0', '0', '2021-01-18', '90000', 'BELUM LUNAS'),
(27, 22, 2, 3, 'PLG002', '0', '0', '2021-01-18', '90000', 'Tertunda'),
(28, 20, 2, 3, 'PLG004', '0', '0', '2021-01-18', '90000', 'Tertunda'),
(29, 25, 2, 3, 'PLG004', '0', '0', '2021-01-18', '90000', 'Tertunda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `ID_GAMBAR` int(11) NOT NULL,
  `GAMBAR_HEADER` varchar(250) DEFAULT NULL,
  `LOGO` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`ID_GAMBAR`, `GAMBAR_HEADER`, `LOGO`) VALUES
(1, 'bg.jpg', 'simple-house-logo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `ID_HARGA` int(11) NOT NULL,
  `WAKTU` varchar(15) DEFAULT NULL,
  `HARGA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`ID_HARGA`, `WAKTU`, `HARGA`) VALUES
(1, 'siang', '80000'),
(2, 'malam', '90000'),
(3, 'siang', '90000'),
(4, 'malam', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_JADWAL` int(11) NOT NULL,
  `ID_HARGA` int(11) DEFAULT NULL,
  `ID_LAPANGAN` int(11) DEFAULT NULL,
  `JAM` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`ID_JADWAL`, `ID_HARGA`, `ID_LAPANGAN`, `JAM`) VALUES
(1, 1, 1, '08:00 - 09:00'),
(2, 1, 1, '09:00 - 10:00'),
(3, 1, 1, '10:00 - 11:00'),
(4, 1, 1, '11:00 - 12:00'),
(5, 1, 1, '12:00 - 13:00'),
(6, 1, 1, '13:00 - 14:00'),
(7, 1, 1, '14:00 - 15:00'),
(8, 1, 1, '15:00 - 16:00'),
(9, 1, 1, '16:00 - 17:00'),
(10, 2, 1, '17:00 - 18:00'),
(11, 2, 1, '18:00 - 19:00'),
(12, 2, 1, '19:00 - 20:00'),
(13, 2, 1, '20:00 - 21:00'),
(14, 2, 1, '21:00 - 22:00'),
(15, 2, 1, '22:00 - 23:00'),
(16, 2, 1, '23:00 - 24:00'),
(17, 3, 2, '08:00 - 09:00'),
(18, 3, 2, '09:00 - 10:00'),
(19, 3, 2, '10:00 - 11:00'),
(20, 3, 2, '11:00 - 12:00'),
(21, 3, 2, '12:00 - 13:00'),
(22, 3, 2, '13:00 - 14:00'),
(23, 3, 2, '14:00 - 15:00'),
(24, 3, 2, '15:00 - 16:00'),
(25, 3, 2, '16:00 - 17:00'),
(26, 4, 2, '17:00 - 18:00'),
(27, 4, 2, '18:00 - 19:00'),
(28, 4, 2, '19:00 - 20:00'),
(29, 4, 2, '20:00 - 21:00'),
(30, 4, 2, '21:00 - 22:00'),
(31, 4, 2, '22:00 - 23:00'),
(32, 4, 2, '23:00 - 24:00'),
(33, 1, 3, '08:00 - 09:00'),
(34, 1, 3, '09:00 - 10:00'),
(35, 1, 3, '10:00 - 11:00'),
(36, 1, 3, '11:00 - 12:00'),
(37, 1, 3, '12:00 - 13:00'),
(38, 1, 3, '13:00 - 14:00'),
(39, 1, 3, '14:00 - 15:00'),
(40, 1, 3, '15:00 - 16:00'),
(41, 1, 3, '16:00 - 17:00'),
(42, 2, 3, '17:00 - 18:00'),
(43, 2, 3, '18:00 - 19:00'),
(44, 2, 3, '19:00 - 20:00'),
(45, 2, 3, '20:00 - 21:00'),
(46, 2, 3, '21:00 - 22:00'),
(47, 2, 3, '22:00 - 23:00'),
(48, 2, 3, '23:00 - 24:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `ID_KONTAK` int(11) NOT NULL,
  `ISI_KONTAK` text,
  `ALAMAT` text,
  `EMAIL_KONTAK` varchar(250) DEFAULT NULL,
  `TELP_KONTAK` varchar(15) DEFAULT NULL,
  `FB` varchar(500) DEFAULT NULL,
  `TW` varchar(500) DEFAULT NULL,
  `IG` varchar(500) DEFAULT NULL,
  `MAP` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`ID_KONTAK`, `ISI_KONTAK`, `ALAMAT`, `EMAIL_KONTAK`, `TELP_KONTAK`, `FB`, `TW`, `IG`, `MAP`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla harum saepe molestiae quo incidunt eveniet quasi sequi alias. Officiis eaque rerum aspernatur voluptatibus, alias, asperiores.', 'Randegan RT 02 RW 01 Tanggulangin Sidoarjo Jawa Timur 61272', 'fatkhifutsal@gmail.com', '081288349911', 'https://wwww.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.23316076362852!2d112.67715163859971!3d-7.494970329905935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjknNDEuNiJTIDExMsKwNDAnMzguMiJF!5e0!3m2!1sen!2sid!4v1606054129056!5m2!1sen!2sid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE `lapangan` (
  `ID_LAPANGAN` int(11) NOT NULL,
  `NAMA_LAPANGAN` varchar(50) DEFAULT NULL,
  `JENIS_LAPANGAN` varchar(50) DEFAULT NULL,
  `GAMBAR_LAPANGAN` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`ID_LAPANGAN`, `NAMA_LAPANGAN`, `JENIS_LAPANGAN`, `GAMBAR_LAPANGAN`) VALUES
(1, 'Lapangan 1', 'Sintetis', '1.jpeg'),
(2, 'Lapangan 2', 'Vinyl', '2.jpeg'),
(3, 'Lapangan 3', 'Sintetis', '3.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `ID_PELANGGAN` varchar(10) NOT NULL,
  `NAMA_PELANGGAN` varchar(250) DEFAULT NULL,
  `ALAMAT_PELANGGAN` text,
  `EMAIL_PELANGGAN` varchar(250) DEFAULT NULL,
  `TELP_PELANGGAN` varchar(15) DEFAULT NULL,
  `USERNAME_PELANGGAN` varchar(50) DEFAULT NULL,
  `PASSWORD_PELANGGAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`ID_PELANGGAN`, `NAMA_PELANGGAN`, `ALAMAT_PELANGGAN`, `EMAIL_PELANGGAN`, `TELP_PELANGGAN`, `USERNAME_PELANGGAN`, `PASSWORD_PELANGGAN`) VALUES
('PLG001', 'Budi', 'Sidoarjo', 'email@gmail.com', '089334334544', 'budi13', '098f6bcd4621d373cade4e832627b4f6'),
('PLG002', 'Sukrow', 'Randegan', 'test@gmail.com', '089667866776', 'sukrow', '19a64ce7ab206265a6512397ff198151'),
('PLG003', 'test', 'test', 'test@gmail.com', '082188679900', 'test', '098f6bcd4621d373cade4e832627b4f6'),
('PLG004', 'Rifqi200', 'Randegan', 'rifqi200@gmail.com', '089339400943', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID_ABOUT`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID_BOOKING`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_PELANGGAN`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_ADMIN`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_LAPANGAN`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_JADWAL`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_HARGA`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`ID_GAMBAR`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`ID_HARGA`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_JADWAL`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_LAPANGAN`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_HARGA`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`ID_KONTAK`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`ID_LAPANGAN`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`ID_PELANGGAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID_BOOKING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_PELANGGAN`) REFERENCES `pelanggan` (`ID_PELANGGAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_LAPANGAN`) REFERENCES `lapangan` (`ID_LAPANGAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_JADWAL`) REFERENCES `jadwal` (`ID_JADWAL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_HARGA`) REFERENCES `harga` (`ID_HARGA`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_LAPANGAN`) REFERENCES `lapangan` (`ID_LAPANGAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_HARGA`) REFERENCES `harga` (`ID_HARGA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
