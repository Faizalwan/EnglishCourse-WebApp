-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2019 pada 19.57
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkelas`
--

CREATE TABLE `tbkelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(4) NOT NULL,
  `th_ajar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkelas`
--

INSERT INTO `tbkelas` (`id_kelas`, `nama_kelas`, `th_ajar`) VALUES
(7, 'E01', '2018/2019'),
(8, 'I01', '2018/2019'),
(9, 'E02', '2018/2019'),
(10, 'I02', '2018/2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbnilai`
--

CREATE TABLE `tbnilai` (
  `id_nilai` varchar(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `nilai_reading` int(11) NOT NULL,
  `nilai_writing` int(11) NOT NULL,
  `nilai_listening` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbnilai`
--

INSERT INTO `tbnilai` (`id_nilai`, `id_siswa`, `id_kelas`, `nilai_reading`, `nilai_writing`, `nilai_listening`) VALUES
('N002', 41, 8, 80, 90, 100),
('N003', 42, 9, 70, 75, 80),
('N004', 1, 7, 78, 85, 98);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `id_siswa` int(10) NOT NULL,
  `nama_siswa` varchar(35) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbsiswa`
--

INSERT INTO `tbsiswa` (`id_siswa`, `nama_siswa`, `alamat`, `pekerjaan`) VALUES
(1, 'Faizal Alwan', 'Jl. Tubagus Ismail', 'Pelajar'),
(39, 'Onno  Purbo', 'Jl. Sudirman Utara', 'Dosen'),
(41, 'Rizca Shafira', 'Jl. Taman Sari V', 'Pelajar'),
(42, 'Ahmad Paudji', 'Jl. Cikarang Barat', 'Karyawan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbnilai`
--
ALTER TABLE `tbnilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `fk_id_siswa` (`id_siswa`),
  ADD KEY `fk_id_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbsiswa`
--
ALTER TABLE `tbsiswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbnilai`
--
ALTER TABLE `tbnilai`
  ADD CONSTRAINT `fk_id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `tbkelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `tbsiswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
