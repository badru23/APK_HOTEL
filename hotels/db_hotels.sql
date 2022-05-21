-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2022 pada 01.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotels`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_tipe_kamar` (`id_kamar` INT(11))   BEGIN
	delete from tipe_kamar where id_kamar=id_kamar;
	END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user` (`id_user` INT(11))   BEGIN
	DELETE FROM tipe_kamar WHERE id_user=id_user;
	END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_fas_hotel` (`id_fashotel` INT(11), `nama_fashotel` TEXT, `keterangan` TEXT, `gambar` TEXT)   BEGIN
	INSERT INTO fas_hotel
	VALUE (id_fashotel, nama_fashotel, keterangan, gambar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_fas_kamar` (`id_fashotel` INT(11), `nama_fashotel` TEXT, `keterangan` TEXT, `gambar` TEXT)   BEGIN
	INSERT INTO fas_kamar
	VALUE (id_fashotel, nama_fashotel, keterangan, gambar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_pemesanan` (`id_pemesanan` INT(11), `nama_pemesan` VARCHAR(50), `email` VARCHAR(50), `no_telp` VARCHAR(12), `nama_tamu` VARCHAR(50), `id_kamar` INT(11), `tgl_cekin` DATE, `tgl_cekout` DATE, `jml_kamar` INT(11), `total_harga` INT(11), `pembayaran` VARCHAR(50), `status_book` ENUM('Cekin','Cekout'), `kode_pesanan` VARCHAR(50))   BEGIN
	INSERT INTO pemesanan
	VALUE (id_pemesanan, nama_pemesan, email, no_telp, nama_tamu, id_kamar, tgl_cekin, tgl_cekout, jml_kamar, total_harga, pembayaran, status_book, kode_pesanan
	);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_tipe_kamar` (`id_kamar` INT(11), `nama_kamar` VARCHAR(255), `stok` INT(11), `gambar` VARCHAR(255))   BEGIN
	INSERT INTO fas_kamar
	VALUE (id_kamar, nama_kamar, stok, gambar);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_user` (`id_login` INT(11), `username` VARCHAR(20), `passwords` VARCHAR(20), `nama` VARCHAR(30), `jenis_kelamin` ENUM('Laki-Laki','Perempuan'), `tgl_lahir` DATE, `no_telp` VARCHAR(12), `levels` ENUM('tamu','admin','resepsionis'))   BEGIN
	INSERT INTO fas_kamar
	VALUE (id_login, username, passwords, nama, jenis_kelamin, tgl_lahir, no_telp, levels);
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fas_hotel`
--

CREATE TABLE `fas_hotel` (
  `id_fashotel` int(11) NOT NULL,
  `nama_fashotel` text NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fas_hotel`
--

INSERT INTO `fas_hotel` (`id_fashotel`, `nama_fashotel`, `keterangan`, `gambar`) VALUES
(1, 'Kolam Renang', 'Kolam renang berada di lantai dasar dengan luas 100m2.luar ruangan ini dirancang untuk tamu dewasa dan beroperasi dari 6:00-21:00 setiap hari, dengan dikelilingi taman tropis yang indah. Kolam renang anak juga tersedia disebelahnya, lengkap dengan kursi nyaman dan meja payung untuk melengkapi pengalaman anda dalam menikmati fasilitas hotel kami.', 'https://sultanjakarta.com/data/upload/images/77ac52cc0696fbb389982dc17808a4bc_crop_920x530.jpg'),
(2, 'Ruangan Serbaguna', 'Ruangan Serbaguna berada di lantai dasar dengan luas 500m2, menjadi salah satu bagian terpenting dari deretan venue pernikahan kami. Terletak di sekitar area Infinity Pool, venue ­semi-outdoor ini dapat menjadi pilihan tepat bagi Anda yang ingin menggelar pesta dengan nuansa penuh keakraban.\r\nDapat mengakomodasi 100 – 300 tamu undangan, Ruangan Serbaguna menawarkan perpaduan antara keindahan dan keanggunan lewat dekorasi ukiran kayu Jawa-nya. Keunikan inilah yang dapat menjadi elemen terpenting dalam membangun nuansa intim dan sakral di hari bahagia Anda. ', 'https://1.bp.blogspot.com/-5eahfbrD_1Q/XrnKc4cU1iI/AAAAAAAAA6I/jm_4iVk0Ke89zESlO1GxB8bhIMNkmE8MgCEwYBhgL/s1600/ilmuperhotelan.my.id.jpg'),
(3, 'Pusat Kebugaran', 'Pusat Kebugaran berada di lantai teratas dengan luas 200m2, Salah satu fasilitas yang banyak dimanfaatkan tamu ketika menginap di hotel hebat adalah fasilitas gym. Fasilitas gym yang ada di dalam hotel hebat dibangun khusus untuk tamu yang menginap di hotel. Sebelum sarapan, pengunjung hotel bisa berolah raga dengan fasilitas gym yang tersedia di dalam hotel. Lengkapnya peralatan olah raga yang ada di dalam fasilitas gym tersebut tentu saja akan membuat para tamu tidak akan merasa bosan ketika berada di dalam hotel. Mulai dari fasilitas lari hingga fasilitas untuk angkat berat dan push up ada di dalam fasilitas gym yang ada di dalam hotel. Ketika menginap di hotel ini, anda bisa sekaligus tetap bisa menjaga kesehatan dengan berolah raga ringan.', 'https://res.cloudinary.com/miles-extranet-dev/image/upload/v1584502966/Kentucky/account_photos/2080/loudtn-omni-louisville-fitness-center.jpg'),
(4, 'Spa', 'Spa berada di lantai 3 dengan luas 400m2, Fasilitas SPA yang luar biasa. Menawarkan akses gratis ke area spa dan kolam renang indoor. Wi-Fi gratis disediakan di seluruh properti dan parkir pribadi gratis tersedia di lokasi.', 'https://vector41.com/wp-content/uploads/2020/12/Desain-Interior-Zeef-Aura-Spa-sauna-reflexy-Aceh-Desain-Spa-Medan-Vector-41-9.jpg?x50288'),
(5, 'Restoran', 'Restoran berada di lantai 4 dengan luas 350m2, Bersantap bersama kami di Hotel Hebat merupakan pengalaman yang tak tertandingi. Biarkan kami menarik perhatian Anda dengan saat bersantap yang tak terlupakan di The Gallery Restaurant yang berdekor artistik dengan pilihan berbagai jenis makanan internasional yang lezat.\r\n \r\nAtau Anda dapat mencicipi makanan ringan di The Marble Court atau bersantai di dalam lingkungan indah bar kami yang eksotik di lantai dasar, di mana makanan ringan dan cocktail tropis dapat Anda nikmati. \r\n \r\nApabila Anda ingin bersantap tanpa meninggalkan kenyamanan kamar Anda, kami menyediakan layanan bersantap di kamar selama 24 jam.', 'https://cdn.medcom.id/dynamic/content/2020/06/03/1150321/ZrXpe7bdvR.jpg?w=480'),
(6, 'Bar ', 'Bersantai dengan teman-teman Anda untuk minum. Nikmati berbagai macam steak yang luar biasa dan menu spesial sehari-hari lainnya yang menggugah selera. Menghibur Anda setiap Rabu hingga Jumat malam, juga Sabtu setiap dua minggu dengan band akustik lokal.\r\n\r\nBuka setiap hari dengan kapasitas 75% dan tetap mengikuti aturan protokol kesehatan.\r\n\r\nSenin – Minggu pukul 16.00 – 01.00\r\n\r\nHari Libur 16.00 – 01.00', 'https://cdn1-production-images-kly.akamaized.net/5bmqwJO3gUtDVIHR9HwNXbAygRc=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1821556/original/079602100_1515143901-5a4b60c7b0bcd58c028b7ab7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fas_kamar`
--

CREATE TABLE `fas_kamar` (
  `id_faskamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama_faskamar` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fas_kamar`
--

INSERT INTO `fas_kamar` (`id_faskamar`, `id_kamar`, `nama_faskamar`, `kategori`, `gambar`) VALUES
(1, 1, 'Kamar Berukuran Luas 32m2', 'Furniture', 'https://bhgp.bayviewhotels.com/wp-content/uploads/sites/177/2017/09/Superior-Room-King.jpg'),
(2, 1, 'Kamar Mandi Shower', 'Furniture', 'https://images.homify.com/images/a_0,c_fit,f_auto,q_auto,w_554/v1473012577/p/photo/image/1640964/BA%C3%91O_RECAMARA_copy/modern-kamar-mandi-photos-in-white-by-loft-estudio-arquitectura-y-diseno.jpg'),
(3, 1, 'Coffee Maker', 'Furniture', 'https://icdn.digitaltrends.com/image/digitaltrends/keurig-k-supreme.jpg'),
(4, 1, 'AC', 'Furniture', 'https://www.abangbenerin.com/blog/wp-content/uploads/2021/04/10-Merk-AC-terbaik-2021-Hemat-Dingin-dan-Tahan-Lama-1200x675.jpg'),
(5, 1, 'Wifi Gratis', 'Furniture', 'https://alethea.in/wp-content/uploads/wifiinhotels-600x400.png'),
(6, 1, 'LED TV 32 inch', 'Furniture', 'https://www.99.co/blog/indonesia/wp-content/uploads/2021/09/panasonic-tv-led-43.jpg'),
(7, 2, 'Kamar Berukuran luas 32 m2', 'Furniture', 'https://bhgp.bayviewhotels.com/wp-content/uploads/sites/177/2017/09/Superior-Room-King.jpg'),
(8, 2, 'LED TV 32 inch', 'Furniture', 'https://www.99.co/blog/indonesia/wp-content/uploads/2021/09/panasonic-tv-led-43.jpg'),
(9, 2, 'Sofa', 'Furniture', 'https://cf.bstatic.com/xdata/images/hotel/max500/30489223.jpg?k=772756a18f02be42fc1b2e73c209e2796c4cf72fa4f15d6d2566c85fa15e02aa&o=&hp=1'),
(11, 2, 'Kamar Mandi Shower', 'Furniture', 'https://images.homify.com/images/a_0,c_fit,f_auto,q_auto,w_554/v1473012577/p/photo/image/1640964/BA%C3%91O_RECAMARA_copy/modern-kamar-mandi-photos-in-white-by-loft-estudio-arquitectura-y-diseno.jpg'),
(12, 2, 'Coffe Maker', 'Furniture', 'https://icdn.digitaltrends.com/image/digitaltrends/keurig-k-supreme.jpg'),
(13, 2, 'AC', 'Furniture', 'https://www.abangbenerin.com/blog/wp-content/uploads/2021/04/10-Merk-AC-terbaik-2021-Hemat-Dingin-dan-Tahan-Lama-1200x675.jpg'),
(14, 2, 'Wifi Gratis', 'Furniture', 'https://alethea.in/wp-content/uploads/wifiinhotels-600x400.png'),
(15, 3, 'Kamar Berukuran Luas 40m2', 'Furniture', 'https://www.jsluwansa.com/wp-content/uploads/sites/188/2021/05/JSL-Deluxe-Room-1-2.jpg'),
(16, 3, 'Kamar mandi shower', 'Furniture', 'https://images.homify.com/images/a_0,c_fit,f_auto,q_auto,w_554/v1473012577/p/photo/image/1640964/BA%C3%91O_RECAMARA_copy/modern-kamar-mandi-photos-in-white-by-loft-estudio-arquitectura-y-diseno.jpg'),
(17, 3, 'Bathub', 'Furniture', 'https://bathtub.id/wp-content/uploads/2018/05/desain-kamar-mandi-dengan-bathub-modern-44-750x500.jpg'),
(18, 3, 'Coffe maker', 'Furniture', 'https://ssl.latcdn.com/img/4Kw6altQh-a-1000w-inverter-can-run-a-coffee-pot.jpg'),
(19, 3, 'AC', 'Furniture', 'https://www.abangbenerin.com/blog/wp-content/uploads/2021/04/10-Merk-AC-terbaik-2021-Hemat-Dingin-dan-Tahan-Lama-1200x675.jpg'),
(20, 3, 'LED TV 40 inch', 'Furniture', 'https://id-live.slatic.net/v2/resize/products/11268716-8d8935137c9a7ac7eb99df3b6912d35d.jpg'),
(21, 3, 'Sofa', 'Furniture', 'https://img.okezone.com/content/2021/03/08/406/2374456/long-stay-di-surabaya-nikmati-oakwood-hotel-residence-surabaya-hotel-bergaya-residence-berkelas-bintang-5-ntHsjaxOyn.jpg'),
(22, 3, 'Wifi Gratis', 'Furniture', 'https://alethea.in/wp-content/uploads/wifiinhotels-600x400.png'),
(23, 4, 'Kamar Berukuran Luas 48m2', 'Furniture', 'https://sutasomahotel.com/wp-content/uploads/sites/154/2021/03/WP_2077-Edit.jpg'),
(24, 4, 'Sofa', 'Furniture', 'https://www.hotelkristal.com/wp-content/uploads/sites/221/2017/12/2-BEDROOM-SUPERIOR-LIVING-ROOM.jpeg'),
(25, 4, 'Meja Makan', 'Furniture', 'https://q-xx.bstatic.com/xdata/images/hotel/max1280x900/71396172.jpg?k=26a1086d6f63d74461fb24fe2e01e02f192d1ea3e47bf1daf4356ab2f9564184&o='),
(26, 4, 'AC', 'Furniture', 'https://www.abangbenerin.com/blog/wp-content/uploads/2021/04/10-Merk-AC-terbaik-2021-Hemat-Dingin-dan-Tahan-Lama-1200x675.jpg'),
(27, 4, 'Wifi Gratis', 'Furniture', 'https://alethea.in/wp-content/uploads/wifiinhotels-600x400.png'),
(28, 4, 'LED TV 60 inch', 'Furniture', 'https://www.lg.com/us/images/tvs/60lb6100/gallery/large02.jpg'),
(29, 4, 'Coffee Maker', 'Furniture', 'https://icdn.digitaltrends.com/image/digitaltrends/keurig-k-supreme.jpg'),
(30, 4, 'Kamar Mandi Shower', 'Furniture', 'https://3.bp.blogspot.com/-Nz9gbcLRkeQ/VwzqNhOgTPI/AAAAAAAAP_A/LwM_ss-_qyE7nTWY3DOExebFZgCOP0fNgCLcB/s1600/33.jpg'),
(31, 4, 'Bathup', 'Furniture', 'https://cdn.cloud.grohe.com/Web/4_3/ZZH_T20351F01_000_01_4_3/4_3/960/ZZH_T20351F01_000_01_4_3_4_3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tgl_cekin` date NOT NULL,
  `tgl_cekout` date NOT NULL,
  `jml_kamar` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `payend` enum('0','1') NOT NULL,
  `status_book` enum('Cekin','Cekout') NOT NULL,
  `kode_pesanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `batal` AFTER DELETE ON `pemesanan` FOR EACH ROW BEGIN
UPDATE tipe_kamar
SET stok = stok + OLD.jml_kamar
WHERE id_kamar = OLD.id_kamar;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `stok` AFTER INSERT ON `pemesanan` FOR EACH ROW BEGIN
UPDATE tipe_kamar SET stok =
stok-NEW.jml_kamar
WHERE id_kamar = NEW.id_kamar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kamar`
--

CREATE TABLE `tipe_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`id_kamar`, `nama_kamar`, `stok`, `gambar`, `harga`, `keterangan`) VALUES
(1, 'Superior', 8, 'https://bhgp.bayviewhotels.com/wp-content/uploads/sites/177/2017/09/Superior-Room-King.jpg', 500000, 'Kamar Superior dilengkapi dengan lantai kayu dan sistem AC yang sejuk. Di ruang sempit, desain dan kenyamanan kamar ini akan membuat Anda melupakan ruang dan menikmati Kamar Superior yang dibuat dengan indah ini.'),
(2, 'Superior Twin', 7, 'https://d2ile4x3f22snf.cloudfront.net/wp-content/uploads/sites/210/2017/11/27021004/tentrem-hotel-yogyakarta-gallery-Room-Deluxe-image01.jpg', 650000, 'Kamar dengan tempat tidur ukuran Twin yang besar, kamar mandi mewah dengan pilihan rain shower  atau handshower akan membuat pengalaman menginap Anda bersama Hotel Hebat akan lebih terasa berkesan.'),
(3, 'Deluxe', 9, 'https://www.jsluwansa.com/wp-content/uploads/sites/188/2021/05/JSL-Deluxe-Room-1-2.jpg', 700000, 'Bermalam dalam kemewahan di kamar yang luas dengan tempat tidur ber ukuran King Size, kamar mandi dengan fasilitas tambahan di dalam kamar yang akan membuat pengalaman menginap Anda akan sangat menyenangkan.'),
(4, 'Suite', 6, 'https://sutasomahotel.com/wp-content/uploads/sites/154/2021/03/WP_2077-Edit.jpg', 1500000, 'Suite kami menawarkan ruang tamu yang luas dengan meja makan untuk membuat Anda merasa seperti di rumah sendiri. Kamar-kamar dirancang dengan indah di mana para tamu menerima perhatian ekstra.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_login` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwords` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `levels` enum('tamu','admin','resepsionis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_login`, `username`, `passwords`, `nama`, `jenis_kelamin`, `tgl_lahir`, `no_telp`, `levels`) VALUES
(1, 'admin', '123', 'allisha', 'Perempuan', '2012-05-19', '083874687114', 'admin'),
(2, 'resepsionis', '123', 'allisha', 'Perempuan', '2012-05-19', '083874687114', 'resepsionis'),
(3, 'tamu', '123', 'allisha', 'Perempuan', '2012-05-19', '083874687114', 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fas_hotel`
--
ALTER TABLE `fas_hotel`
  ADD PRIMARY KEY (`id_fashotel`);

--
-- Indeks untuk tabel `fas_kamar`
--
ALTER TABLE `fas_kamar`
  ADD PRIMARY KEY (`id_faskamar`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fas_hotel`
--
ALTER TABLE `fas_hotel`
  MODIFY `id_fashotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `fas_kamar`
--
ALTER TABLE `fas_kamar`
  MODIFY `id_faskamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tipe_kamar`
--
ALTER TABLE `tipe_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fas_kamar`
--
ALTER TABLE `fas_kamar`
  ADD CONSTRAINT `fas_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
