-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2023 pada 16.32
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
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(250) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Isi_berita` text NOT NULL,
  `Gambar` mediumblob NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `Judul`, `Isi_berita`, `Gambar`, `Tanggal`) VALUES
(25, 'Gempa M 7,4 di Laut Flores, 346 Rumah Rusak 770 Jiwa Mengungsi', 'Gempa bumi Magnitudo 7,4 yang terjadi di Kabupaten Flores Timur, Nusa Tenggara Timur (NTT), Selasa (14/12/2021), menyebabkan 346 rumah rusak dan 770 orang mengungsi. Hal itu disampaikan Badan Nasional Penanggulangan Bencana (BNPB) berdasarkan data Selasa (14/12/2021) per pukul 22.15 WIB.\r\n\r\nDari 346 rumah yang rusak, 134 di antaranya rusak berat, sementara sisanya rusak ringan. Selain tempat tinggal penduduk, gempa juga merusak tiga gedung sekolah, dua tempat ibadah, satu rumah jabatan kepala desa dan satu pelabuhan.\r\n\r\nMenurut BNPB, daerah yang paling banyak melaporkan kerusakan bangunan adalah Kabupaten Kepulauan Selayar, Sulawesi Selatan.\r\n\r\nSebanyak 770 orang pengungsi dilaporkan oleh BPBD Kabupaten Sikka, NTT. Rinciannya, 320 orang mengungsi di Kantor DPRD Kabupaten Sikka, 150 orang di Gedung SIC dan 330 lainnya berdiam di aula rumah jabatan Bupati Sikka.\r\n\r\nSementara terkait korban jiwa, BNPB menyebut bahwa belum ada catatan tentang kematian akibat gempa tersebut. Namun, ada tujuh orang terluka yaitu enam warga Kabupaten Selayar dan seorang warga Kabupaten Manggarai, NTT.\r\n\r\nImbauan Jangan Panik Tetap Waspada\r\n\r\nGempa bermagnitudo 7,4 di Flores Timur, yang sempat membuat BMKG mengeluarkan peringatan tsunami, berdampak ke sembilan kabupaten di NTT, tiga kabupaten/kota Sulawesi Selatan dan enam kabupaten Sulawesi Tenggara.\r\n\r\nSembilan kabupaten di NTT yaitu Kabupaten Flores Timur, Kabupaten Sikka, Kabupaten Lembata, Kabupaten Manggarai, Kabupaten Nagekeo, Kabupaten Sabu Raijua, Kabupaten Manggarai Barat, Kabupaten Ende dan Kabupaten Ngada.\r\n\r\nLalu di Sulawesi Selatan ada Kepulauan Selayar, Kabupaten Bulukumba dan Kota Makassar. Terakhir, di Sulawesi Tenggara, ada Kabupaten Muna, Kabupaten Buton, Kabupaten Buton Utara, Kabupaten Baubau, Kabupaten Buton Selatan dan Kabupaten Wakatobi.\r\n\r\nSampai Selasa (14/12/2021) malam, BMKG mencatat 120 kali gempa susulan (aftershock) dan beberapa kali bermagnitudo lebih dari lima, yaitu Magnitudo 5,6 pada pukul 10.41 WIB, Magnitudo 5,5 pada pukul 10.47 WIB, Magnitudo 5,0 pada pukul 12.46, Magnitudo 5,4 pada pukul 15.31 WIB dan Magnitudo 5,2 pada pukul 15.57 WIB.\r\n\r\nTerkait gempat tersebut, Plt Kepala Pusat Data Informasi dan Komunikasi Kebencanaan BNPB, Abdul Muhari menimbau warga, khususnya di wilayah yang terdampak gempa, untuk tidak panik tetapi tetap waspada.\r\n\r\n\"Masyarakat agar melihat kondisi rumah masing-masing. Jika terdapat kerusakan struktur seperti dinding retak terbuka, plafon atap bergeser dan tiang rumah rusak, sebaiknya jangan tinggal di rumah untuk sementara waktu. Warga dapat mengungsi ke rumah kerabat, saudara atau tempat evakuasi sementara yang didirikan instansi dan pemerintah setempat,\" katanya.', 0x494d4732303233303230343134353035332e6a7067, '2023-06-29'),
(37, '9 Rumah Warga Kebakaran, 1 Mobil Turut Ludes Terbakar', 'Sebanyak sembilan rumah dan satu unit mobil mini bus ludes terbakar di Jalan gereja, Kota Sidikalang, Kabupaten Dairi, Sumatera Utara, pada Jumat (5/8/2022) sekitar pukul 01.00 WIB.  Tiga unit mobil pemadam kebakaran diterjunkan ke lokasi kejadian. \r\n\r\nApi cepat menyala dan membesar dikarenakan banyak rumah yang terbuat dari bahan kayu, dan bisa dipadamkan dua jam kemudian. Guna mencegah api merembet ke bangunan lain, dua unit rumah terpaksa dirusak menggunakan alat berat. \r\n\r\nTidak ada korban jiwa dalam kejadian ini, namun kerugian ditaksir mencapai lebih dari Rp 1 miliar. \"Tidak ada korban jiwa akibat kebakaran itu,\" ujar salah seorang warga bernama Ziko Solin. Saat ini, lokasi kebakaran sudah dipasang garis polisi guna dilakukan penyelidikan terkait penyebab terjadinya kebakaran tersebut.', 0x6973746f636b70686f746f2d313334353634353030352d363132783631322e6a7067, '2023-06-29'),
(38, 'Gempa M 5,1 Terjadi di Sumba Timur NTT', 'Telah terjadi gempa bumi dengan kekuatan magnitudo 5,1 di Sumba Timur, Nusa Tenggara Timur (NTT). Gempa yang terjadi sejauh ini tidak berpotensi Tsunami. Hal ini sesuai pernyataan yang disampaikan oleh Badan Meteorologi, Klimatologi dan Geofisika (BMKG), Senin (17/6/2019).<br />\r\n<br />\r\nGempa bumi yang terjadi dilaporkan terjadi pada pukul 03.13 WIB. Pusat gempa diketahui berada di 16 km barat daya Karera, Sumba Timur. Titik koordinat diketahui berada pada 10.41 LS – 120.08 BT dengan Kedalaman gempa 10 km.<br />\r\n<br />\r\nSaat terjadi gempa, masyarakat Sumba Timur sempat panik, sebab bencana gempa terjadi dengan tiba-tiba. Untuk mengatasi hal yang serupa, masyarakat masih waspada dan bersiaga.', 0x636f6e746f682d62656e64612d62657262656e74756b2d6a616a61722d67656e6a616e672d33202831292e6a7067, '2023-06-29'),
(39, 'Partisipasi Pemilih di Pilkada 2020 Tinggi, Indonesia Diapresiasi AS', 'Telah terjadi gempa bumi dengan kekuatan magnitudo 5,1 di Sumba Timur, Nusa Tenggara Timur (NTT). Gempa yang terjadi sejauh ini tidak berpotensi Tsunami. Hal ini sesuai pernyataan yang disampaikan oleh Badan Meteorologi, Klimatologi dan Geofisika (BMKG), Senin (17/6/2019).\r\n\r\nGempa bumi yang terjadi dilaporkan terjadi pada pukul 03.13 WIB. Pusat gempa diketahui berada di 16 km barat daya Karera, Sumba Timur. Titik koordinat diketahui berada pada 10.41 LS – 120.08 BT dengan Kedalaman gempa 10 km.\r\n\r\nSaat terjadi gempa, masyarakat Sumba Timur sempat panik, sebab bencana gempa terjadi dengan tiba-tiba. Untuk mengatasi hal yang serupa, masyarakat masih waspada dan bersiaga.', 0x6d6f6f6e2d676335633430633533615f313932302e6a7067, '2023-06-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `path_galeri` varchar(100) NOT NULL,
  `caption_galeri` text NOT NULL,
  `tautan_galeri` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `kode_pos_keluarga` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_keluarga`, `id_kepala_keluarga`, `alamat_keluarga`, `desa_kelurahan_keluarga`, `kecamatan_keluarga`, `kabupaten_kota_keluarga`, `provinsi_keluarga`, `negara_keluarga`, `rt_keluarga`, `rw_keluarga`, `kode_pos_keluarga`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '35623897658777', 1, 'Jl. Salemba, Senen, Jakarta Pusat', 'Salemba', 'Senen', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '12', '02', '62351', 1, '2018-10-26 13:27:33', '2018-10-26 13:27:33'),
