-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 04:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi_artikel` varchar(200) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi_artikel`, `gambar`) VALUES
(2, 'cara merawat tanaman lidah buaya', 'dsd', 'lidahbuaya2.jpg'),
(3, 'cara merawat tanaman Dieffenbachia', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum', 'Dieffenbachia2.jpg'),
(4, 'Cara merawat tanaman bunga melati', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum', 'melati2.jpg'),
(5, 'cara merawat tanaman bunga mawar', 'lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum', 'mawar1.jpg'),
(6, 'cara merawat tanaman lidah buaya', 'dsd', 'lidahbuaya2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_product`, `id_user`, `kuantitas`, `harga`, `harga_beli`) VALUES
(207, 39, 5, 1, 38000, 30000),
(229, 33, 11, 1, 37000, 25000),
(230, 32, 11, 1, 42000, 25000),
(249, 52, 4, 2, 30000, 13500);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(35) NOT NULL,
  `icon` varchar(65) DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `icon`, `keterangan`) VALUES
(99, 'All', 'all.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `id_penawaran` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `comment` text,
  `created` timestamp NULL DEFAULT NULL,
  `createdBy` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `id_penawaran`, `id_user`, `comment`, `created`, `createdBy`) VALUES
(1, 1, 1, 'Pak petani bisa tidak harganya per kilonya jadi 11500', '2020-05-12 03:11:30', 'dikicandra021098@gmail.com'),
(2, 1, 3, 'Bisa gan, angkut', '2020-05-12 03:38:20', 'Petani@gmail.com'),
(3, 1, 3, 'pak petani ada stok berapa?', '2020-05-12 03:54:46', 'petani@gmail.com'),
(4, 1, 3, 'stok ada 100 Kg', '2020-05-12 04:40:34', 'petani@gmail.com'),
(6, 2, 1, 'Pak petani bogor harga perkilonya bisa 17000 ? kalau bisa saya ambil banyak', '2020-05-12 22:53:12', 'dikicandra021098@gmail.com'),
(7, 2, 3, 'boleh tapi minimal pembelian 5 ton!! oke ?', '2020-05-12 22:54:50', 'petani@gmail.com'),
(8, 2, 1, 'Boleh saya niatnya beli 10 Ton sih, ywd saya minta pengiriman besok yah. Dan karena saya beli 10 ton jadi dapet kali diskon yah :D\r\n', '2020-05-12 22:55:58', 'dikicandra021098@gmail.com'),
(9, 2, 3, 'Sip gan nanti saya diskon 10% besok saya kirim barangnya. berarti kita udh deal yah. Untuk pembayaran sistemnya bagaimana ?', '2020-05-12 23:00:02', 'petani@gmail.com'),
(10, 2, 1, 'iya gan kita udh deal besok kirim aja, untuk pembayaran nnti di tempat yah :D', '2020-05-12 23:00:53', 'dikicandra021098@gmail.com'),
(11, 3, 1, 'Pak petani harganya bisa bisa jadi Rp.11.000 per kg? ', '2020-05-13 06:28:31', 'dikicandra021098@gmail.com'),
(12, 3, 7, 'Iya boleh, kapan saya bisa kirim?', '2020-05-13 06:29:09', 'petanivokasi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `list_pesanan`
--

CREATE TABLE `list_pesanan` (
  `id_listpesanan` int(11) NOT NULL,
  `id_pesanan` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `kuantitas` int(11) DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  `harga_beli` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `list_pesanan`
--

INSERT INTO `list_pesanan` (`id_listpesanan`, `id_pesanan`, `id_product`, `kuantitas`, `harga`, `harga_beli`) VALUES
(158, 106, 21, 1, 21000, 18500),
(160, 108, 28, 1, 18000, 15500),
(161, 109, 81, 1, 2000, 0),
(162, 110, 22, 1, 17000, 15000),
(163, 111, 28, 1, 18000, 15500),
(164, 112, 56, 1, 35000, 30500),
(165, 113, 28, 1, 18000, 15500),
(167, 115, 20, 1, 18000, 15500),
(168, 116, 28, 1, 18000, 15500);

-- --------------------------------------------------------

--
-- Table structure for table `list_promo`
--

CREATE TABLE `list_promo` (
  `id_listpromo` int(11) NOT NULL,
  `id_promo` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `harga_old` int(15) DEFAULT NULL,
  `harga_new` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(35) DEFAULT NULL,
  `kode_bank` char(4) DEFAULT NULL,
  `nama_akun` varchar(100) DEFAULT NULL,
  `no_rek` varchar(20) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `warna` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_bank`, `nama_bank`, `kode_bank`, `nama_akun`, `no_rek`, `icon`, `warna`) VALUES
(1, 'BCA', '014', 'IGSB FARM (BCA)', '127875642', 'bca.png', 'primary'),
(2, 'BNI', '009', 'IGSB (BNI)', '89872621', 'bni1.png', 'warning'),
(3, 'Mandiri', '008', 'IGSB (Mandiri)', '998551230', 'mandiri.jpg', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `id_pesanan` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `for_iduser` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `isread` char(1) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notifikasi`, `id_pesanan`, `id_user`, `for_iduser`, `message`, `isread`, `created`) VALUES
(22, 103, 12, 6, 'burdah Melakukan Pembayaran', '0', '2022-08-15 13:54:34'),
(23, 104, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-08-22 15:18:56'),
(24, 0, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-08-22 15:23:29'),
(25, 0, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-08-22 15:23:57'),
(26, 0, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-08-22 15:25:09'),
(27, 106, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-08-23 13:21:05'),
(28, 108, 4, 6, 'konsumen Melakukan Pembayaran', '1', '2022-08-23 14:04:01'),
(29, 109, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-04 14:40:26'),
(30, 110, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-05 14:39:24'),
(31, 0, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-11 12:40:37'),
(32, 114, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-11 12:44:47'),
(33, 114, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-11 12:46:13'),
(34, 114, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-11 13:02:47'),
(35, 115, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-11 13:35:01'),
(36, 115, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-11 13:38:07'),
(37, 115, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-11 13:39:32'),
(38, 115, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2022-09-11 13:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `penawaran`
--

CREATE TABLE `penawaran` (
  `id_penawaran` int(11) NOT NULL,
  `id_petani` int(11) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL,
  `stok` float(11,0) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `harga_penawaran` int(15) DEFAULT NULL,
  `harga_deal` int(15) DEFAULT NULL,
  `jenis_panen` enum('musiman','rutin') DEFAULT NULL,
  `foto_produk` varchar(255) DEFAULT NULL,
  `pesan` text,
  `status` enum('nego','approve','batal','add') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `penawaran`
--

INSERT INTO `penawaran` (`id_penawaran`, `id_petani`, `nama_produk`, `no_hp`, `stok`, `tanggal_pengiriman`, `alamat`, `harga_penawaran`, `harga_deal`, `jenis_panen`, `foto_produk`, `pesan`, `status`) VALUES
(1, 3, 'Wortel ', '0822874747423', NULL, NULL, 'bogor', 12000, 0, 'musiman', 'product-73.jpg', 'Pesan', 'batal'),
(2, 3, 'Cabe Merah', '0822874747423', NULL, NULL, 'Sukabumi', 18000, 0, 'rutin', 'product-12.jpg', 'Cabenya merah', 'batal'),
(3, 7, 'Apel', '0822874747423', NULL, NULL, 'Bogor', 12000, NULL, 'musiman', 'product-10.jpg', 'Kualitas terbaik', 'batal'),
(4, 3, 'Apel', '08501701198', 23, '2020-05-30', NULL, 12000, NULL, 'musiman', 'product-101.jpg', 'wew', 'batal'),
(5, 8, 'Apel', '088228989898', 10000, '2020-06-06', 'Bogor', 20000, 18000, 'musiman', 'product-102.jpg', 'Apelnya bentar lagi panen', 'add'),
(6, 3, 'kaki sapi', '08501701198', 12, '2020-06-05', 'Bogor', 12000, 12000, 'musiman', 'kaki_sapi_potong.jpg', 'wow', 'add'),
(7, 3, 'Apel', '08501701198', 23000, '2020-06-10', 'Bogor', 20000, 0, 'rutin', 'product-103.jpg', 'Apel nya masih segar', 'nego'),
(8, 12, 'ddd', '1213', 2000, '2022-08-22', 'babakan', 10, NULL, 'musiman', NULL, 'dff', 'nego');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_bank` int(11) DEFAULT NULL,
  `tgl_pengiriman` date DEFAULT NULL,
  `total_pembayaran` int(15) DEFAULT NULL,
  `total_keuntungan` int(15) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status` enum('belum_bayar','verifikasi','dikemas','dikirim','selesai','pengembalian') DEFAULT NULL,
  `id_toko` int(5) NOT NULL,
  `created` datetime DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `id_bank`, `tgl_pengiriman`, `total_pembayaran`, `total_keuntungan`, `bukti_pembayaran`, `status`, `id_toko`, `created`, `tgl_update`) VALUES
(106, 4, 1, '0000-00-00', 21000, 2500, 'tegar.jpg', 'verifikasi', 5, '2022-08-23 20:20:16', '2022-08-23 20:21:05'),
(108, 4, 2, '0000-00-00', 18000, 2500, 'Capture.PNG', 'verifikasi', 3, '2022-08-23 21:03:33', '2022-08-23 21:04:01'),
(109, 4, 1, '0000-00-00', 2000, 2000, 'default.jpg', 'verifikasi', 3, '2022-09-04 21:39:46', '2022-09-04 21:40:26'),
(110, 4, 2, '0000-00-00', 17000, 2000, 'images.jpg', 'verifikasi', 5, '2022-09-05 21:38:30', '2022-09-05 21:39:24'),
(115, 4, 2, '0000-00-00', 18000, 2500, 'daun1.png', 'verifikasi', 5, '2022-09-11 20:34:15', '2022-09-11 20:53:10'),
(116, 4, 1, '0000-00-00', 18000, 2500, '', 'belum_bayar', 0, '2022-09-11 20:45:03', '2022-09-11 20:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `petani_id` int(11) NOT NULL,
  `nama_product` varchar(65) NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `alamat` varchar(65) NOT NULL,
  `price` int(11) NOT NULL,
  `jenis_panen` enum('musiman','rutin','','') NOT NULL,
  `foto_product` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`petani_id`, `nama_product`, `no_telpon`, `alamat`, `price`, `jenis_panen`, `foto_product`) VALUES
(5, 'Cabe Merah', '0822874747423', 'bogor', 12000, 'musiman', 'cabe1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(65) NOT NULL,
  `product_kategori` varchar(2) NOT NULL,
  `product_quantity` float NOT NULL,
  `product_image` varchar(65) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_beli_eksekutif` int(11) DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_price_seller` int(11) NOT NULL,
  `product_price_eksekutif` int(11) DEFAULT NULL,
  `product_added` varchar(20) NOT NULL,
  `product_available` varchar(20) NOT NULL,
  `product_weight` float NOT NULL,
  `product_weight_eksekutif` float DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `label` enum('konvesional','hydroponic') DEFAULT NULL,
  `toko_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_kategori`, `product_quantity`, `product_image`, `harga_beli`, `harga_beli_eksekutif`, `product_price`, `product_price_seller`, `product_price_eksekutif`, `product_added`, `product_available`, `product_weight`, `product_weight_eksekutif`, `deskripsi`, `label`, `toko_id`) VALUES
(18, 'Lidah Mertua', '1', -190, 'lidahmertua.jpg', 16500, 82500, 19000, 18000, 90000, '', '2019-11-27', 200, 1000, 'Tanaman yang berwarna hijau tua dengan motif khas pada daunnya ini adalah tanaman hias yang paling digemari lantaran perawatannya bisa dilakukan dengan mudah oleh pemula.\r\nSelain bentuknya yang cantik untuk menghias rumah, Lidah Mertua juga dikenal dapat memperbaiki kualitas udara di ruangan tempatnya diletakkan.\r\n\r\nBagian brokoli yang dimakan adalah kepala bunga berwarna hijau yang tersusun rapat seperti cabang pohon dengan batang tebal. Sebagian besar kepala bunga tersebut dikelilingi dedaunan. Brokoli paling mirip dengan kembang kol, namun brokoli berwarna hijau, sedangkan kembang kol putih.', '', 5),
(19, 'Monstera', '1', 10, 'monstera.jpg', 13000, 65000, 15000, 14300, 71500, '', '2019-11-27', 200, 1000, 'Aglaonema atau Sri Rejeki ini bisa ditaruh di dalam rumah maupun di luar ruangan. Tanaman dengan daun lebar ini termasuk tanaman yang ‘bandel’ karena tidak membutuhkan banyak cahaya matahari untuk tumbuh dengan baik.', 'hydroponic', 5),
(20, 'Tanaman Kaktus', '1', -15, 'kaktus.jpg', 15500, 108500, 18000, 17000, 120000, '', '2019-11-27', 35, 250, 'Kaktus adalah tanaman favorit para pemula karena perawatannya super mudah, bahkan jika dibiarkan saja tanpa dirawat kaktus masih bisa tumbuh dengan baik.', 'hydroponic', 5),
(21, 'Lidah Buaya (Aloe Vera)', '1', 35, 'lidahbuaya1.jpg', 18500, 37000, 21000, 20500, 41000, '', '2019-11-27', 500, 1000, 'Tanaman yang cocok untuk pemula lainnya adalah Lidah Buaya. Tanaman dengan daging daun yang tebal serta sedikit duri-duri di pinggirnya ini bisa diletakkan di dalam rumah atau di pekarangan.\r\nUntuk perawatannya sendiri cukup siram secara berkala, tunggu tanah kering baru siram dengan air. Pemberian pupuk untuk lidah buaya bisa dilakukan setahun sekali.', 'hydroponic', 5),
(22, 'Tanaman Janda Bolong', '1', -170, 'jandabolong.jpg', 15000, 75000, 17000, 16500, 82500, '', '2019-11-27', 200, 10000, 'Tanaman Janda Bolong adalah Tanaman serta mengawal metabolisme gula dalam darah dan amat sesuai dimakan oleh mereka yang mengidap penyakit diabetes atau hipertensi. Kandungan serat dan enzim yang tinggi dapat membantu penurunan berat badan.', 'hydroponic', 5),
(23, 'Bunga Anggrek', '1', 20, 'daun11.png', 15500, 155000, 18000, 17000, 170000, '', '2019-11-27', 100, 1000, 'angrek angrek  angrek  angrek  angrek  angrek  angrek  angrek  angrek  angrek  angrek  angrek  angrek ', 'hydroponic', 3),
(24, 'nama tanaman', '1', 10, 'daun111.png', 13000, 130000, 15000, 14500, 145000, '', '2019-11-27', 200, 2000, 'isi deskripsi', 'hydroponic', 3),
(25, 'Sirih Belanda', '1', 18, 'sirih_belanda.jpg', 13500, 135000, 15000, 14500, 145000, '', '2019-11-27', 100, 1000, 'Daun ketumbar sarat akan vitamin C, yang membantu membentuk dan melestarikan jaringan ikat, seperti kolagen, di kornea mata. Selain itu, daun ketumbar menjaga pembuluh darah agar tetap kuat dan fleksibel.\r\n\r\nNutrisi bermanfaat lain dalam daun ketumbar adalah beta karoten. Ini adalah pigmen alami yang ditemukan dalam berbagai makanan nabati, yang digunakan tubuh untuk membuat vitamin A', 'hydroponic', 3),
(26, 'bunga mawar', '1', 29, 'mawar.jpg', 13500, 67500, 15000, 14500, 72500, '', '2019-11-26', 200, 1000, 'Mawar atau ros adalah tumbuhan perdu, pohonnya berduri, bunganya berbau wangi dan berwarna indah, terdiri atas daun bunga yang bersusun; meliputi ratusan jenis, tumbuh tegak atau memanjat, batangnya berduri, bunganya beraneka warna, seperti merah, putih, merah jambu, merah tua, dan berbau harum.', 'hydroponic', 3),
(27, 'Bunga Melati', 'Pi', 39, 'melati.jpg', 24500, 24500, 28000, 27000, 27000, '', '2019-11-27', 1000, 1000, 'Melati merupakan tanaman bunga hias berupa perdu berbatang tegak yang hidup menahun. Melati merupakan genus dari semak dan tanaman merambat dalam keluarga zaitun', 'hydroponic', 3),
(28, 'Ubi Putih', '3', 44000, 'ubi_putih2.jpg', 15500, 15500, 18000, 17000, 16996, '', '2019-11-27', 1000, 1000, 'Ubi jalar (Ipomoea batatas) atau dalam bahasa Inggrisnya sweet potato adalah sejenis tanaman budidaya. Bagian yang dimanfaatkan adalah akarnya yang membentuk umbi dengan kadar gizi (karbohidrat) yang tinggi. Di Afrika, umbi ubi jalar menjadi salah satu sumber makanan pokok yang penting. Di Asia, selain dimanfaatkan umbinya, daun muda ubi jalar juga dibuat sayuran. Terdapat pula ubi jalar yang dijadikan tanaman hias karena keindahan daunnya.', 'hydroponic', 3),
(29, 'Daging Sapi', '4', 77000, 'daging_sapi5.jpg', 113000, 113000, 130000, 124500, 124500, '', '2019-11-27', 1000, 1000, 'Daging sapi (bahasa Inggris: beef) adalah daging yang diperoleh dari sapi yang biasa dan umum digunakan untuk keperluan konsumsi makanan. Di setiap daerah, penggunaan daging ini berbeda-beda tergantung dari cara pengolahannya. Sebagai contoh has luar, daging iga dan T-Bone sangat umum digunakan di Eropa dan di Amerika Serikat sebagai bahan pembuatan steak sehingga bagian sapi ini sangat banyak diperdagangkan. Akan tetapi seperti di Indonesia dan di berbagai negara Asia lainnya daging ini banyak digunakan untuk makanan berbumbu dan bersantan seperti sup konro dan rendang.', 'konvesional', 5),
(53, 'Buah Bit', '2', 29600, 'bit.jpg', 15500, 77500, 18000, 17000, 85000, '', '2020-06-08', 200, 1000, 'Kandungan Sehat dalam Buah Bit\r\nBuah bit memiliki banyak kandungan sehat seperti yang berikut ini:\r\n\r\n1.Zat besi\r\n2.Fosfor\r\n3.Triptofan\r\n4.Betasianin\r\n5.Vitamin C\r\n6.Asam folat\r\n7.Serat\r\n8,Kaliumen\r\n9.Magnesium\r\n10.Caumarin', 'hydroponic', 5),
(56, 'Bawang Putih Tunggal', '1', 29750, 'bawang_putih.jpg', 30500, 122000, 35000, 34000, 136000, '', '2020-06-10', 250, 1000, 'Bawang Putih Tunggal', 'hydroponic', 3),
(57, 'Cabe Merah Besar', '1', 30000, 'Cabe_Merah_Besar.jpg', 15500, 77500, 18000, 17000, 85000, '', '2020-06-10', 200, 1000, 'Cabe Merah Besar', 'hydroponic', 5),
(58, 'Jahe Merah', '1', 32000, 'jahemerah.jpg', 17500, 87500, 20000, 19500, 97500, '', '2020-06-10', 200, 1000, 'Jahe Merah', 'hydroponic', 5),
(59, 'Bengkuang', '3', 30000, 'bengkuang.jpg', 23000, 23000, 26000, 25500, 25500, '', '2020-06-10', 1000, 1000, 'Bengkuang', 'hydroponic', 5),
(60, 'Alpukat', '2', 30000, 'alpukat.jpg', 30500, 30500, 35000, 34000, 34000, '', '2020-06-10', 1000, 1000, 'Alpukat', 'hydroponic', 5),
(61, 'Pastel Non-MSG', '6', 30000, 'PASTEL.jpg', 15500, 77500, 18000, 17000, 85000, '', '2020-06-10', 200, 1000, 'PASTEL NON-MSG', 'hydroponic', 3),
(62, 'Strawbery', '6', 30, 'daun2.png', 33500, 167500, 5000, 37000, 185000, '', '2020-06-10', 200, 1000, 'Strawberi Merah yang menghasilkan buah yang segar', 'hydroponic', 3),
(63, 'Ashera Almond Milk', '6', 30000, 'almondmilk.jpg', 33500, 134000, 38000, 37000, 148000, '', '', 250, 1000, 'Ashera Almond Milk', 'hydroponic', 3),
(64, 'Beras Putih Cianjur', '6', 150000, 'berascianjur1.jpg', 104500, 104500, 120000, 115000, 115000, '', '2020-06-10', 5000, 5000, 'Beras Putih Cianjur', 'hydroponic', 3),
(65, 'Beras Merah Cianjur', '6', 50000, 'Beras_Merah_Cianjur_NYISRI.jpg', 148000, 148000, 170000, 163000, 163000, '', '2020-06-10', 5000, 5000, 'Berah merah cianjur', 'hydroponic', 5),
(66, 'Telur Asin', '6', 50000, 'telur-asin-istockphoto.jpg', 29000, 58000, 34000, 32000, 64000, '', '2020-06-10', 500, 1000, 'Telur asin ', 'hydroponic', 5),
(67, 'Telur Ayam Kampung', '6', 50000, 'tel.jpg', 24000, 48000, 28000, 26500, 53000, '', '2020-06-10', 500, 1000, 'Telur kampung sehat', 'hydroponic', 3),
(68, 'Ikan Gurame', '5', 30000, 'gurame.jpg', 52500, 52500, 60000, 58000, 58000, '', '2020-06-10', 1000, 1000, 'Ikan Gurame', 'konvesional', 5),
(69, 'Cingur Sapi', '4', 30000, 'cingursapi.jpg', 70000, 70000, 80000, 77000, 77000, '', '2020-06-10', 1000, 1000, 'CIngur Sapi', 'hydroponic', 5),
(70, 'Tetelan Sapi', '4', 30000, 'tetelan.jpg', 61000, 61000, 70000, 67500, 67500, '', '2020-06-10', 1000, 1000, 'Tetelan Sapi', 'hydroponic', 3),
(71, 'Cabe Hijau Besar', '1', 50000, 'cabe-hijau.jpg', 15500, 62000, 18000, 17000, 68000, '', '2020-06-11', 250, 1000, 'Cabe hijau hydroponic', 'hydroponic', 3),
(72, 'Daun Bawang', '1', 50000, 'daun_bawang.jpg', 15000, 75000, 17000, 16500, 82500, '', '2020-06-10', 200, 1000, 'Daun bawang', 'hydroponic', 5),
(73, 'Daun Kelor Kering', '1', 50000, 'daunkelor.jpg', 14000, 140000, 16000, 15500, 155000, '', '2020-06-10', 15, 150, 'Daun kelor kering', 'hydroponic', 5),
(74, 'Oatmeal', '6', 40000, 'oatmeal.jpg', 35000, 350000, 40000, 38500, 385000, '', '', 100, 1000, 'Oatmeal ', 'hydroponic', 5),
(75, 'Biscotti Vegan', '6', 30000, 'biscotti.jpg', 66500, 266000, 76000, 73500, 294000, '', '2020-06-12', 250, 1000, 'Biscotti Vegan', 'hydroponic', 0),
(76, 'Jambu Kristal ', '2', 30000, 'jambu.jpg', 22000, 220000, 25000, 24500, 245000, '', '2020-06-12', 100, 1000, 'Jambu Kristal', 'hydroponic', 0),
(77, 'Zucchini', '1', 30000, 'zucchini.jpg', 20500, 205000, 23000, 22500, 225000, '', '2020-06-12', 500, 1000, 'Zucchini', 'hydroponic', 0),
(78, 'Hati Sapi', '4', 48000, 'hati.jpg', 57000, 57000, 65000, 63000, 63000, '', '2020-06-12', 1000, 1000, 'Hati Sapi', 'konvesional', 0),
(79, 'Dieffenbachia', 'Pi', 30, 'Dieffenbachia.jpg', 66500, 266000, 76000, 73500, 294000, '', '2020-06-12', 250, 1000, 'Dieffenbachia merupakan tanaman hias jenis daun yang mempunyai corak hijau, kuning serta terdapat spesies yang memiliki warna hijau dengan bercak putih. Proses pengembang biakan tanaman hias yang satu ini cukup mudah, cara yang anda dapat lakukan adalah dengan melakukan penyetekan pada batangnya.', 'hydroponic', 0),
(80, 'keladi hias', '1', 16, 'keladi_hias1.jpg', 10000, 0, 20000, 0, 0, '', '2022-08-24', 1, 1, 'Tanaman dengan genus Caladium dan Alocasia ini memiliki daun yang berwarna-warni dan berbentuk hati. Beberapa jenis keladi memiliki warna solid, dua warna solid dengan pertulangan daun berbeda, hingga lebih dari dua warna dalam satu daun.', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rate_product`
--

CREATE TABLE `rate_product` (
  `id_rate` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `rate` char(1) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `rate_product`
--

INSERT INTO `rate_product` (`id_rate`, `id_product`, `id_user`, `rate`, `comment`) VALUES
(5, 22, 1, '5', 'produknya bagus semua'),
(6, 23, 1, '5', 'produknya bagus semua'),
(7, 24, 1, '5', 'produknya bagus semua'),
(8, 25, 1, '5', 'produknya bagus semua'),
(9, 27, 1, '5', 'produknya bagus semua'),
(10, 28, 1, '5', 'produknya bagus semua'),
(11, 30, 1, '5', 'produknya bagus semua'),
(12, 31, 1, '5', 'produknya bagus semua'),
(13, 33, 1, '5', 'produknya bagus semua'),
(14, 37, 1, '5', 'produknya bagus semua'),
(15, 39, 1, '5', 'produknya bagus semua'),
(16, 40, 1, '5', 'produknya bagus semua'),
(17, 41, 1, '5', 'produknya bagus semua'),
(18, 18, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget'),
(19, 19, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget'),
(20, 20, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget'),
(21, 32, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget'),
(22, 26, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget'),
(23, 30, 1, '4', 'mantap'),
(24, 30, 1, '5', ''),
(25, 30, 1, '5', ''),
(26, 31, 1, '5', ''),
(27, 33, 1, '5', ''),
(28, 32, 1, '5', ''),
(29, 31, 1, '5', 'Produknya higenis'),
(30, 33, 11, '5', ''),
(31, 32, 11, '5', ''),
(32, 44, 4, '5', 'wow'),
(33, 44, 4, '5', 'Mntep'),
(34, 52, 4, '5', 'Mntep'),
(35, 53, 1, '5', 'keren'),
(36, 52, 1, '5', 'keren'),
(37, 44, 1, '5', 'keren');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `addres` varchar(120) NOT NULL,
  `img_profile` varchar(15) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `wilayah` varchar(65) NOT NULL,
  `jenis_user` enum('admin','konsumen','seller','konsumen_eksekutif','petani') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `no_hp`, `password`, `addres`, `img_profile`, `jk`, `tgl_lahir`, `wilayah`, `jenis_user`) VALUES
(1, 'HIldan', 'hildan@gmail.com', '082287469974', '202cb962ac59075b964b07152d234b70', 'jl. raya bogor', 'default.jpg', 'Laki-laki', '1998-10-02', 'Bogor', 'admin'),
(3, 'Toko Udin', 'udin@gmail.com', '08501701198', '202cb962ac59075b964b07152d234b70', 'Bogor', 'default.png', 'Laki-laki', '', '', 'petani'),
(4, 'konsumen', 'konsumen@gmail.com', '089666261299', '202cb962ac59075b964b07152d234b70', 'Bogor', 'default.png', 'Laki-laki', '', '', 'konsumen'),
(5, 'Toko Ujang', 'Ujang@gmail.com', '089666261299', '202cb962ac59075b964b07152d234b70', 'Bogor', 'default.png', 'Laki-laki', '', '', 'petani'),
(6, 'admin', 'admin@gmail.com', '085017011', '21232f297a57a5a743894a0e4a801fc3', 'bogor', 'default.png', 'Laki-laki', '', '', 'admin'),
(9, 'konsumen eksekutif', 'konsumen_eksekutif@gmail.com', '085702109865', '202cb962ac59075b964b07152d234b70', 'bogor', 'default.png', 'Laki-laki', '', '', 'konsumen_eksekutif'),
(12, 'burdah', 'burdahm@gmail.com', '1213', '202cb962ac59075b964b07152d234b70', 'babakan', 'default.png', 'Laki-laki', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`) USING BTREE;

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`) USING BTREE;

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`) USING BTREE;

--
-- Indexes for table `list_pesanan`
--
ALTER TABLE `list_pesanan`
  ADD PRIMARY KEY (`id_listpesanan`) USING BTREE;

--
-- Indexes for table `list_promo`
--
ALTER TABLE `list_promo`
  ADD PRIMARY KEY (`id_listpromo`) USING BTREE;

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_bank`) USING BTREE;

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`) USING BTREE;

--
-- Indexes for table `penawaran`
--
ALTER TABLE `penawaran`
  ADD PRIMARY KEY (`id_penawaran`) USING BTREE;

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`) USING BTREE;

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`petani_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`) USING BTREE;

--
-- Indexes for table `rate_product`
--
ALTER TABLE `rate_product`
  ADD PRIMARY KEY (`id_rate`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `list_pesanan`
--
ALTER TABLE `list_pesanan`
  MODIFY `id_listpesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `list_promo`
--
ALTER TABLE `list_promo`
  MODIFY `id_listpromo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `penawaran`
--
ALTER TABLE `penawaran`
  MODIFY `id_penawaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
  MODIFY `petani_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `rate_product`
--
ALTER TABLE `rate_product`
  MODIFY `id_rate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
