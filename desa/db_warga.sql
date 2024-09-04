-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2024 pada 08.54
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_warga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alupel`
--

CREATE TABLE `alupel` (
  `id` int(5) NOT NULL,
  `Alupel` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alupel`
--

INSERT INTO `alupel` (`id`, `Alupel`) VALUES
(12, 0x494d472d32303233303730352d5741303030392e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Isi_berita` text NOT NULL,
  `Gambar` mediumblob NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `Judul`, `Isi_berita`, `Gambar`, `Tanggal`) VALUES
(61, 'Desa Pemuda Mengadakan Program Penanaman Pohon', 'Desa Pemuda - Pemerintah Desa Pemuda meluncurkan program penanaman pohon sebagai bagian dari upaya pelestarian lingkungan dan konservasi alam. Program ini bertujuan untuk meningkatkan kepedulian masyarakat terhadap lingkungan serta menjaga keberlanjutan ekosistem desa.\r\n\r\nDalam program ini, pemerintah desa bekerja sama dengan komunitas lingkungan dan warga desa untuk melakukan penanaman pohon di beberapa lokasi strategis di sekitar desa. Kegiatan penanaman pohon dilakukan secara serentak dan melibatkan partisipasi aktif masyarakat desa.\r\n\r\nKepala Desa Pemuda, Bapak Surya Wijaya, mengungkapkan pentingnya pelestarian lingkungan dalam menjaga keberlangsungan hidup. \"Melalui program penanaman pohon ini, kami ingin melibatkan seluruh masyarakat desa untuk berpartisipasi dalam menjaga lingkungan sekitar kita. Dengan menanam pohon, kita memberikan kontribusi nyata dalam mengurangi dampak perubahan iklim dan menciptakan lingkungan yang sehat,\" ujarnya.\r\n\r\nSelain penanaman pohon, program ini juga melibatkan edukasi dan sosialisasi mengenai pentingnya pelestarian lingkungan kepada masyarakat desa. Kegiatan ini diharapkan dapat meningkatkan kesadaran masyarakat tentang perlindungan alam dan pentingnya menjaga kelestarian lingkungan bagi generasi mendatang.\r\n\r\nProgram penanaman pohon ini mendapat dukungan positif dari warga desa. Bapak Ahmad, salah satu warga Desa Pemuda, mengungkapkan kegembiraannya dalam berpartisipasi. \"Saya sangat antusias untuk ikut serta dalam penanaman pohon ini. Ini adalah langkah kecil yang kita lakukan untuk memberikan manfaat jangka panjang bagi alam dan masa depan anak cucu kita,\" ucapnya.\r\n\r\nProgram penanaman pohon ini diharapkan dapat menjadi awal yang baik dalam upaya pelestarian lingkungan dan konservasi alam di Desa Pemuda. Pemerintah desa berharap partisipasi aktif masyarakat dalam menjaga kebersihan lingkungan dan melestarikan alam akan terus berlanjut.\r\n\r\nDengan adanya program ini, Desa Pemuda semakin menunjukkan komitmennya dalam menjaga lingkungan dan menciptakan desa yang berkelanjutan. Program-program sejenis diharapkan dapat terus dilakukan demi mewujudkan desa yang lestari dan harmonis dengan alam.', 0x494d472d32303233303730352d5741303031312e6a7067, '2023-07-10'),
(62, 'Desa Pemuda Mengadakan Pelatihan Kewirausahaan loqqpor', 'Desa Pemuda - Pemerintah Desa Pemuda kembali mengadakan program pelatihan kewirausahaan bagi masyarakat desa. Pelatihan ini bertujuan untuk memberikan pengetahuan dan keterampilan kepada warga desa dalam mengembangkan usaha dan meningkatkan potensi ekonomi lokal.\r\n\r\nPelatihan kewirausahaan ini akan mencakup berbagai aspek penting dalam menjalankan bisnis, seperti perencanaan usaha, manajemen keuangan, pemasaran, serta pengembangan produk dan layanan. Peserta pelatihan akan mendapatkan materi yang disampaikan oleh para ahli dan praktisi di bidang kewirausahaan.\r\n\r\nKepala Desa Pemuda, Ibu Siti Indah, menjelaskan bahwa pelatihan ini merupakan upaya pemerintah desa dalam memberdayakan masyarakat secara ekonomi. \"Kami ingin membantu masyarakat desa untuk mengembangkan potensi ekonomi yang ada di sekitar mereka. Dengan pengetahuan dan keterampilan yang diperoleh melalui pelatihan ini, diharapkan warga desa dapat memiliki usaha yang berkelanjutan dan memberikan manfaat bagi diri sendiri serta masyarakat sekitar,\" ucapnya.\r\n\r\nSelain itu, pelatihan kewirausahaan ini juga merupakan sarana untuk memotivasi dan menginspirasi warga desa untuk berani berinovasi dan berkreasi dalam dunia bisnis. Dengan pemahaman yang baik tentang kewirausahaan, diharapkan masyarakat desa dapat menciptakan peluang-peluang baru dan meningkatkan daya saing usaha lokal.\r\n\r\nPeserta pelatihan akan mendapatkan materi dan praktek langsung dalam menjalankan bisnis. Selain itu, mereka juga akan mendapatkan bimbingan dan konsultasi dari para mentor yang berpengalaman di bidang kewirausahaan. Hal ini diharapkan dapat membantu peserta dalam mengatasi berbagai tantangan dan mendapatkan arahan yang tepat dalam mengembangkan usaha mereka.\r\n\r\nProgram pelatihan kewirausahaan ini mendapat sambutan positif dari warga desa. Bapak Andi, salah satu peserta pelatihan, mengungkapkan kegembiraannya dalam mengikuti program ini. \"Saya sangat berterima kasih atas adanya pelatihan ini. Ini memberikan kesempatan kepada kami untuk meningkatkan keterampilan dan pengetahuan dalam berbisnis. Saya berharap setelah mengikuti pelatihan ini, usaha saya dapat semakin maju dan memberikan manfaat bagi keluarga dan masyarakat,\" ujarnya.\r\n\r\nDengan adanya program pelatihan kewirausahaan ini, Pemerintah Desa Pemuda berharap dapat melahirkan para wirausaha lokal yang sukses dan mandiri. Usaha-usaha yang tumbuh dari pelatihan ini diharapkan dapat menjadi sumber penghidupan yang berkelanjutan bagi masyarakat desa dan ikut mendorong pertumbuhan ekonomi lokal.\r\n\r\nPemerintah Desa Pemuda akan terus mengadakan program-program sejenis untuk meningkatkan kualitas dan keterampilan masyarakat desa dalam berwirausaha. Dengan semakin kuatnya sektor ekonomi di desa, diharapkan Desa Pemuda dapat menjadi contoh desa yang maju dan sejahtera.', 0x494d472d32303233303730352d5741303030382e6a7067, '2023-07-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `periode`
--

CREATE TABLE `periode` (
  `id` int(10) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Periode` varchar(200) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `periode`
--

INSERT INTO `periode` (`id`, `Nama`, `Periode`, `id_admin`) VALUES
(16, 'Arbani', '1983 - 1993', 1),
(17, 'Hamdi Hasan', '1993 - 2006', 1),
(18, 'Hj. Rahimah', '2006 - 2007', 1),
(19, 'Arbani', '2007 - 2008', 1),
(20, 'Anang Haderi', '2008 - 2012', 1),
(21, 'Slamet Lawin', '2012 - 2016', 1),
(22, 'Zainal Arifin', '2020 - Sekarang', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(10) NOT NULL,
  `judul_profil` varchar(255) NOT NULL,
  `isi_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `judul_profil`, `isi_profil`) VALUES
(11, 'Profil Desa Pemuda', 'Desa Pemuda adalah salah satu desa di Kecamatan Pelaihari, Kabupaten Tanah Laut, Provinsi Kalimantan Selatan, Indonesia. Desa Pemuda dibentuk berdasarkan Peraturan Daerah Kabupaten Tanah Laut Nomor 8 Tahun 2021.\r\n\r\nDesa Pemuda memiliki berbagai potensi, di antaranya adalah pertanian, perkebunan, dan pariwisata.\r\n\r\nLuas Desa Pemuda: 44,40 Km²\r\n\r\nJumlah Penduduk Desa Pemuda: 2.518 Jiwa\r\n\r\nSebaran Penduduk: Laki-laki: 1.305 Jiwa, Perempuan: 1.213 Jiwa\r\n\r\nDesa Pemuda terdiri dari 13 RT dan 4 Dusun.\r\n\r\nAgama yang dianut di Desa Pemuda: Islam: 2.452 Jiwa, Kristen: 46 Jiwa, Katolik: 20 Jiwa (Berdasarkan sensus tahun 2020).\r\n\r\nDesa Pemuda terletak di Kecamatan Pelaihari dengan wilayah seluas 3.461 ha dengan batas wilayah sebagai berikut:\r\n\r\nSebelah Utara berbatasan dengan Desa Sungai Jelai, Kec. Tambang Ulang\r\nSebelah Selatan berbatasan dengan Desa Kunyit, Kec. Bajuin dan Pabahanan, Kec. Pelaihari\r\nSebelah Timur berbatasan dengan Desa Tebing Siring, Tanjung Dan Bajuin, Kec. Bajuin\r\nSebelah Barat berbatasan dengan Desa Panggung dan Ambungan, Kec. Pelaihari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE `sambutan` (
  `id` int(10) NOT NULL,
  `judulsbmtn` varchar(255) NOT NULL,
  `isi_sbmtn` text NOT NULL,
  `gambar` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sambutan`
--

INSERT INTO `sambutan` (`id`, `judulsbmtn`, `isi_sbmtn`, `gambar`) VALUES
(20, 'Selamat datang di Desa Pemuda!', 'Dalam kesempatan yang berbahagia ini, saya sebagai kepala desa Desa Pemuda, mengucapkan selamat datang kepada semua warga dan tamu yang hadir. Saya merasa bangga dan bersyukur dapat berada di sini bersama Anda semua dalam momen yang bersejarah ini.\r\n\r\nDesa Pemuda adalah sebuah desa yang kaya akan keindahan alam, tradisi, dan potensi yang luar biasa. Desa ini adalah rumah bagi masyarakat yang penuh semangat, keramahan, dan kebersamaan. Bersama-sama, kita menciptakan iklim yang harmonis dan membangun kehidupan yang lebih baik bagi seluruh warga Desa Pemuda.\r\n\r\nDi Desa Pemuda, kami berkomitmen untuk memajukan potensi desa dan meningkatkan kesejahteraan masyarakat. Kami akan terus berupaya dalam mengembangkan infrastruktur, pendidikan, kesehatan, ekonomi, dan lingkungan agar Desa Pemuda menjadi tempat yang nyaman dan layak huni.\r\n\r\nSaya mengajak seluruh warga Desa Pemuda untuk bersatu dan berkolaborasi dalam mewujudkan visi dan misi desa kita. Mari kita tingkatkan partisipasi aktif dalam kegiatan desa, menjaga kebersihan dan keindahan lingkungan, serta melestarikan nilai-nilai budaya dan adat istiadat yang menjadi identitas kita.\r\n\r\nSaya juga mengundang para tamu yang hadir untuk menikmati keindahan dan keramahan Desa Pemuda. Mari menjalin silaturahmi, mengeksplorasi kekayaan alam, serta merasakan keramahan dan kehangatan masyarakat Desa Pemuda.\r\n\r\nTerakhir, saya ingin mengucapkan terima kasih kepada seluruh warga Desa Pemuda atas kepercayaan dan dukungan yang diberikan. Bersama-sama, mari kita membangun Desa Pemuda menjadi tempat yang lebih baik, sejahtera, dan harmonis bagi kita semua.\r\n\r\nTerima kasih, salam sejahtera untuk Desa Pemuda!\r\n\r\nKepala Desa Pemuda', 0x494d472d32303233303730352d5741303031302e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(10) NOT NULL,
  `Sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `Sejarah`) VALUES
(49, 'Awal cerita bermula pada sekitar tahun 1978, dimana sebuah desa dibangun di daerah Tanah Laut dengan nama DESA PEMUDA KNPI. Desa ini dibangun oleh pemerintah melalui sebuah organisasi yang disebut KNPI dan masuk dalam wilayah Pabahanan. Desa ini hampir mirip dengan trans, hanya saja kehidupan mereka (para calon warga Desa Pemuda) lebih dibina. Karena desa ini dibangun melalui organisasi KNPI, maka banyak orang-orang menyebutnya dengan Desa Pemuda KNPI. Tepatnya pada tanggal 01 Januari 1979, yaitu tahap pertama, ditempatkanlah 30 Kepala Keluarga dari 10 Kabupaten yang ada di provinsi Kalimantan Selatan diantaranya adalah :\r\n1.Hulu Sungai Utara (HSU)\r\n\r\n2.Hulu Sungai Selatan (HSS)\r\n\r\n3.Hulu Sungai Tengah (HST)\r\n\r\n4.Barito Kuala\r\n\r\n5.Kota Baru\r\n\r\n6.Tabalong\r\n\r\n7.Banjar\r\n\r\n8.Tapin\r\n\r\n9.Tanah Laut\r\n\r\n10.Banjarmasin\r\n\r\nSebelum menempati desa ini, setiap kabupaten melakukan seleksi untuk para peserta, dimana usia setiap peserta harus maksimal berusia 35 tahun dan harus sudah berkeluarga. Setiap kabupaten, masing-masing mengirim 3 Kepala Keluarga, kecuali untuk Kabupten Barito Kuala, meraka hanya mengirim 2 Kepala Keluarga dan Banjarmasin mengirim 4 Kepala Keluarga. Mereka semua dibimbing dalam kurun waktu selama ± 1 minggu, dan setelah itu barulah Desa Pemuda benar-benar diresmikan pada hari Jum\'at, 12 Januari 1979 pada pukul 9 pagi. Desa ini diresmikan oleh Menteri Muda Urusan Pemuda (MENPORA), DR. Abdul Gafur, dan disaksikan oleh Ketua KNPI Provinsi Kalsel, H. Anang Adanansi; Ketua KNPI Pusat , Akbar Tanjung; Gubernur Kalsel , H.Subarjo;Bupati Sumarsono,PA; dan Camat Baasir. Desa Pemuda masih masuk dalam bagian Desa Pabahanan dengan Kepala Kampung yang Bernama H.Sani.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id` int(10) NOT NULL,
  `Struktur` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id`, `Struktur`) VALUES
(50, 0x494d472d32303233303730352d5741303030372e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_admin` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_admin`, `user_name`, `password`, `name`) VALUES
(1, 'ADMIN', 'desa', 'ADMIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(5) NOT NULL,
  `Visi` text NOT NULL,
  `Misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `Visi`, `Misi`) VALUES
(105, 'Menjadi Desa yang Unggul, Berdaya Saing, dan Berkelanjutan dalam Mewujudkan Kesejahteraan Masyarakat', 'Mewujudkan pemerintahan desa yang transparan, akuntabel, dan partisipatif.'),
(106, 'Menjadi Desa yang Maju, Mandiri, dan Sejahtera dalam Bingkai Keharmonisan dan Kebhinekaan.', 'Memperkuat potensi sumber daya manusia desa melalui pengembangan pendidikan dan pelatihan.'),
(107, '', 'Meningkatkan kesejahteraan masyarakat desa dengan mengembangkan sektor ekonomi lokal.'),
(112, '', 'Memperkuat kerjasama dan komunikasi antara Desa Pemuda dengan pihak terkait dan desa-desa lainnya.'),
(115, 'mahasiswa', 'Politala juara'),
(120, 'buykgy', 'vyjyju'),
(121, 'p', 'p'),
(122, 'l', 'l\r\n'),
(123, '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alupel`
--
ALTER TABLE `alupel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id admin` (`id_admin`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alupel`
--
ALTER TABLE `alupel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
