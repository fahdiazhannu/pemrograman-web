-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2020 pada 17.20
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `nama`, `umur`, `email`, `deskripsi`, `no_telp`, `instagram`) VALUES
(2, 'Fahdi Azhannu', '20', 'zanuazhannu@gmail.com', 'Perkenalkan nama saya Fahdi Azhannu. Saya merupakan mahasiswa Universitas Pembangunan Jaya, untuk prodinya yaitu Informatika. Pada website ini berisi portofolio saya, apabila ingin mendapatkan info seputar tentang saya, silahkan pilih halaman yang tersedia.', '081398744517', 'azhannu311');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul_blog` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tgl_blog` date NOT NULL,
  `isi_blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul_blog`, `author`, `tgl_blog`, `isi_blog`) VALUES
(10, 'Apa itu MYSQL?', 'Azhannu', '2020-11-03', '<p>RDBMS&nbsp;merupakan software untuk membuat dan mengelola database berdasarkan pada model relasional.\r\nSebelum dibahas lebih lanjut, ada baiknya bagi kita untuk mengetahui sejarah singkat MySQL. MySQL dibaca MY-ES-KYOO-EL [maÉªËŒÉ›sËŒkjuËËˆÉ›l]. Beberapa orang bahkan membaca MySQL seperti sedang menyebutkan &ldquo;my sequel&rdquo;. MySQL AB, sebuah perusahaan asal Swedia, menjadi yang pertama dalam mengembangkan MySQL di tahun 1994. Hak kepemilikan MySQL kemudian diambil secara menyeluruh oleh perusahaan teknologi Amerika Serikat, Sun Microsystems, ketika mereka membeli MySQL AB pada tahun 2008. Di tahun 2010, Oracle yang adalah salah satu perusahaan teknologi terbesar di Amerika Serikat mengakuisisi Sun Microsystems. Semenjak itulah, MySQL sepenuhnya dimiliki oleh Oracle.</p>\r\n\r\n'),
(11, 'Pengertian CRUD', 'Darmawan', '2020-04-11', '<p>CRUD adalah singkatan dari Create, Read, Update, dan Delete. Proses ini sangat berkaitan dengan pengambilan atau transaksi data dari atau ke database. Hal ini menjadi krusial apabila berhubungan dengan sistem informasi perusahaan karena data yang diproses biasanya merupakan data transaksi.</p>\r\n\r\n<p>Bagi PHP Developer, operasi CRUD biasanya menjadi pillar untuk mempelajari proses pengelolaan data menggunakan PHP dan tentu saja MySQL database. Nah CRUD ini bisa diibaratkan sebagai jalur atau koneksi yang menghubungkan antara bahasa pemrograman PHP dengan MySQL.</p>\r\n\r\n<p>Lebih jelasnya, berikut ini ulasan operasi CRUD beserta contohnya:</p>\r\n\r\n<ul>\r\n	<li><em>Create</em>&nbsp;(C) merupakan proses pembuatan data baru. Proses ini biasanya dilakukan ketika Anda mendaftar pada sebuah halaman website. Data yang Anda masukkan akan disimpan di dalam database menggunakan operasi Create.<br />\r\n	&nbsp;</li>\r\n	<li><em>Read</em>&nbsp;(R) merupakan proses pengambilan data dari database. Proses ini biasanya terjadi ketika Anda ingin melakukan proses login di halaman website tertentu. Saat Anda klik &ldquo;Login&rdquo; maka website akan menjalankan proses &ldquo;Read&rdquo; untuk melakukan verifikasi akun yang Anda gunakan.<br />\r\n	<br />\r\n	Contoh operasi yang lebih sederhana yaitu ketika Anda mengakses sebuah halaman website, saat itu pula proses Read berjalan. Hasil dari operasi ini adalah tampilan halaman website yang Anda lihat di browser.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><em>Update</em>&nbsp;(U) adalah proses mengubah data yang berada di dalam database. Contoh proses ini ketika Anda mengubah profil di dalam akun sosial media. Saat Anda klik &ldquo;Ubah&rdquo;, &nbsp;website akan mengirimkan proses Update ke dalam database. Kemudian database meresponnya dengan mengubah data lama menjadi data baru yang Anda tambahkan melalui halaman profil.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><em>Delete</em>&nbsp;(D) adalah proses untuk menghapus data yang ada di database. Proses ini mirip dengan Update, bedanya, proses Delete akan mengubah data yang ada di database menjadi &lsquo;tidak ada&rsquo;.</li>\r\n</ul>\r\n\r\n<p>Itulah gambaran kecil penggunaan CRUD di website.</p>\r\n\r\n<p>Supaya lebih mudah memahami, di bawah ini merupakan contoh penggunaan CRUD dengan menggunakan bahasa pemrograman PHP dan MySQL databases.</p>\r\n'),
(12, 'Universitas Pembangunan Jaya', 'Zanu', '2020-11-01', '<p>Universitas Pembangunan Jaya (UPJ) didirikan melalui pengalaman panjang grup Jaya yang telah melahirkan berbagai mahakarya properti dan pembangunan infrastruktur monumental di DKI Jaya dan 25 kota di Indonesia serta pengalaman menyelenggarakan pendidikan dasar dan menengah berkualitas sejak tahun 1992. Dirintis oleh entrepreneur senior dan terkemuka, Dr. (HC) Ir. Ciputra sejak tahun 1961, Pembangunan Jaya merupakan pelopor dan inovator bisnis modern yang ungul di sejumlah bidang usaha (Infrastruktur, Industri pengembangan kota, dan pusat rekreasi). Berbekal reputasi kualitas unggul, kepelaporan dan inovasi, Grup Jaya mengembangkan Universitas Pembangunan Jaya sebagai pusat pendidikan tinggi dengan keunggulan di bidang Urban Lifestyle and Urban Development.</p>\r\n\r\n<p>Melalui motto &quot;Mendidik Manusia Jaya yang berintegritas, proffesional dan memiliki spirit entrepreneur&quot; sistem pendidikan di UPJ diumpamakan seperti dua sisi koin, mempersiapkan manusia yang utuh dengan softskill dan hardskill. Kedua hal tersebut untuk menjadikan sarjana lulusan UPJ mampu mengatasi segala bentuk tantangan dalam masyarakat dan giat berperan serta menyumbangkan pemikiran dan keterampilannya ke lingkungan terkait dengan masyarakat dan mengembangkan keunggulan di bidang urban studies, kurikulum unik KOTA dimana lebih dari 100 mata kuliah bertema urban dapat diambil oleh mahasiswa lintas program studi, Jaya Softskills Development Program dan Jayapreneurship center untuk melahirkan lulusan (Manusia Jaya) dengan perspektif dan kompetensi global dan jati diri indonesianya..</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`) VALUES
(6, 0x31352e6a7067),
(7, 0x32303230303831343130303430365f494d475f303236302e6a7067),
(8, 0x32303230303831343038353332305f494d475f303232332e6a7067),
(12, 0x494d475f373938312e6a7067),
(13, 0x494d475f373938302e6a7067),
(14, 0x736d696c65776865656c69332e6a7067),
(15, 0x32302e6a7067),
(16, 0x656469746564312e6a7067),
(17, 0x656469746564322e6a7067),
(18, 0x6c696e655f31383138383936383639373031342e6a7067),
(19, 0x494d475f383234362e6a7067),
(21, 0x494d475f383139392e6a7067),
(22, 0x494d475f323035382e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `nama_pdk` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tahun_pdk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_pdk`, `jurusan`, `tahun_pdk`) VALUES
(3, ' Universitas Pembangunan Jaya', 'S1-Informatika', '2018-sekarang'),
(5, 'SMK Bina Informatika Bintaro', 'Teknik Komputer Jaringan', '2015-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
