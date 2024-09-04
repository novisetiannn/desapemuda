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
        <h2>Edit Berita</h2>
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

        // Cek apakah form disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

             // Ambil data dari form
             $id = $_POST['id'];
             $judul = mysqli_real_escape_string($db, $_POST['Judul']);
             $isiberita = mysqli_real_escape_string($db, $_POST['Isi_berita']);
            $tanggal = mysqli_real_escape_string($db, $_POST['Tanggal']);
             $gambar = mysqli_real_escape_string($db, $_POST['gambar_lama']);
 
             // Cek apakah ada perubahan pada gambar
             if ($_FILES['Gambar']['size'] > 0) {
                 $file = $_FILES['Gambar'];
 
                 // Upload file gambar berita
                 $targetDir = "gambar_berita/";
                 $fileName = $file['name'];
                 $fileSize = $file['size'];
                 $fileTmp = $file['tmp_name'];
                 $fileType = $file['type'];
                 $targetFile = $targetDir . basename($fileName);
 
                 // Memindahkan file yang diunggah ke direktori tujuan
                 if (move_uploaded_file($fileTmp, $targetFile)) {
                     $gambar = $fileName;
                 } else {
                     echo "Gagal mengupload gambar.";
                 }
             }
 
             // Update data Berita ke dalam database
             $query_update = "UPDATE berita SET Judul='$judul', Isi_berita='$isiberita', Tanggal='$tanggal', Gambar='$gambar' WHERE id='$id'";
             $result_update = mysqli_query($db, $query_update);
 
             // Periksa apakah update berhasil
             if ($result_update) {
                 echo "Data Berita berhasil diupdate.";
             } else {
                 echo "Gagal mengupdate data Berita: " . mysqli_error($db);
             }
         }
 
        // Ambil ID Visi Misi dari parameter URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Query untuk mengambil data Visi Misi berdasarkan ID
            $query = "SELECT * FROM berita WHERE id='$id'";
            $result = mysqli_query($db, $query);

            // Periksa apakah query berhasil dijalankan dan ada data yang ditemukan
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $fileName = $row['Gambar'];
                $tanggal = $row['Tanggal'];
                $filePath = "gambar_berita/" . $fileName;
                ?>

                <form action="edit_berita.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="Judul">Judul berita</label>
                    <input type="text" name="Judul" id="Judul" required id="Judul" value="<?php echo htmlspecialchars($row['Judul']); ?>"><br><br>
                    <label for="Isi_berita">Isi berita</label>
                    <textarea name="Isi_berita" id="Isi_berita" rows="9" required id="Isi_berita"><?php echo htmlspecialchars($row['Isi_berita']); ?></textarea><br><br>
                    <label for="Tanggal" >Tanggal saat ini </label>
                    <input type="date" value="<?php echo $tanggal; ?>" name="Tanggal" id="Tanggal" ><br><br><br>
                    <label for="Gambar">Gambar saat ini:</label><br>
                    <img src="<?php echo $filePath; ?>" alt="Gambar berita Desa" style="max-width: 585px; height: auto;"><br><br>
                    <label for="Gambar">Pilih gambar baru:</label><br>
                    <input type="file" name="Gambar" id="Gambar" accept="image/*" ><br><br>
                    <input type="hidden" name="gambar_lama" value="<?php echo $fileName; ?>">

                    <button type="submit">Simpan</button>
                </form>

                <?php
            } else {
                echo "";
            }
        } else {
            echo "ID berita tidak ditemukan.";
        }

        // Tutup koneksi database
        mysqli_close($db);
        ?>

    <button type="submit" style="background-color:black; color: white; font-size: 16px;">
    <a href="berita.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </section>
    <footer>
        <p>&copy; 2021 Profil Desa. All rights reserved.</p>
    </footer>
</body>
</html>
