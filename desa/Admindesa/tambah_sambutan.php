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
    <h2>Tambah Sambutan</h2>
     
    <?php
// Koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$nama_database = "db_warga";

$db = mysqli_connect($server, $username, $password, $nama_database);

// Cek koneksi database
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $judulsbmtn = $_POST['judulsbmtn'];
    $isisbmtn = $_POST['isi_sbmtn'];

    if (isset($_FILES['gambar'])) {
    $file = $_FILES['gambar'];
    

    // Upload file gambar berita
    $targetDir = "gambar_sbmtn/";
    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileTmp = $file['tmp_name'];
    $fileType = $file['type'];
    $targetFile = $targetDir . basename($fileName);

    // Memindahkan file yang diunggah ke direktori tujuan
    if(move_uploaded_file($fileTmp, $targetFile)){}

    
    // Lakukan sanitasi data sebelum menyimpan ke database
    $isisbmtn = mysqli_real_escape_string($db, $isisbmtn);

    // Mengubah baris baru menjadi tag <br>
    $isisbmtn = nl2br($isisbmtn);
    
    // Query untuk menyimpan data berita ke dalam database
    $query = "INSERT INTO sambutan (judulsbmtn, isi_sbmtn, gambar) VALUES ('$judulsbmtn', '$isisbmtn', '$fileName')";
   
    

    // Periksa apakah data berhasil disimpan
       if ( mysqli_query($db, $query)) {
        echo "Sambutan berhasil ditambahkan.";
        } 
      else {
        echo "Gagal menambahkan Sambutan: " . mysqli_error($db);
         }
    
}
}

// Tutup koneksi database
mysqli_close($db);
?>
<br><br>
<button type="submit" style="background-color:black; color: white; font-size: 16px;">
    <a href="sambutan.php" style="text-decoration: none; color: white;">Kembali</a></button>
</section>
<footer>
		<p>&copy; 2021 Profil Desa. All rights reserved.</p>
	</footer>
</body>
</html>
