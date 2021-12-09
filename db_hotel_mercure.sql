-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2021 pada 10.04
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel_mercure`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_booking`
--

CREATE TABLE `tb_booking` (
  `no_booking` varchar(10) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `id_room` int(5) NOT NULL,
  `harga` int(100) NOT NULL,
  `check_in` date NOT NULL,
  `duration` int(11) NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_identitas` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `email`, `pass`, `nama`, `no_identitas`, `no_telp`, `alamat`) VALUES
(1, 'putrasa1219@gmail.com', '$2y$10$mcFYaTCr6sicvgFxwhmNye5ulaqT2tzED7eCv7AODvSBy5TEf9j6m', 'Putra', '89346894', '0123456789', 'Yogyakarta'),
(3, 'adisaputra@student.uty.ac.id', '$2y$10$/ow5.qGQqLlIUk55VOK4.Oo.b9C.oK7ua2ozw0bYvsc4M6sDmYsbW', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_payment`
--

CREATE TABLE `tb_payment` (
  `id_payment` int(11) NOT NULL,
  `no_booking` varchar(10) NOT NULL,
  `tgl_pay` date NOT NULL,
  `total_harga` int(100) NOT NULL,
  `metode_pay` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_room`
--

CREATE TABLE `tb_room` (
  `id_room` int(5) NOT NULL,
  `type` varchar(100) NOT NULL,
  `harga` int(50) NOT NULL,
  `lantai` int(5) NOT NULL,
  `available` int(5) NOT NULL,
  `booked` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_room`
--

INSERT INTO `tb_room` (`id_room`, `type`, `harga`, `lantai`, `available`, `booked`) VALUES
(101, 'Superior Double', 499, 1, 31, 4),
(102, 'Superior Twin', 499, 1, 22, 3),
(103, 'Deluxe Room', 799, 2, 20, 5),
(105, 'Suite Room', 999, 3, 30, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD PRIMARY KEY (`no_booking`),
  ADD KEY `fk_room` (`id_room`),
  ADD KEY `fk_customer` (`id_customer`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `no_booking` (`no_booking`);

--
-- Indeks untuk tabel `tb_room`
--
ALTER TABLE `tb_room`
  ADD PRIMARY KEY (`id_room`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_room`
--
ALTER TABLE `tb_room`
  MODIFY `id_room` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_booking`
--
ALTER TABLE `tb_booking`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`),
  ADD CONSTRAINT `fk_room` FOREIGN KEY (`id_room`) REFERENCES `tb_room` (`id_room`);

--
-- Ketidakleluasaan untuk tabel `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD CONSTRAINT `tb_payment_ibfk_1` FOREIGN KEY (`no_booking`) REFERENCES `tb_booking` (`no_booking`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
