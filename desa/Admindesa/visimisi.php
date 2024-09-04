<!DOCTYPE html>
<html>
<head>
	<title>Struktur Desa</title>
	<link href="border.css" rel="stylesheet" type="text/css" />
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
       <h2>Tambah Visi Misi</h2>
  <form action="tambah_VisiMisi.php" method="POST">
    <label for="Visi">Visi</label>
    <textarea name="Visi" id="Visi" rows="4" ></textarea>
    <label for="Misi">Misi</label>
    <textarea name="Misi" id="Misi" rows="4" ></textarea><br><br>
    <button type="submit">Simpan</button>
  </form><br><br><br>
  

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

$query = "SELECT * FROM sambutan";
		$result = mysqli_query($db, $query);

		if (mysqli_num_rows($result) > 0) {
			// Tampilkan semua gambar
		  while ($row = mysqli_fetch_assoc($result)){
				$fileName = $row['gambar'];
				$filePath = "gambar_sbmtn/" . $fileName;

                echo "
				<div style='text-align: center;'>
				<img src='$filePath' alt='Gambar Sambutan'style='max-width: 585px; height: auto; text-align: center;'><br><br>
                </div>";
            
            }
        } else {
			echo "<p>Tidak ada Sambutan yang tersedia.<p>";
        }
        ?>
        <br>
 <h2>Tabel Visi Misi</h2>
        <?php
// Query untuk mengambil data dari tabel
$query = "SELECT * FROM visi_misi";

// Eksekusi query
$result = mysqli_query($db, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Cek jumlah baris data yang dihasilkan
    if (mysqli_num_rows($result) > 0) {
        // Tampilkan tabel
        echo "
        
        
            <table>
                <tr>
                    <th> No </th>
                    <th> Visi </th>
                    <th> Misi </th>
                    <th> Aksi </th>
                    <!-- Tambahkan kolom lain jika diperlukan -->
                </tr>";

     // Inisialisasi variabel penomoran
       $nomor = 1;

       // Loop untuk menampilkan data dalam baris tabel
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td style=\"width: 3%;\">{$nomor}</td>
            <td>{$row['Visi']}</td>
            <td>{$row['Misi']}</td>
            <td style=\"width: 11%;\">
            <a href='edit_visimisi.php?id=" . $row['id'] . "'>Edit</a> | 
            <a href='hapus_visimisi.php?id=" . $row['id'] . "'>Hapus</a> </td>
            <!-- Tambahkan kolom lain jika diperlukan -->
          </tr>";
          $nomor++; // Tambahkan penomoran setiap kali loop berjalan
}

        echo "</table>";
    } else {
        echo "Tidak ada VisiMisi yang ditemukan.";
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
</body>
</html>