(2, '6301032009040005', 1, 'Jl.Pabahanan', 'Jl.Pabahanan', 'Pelaihari', 'Tanah Laut', 'Kalimantan Selatan', 'Indonesia', '07', '02', '70815', 1, '2023-05-31 02:53:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nik_mutasi` varchar(16) NOT NULL,
  `nama_mutasi` varchar(45) NOT NULL,
  `tempat_lahir_mutasi` varchar(30) NOT NULL,
  `tanggal_lahir_mutasi` date NOT NULL,
  `jenis_kelamin_mutasi` enum('L','P') NOT NULL,
  `alamat_ktp_mutasi` text NOT NULL,
  `alamat_mutasi` text NOT NULL,
  `desa_kelurahan_mutasi` varchar(30) NOT NULL,
  `kecamatan_mutasi` varchar(30) NOT NULL,
  `kabupaten_kota_mutasi` varchar(30) NOT NULL,
  `provinsi_mutasi` varchar(30) NOT NULL,
  `negara_mutasi` varchar(30) NOT NULL,
  `rt_mutasi` varchar(3) NOT NULL,
  `rw_mutasi` varchar(3) NOT NULL,
  `agama_mutasi` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_mutasi` varchar(20) NOT NULL,
  `pekerjaan_mutasi` varchar(20) NOT NULL,
  `status_perkawinan_mutasi` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_mutasi` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(250) NOT NULL,
  `Sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id`, `Sejarah`) VALUES
