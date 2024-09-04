<!DOCTYPE html>
<html>
<head>
	<title>Struktur Desa</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
    <link href="visimisi.css" rel="stylesheet" type="text/css" />
    <link href="visimisi.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
	<header>
	<img src="logo1.png" alt="Logo Desa">
        <h1>PEMERINTAHAN DESA PEMUDA</h1>
        <h2>
            <marquee behavior="scroll" direction="left">Selamat datang di Desa Pemuda Kecamatan Pelaihari Kabupaten Tanah Laut</marquee>
        </h2>
	</header>
	<nav>
	<a href="profil.php">Profil</a>
	<a href="berita.php">Berita</a>
		<a href="visimisi.php">Visi Misi</a>
		<a href="sambutan.php">Sambutan</a>
		<a href="Serdes.php">Sejarah</a>
		<div class="dropdown">
			<button class="dropbtn">Struktur Pemerintahan</button>
			<div class="dropdown-content">
			  <a href="struct_dulu.php">Pemerintahan Sebelumnya</a>
			  <a href="struct.php">Pemerintahan Sekarang</a>
			</div>
		</div>
		<a href="alupel.php">Alur Pelayanan</a>
		<a href="logout.php">Logout</a>
	</nav>
  
	<section>
       <h2>Tambah Profil</h2>
      
  <?php
// Koneksi ke database
$server = "localhost"; // Nama server
$username = "root"; // Username pada phpMyAdmin
$password = ""; // Password pada phpMyAdmin
$nama_database = "db_warga"; // Nama database

$db = mysqli_connect($server, $username, $password, $nama_database);

// Cek koneksi database
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil nilai judul dan isi dari form
$judulprofil = $_POST['judul_profil'];
$isiprofil = $_POST['isi_profil'];


// Lakukan sanitasi data sebelum menyimpan ke database
$isiprofil = mysqli_real_escape_string($db, $isiprofil);
$judulprofil = mysqli_real_escape_string($db, $judulprofil);

// Mengubah baris baru menjadi tag <br>
$isiprofil = nl2br($isiprofil);


// Query untuk menyimpan data berita ke dalam tabel
$query = "INSERT INTO Profil (judul_profil, isi_profil) VALUES ('$judulprofil' , '$isiprofil')";


// Eksekusi query
if (mysqli_query($db, $query)) {
    echo "Profil berhasil ditambahkan.";
} else {
    echo "Error: " . mysqli_error($db);
}

// Tutup koneksi database
mysqli_close($db);
?>
<br><br>
<button type="submit" style="background-color:black; color: white; font-size: 16px;">
    <a href="profil.php" style="text-decoration: none; color: white;">Kembali</a></button>
</section>
<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>
</body>
</html>