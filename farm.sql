/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : farm

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 31/08/2021 11:02:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id_cart` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  PRIMARY KEY (`id_cart`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 251 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (207, 39, 5, 1, 38000, 30000);
INSERT INTO `cart` VALUES (229, 33, 11, 1, 37000, 25000);
INSERT INTO `cart` VALUES (230, 32, 11, 1, 42000, 25000);
INSERT INTO `cart` VALUES (249, 52, 4, 2, 30000, 13500);
INSERT INTO `cart` VALUES (250, 76, 4, 40, 1000000, 880000);

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `icon` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_category`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 100 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'sayur', 'sayur.png', '');
INSERT INTO `category` VALUES (2, 'buah', 'buah.png', '');
INSERT INTO `category` VALUES (3, 'umbi', 'umbi.png', '');
INSERT INTO `category` VALUES (4, 'daging', 'daging.png', '');
INSERT INTO `category` VALUES (5, 'ikan', 'ikan.png', '');
INSERT INTO `category` VALUES (6, 'hasil olahan tani', 'olahan.png', '');
INSERT INTO `category` VALUES (99, 'All', 'all.png', '');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_penawaran` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `comment` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created` timestamp(0) NULL DEFAULT NULL,
  `createdBy` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`comment_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (1, 1, 1, 'Pak petani bisa tidak harganya per kilonya jadi 11500', '2020-05-12 10:11:30', 'dikicandra021098@gmail.com');
INSERT INTO `comment` VALUES (2, 1, 3, 'Bisa gan, angkut', '2020-05-12 10:38:20', 'Petani@gmail.com');
INSERT INTO `comment` VALUES (3, 1, 3, 'pak petani ada stok berapa?', '2020-05-12 10:54:46', 'petani@gmail.com');
INSERT INTO `comment` VALUES (4, 1, 3, 'stok ada 100 Kg', '2020-05-12 11:40:34', 'petani@gmail.com');
INSERT INTO `comment` VALUES (6, 2, 1, 'Pak petani bogor harga perkilonya bisa 17000 ? kalau bisa saya ambil banyak', '2020-05-13 05:53:12', 'dikicandra021098@gmail.com');
INSERT INTO `comment` VALUES (7, 2, 3, 'boleh tapi minimal pembelian 5 ton!! oke ?', '2020-05-13 05:54:50', 'petani@gmail.com');
INSERT INTO `comment` VALUES (8, 2, 1, 'Boleh saya niatnya beli 10 Ton sih, ywd saya minta pengiriman besok yah. Dan karena saya beli 10 ton jadi dapet kali diskon yah :D\r\n', '2020-05-13 05:55:58', 'dikicandra021098@gmail.com');
INSERT INTO `comment` VALUES (9, 2, 3, 'Sip gan nanti saya diskon 10% besok saya kirim barangnya. berarti kita udh deal yah. Untuk pembayaran sistemnya bagaimana ?', '2020-05-13 06:00:02', 'petani@gmail.com');
INSERT INTO `comment` VALUES (10, 2, 1, 'iya gan kita udh deal besok kirim aja, untuk pembayaran nnti di tempat yah :D', '2020-05-13 06:00:53', 'dikicandra021098@gmail.com');
INSERT INTO `comment` VALUES (11, 3, 1, 'Pak petani harganya bisa bisa jadi Rp.11.000 per kg? ', '2020-05-13 13:28:31', 'dikicandra021098@gmail.com');
INSERT INTO `comment` VALUES (12, 3, 7, 'Iya boleh, kapan saya bisa kirim?', '2020-05-13 13:29:09', 'petanivokasi@gmail.com');

-- ----------------------------
-- Table structure for list_pesanan
-- ----------------------------
DROP TABLE IF EXISTS `list_pesanan`;
CREATE TABLE `list_pesanan`  (
  `id_listpesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesanan` int(11) NULL DEFAULT NULL,
  `id_product` int(11) NULL DEFAULT NULL,
  `kuantitas` int(11) NULL DEFAULT NULL,
  `harga` int(15) NULL DEFAULT NULL,
  `harga_beli` int(15) NULL DEFAULT NULL,
  PRIMARY KEY (`id_listpesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 154 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of list_pesanan
-- ----------------------------
INSERT INTO `list_pesanan` VALUES (132, 91, 53, 3, 45000, 13500);
INSERT INTO `list_pesanan` VALUES (133, 91, 52, 4, 60000, 13500);
INSERT INTO `list_pesanan` VALUES (134, 91, 44, 3, 60000, 15000);
INSERT INTO `list_pesanan` VALUES (135, 92, 18, 1, 19000, 16500);
INSERT INTO `list_pesanan` VALUES (136, 93, 33, 1, 37000, 25000);
INSERT INTO `list_pesanan` VALUES (137, 93, 32, 1, 42000, 25000);
INSERT INTO `list_pesanan` VALUES (138, 94, 52, 1, 15000, 13500);
INSERT INTO `list_pesanan` VALUES (142, 96, 44, 2, 40000, 15000);
INSERT INTO `list_pesanan` VALUES (143, 97, 44, 2, 40000, 17500);
INSERT INTO `list_pesanan` VALUES (144, 97, 52, 2, 30000, 13500);
INSERT INTO `list_pesanan` VALUES (145, 98, 44, 2, 40000, 17500);
INSERT INTO `list_pesanan` VALUES (146, 98, 52, 2, 30000, 13500);
INSERT INTO `list_pesanan` VALUES (153, 102, 44, 4, 80000, 17500);