(2, 'Desa ABC memiliki sejarah yang panjang dan kaya. Menurut catatan sejarah, desa ini didirikan pada abad ke-12 oleh sekelompok penduduk asli yang bermigrasi ke daerah tersebut. Mereka memilih tempat tersebut karena ketersediaan sumber daya alam yang melimpah, seperti sungai yang mengairi lahan pertanian dan hutan yang kaya akan hasil hutan.\r\n\r\nPada awal pendiriannya, desa ini merupakan komunitas agraris yang menggantungkan hidup dari pertanian dan peternakan. Masyarakat desa terorganisir secara komunal dan hidup dalam struktur sosial yang kuat. Mereka mengembangkan sistem irigasi yang canggih untuk memastikan keberlanjutan produksi pertanian, serta membangun rumah-rumah tradisional yang khas dengan bahan-bahan alami dari sekitar mereka.\r\n\r\nSelama berabad-abad, desa ABC mengalami perkembangan yang signifikan. Pada abad ke-17, desa ini menjadi pusat perdagangan regional karena lokasinya yang strategis di antara dua kota besar. Perdagangan membawa kekayaan dan pengaruh budaya dari berbagai daerah, yang tercermin dalam seni, arsitektur, dan tradisi desa.\r\n\r\nPada abad ke-19, desa ABC menjadi terkenal karena industri kerajinan tangan yang berkembang di sana. Pengrajin desa menghasilkan karya seni yang sangat dihargai, termasuk kerajinan anyaman, tenun, dan patung kayu. Produk-produk ini menjadi populer di kalangan wisatawan dan kolektor seni dari seluruh penjuru daerah.\r\n\r\nSelama abad ke-20, desa ABC menghadapi berbagai perubahan sosial dan ekonomi. Perkembangan infrastruktur dan teknologi modern membawa perubahan dalam cara hidup masyarakat desa. Pertanian beralih ke metode modern, dan beberapa sektor industri baru muncul. Meskipun demikian, masyarakat desa tetap berpegang teguh pada nilai-nilai dan tradisi mereka, dengan upaya melestarikan warisan budaya mereka.\r\n\r\nPada abad ke-21, desa ABC mengalami pertumbuhan pariwisata yang pesat. Keindahan alamnya, kekayaan budayanya, dan keramahan masyarakat desa menarik pengunjung dari berbagai belahan dunia. Desa ini telah bertransformasi menjadi tujuan wisata yang populer, dengan fasilitas yang dikembangkan dan upaya pemeliharaan lingkungan untuk menjaga keindahan alam dan keaslian budayanya.\r\n\r\nSeiring berjalannya waktu, desa ABC terus berkembang dengan menjaga keseimbangan antara kemajuan dan kelestarian. Sejarah panjangnya mencerminkan ketekunan dan kegigihan masyarakat desa dalam menghadapi perubahan zaman sambil mempertahankan akar budaya mereka. Desa ABC menjadi contoh inspiratif tentang bagaimana warisan dan nilai-nilai tradisional dapat terus hidup dalam era modern.'),
(4, 'Desa XYZ memiliki sejarah yang panjang dan menarik yang melibatkan perkembangan budaya, peristiwa sejarah, dan perubahan sosial yang terjadi selama berabad-abad.\r\n\r\nSejarah desa ini dapat ditelusuri kembali ke zaman kuno, ketika desa ini awalnya didirikan oleh suku pribumi yang menetap di daerah tersebut. Masyarakat pribumi ini hidup dalam komunitas kecil yang mengandalkan pertanian sebagai mata pencaharian utama. Mereka mengembangkan sistem irigasi untuk mengairi ladang-ladang mereka dan mengelola sumber daya alam di sekitar mereka dengan bijaksana.\r\n\r\nPada periode berikutnya, desa XYZ mengalami pengaruh budaya dari kerajaan-kerajaan yang berkuasa di daerah tersebut. Perdagangan dan pertukaran budaya berkembang pesat, membawa pengaruh arsitektur, seni, dan agama baru ke desa tersebut. Struktur-struktur seperti kuil, istana, dan benteng dibangun, mencerminkan kekuasaan dan kekayaan yang berkembang di wilayah tersebut.\r\n\r\nSelama masa kolonial, desa XYZ menjadi pusat administrasi dan perdagangan bagi pemerintahan kolonial. Ekonomi desa berkembang pesat dengan diperkenalkannya tanaman komersial baru dan industri seperti perkebunan, pertambangan, atau manufaktur. Masyarakat desa berinteraksi dengan pendatang dan budaya asing yang membawa perubahan dalam cara hidup, bahasa, dan adat istiadat.\r\n\r\nSetelah kemerdekaan, desa XYZ terlibat dalam proses pembangunan nasional yang meliputi reformasi agraria, pembangunan infrastruktur, dan pemberdayaan masyarakat. Desa ini menjadi bagian dari proyek-proyek pembangunan yang bertujuan untuk meningkatkan kualitas hidup penduduk desa melalui akses yang lebih baik ke pendidikan, kesehatan, dan fasilitas umum.\r\n\r\nPada zaman modern, desa XYZ mengalami perubahan sosial dan ekonomi yang signifikan. Globalisasi, teknologi informasi, dan perubahan demografi mempengaruhi pola hidup dan mata pencaharian masyarakat desa. Terdapat perkembangan industri, pariwisata, atau sektor jasa yang semakin penting bagi perekonomian desa.\r\n\r\nSelama beberapa dekade terakhir, desa XYZ juga telah menghadapi tantangan lingkungan seperti deforestasi, perubahan iklim, atau degradasi sumber daya alam. Masyarakat desa dan pemerintah setempat berkolaborasi untuk menjaga kelestarian lingkungan dan mempromosikan praktik berkelanjutan.\r\n\r\nSejarah desa XYZ adalah cerminan perjalanan dan perubahan yang telah dialami oleh masyarakatnya selama berabad-abad. Ini adalah warisan yang penting dan memberikan identitas unik bagi desa tersebut.'),
(8, 'Dilansir dari CNBC, Rabu (22/12/2021), harga minyak mentah Brent berada di USD 2,46, atau 3,4 persen, lebih tinggi pada USD 73,98 per barel.\r\n\r\nSementara minyak mentah West Texas Intermediate (WTI) AS naik USD 2,51, atau 3,66 persen, menjadi menetap di USD 71,12 per barel.\r\n\r\n\"Setelah beberapa hari yang sulit, harga minyak mentah rebound karena sebagian besar kekhawatiran COVID telah diperhitungkan,\" kata Edward Moya, analis senior di OANDA.\r\n\r\nNegara-negara di seluruh Eropa sedang mempertimbangkan pembatasan baru pada pergerakan karena varian Omicron yang bergerak cepat menyapu dunia beberapa hari sebelum Natal, melemparkan rencana perjalanan ke dalam kekacauan dan pasar keuangan yang mengerikan.\r\n\r\nInfeksi Omicron berlipat ganda dengan cepat di seluruh Eropa, Amerika Serikat dan Asia, termasuk di Jepang, di mana satu cluster di pangkalan militer telah berkembang menjadi setidaknya 180 kasus.'),
(9, 'Dilansir dari CNBC, Rabu (22/12/2021), harga minyak mentah Brent berada di USD 2,46, atau 3,4 persen, lebih tinggi pada USD 73,98 per barel. Sementara minyak mentah West Texas Intermediate (WTI) AS naik USD 2,51, atau 3,66 persen, menjadi menetap di USD 71,12 per barel.\r\n\r\n\"Setelah beberapa hari yang sulit, harga minyak mentah rebound karena sebagian besar kekhawatiran COVID telah diperhitungkan,\" kata Edward Moya, analis senior di OANDA.\r\n\r\nNegara-negara di seluruh Eropa sedang mempertimbangkan pembatasan baru pada pergerakan karena varian Omicron yang bergerak cepat menyapu dunia beberapa hari sebelum Natal, melemparkan rencana perjalanan ke dalam kekacauan dan pasar keuangan yang mengerikan.\r\n\r\nInfeksi Omicron berlipat ganda dengan cepat di seluruh Eropa, Amerika Serikat dan Asia, termasuk di Jepang, di mana satu cluster di pangkalan militer telah berkembang menjadi setidaknya 180 kasus.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id` int(250) NOT NULL,
  `Struktur` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id`, `Struktur`) VALUES
(2, 0x642d696c6c757374726174696f6e2d676f6c64656e2d6372657363656e742d6d6f6f6e2d656c656d656e742d69736f6c617465642d626c75652d6261636b67726f756e642d7375697461626c652d69736c616d2d72656c6967696f6e2d6d616769632d6e696768742d74696d652d642d3231343337343136312e6a7067),
(3, 0x494d4732303233303230343134353035352e6a7067),
(4, 0x494d4732303233303230343134353035352e6a7067),
(5, 0x494d4732303233303230343134353034382e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tesq`
--

CREATE TABLE `tesq` (
  `id` int(250) NOT NULL,
  `Isi_berita` text NOT NULL,
  `gambar` mediumblob NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tesq`
--

INSERT INTO `tesq` (`id`, `Isi_berita`, `gambar`, `Tanggal`) VALUES
(1, 'tes', '', '0000-00-00'),
(2, 'tes', '', '0000-00-00'),
(3, 'tes', '', '2023-06-15'),
(4, 'swd', '', '2023-06-15'),
(5, 'swd', '', '2023-06-15'),
(6, 'swd', '', '2023-06-15'),
(7, 'c djs', '', '2023-06-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `keterangan_user` text NOT NULL,
  `status_user` enum('Admin','RT','RW') NOT NULL,
  `desa_kelurahan_user` varchar(30) NOT NULL,
  `kecamatan_user` varchar(30) NOT NULL,
  `kabupaten_kota_user` varchar(30) NOT NULL,
  `provinsi_user` varchar(30) NOT NULL,
  `negara_user` varchar(30) NOT NULL,
  `rt_user` varchar(3) NOT NULL,
  `rw_user` varchar(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `keterangan_user`, `status_user`, `desa_kelurahan_user`, `kecamatan_user`, `kabupaten_kota_user`, `provinsi_user`, `negara_user`, `rt_user`, `rw_user`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin di aplikasi pendataan warga', 'Admin', 'Senen', 'Salemba', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '001', '002', '2023-05-29 07:53:05', '2023-05-29 07:53:05'),
(9, 'Dimas Arya', 'adminrt', '80a5aababc3324446fbfac54178a8c10', 'rt desa', 'RT', 'salemba', 'senen', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '003', '016', '2023-05-25 07:27:57', '2018-10-26 13:09:19'),
(10, 'Waljo', 'adminrw', '631575f257e72033d36c3861f22c29e9', 'rw desa', 'RW', 'Senen', 'Salemba', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '003', '016', '2018-10-26 13:09:06', '2018-10-26 13:09:06'),
(11, 'Bambang', 'adminrt2', '022d9d38a8866c546cf92d1ddc0959ab', 'adminrt 02', 'RT', 'salemba', 'senen', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '003', '016', '2018-10-26 13:11:55', '0000-00-00 00:00:00'),
(12, 'dimas arya', 'dimas2009', 'dimas2009', '[owner]', 'Admin', '[pemuda]', '[Pelaihari]', '[Tanah Laut]', '[Kalimantan Selatan]', 'Indonesia', '07', '02', '2023-05-25 07:23:08', '2023-05-25 07:23:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'ADMIN', 'desa', 'ADMIN'),
(2, 'user', 'desa', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(250) NOT NULL,
  `Visi` text NOT NULL,
  `Misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `Visi`, `Misi`) VALUES
(23, 'Meningkatkan kualitas hidup penduduk desa dengan menyediakan akses yang lebih baik ke pendidikan, layanan kesehatan, dan infrastruktur dasar seperti air bersih, sanitasi, dan listrik', 'Meningkatkan kualitas hidup penduduk desa dengan menyediakan akses yang lebih baik ke pendidikan, layanan kesehatan, dan infrastruktur dasar seperti air bersih, sanitasi, dan listrik'),
(24, 'Menjadi desa yang ramah lingkungan, unggul dalam sektor pariwisata, dan memberikan pendidikan berkualitas bagi generasi muda.', 'Mempromosikan pembangunan ekonomi lokal melalui pemberdayaan masyarakat dan pengembangan potensi ekonomi desa, seperti pertanian, industri kreatif, dan pariwisata.'),
(25, 'Menjadi desa yang mandiri secara ekonomi, dengan akses yang adil terhadap layanan kesehatan dan fasilitas dasar yang memadai bagi seluruh penduduk.', 'Mempertahankan dan meningkatkan keberlanjutan lingkungan desa dengan menjaga kelestarian alam, mengelola sampah secara efisien, serta mempromosikan penggunaan energi terbarukan.'),
(26, '', 'Meningkatkan partisipasi aktif masyarakat dalam pengambilan keputusan dan pelaksanaan program pembangunan desa, serta membangun kesadaran akan pentingnya kerjasama dan kebersamaan di antara warga desa.'),
(27, '', 'Menjaga dan mempromosikan kearifan lokal, budaya, dan adat istiadat desa sebagai warisan berharga yang harus dilestarikan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `id_warga` int(11) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') NOT NULL,
  `alamat_ktp_warga` text NOT NULL,
  `alamat_warga` text NOT NULL,
  `desa_kelurahan_warga` varchar(30) NOT NULL,
  `kecamatan_warga` varchar(30) NOT NULL,
  `kabupaten_kota_warga` varchar(30) NOT NULL,
  `provinsi_warga` varchar(30) NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_perkawinan_warga` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_warga` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `alamat_ktp_warga`, `alamat_warga`, `desa_kelurahan_warga`, `kecamatan_warga`, `kabupaten_kota_warga`, `provinsi_warga`, `negara_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pendidikan_terakhir_warga`, `pekerjaan_warga`, `status_perkawinan_warga`, `status_warga`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '35623897658813', 'Murni', 'Salemba', '1985-02-26', 'P', 'Jl. Salemba, Senen, Jakarta Pusat', 'Jl. Salemba, Senen, Jakarta Pusat', 'Salemba', 'Senen', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '001', '002', 'Islam', 'SMP', 'guru', 'Tidak Kawin', 'Tetap', 1, '2018-10-26 13:25:19', '2018-10-26 13:25:19'),
(2, '636', 'utuh', 'Pelaihari', '2023-05-31', 'L', 'Jl.Pabahanan', 'jl', 'Senen', 'Salemba', 'Jakarta Pusat', 'DKI Jakarta', 'Indonesia', '001', '002', 'Islam', 'D3', '', 'Kawin', 'Tetap', 1, '2023-05-31 02:56:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_has_kartu_keluarga`
--

CREATE TABLE `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`),
  ADD KEY `id_user` (`id_user`);

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
-- Indeks untuk tabel `tesq`
--
ALTER TABLE `tesq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD KEY `id_penduduk` (`id_warga`,`id_keluarga`),
  ADD KEY `warga_has_kartu_keluarga_ibfk_2` (`id_keluarga`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tesq`
--
ALTER TABLE `tesq`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
  ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `mutasi`
--
ALTER TABLE `mutasi`
  ADD CONSTRAINT `mutasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
