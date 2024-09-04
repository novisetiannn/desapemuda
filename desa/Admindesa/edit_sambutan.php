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
        </h2>>
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
        <h2>Edit Sambutan</h2>
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
           $judulsbmtn = mysqli_real_escape_string($db, $_POST['judulsbmtn']);
           $isisbmtn = mysqli_real_escape_string($db, $_POST['isi_sbmtn']);
           $gambar = mysqli_real_escape_string($db, $_POST['gambar_lama']);

           // Cek apakah ada perubahan pada gambar
           if ($_FILES['gambar']['size'] > 0) {
               $file = $_FILES['gambar'];

               // Upload file gambar berita
               $targetDir = "gambar_sbmtn/";
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

            // Update data Visi Misi ke dalam database
            $query_update = "UPDATE sambutan SET judulsbmtn='$judulsbmtn', isi_sbmtn='$isisbmtn', gambar='$gambar'  WHERE id='$id'";
            $result_update = mysqli_query($db, $query_update);

            // Periksa apakah update berhasil
            if ($result_update) {
                echo "Data Sambutan berhasil diupdate.";
            } else {
                echo "Gagal mengupdate data Sambutan: " . mysqli_error($db);
            }
        }

        // Ambil ID Visi Misi dari parameter URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Query untuk mengambil data Visi Misi berdasarkan ID
            $query = "SELECT * FROM sambutan WHERE id='$id'";
            $result = mysqli_query($db, $query);

            // Periksa apakah query berhasil dijalankan dan ada data yang ditemukan
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $fileName = $row['gambar'];
                $filePath = "gambar_sbmtn/" . $fileName;
                ?>

                <form action="edit_sambutan.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="judulsbmtn">Judul Sambutan</label>
                    <input type="text" name="judulsbmtn" id="judulsbmtn" required id="judulsbmtn" value="<?php echo htmlspecialchars($row['judulsbmtn']); ?>"><br><br>
                    <label for="isi_sbmtn">Isi_berita</label>
                    <textarea name="isi_sbmtn" id="isi_sbmtn" rows="9" required id="isi_sbmtn"><?php echo htmlspecialchars($row['isi_sbmtn']); ?></textarea><br><br>
                    <label for="gambar">Gambar saat ini:</label><br>
                    <img src="<?php echo $filePath; ?>" alt="Gambar Sambutan Desa" style="max-width: 585px; height: auto;"><br><br><br>
                    <label for="gambar">Pilih gambar baru:</label>
                    <input type="file" name="gambar" id="gambar" accept="image/*" ><br><br>
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
    <a href="sambutan.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </section>
    <footer>
        <p>&copy; 2021 Profil Desa. All rights reserved.</p>
    </footer>
</body>
</html>
