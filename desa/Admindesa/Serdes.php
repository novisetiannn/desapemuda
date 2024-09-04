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
       <h2>Tambah Sejarah</h2>
  <form action="tambah_serdes.php" method="POST">
    <label for="Sejarah">Sejarah</label>
    <textarea name="Sejarah" id="Sejarah" rows="9" required id="Sejarah"></textarea><br><br>
    <button type="submit">Simpan</button>
  </form>
  <h2>Tabel Sejarah</h2>

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
$query = "SELECT * FROM sejarah";

// Eksekusi query
$result = mysqli_query($db, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Cek jumlah baris data yang dihasilkan
    if (mysqli_num_rows($result) > 0) {
        // Tampilkan tabel
        echo "<table>
                <tr>
                   
                    <th> Sejarah </th>
                    <th> Aksi </th>
                    <!-- Tambahkan kolom lain jika diperlukan -->
                </tr>";

       // Loop untuk menampilkan data dalam baris tabel
while ($row = mysqli_fetch_assoc($result)) {
    $sejarah = $row['Sejarah'];
    $sejarah = nl2br($sejarah); // Mengubah baris baru menjadi tag <br>
    echo "<tr>
            <td>" . $sejarah . "</td>
            <td style=\"width: 11%;\"> <a href='edit_Serdes.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus_Serdes.php?id=" . $row['id'] . "'>Hapus</a> </td>
            <!-- Tambahkan kolom lain jika diperlukan -->
          </tr>";
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
<div style="text-align: center;">
 
</section>

       
	<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>
</body>
</html>
