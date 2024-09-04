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
		<h2>Berita</h2>
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

        // Periksa apakah parameter ID ada dalam URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Query untuk mengambil informasi gambar berdasarkan ID
            $query = "SELECT * FROM berita WHERE id='$id'";
            $result = mysqli_query($db, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $fileName = $row['Gambar'];

                // Hapus data gambar dari database
                $query_delete = "DELETE FROM berita WHERE id = '$id'";
                $result_delete = mysqli_query($db, $query_delete);

                if ($result_delete) {
                    // Hapus file gambar dari server
                    $filePath = "gambar_berita/" . $fileName;
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                    echo "Data berita berhasil dihapus.";
                } else {
                    echo "Gagal menghapus data gambar: " . mysqli_error($db);
                }
            } else {
                echo "ID berita tidak valid.";
            }
        } else {
            echo "ID berita tidak tersedia.";
        }

        // Tutup koneksi database
        mysqli_close($db);
        ?>
        <br><br>
        <button type="submit" style="background-color:black; color: white; font-size: 16px;">
    <a href="berita.php" style="text-decoration: none; color: white;">Kembali</a></button>


	</section>
