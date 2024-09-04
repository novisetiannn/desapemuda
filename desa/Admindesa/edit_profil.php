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
    <h2>Edit Profil</h2>
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
            $judulprofil = mysqli_real_escape_string($db, $_POST['judul_profil']);
            $isiprofil = mysqli_real_escape_string($db, $_POST['isi_profil']);

            // Update data Visi Misi ke dalam database
            $query_update = "UPDATE Profil SET judul_profil='$judulprofil', isi_profil='$isiprofil' WHERE id='$id'";
            $result_update = mysqli_query($db, $query_update);

            // Periksa apakah update berhasil
            if ($result_update) {
                echo "Data Profil berhasil diupdate.";
            } else {
                echo "Gagal mengupdate data Profil: " . mysqli_error($db);
            }
        }

        // Ambil ID Visi Misi dari parameter URL
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Query untuk mengambil data Visi Misi berdasarkan ID
            $query = "SELECT * FROM Profil WHERE id='$id'";
            $result = mysqli_query($db, $query);

            // Periksa apakah query berhasil dijalankan dan ada data yang ditemukan
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                ?>

                <form action="edit_profil.php?id=<?php echo $id; ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="judul_profil">Judul profil</label>
                    <input type="text" name="judul_profil" id="judul_profil" required id="judul_profil" value="<?php echo htmlspecialchars($row['judul_profil']); ?>"><br><br>
                    <label for="isi_profil">Isi profil</label>
                    <textarea name="isi_profil" id="isi_profil" rows="9"><?php echo htmlspecialchars($row['isi_profil']); ?></textarea><br><br>
                    <button type="submit">Simpan</button>

                </form>

                <?php
            } else {
                echo "";
            }
        } else {
            echo "ID Profil tidak ditemukan.";
        }

        // Tutup koneksi database
        mysqli_close($db);
        ?>

    <button type="submit" style="background-color:black; color: white; font-size: 16px;">
    <a href="profil.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </section>
    <footer>
        <p>&copy; 2021 Profil Desa. All rights reserved.</p>
    </footer>
</body>
</html>
