-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2023 at 04:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kantin_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(16, 'Cireng Pedas', 'Rasa Ayam Cabai Merah', 'Makanan', 10000, 99, 'cirengayam.jpeg'),
(17, 'Gorengan', 'Paket Gorengan Campur', 'Makanan', 12000, 50, 'gorengan.jpg'),
(18, 'Nasi Lengko', 'Nasi Lengko Paket Mahasiswa', 'Makanan', 7000, 30, 'nasi_lengko.jpg'),
(20, 'Nasi Ayam Bakar', 'Ayam bakar sambel Pak Yadi', 'Makanan', 10000, 99, 'ayam_bakar.jpg'),
(21, 'Es Teh Manis', 'Dengan daun teh khas Kuningan', 'Minuman', 5000, 50, 'es_teh.jpg'),
(22, 'JOSU', 'Extra Joss Susu', 'Minuman', 5000, 50, 'josu.jpg'),
(23, 'Nasi Gila', 'Dengan topping campur', 'Makanan', 10000, 50, 'nasi_gila_jpg.png'),
(24, 'Kopi Hitam', 'Dengan biji kopi khas Kuningan', 'Minuman', 5000, 50, 'kopi_hitam.jpg'),
(25, 'Es Nutrisari', 'Nutrisari rasa jeruk', 'Minuman', 5000, 50, 'nutrisari.jpg'),
(26, 'Air Mineral', 'Air segar dari Gunung Ciremai', 'Minuman', 4000, 99, 'air_mineral.jpg'),
(27, 'Makaroni', 'Makaroni pedas manis', 'Makanan', 7000, 50, 'maklor.jpg'),
(28, 'T-Shirt Fluter', 'Bahan premium', 'Pakaian', 80000, 30, 'baju_2.jpg'),
(29, 'T-Shirt Terminal', 'Bahan premium', 'Pakaian', 80000, 20, 'baju_1.png'),
(30, 'Sweater Linux', 'Bahan premium dan hangat dipakai', 'Pakaian', 200000, 20, 'baju_4.jpg'),
(31, 'T-Shirt Hacker', 'Bahan premium', 'Pakaian', 95000, 30, 'baju_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `telepon`, `metode`, `tgl_pesan`, `batas_bayar`) VALUES
(20, 'Dwi Apriyanti', 'Prodi Manajemen', '0827172166', 'Cash', '2023-06-25 21:59:09', '2023-06-26 21:59:09'),
(21, 'Agum Pratama', 'Prodi TI', '0896855755', 'Transfer', '2023-06-26 00:00:52', '2023-06-27 00:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int NOT NULL,
  `id_invoice` int NOT NULL,
  `id_barang` int NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int NOT NULL,
  `harga` int NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'agum', '123', 1),
(2, 'User', 'Dwi', '123', 2),
(3, 'User', 'Aldy', '123', 2),
(4, 'User', 'Ajat', '123', 2),
(5, 'User', 'Toto', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
