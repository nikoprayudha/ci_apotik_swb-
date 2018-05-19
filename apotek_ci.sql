-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jul 2017 pada 04.50
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `idObat` varchar(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jenis_obat` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`idObat`, `nama_obat`, `jenis_obat`, `jumlah`, `harga`) VALUES
('A01', 'Siladex Batuk', 'Sirup', 100, 10000),
('A02', 'Betadine', 'Cair', 100, 7000),
('A03', 'Panadol', 'Kapsul', 200, 5000),
('A04', 'Saridon', 'Pil', 100, 3500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `idPgw` int(11) NOT NULL,
  `nama_peg` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `profesi` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`idPgw`, `nama_peg`, `jk`, `agama`, `alamat`, `telp`, `foto`, `profesi`, `username`, `password`) VALUES
(8, 'niko', 'Laki-Laki', 'Islam', 'batu', '08970325520', '20150808_1006031.jpg', 'Administrator', 'niko', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'ayu', 'Perempuan', 'Islam', 'batu', '083532452352', '33.jpg', 'Administrator', 'ayu', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPlg` int(11) NOT NULL,
  `nama_plg` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`idPlg`, `nama_plg`, `jk`, `alamat`, `telp`) VALUES
(1, 'Novan', 'Laki-Laki', 'Batu', '08971744242'),
(2, 'fitri nerlita', 'Perempuan', 'Sengkaling, Malang', '0823245683758'),
(3, 'Ayu', 'Perempuan', 'Jeding, Batu', '0823245683751'),
(4, 'bela', 'Perempuan', 'sisir', '08973653258'),
(6, 'bima', 'Laki-Laki', 'sumberjo', '087647236469');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `idPem` int(11) NOT NULL,
  `idObat` varchar(100) NOT NULL,
  `idSup` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` bigint(100) NOT NULL,
  `total` bigint(100) NOT NULL,
  `bayar` bigint(100) NOT NULL,
  `kembalian` bigint(100) NOT NULL,
  `idPgw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`idPem`, `idObat`, `idSup`, `tgl_beli`, `jumlah`, `harga`, `total`, `bayar`, `kembalian`, `idPgw`) VALUES
(4, 'A01', 1, '2017-07-19', 5, 5000, 25000, 25000, 0, 8),
(5, 'A02', 2, '2017-07-13', 100, 6000, 600000, 600000, 0, 8),
(6, 'A04', 1, '2017-06-14', 100, 3500, 350000, 350000, 0, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `idPnj` int(11) NOT NULL,
  `idPlg` int(11) NOT NULL,
  `idObat` varchar(100) NOT NULL,
  `tgl_pnj` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` bigint(100) NOT NULL,
  `total` bigint(100) NOT NULL,
  `bayar` bigint(100) NOT NULL,
  `kembalian` bigint(100) NOT NULL,
  `idPgw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`idPnj`, `idPlg`, `idObat`, `tgl_pnj`, `jumlah`, `harga`, `total`, `bayar`, `kembalian`, `idPgw`) VALUES
(1, 1, 'A02', '2017-07-07', 5, 5000, 25000, 30000, 5000, 10),
(2, 2, 'A02', '2017-07-07', 5, 5000, 25000, 300000, 5000, 10),
(4, 4, 'A01', '2017-07-13', 1, 10000, 10000, 10000, 0, 8),
(8, 6, 'A02', '2017-07-13', 2, 20000, 40000, 40000, 0, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `idSup` int(11) NOT NULL,
  `nama_sup` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`idSup`, `nama_sup`, `perusahaan`, `alamat`, `telp`) VALUES
(1, 'Dedik Setiawan', 'PT.Guna Farma Persada', 'JL.Danau Plumbang , Kav 5 Perusahaan Ngoro, Mojokerto , Jawa Timur', '085112383123'),
(2, 'Fahreza Umar Ali', 'PT.Kimia Farma Indonesia', 'Jl.Panglima Sudirman , Kav 1 Jakarta Timur, Indonesia', '0815476382682'),
(3, 'Adi', 'PT.Indomarco Persada', 'JL.Terusan Tebet, Jakarta Selatan , Indonesia', '085435676526');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idObat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idPgw`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPlg`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idPem`),
  ADD KEY `idObat` (`idObat`),
  ADD KEY `idSup` (`idSup`),
  ADD KEY `idPgw` (`idPgw`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idPnj`),
  ADD KEY `idPlg` (`idPlg`),
  ADD KEY `idObat` (`idObat`),
  ADD KEY `idPgw` (`idPgw`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`idSup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idPgw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPlg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `idPem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idPnj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `idSup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`idSup`) REFERENCES `supplier` (`idSup`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`idPgw`) REFERENCES `pegawai` (`idPgw`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_3` FOREIGN KEY (`idObat`) REFERENCES `obat` (`idObat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`idPlg`) REFERENCES `pelanggan` (`idPlg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`idPgw`) REFERENCES `pegawai` (`idPgw`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_3` FOREIGN KEY (`idObat`) REFERENCES `obat` (`idObat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
