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
    <h2>Edit Gambar Struktur</h2>
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


        // Cek apakah form disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

             // Mendapatkan informasi file
             $file = $_FILES['Struktur'];
             $fileName = $file['name'];
             $fileTmp = $file['tmp_name'];
             $targetDir = "gambar_struktur/";
             $targetFile = $targetDir . basename($fileName);
 
             // Pindahkan file yang diunggah ke direktori tujuan
             if (move_uploaded_file($fileTmp, $targetFile)) {
                 echo "";
             } else {
                 echo "Gagal mengupload gambar.";
             }

            // Ambil data dari form
            $id = $_POST['id'];
            $Struktur = mysqli_real_escape_string($db, $_FILES['Struktur']['name']);

            // Update data Struktur ke dalam database
            $query_update = "UPDATE struktur SET Struktur='$Struktur' WHERE id='$id'";
            $result_update = mysqli_query($db, $query_update);

            // Periksa apakah update berhasil
            if ($result_update) {
                echo "Gambar berhasil diganti.";
            } else {
                echo "Gagal mengupdate data Struktur: " . mysqli_error($db);
            }
        }


        // Periksa apakah parameter ID ada dalam URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Query untuk mengambil informasi gambar berdasarkan ID
            $query = "SELECT * FROM struktur WHERE id = '$id'";
            $result = mysqli_query($db, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $fileName = $row['Struktur'];
                $filePath = "gambar_struktur/" . $fileName;
                ?>
                
                <!-- Tampilkan form untuk mengedit gambar -->
                <form action="edit_Struktur.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="Struktur">Gambar saat ini:</label><br>
                    <img src="<?php echo $filePath; ?>" alt="Gambar Struktur Desa" style="max-width: 500px; height: auto;"><br><br>
                    <label for="Struktur">Pilih gambar baru:</label><br>
                    <input type="file" name="Struktur" id="Struktur" accept="image/*" required id="Struktur"><br><br>
                    <button type="submit">Ganti</button>
                    <br><br>
                </form>

                <?php
            } else {
                echo "ID gambar tidak tersedia.";
            }
        } else {
            echo "ID gambar tidak tersedia.";
        }

        // Tutup koneksi database
        mysqli_close($db);
        ?>

    <br><br>
        <button type="submit" style="background-color:black; color: white; font-size: 16px;">
    <a href="struct.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </section>
    


</body>
</html>
