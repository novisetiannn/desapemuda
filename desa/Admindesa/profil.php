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
  <form action="tambah_profil.php" method="POST">
  	<label for="judul_profil">Judul Profil</label>
    <input type="text" name="judul_profil" id="judul_profil" required id="judul_profil"><br><br>
    <label for="isi_profil">Isi Profil</label>
    <textarea name="isi_profil" id="isi_profil" rows="9" required id="isi_profil"></textarea><br><br>
    <button type="submit">Simpan</button>
  </form>
  <br><br><br>

  <h2>Profil Desa Pemuda</h2>
  

  
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

// Query untuk mengambil data dari tabel
$query = "SELECT * FROM Profil";

// Eksekusi query
$result = mysqli_query($db, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Cek jumlah baris data yang dihasilkan
    if (mysqli_num_rows($result) > 0) {
       // Loop untuk menampilkan data dalam baris tabel
while ($row = mysqli_fetch_assoc($result)) {
    $isiprofil = $row['isi_profil'];
    $isiprofil = nl2br($isiprofil); // Mengubah baris baru menjadi tag <br>
    echo "
				<div style='text-align: center;'>
				<form>
				<h3 style=\"text-align: center; font-weight: bold;\">".$row['judul_profil']."</h3>
				<p style=\"text-align: justify;\">". $isiprofil ."</p>
								
				<br><br>
				<button type='submit' style='display: inline-block; background-color: blue; font-size: 25px; margin-right: 40px;'>
					<a href='edit_profil.php?id=" . $row['id'] . "' style='text-decoration: none; color: white; '>Ganti</a>
				</button> 
				<button type='submit' style='display: inline-block; background-color: red;  font-size: 25px;'>
					<a href='hapus_profil.php?id=" . $row['id'] . "' style='text-decoration: none; color: white; '>Hapus</a>
				</button>
				</form>
				<br><br><br><br>
			</div>";
}

        
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
} else {
    echo "Error: " . mysqli_error($db);
}

// Tutup koneksi database
mysqli_close($db);
?>
<br>
<div style="text-align: center;">
 
</section>

       
	<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>
</body>
</html>
