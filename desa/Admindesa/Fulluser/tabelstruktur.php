<!DOCTYPE html>
<html>
<head>
	<title>Struktur Desa</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
  <link href="visimisi.css" rel="stylesheet" type="text/css" />
    <link href="struk.css" rel="stylesheet" type="text/css" />
    
</head>
<body>
	<header>
    <img src="logo1.png" alt="Logo Desa">
    <h1>PEMERINTAHAN DESA PEMUDA</h1>
		<h1>
		<marquee behavior="scroll" direction="left">Selamat datang Didesa Pemuda	Kecamatan Pelaihari	Kabupaten Tanah Laut</marquee>
	</h1>
	</header>
  <nav>
  <div class="dropdown">
			<a href="index.php">
			  <button class="dropbtn">Beranda</button>
			</a>
			<div class="dropdown-content">
			  <a href="vismis.php">Visi Misi</a>
			  <a href="alur.php">Alur Pelayanan Berkas</a>
			</div>
		</div>
		<a href="profil.php">Profil</a>
		<a href="sejarah.php">Sejarah</a>
		<div class="dropdown">
			<button class="dropbtn">Struktur Pemerintahan</button>
			<div class="dropdown-content">
			  <a href="tabelstruktur.php">Pemerintahan Sebelumnya</a>
			  <a href="pemdessekarang.php">Pemerintahan Sekarang</a>
			</div>
		</div>
		<a href="login.php">Login</a>
  </nav>
	<section>
        
			<h1 align="center">Urutan Pemerintahan Sebelumnya</h1>
		</div>

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
$query = "SELECT * FROM periode";

// Eksekusi query
$result = mysqli_query($db, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Cek jumlah baris data yang dihasilkan
    if (mysqli_num_rows($result) > 0) {
        // Tampilkan tabel
        echo "<table>
                <tr>
                    <th> No </th>
                    <th> Nama </th>
                    <th> Periode Pemerintahan </th>

                    <!-- Tambahkan kolom lain jika diperlukan -->
                </tr>";
       
                 // Inisialisasi variabel penomoran
                 $nomor = 1;

       // Loop untuk menampilkan data dalam baris tabel
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td style=\"width: 3%;\">{$nomor}</td>
            <td>{$row['Nama']}</td>
            <td>{$row['Periode']}</td>
        </tr>";
        $nomor++; // Tambahkan penomoran setiap kali loop berjalan
}

        echo "</table>";
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

 
</section>

       
	<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>