-- ----------------------------
-- Table structure for list_promo
-- ----------------------------
DROP TABLE IF EXISTS `list_promo`;
CREATE TABLE `list_promo`  (
  `id_listpromo` int(11) NOT NULL AUTO_INCREMENT,
  `id_promo` int(11) NULL DEFAULT NULL,
  `id_product` int(11) NULL DEFAULT NULL,
  `harga_old` int(15) NULL DEFAULT NULL,
  `harga_new` int(15) NULL DEFAULT NULL,
  PRIMARY KEY (`id_listpromo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for metode_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `metode_pembayaran`;
CREATE TABLE `metode_pembayaran`  (
  `id_bank` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_bank` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_akun` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_rek` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warna` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_bank`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of metode_pembayaran
-- ----------------------------
INSERT INTO `metode_pembayaran` VALUES (1, 'BCA', '014', 'IGSB FARM (BCA)', '127875642', 'bca.png', 'primary');
INSERT INTO `metode_pembayaran` VALUES (2, 'BNI', '009', 'IGSB (BNI)', '89872621', 'bni1.png', 'warning');
INSERT INTO `metode_pembayaran` VALUES (3, 'Mandiri', '008', 'IGSB (Mandiri)', '998551230', 'mandiri.jpg', 'success');

-- ----------------------------
-- Table structure for notifikasi
-- ----------------------------
DROP TABLE IF EXISTS `notifikasi`;
CREATE TABLE `notifikasi`  (
  `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesanan` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `for_iduser` int(11) NULL DEFAULT NULL,
  `message` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `isread` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_notifikasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of notifikasi
-- ----------------------------
INSERT INTO `notifikasi` VALUES (14, 91, 1, 6, 'Diki Candra suandi Melakukan Pembayaran', '1', '2020-06-05 20:35:33');
INSERT INTO `notifikasi` VALUES (15, 92, 1, 6, 'Diki Candra suandi Melakukan Pembayaran', '0', '2020-06-05 20:39:41');
INSERT INTO `notifikasi` VALUES (16, 93, 11, 6, 'salma Melakukan Pembayaran', '1', '2020-06-06 14:37:28');
INSERT INTO `notifikasi` VALUES (17, 94, 1, 6, 'Diki Candra suandi Melakukan Pembayaran', '0', '2020-06-08 10:30:54');
INSERT INTO `notifikasi` VALUES (18, 96, 4, 6, 'konsumen Melakukan Pembayaran', '1', '2020-06-09 13:36:25');
INSERT INTO `notifikasi` VALUES (19, 97, 4, 6, 'konsumen Melakukan Pembayaran', '1', '2020-06-14 09:15:07');
INSERT INTO `notifikasi` VALUES (20, 98, 4, 6, 'konsumen Melakukan Pembayaran', '1', '2020-06-14 09:17:15');
INSERT INTO `notifikasi` VALUES (21, 102, 4, 6, 'konsumen Melakukan Pembayaran', '0', '2021-03-31 12:29:22');

-- ----------------------------
-- Table structure for penawaran
-- ----------------------------
DROP TABLE IF EXISTS `penawaran`;
CREATE TABLE `penawaran`  (
  `id_penawaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_petani` int(11) NULL DEFAULT NULL,
  `nama_produk` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` char(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `stok` float(11, 0) NULL DEFAULT NULL,
  `tanggal_pengiriman` date NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga_penawaran` int(15) NULL DEFAULT NULL,
  `harga_deal` int(15) NULL DEFAULT NULL,
  `jenis_panen` enum('musiman','rutin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto_produk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` enum('nego','approve','batal','add') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_penawaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of penawaran
-- ----------------------------
INSERT INTO `penawaran` VALUES (1, 3, 'Wortel ', '0822874747423', NULL, NULL, 'bogor', 12000, 0, 'musiman', 'product-73.jpg', 'Pesan', 'batal');
INSERT INTO `penawaran` VALUES (2, 3, 'Cabe Merah', '0822874747423', NULL, NULL, 'Sukabumi', 18000, 0, 'rutin', 'product-12.jpg', 'Cabenya merah', 'batal');
INSERT INTO `penawaran` VALUES (3, 7, 'Apel', '0822874747423', NULL, NULL, 'Bogor', 12000, NULL, 'musiman', 'product-10.jpg', 'Kualitas terbaik', 'batal');
INSERT INTO `penawaran` VALUES (4, 3, 'Apel', '08501701198', 23, '2020-05-30', NULL, 12000, NULL, 'musiman', 'product-101.jpg', 'wew', 'batal');
INSERT INTO `penawaran` VALUES (5, 8, 'Apel', '088228989898', 10000, '2020-06-06', 'Bogor', 20000, 18000, 'musiman', 'product-102.jpg', 'Apelnya bentar lagi panen', 'add');
INSERT INTO `penawaran` VALUES (6, 3, 'kaki sapi', '08501701198', 12, '2020-06-05', 'Bogor', 12000, 12000, 'musiman', 'kaki_sapi_potong.jpg', 'wow', 'add');
INSERT INTO `penawaran` VALUES (7, 3, 'Apel', '08501701198', 23000, '2020-06-10', 'Bogor', 20000, 0, 'rutin', 'product-103.jpg', 'Apel nya masih segar', 'nego');

-- ----------------------------
-- Table structure for pesanan
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan`  (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NULL DEFAULT NULL,
  `id_bank` int(11) NULL DEFAULT NULL,
  `tgl_pengiriman` date NULL DEFAULT NULL,
  `total_pembayaran` int(15) NULL DEFAULT NULL,
  `total_keuntungan` int(15) NULL DEFAULT NULL,
  `bukti_pembayaran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bukti_keluhan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alasan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` enum('belum_bayar','verifikasi','dikemas','dikirim','selesai','pengembalian') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created` datetime(0) NULL DEFAULT NULL,
  `tgl_update` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_pesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 103 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanan
-- ----------------------------
INSERT INTO `pesanan` VALUES (91, 1, 1, '2020-06-07', 165000, 123000, 'Contoh-Bukti-Transfer-BRI-Asli-atau-Palsu1.jpg', NULL, NULL, 'selesai', '2020-06-05 20:35:22', '2020-06-17 10:40:38');
INSERT INTO `pesanan` VALUES (92, 1, 3, '0000-00-00', 19000, 2500, '1527432374_27-05-2018_photo60776159611098010011.jpg', 'bengkuang.jpg', 'wew', 'pengembalian', '2020-06-05 20:39:32', '2020-06-17 10:45:20');
INSERT INTO `pesanan` VALUES (93, 11, 3, '2020-06-06', 79000, 29000, '1540447745_25-10-2018_142.jpg', NULL, NULL, 'selesai', '2020-06-06 14:36:23', '2020-06-06 14:40:48');
INSERT INTO `pesanan` VALUES (94, 1, 2, '0000-00-00', 15000, 1500, '1540447745_25-10-2018_143.jpg', NULL, NULL, 'verifikasi', '2020-06-08 10:30:44', '2020-06-08 10:30:54');
INSERT INTO `pesanan` VALUES (96, 4, 2, '2020-06-10', 40000, 25000, '1540447745_25-10-2018_144.jpg', 'bayam_batik.jpg', 'Tidak sesuai', 'pengembalian', '2020-06-09 13:34:31', '2020-06-09 13:40:07');
INSERT INTO `pesanan` VALUES (97, 4, 1, '2020-06-14', 70000, 39000, NULL, NULL, NULL, 'selesai', '2020-06-14 09:01:16', '2020-06-14 09:16:36');
INSERT INTO `pesanan` VALUES (98, 4, 2, '0000-00-00', 70000, 39000, 'IMG-20200613-WA0030.jpg', NULL, NULL, 'verifikasi', '2020-06-14 09:16:49', '2020-06-14 09:17:15');
INSERT INTO `pesanan` VALUES (102, 4, 1, '0000-00-00', 80000, 10000, 'diki.jpg', NULL, NULL, 'verifikasi', '2021-03-31 12:28:52', '2021-03-31 12:29:22');

-- ----------------------------
-- Table structure for petani
-- ----------------------------
DROP TABLE IF EXISTS `petani`;
CREATE TABLE `petani`  (
  `petani_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_telpon` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` int(11) NOT NULL,
  `jenis_panen` enum('musiman','rutin','','') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto_product` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`petani_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of petani
-- ----------------------------
INSERT INTO `petani` VALUES (5, 'Cabe Merah', '0822874747423', 'bogor', 12000, 'musiman', 'cabe1.jpg');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_kategori` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_quantity` float NOT NULL,
  `product_image` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_beli_eksekutif` int(11) NULL DEFAULT NULL,
  `product_price` int(11) NOT NULL,
  `product_price_seller` int(11) NOT NULL,
  `product_price_eksekutif` int(11) NULL DEFAULT NULL,
  `product_added` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_available` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_weight` float NOT NULL,
  `product_weight_eksekutif` float NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `label` enum('konvesional','hydroponic') CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 80 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (18, 'Brokoli', '1', 29400, 'brokoli4.jpg', 16500, 82500, 19000, 18000, 90000, '', '2019-11-27', 200, 1000, 'Brokoli (Brassica oleracea L. Kelompok Italica) adalah tanaman sayuran yang termasuk dalam suku kubis-kubisan atau Brassicaceae. Brokoli berasal dari daerah Laut Tengah dan sudah sejak masa Yunani Kuno dibudidayakan. Sayuran ini masuk ke Indonesia belum lama (sekitar 1970-an) dan kini cukup populer sebagai bahan pangan.\r\n\r\nBagian brokoli yang dimakan adalah kepala bunga berwarna hijau yang tersusun rapat seperti cabang pohon dengan batang tebal. Sebagian besar kepala bunga tersebut dikelilingi dedaunan. Brokoli paling mirip dengan kembang kol, namun brokoli berwarna hijau, sedangkan kembang kol putih.', 'hydroponic');
INSERT INTO `products` VALUES (19, 'Buncis', '1', 34000, 'buncis1.jpg', 13000, 65000, 15000, 14300, 71500, '', '2019-11-27', 200, 1000, 'Buncis adalah sayur yang kaya dengan protein dan vitamin ini membantu menurunkan tekanan darah serta mengawal metabolisme gula dalam darah dan amat sesuai dimakan oleh mereka yang mengidap penyakit diabetes atau hipertensi. Kandungan serat dan enzim yang tinggi dapat membantu penurunan berat badan.', 'hydroponic');
INSERT INTO `products` VALUES (20, 'Basil', '1', 20000, 'basil2.jpg', 15500, 108500, 18000, 17000, 120000, '', '2019-11-27', 35, 250, 'Sayuran Daun Basil adalah tanaman asli India yang dianggap sebagai ramuan dan tanaman suci di sana. Daun Basil banyak memiliki manfaat untuk kesehatan terutama dikarenakan senyawa fitonutrien yang terkandung di dalamnya. Sebagai Sayuran Daun Basil bisa dikonsumsi dengan berbagai campuran bersama jenis sayuran lainnya, terutama pada makanan jenis pizza.', 'hydroponic');
INSERT INTO `products` VALUES (21, 'Wortel Lokal', '1', 37000, 'wortel1.jpg', 18500, 37000, 21000, 20500, 41000, '', '2019-11-27', 500, 1000, 'Wortel mengandung vitamin A yang baik untuk kesehatan mata. Mengkonsumsi wortel baik untuk penglihatan pada mata, terutama bisa meningkatkan pandangan jarak jauh. Selain vitamin A, wortel juga mengandung vitamin B1, B2, B3, B6, B9, dan C, kalsium, zat besi, magnesium, fosfor, kalium, dan sodium.', 'hydroponic');
INSERT INTO `products` VALUES (22, 'Buncis Baby', '1', 30000, 'buncis_baby1.jpg', 15000, 75000, 17000, 16500, 82500, '', '2019-11-27', 200, 10000, 'Buncis adalah sayur yang kaya dengan protein dan vitamin ini membantu menurunkan tekanan darah serta mengawal metabolisme gula dalam darah dan amat sesuai dimakan oleh mereka yang mengidap penyakit diabetes atau hipertensi. Kandungan serat dan enzim yang tinggi dapat membantu penurunan berat badan.', 'hydroponic');
INSERT INTO `products` VALUES (23, 'Cabe Rawit Merah', '1', 46000, 'cabe2.jpg', 15500, 155000, 18000, 17000, 170000, '', '2019-11-27', 100, 1000, 'Buah cabai rawit berubah warnanya dari hijau menjadi merah saat matang. Meskipun ukurannya lebih kecil daripada varietas cabai lainnya, ia dianggap cukup pedas karena kepedasannya mencapai 50.000 - 100.000 pada skala Scoville. Cabai rawit biasa di jual di pasar-pasar bersama dengan varitas cabai lainnya.\r\nManfaat bagi kesehatan:[1]\r\n\r\nMeningkatkan sirkulasi darah\r\nMembantu nyeri otot\r\nMembantu detoksifikasi', 'hydroponic');
INSERT INTO `products` VALUES (24, 'Cuciwis', '1', 36000, 'cuciwis1.jpg', 13000, 130000, 15000, 14500, 145000, '', '2019-11-27', 200, 2000, 'Cuciwis memang memiliki bentuk sama seperti daun sawi hanya saja memiliki ukuran yang lebih kecil. Sama seperti sawi, daun cuciwis juga banyak dimanfaatkan untuk dikonsumsi dan diolah menjadi tumis, atau jenis sayur lainnya. Daun cuciwis sendiri memiliki berbagai manfaat untuk kesehatan karena kandungan dalam cuciwis sangat beragam dan baik untuk kesehatan.', 'hydroponic');
INSERT INTO `products` VALUES (25, 'Daun Ketumbar', '1', 18000, 'daun_ketumbar4.jpg', 13500, 135000, 15000, 14500, 145000, '', '2019-11-27', 100, 1000, 'Daun ketumbar sarat akan vitamin C, yang membantu membentuk dan melestarikan jaringan ikat, seperti kolagen, di kornea mata. Selain itu, daun ketumbar menjaga pembuluh darah agar tetap kuat dan fleksibel.\r\n\r\nNutrisi bermanfaat lain dalam daun ketumbar adalah beta karoten. Ini adalah pigmen alami yang ditemukan dalam berbagai makanan nabati, yang digunakan tubuh untuk membuat vitamin A', 'hydroponic');
INSERT INTO `products` VALUES (26, 'Daun Singkong', '1', 29000, 'daun_singkong4.jpg', 13500, 67500, 15000, 14500, 72500, '', '2019-11-26', 200, 1000, 'andungan zat besi yang tinggi pada daun singkong sangat bermanfaat bagi ibu hamil dalam mengatasi masalah anemia. Mengonsumsi daun singkong saat hamil juga dapat meningkatkan jumlah folat dan vitamin C yang sangat penting bagi perkembangan janin dalam kandungan. Ibu hamil bisa mengonsumsinya dengan cara diolah menjadi sayur.', 'hydroponic');
INSERT INTO `products` VALUES (27, 'Ubi Jepang', '3', 39000, 'ubi_jepang4.jpg', 24500, 24500, 28000, 27000, 27000, '', '2019-11-27', 1000, 1000, 'Ubi jepang atau yang memiliki nama Latin Satsui maimo merupakan produk pertanian yang memiliki potensi untuk dikembangkan. Masa tanamnya hanya sekitar 4–5 bulan sedangkan ubi lokal perlu waktu 6–8 bulan. Pasarnya pun bukan hanya di dalam negeri, seperti supermarket dengan pasar ekspatriat (supermarket Jepang), pasar luar negeri seperti Korea dan Jepang juga terbuka lebar, hanya saja hingga kini  belum  bisa dipenuhi.', 'hydroponic');
INSERT INTO `products` VALUES (28, 'Ubi Putih', '3', 48000, 'ubi_putih2.jpg', 15500, 15500, 18000, 17000, 16996, '', '2019-11-27', 1000, 1000, 'Ubi jalar (Ipomoea batatas) atau dalam bahasa Inggrisnya sweet potato adalah sejenis tanaman budidaya. Bagian yang dimanfaatkan adalah akarnya yang membentuk umbi dengan kadar gizi (karbohidrat) yang tinggi. Di Afrika, umbi ubi jalar menjadi salah satu sumber makanan pokok yang penting. Di Asia, selain dimanfaatkan umbinya, daun muda ubi jalar juga dibuat sayuran. Terdapat pula ubi jalar yang dijadikan tanaman hias karena keindahan daunnya.', 'hydroponic');
INSERT INTO `products` VALUES (29, 'Daging Sapi', '4', 77000, 'daging_sapi5.jpg', 113000, 113000, 130000, 124500, 124500, '', '2019-11-27', 1000, 1000, 'Daging sapi (bahasa Inggris: beef) adalah daging yang diperoleh dari sapi yang biasa dan umum digunakan untuk keperluan konsumsi makanan. Di setiap daerah, penggunaan daging ini berbeda-beda tergantung dari cara pengolahannya. Sebagai contoh has luar, daging iga dan T-Bone sangat umum digunakan di Eropa dan di Amerika Serikat sebagai bahan pembuatan steak sehingga bagian sapi ini sangat banyak diperdagangkan. Akan tetapi seperti di Indonesia dan di berbagai negara Asia lainnya daging ini banyak digunakan untuk makanan berbumbu dan bersantan seperti sup konro dan rendang.', 'konvesional');
INSERT INTO `products` VALUES (30, 'Daging Ayam Kampung', '4', 19000, 'daging_ayam3.jpg', 87000, 87000, 100000, 96000, 96000, '', '2019-11-27', 1500, 1500, 'Daging ayam ras\r\n17 OCT KANDUNGAN GIZI DAGING AYAM RAS\r\nPosted at 13:53h in Fakta Kesehatan by EatjoyAdmin 0 Comments  \r\n1Like\r\n \r\nDaging ayam ras atau ayam potong merupakan sumber protein hewani yang baik, karena mengandung asam amino esensial yang lengkap dan dalam perbandingan jumlah yang baik. Untuk itulah kenapa ayam potong masih menjadi favorit menu masakan. Selain itu serat-serat daging ayam potong pendek dan lunak sehingga mudah untuk dicerna. Dalam ulasan kali ini Rumah Ayam Sehat akan mencoba mengulas kandungan atau komposisi gizi daging ayam potong. Yuk, kita mulai!', 'konvesional');
INSERT INTO `products` VALUES (31, 'Iga Sapi', '4', 9000, 'iga_sapi2.jpg', 70000, 70000, 80000, 77000, 76997, '', '2019-11-27', 1000, 1000, 'Iga sapi mengandung protein sebanyak 7 gram per 3 ½- oz. Protein tersebut , apabila dikombinasi dengan vitamin D dan kalsium , akan membantu mencegah osteoporosis. Untuk menerima manfaat tersebut , rebus tulang iga dengan cairan asam ibarat jus lemon , cuka atau anggur semoga kalsium bisa lepas dari matriks tulang.', 'konvesional');
INSERT INTO `products` VALUES (32, 'Ikan Mas', '5', 12000, 'ikan_mas1.jpg', 36500, 36500, 42000, 40500, 40500, '', '2019-11-27', 1000, 1000, 'Ikan Mas', 'konvesional');
INSERT INTO `products` VALUES (33, 'Ikan Lele', '5', 10000, 'ikan_lele1.jpg', 32500, 32500, 37000, 36000, 36000, '', '2019-11-27', 1000, 1000, 'ikan Lele', 'konvesional');
INSERT INTO `products` VALUES (37, 'Kentang', '3', 47000, 'kentang3.jpg', 18500, 37000, 21000, 20500, 41000, '', '2019-11-27', 500, 1000, 'Kentang adalah sumber vitamin dan mineral yang sangat baik. Kandungan nutrisi kentang dapat bervariasi tergantung pada cara mengolahnya. Misalnya, kentang goreng. Lebih banyak kalori dan lemak dari kentang goreng daripada kentang panggang.\r\n\r\nPenting juga untuk dicatat bahwa kulit kentang mengandung banyak vitamin dan mineral. Mengupas kentang dapat secara signifikan mengurangi kandungan gizinya.', 'konvesional');
INSERT INTO `products` VALUES (39, 'Butternut Pumpkin', '2', 35000, 'bp3.jpg', 38000, 38000, 43000, 42000, 42000, '', '2019-11-27', 1000, 1000, 'Butternut Squash atau yang biasa disebut sebagai Labu Parang. Sayuran yang berwarna kuning cerah dan berbentuk seperti lonceng ini ternyata banyak sekali manfaatnya loh.. Karena teksturnya yang lembut dan rasanya yang lezat, sayuran ini juga sangat aman dan bergizi untuk para balita, terutama untuk program Makanan Pendamping ASI atau MPASI. Dengan kandungan Vitamin A, C dan E yang dapat bermanfaat untuk kesehatan mata, menjaga kesehatan tubuh dari radikal bebas serta mendukung kesehatan pencernaan bayi.', 'hydroponic');
INSERT INTO `products` VALUES (40, 'Tempe Organik', '6', 37000, 'tempe2.jpg', 15500, 51500, 18000, 17000, 56500, '', '2019-11-27', 300, 1000, 'Berbahan dasar kedelai organik', 'hydroponic');
INSERT INTO `products` VALUES (44, 'Tahu sumedang (30biji)', '6', 25500, 'tahu_sumedang3.jpg', 17500, 35000, 20000, 19500, 39000, '', '2020-06-01', 500, 1000, 'Tahu sumedang tanpa pengawet, sehat dan higenis', 'hydroponic');
INSERT INTO `products` VALUES (45, 'Bebek Frozen', '4', 20000, 'bebek_frozen1.jpg', 57000, 56997, 65000, 63000, 63000, '', '2020-06-01', 1000, 1000, '1 ekor bebek frozen, dengan pengemasan yang higenis', 'konvesional');
INSERT INTO `products` VALUES (46, 'Kaki sapi potong', '4', 49000, 'kaki_sapi_potong3.jpg', 122000, 122000, 140000, 134500, 134500, '', '2020-06-01', 1000, 1000, '', 'konvesional');
INSERT INTO `products` VALUES (48, 'Bayam batik', '1', 30000, 'bayam_batik5.jpg', 13500, 54000, 15000, 14500, 58000, '', '2020-06-03', 250, 1000, 'Bayam Batik atau yang biasa disebut dengan bayam bicolor (bayam dua warna) adalah bayam yang memiliki warna hijau dengan warna merah di tengah seperti batik. Bayam ini termasuk ke dalam Genus Amaranthus bukan Spinach. Bayam Batik dapat tumbuh dengan baik di seluruh dataran baik rendah ataupun tinggi dan cukup mendapatkan sinar matahari sepanjang hari. umur panen sekitar 25 sampai 30 hari setelah tanam. \r\n\r\nManfaat Bayam Batik Bagi Kesehatan:\r\n1. Sangat baik untuk masa pertumbuhan\r\n2. sebagai obat melawan sel kanker\r\n3. Mencegah Anemia\r\n4. Mencegah Diabetes\r\n5. Mengobati Pendarahan gusi\r\n6. Mengurangi resiko terserang Kardiovaskular\r\n7. Meningkatkan kekebalan tubuh\r\n8. Sebagai obat jantung lebih sehat\r\n9. Menjaga kesehatan otak dan meningkatkan daya ingat\r\n10. Menurunkan tekanan darah tinggi\r\n11. Menutrisi tulang dan sendi\r\n12. Menyehatkan kulit\r\n13. Menyehatkan organ pencernaan\r\n14. Sebagai obat untuk penglihatan yang lebih baik\r\n15. Obat sumber anti inflamasi\r\n\r\nUntuk mendapatkan khasiat dan manfaat dari bayam ini cukup dengan mengkonsumsi sesuai keinginan, misalnya jika suka sayur bayam bisa dibuat sayur bening atau sup bayam, suka pecel bisa dibuat pecel, kalau untuk MPASI bayi bayam direbus kemudian dihaluskan.', 'hydroponic');
INSERT INTO `products` VALUES (52, 'Bayam merah', '1', 36250, 'bayam_merah4.jpg', 13500, 54000, 15000, 14500, 58000, '', '2020-06-05', 250, 1000, 'Bayam merah sehat', 'hydroponic');
INSERT INTO `products` VALUES (53, 'Bayam Hijau', '1', 18500, 'bayam1.jpg', 13500, 54000, 15000, 14500, 58000, '', '2020-06-06', 250, 1000, 'Bayam Hijau', 'hydroponic');
INSERT INTO `products` VALUES (55, 'Buah Bit', '2', 29600, 'bit.jpg', 15500, 77500, 18000, 17000, 85000, '', '2020-06-08', 200, 1000, 'Kandungan Sehat dalam Buah Bit\r\nBuah bit memiliki banyak kandungan sehat seperti yang berikut ini:\r\n\r\n1.Zat besi\r\n2.Fosfor\r\n3.Triptofan\r\n4.Betasianin\r\n5.Vitamin C\r\n6.Asam folat\r\n7.Serat\r\n8,Kaliumen\r\n9.Magnesium\r\n10.Caumarin', 'hydroponic');
INSERT INTO `products` VALUES (56, 'Bawang Putih Tunggal', '1', 30000, 'bawang_putih.jpg', 30500, 122000, 35000, 34000, 136000, '', '2020-06-10', 250, 1000, 'Bawang Putih Tunggal', 'hydroponic');
INSERT INTO `products` VALUES (57, 'Cabe Merah Besar', '1', 30000, 'Cabe_Merah_Besar.jpg', 15500, 77500, 18000, 17000, 85000, '', '2020-06-10', 200, 1000, 'Cabe Merah Besar', 'hydroponic');
INSERT INTO `products` VALUES (58, 'Jahe Merah', '1', 32000, 'jahemerah.jpg', 17500, 87500, 20000, 19500, 97500, '', '2020-06-10', 200, 1000, 'Jahe Merah', 'hydroponic');
INSERT INTO `products` VALUES (59, 'Bengkuang', '3', 30000, 'bengkuang.jpg', 23000, 23000, 26000, 25500, 25500, '', '2020-06-10', 1000, 1000, 'Bengkuang', 'hydroponic');
INSERT INTO `products` VALUES (60, 'Alpukat', '2', 30000, 'alpukat.jpg', 30500, 30500, 35000, 34000, 34000, '', '2020-06-10', 1000, 1000, 'Alpukat', 'hydroponic');
INSERT INTO `products` VALUES (61, 'Pastel Non-MSG', '6', 30000, 'PASTEL.jpg', 15500, 77500, 18000, 17000, 85000, '', '2020-06-10', 200, 1000, 'PASTEL NON-MSG', 'hydroponic');
INSERT INTO `products` VALUES (62, 'Peyek Non-MSG', '6', 30000, 'peyek.jpg', 33500, 167500, 38000, 37000, 185000, '', '2020-06-10', 200, 1000, 'Peyek NON_MSG', 'hydroponic');
INSERT INTO `products` VALUES (63, 'Ashera Almond Milk', '6', 30000, 'almondmilk.jpg', 33500, 134000, 38000, 37000, 148000, '', '', 250, 1000, 'Ashera Almond Milk', 'hydroponic');
INSERT INTO `products` VALUES (64, 'Beras Putih Cianjur', '6', 150000, 'berascianjur1.jpg', 104500, 104500, 120000, 115000, 115000, '', '2020-06-10', 5000, 5000, 'Beras Putih Cianjur', 'hydroponic');
INSERT INTO `products` VALUES (65, 'Beras Merah Cianjur', '6', 50000, 'Beras_Merah_Cianjur_NYISRI.jpg', 148000, 148000, 170000, 163000, 163000, '', '2020-06-10', 5000, 5000, 'Berah merah cianjur', 'hydroponic');
INSERT INTO `products` VALUES (66, 'Telur Asin', '6', 50000, 'telur-asin-istockphoto.jpg', 29000, 58000, 34000, 32000, 64000, '', '2020-06-10', 500, 1000, 'Telur asin ', 'hydroponic');
INSERT INTO `products` VALUES (67, 'Telur Ayam Kampung', '6', 50000, 'tel.jpg', 24000, 48000, 28000, 26500, 53000, '', '2020-06-10', 500, 1000, 'Telur kampung sehat', 'hydroponic');
INSERT INTO `products` VALUES (68, 'Ikan Gurame', '5', 30000, 'gurame.jpg', 52500, 52500, 60000, 58000, 58000, '', '2020-06-10', 1000, 1000, 'Ikan Gurame', 'konvesional');
INSERT INTO `products` VALUES (69, 'Cingur Sapi', '4', 30000, 'cingursapi.jpg', 70000, 70000, 80000, 77000, 77000, '', '2020-06-10', 1000, 1000, 'CIngur Sapi', 'hydroponic');
INSERT INTO `products` VALUES (70, 'Tetelan Sapi', '4', 30000, 'tetelan.jpg', 61000, 61000, 70000, 67500, 67500, '', '2020-06-10', 1000, 1000, 'Tetelan Sapi', 'hydroponic');
INSERT INTO `products` VALUES (71, 'Cabe Hijau Besar', '1', 50000, 'cabe-hijau.jpg', 15500, 62000, 18000, 17000, 68000, '', '2020-06-11', 250, 1000, 'Cabe hijau hydroponic', 'hydroponic');
INSERT INTO `products` VALUES (72, 'Daun Bawang', '1', 50000, 'daun_bawang.jpg', 15000, 75000, 17000, 16500, 82500, '', '2020-06-10', 200, 1000, 'Daun bawang', 'hydroponic');
INSERT INTO `products` VALUES (73, 'Daun Kelor Kering', '1', 50000, 'daunkelor.jpg', 14000, 140000, 16000, 15500, 155000, '', '2020-06-10', 15, 150, 'Daun kelor kering', 'hydroponic');
INSERT INTO `products` VALUES (74, 'Oatmeal', '6', 40000, 'oatmeal.jpg', 35000, 350000, 40000, 38500, 385000, '', '', 100, 1000, 'Oatmeal ', 'hydroponic');
INSERT INTO `products` VALUES (75, 'Biscotti Vegan', '6', 30000, 'biscotti.jpg', 66500, 266000, 76000, 73500, 294000, '', '2020-06-12', 250, 1000, 'Biscotti Vegan', 'hydroponic');
INSERT INTO `products` VALUES (76, 'Jambu Kristal ', '2', 30000, 'jambu.jpg', 22000, 220000, 25000, 24500, 245000, '', '2020-06-12', 100, 1000, 'Jambu Kristal', 'hydroponic');
INSERT INTO `products` VALUES (77, 'Zucchini', '1', 30000, 'zucchini.jpg', 20500, 205000, 23000, 22500, 225000, '', '2020-06-12', 500, 1000, 'Zucchini', 'hydroponic');
INSERT INTO `products` VALUES (78, 'Hati Sapi', '4', 48000, 'hati.jpg', 57000, 57000, 65000, 63000, 63000, '', '2020-06-12', 1000, 1000, 'Hati Sapi', 'konvesional');
INSERT INTO `products` VALUES (79, 'Granola', '6', 30000, 'granola.jpg', 66500, 266000, 76000, 73500, 294000, '', '2020-06-12', 250, 1000, 'Granola', 'hydroponic');

-- ----------------------------
-- Table structure for promo
-- ----------------------------
DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo`  (
  `id_promo` int(11) NOT NULL AUTO_INCREMENT,
  `promo_name` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `start_promo` date NULL DEFAULT NULL,
  `end_promo` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_promo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for rate_product
-- ----------------------------
DROP TABLE IF EXISTS `rate_product`;
CREATE TABLE `rate_product`  (
  `id_rate` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NULL DEFAULT NULL,
  `id_user` int(11) NULL DEFAULT NULL,
  `rate` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `comment` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_rate`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rate_product
-- ----------------------------
INSERT INTO `rate_product` VALUES (5, 22, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (6, 23, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (7, 24, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (8, 25, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (9, 27, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (10, 28, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (11, 30, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (12, 31, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (13, 33, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (14, 37, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (15, 39, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (16, 40, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (17, 41, 1, '5', 'produknya bagus semua');
INSERT INTO `rate_product` VALUES (18, 18, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget');
INSERT INTO `rate_product` VALUES (19, 19, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget');
INSERT INTO `rate_product` VALUES (20, 20, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget');
INSERT INTO `rate_product` VALUES (21, 32, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget');
INSERT INTO `rate_product` VALUES (22, 26, 1, '4', 'Produk bagus sekali pengemasan juga bagus banget');
INSERT INTO `rate_product` VALUES (23, 30, 1, '4', 'mantap');
INSERT INTO `rate_product` VALUES (24, 30, 1, '5', '');
INSERT INTO `rate_product` VALUES (25, 30, 1, '5', '');
INSERT INTO `rate_product` VALUES (26, 31, 1, '5', '');
INSERT INTO `rate_product` VALUES (27, 33, 1, '5', '');
INSERT INTO `rate_product` VALUES (28, 32, 1, '5', '');
INSERT INTO `rate_product` VALUES (29, 31, 1, '5', 'Produknya higenis');
INSERT INTO `rate_product` VALUES (30, 33, 11, '5', '');
INSERT INTO `rate_product` VALUES (31, 32, 11, '5', '');
INSERT INTO `rate_product` VALUES (32, 44, 4, '5', 'wow');
INSERT INTO `rate_product` VALUES (33, 44, 4, '5', 'Mntep');
INSERT INTO `rate_product` VALUES (34, 52, 4, '5', 'Mntep');
INSERT INTO `rate_product` VALUES (35, 53, 1, '5', 'keren');
INSERT INTO `rate_product` VALUES (36, 52, 1, '5', 'keren');
INSERT INTO `rate_product` VALUES (37, 44, 1, '5', 'keren');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_hp` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `addres` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `img_profile` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_lahir` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `wilayah` varchar(65) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_user` enum('admin','konsumen','seller','konsumen_eksekutif','petani') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Diki Candra suandi', 'dikicandra021098@gmail.com', '082287469974', '43b93443937ea642a9a43e77fd5d8f77', 'jl.koramil RT.01/04 Desa Nyangkowek Kec.Cicurug Kab.Sukabumi 44359', 'logo-igsb.jpg', 'Laki-laki', '1998-10-02', 'Bogor', 'admin');
INSERT INTO `user` VALUES (3, 'Petani bogor', 'petani@gmail.com', '08501701198', 'd180e8e96956e056f23a05fadda0e2bd', 'Bogor', 'default.png', 'Laki-laki', '', '', 'petani');
INSERT INTO `user` VALUES (4, 'konsumen', 'konsumen@gmail.com', '089666261299', '94727b16c2221c188d39993e39f39ac3', 'Bogor', 'default.png', 'Laki-laki', '', '', 'konsumen');
INSERT INTO `user` VALUES (5, 'Seller', 'Seller@gmail.com', '089666261299', '64c9ac2bb5fe46c3ac32844bb97be6bc', 'Bogor', 'default.png', 'Laki-laki', '', '', 'seller');
INSERT INTO `user` VALUES (6, 'admin', 'admin@gmail.com', '085017011', '21232f297a57a5a743894a0e4a801fc3', 'bogor', 'default.png', 'Laki-laki', '', '', 'admin');
INSERT INTO `user` VALUES (9, 'konsumen eksekutif', 'konsumen_eksekutif@gmail.com', '085702109865', '4de0c6b8c4d8f0ee6b71d0f620026eeb', 'bogor', 'default.png', 'Laki-laki', '', '', 'konsumen_eksekutif');

SET FOREIGN_KEY_CHECKS = 1;
