<?php
// Ambil id berita dari parameter URL
$id = $_GET['id'];

// Query untuk mengambil berita berdasarkan id
$query = "SELECT * FROM berita WHERE id = $id";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
  // Tampilkan berita secara detail
  $row = mysqli_fetch_assoc($result);
  $judul = $row['Judul'];
  $isiBerita = nl2br($row['Isi_berita']); // Mengubah baris baru menjadi tag <br>
  $tanggal = $row['Tanggal'];
  
  echo "
  <div style='text-align: center;'>
    <h3 style='text-align: center; font-weight: bold;'>".$judul."</h3>
    <p style='text-align: justify;'>".$isiBerita."</p>
    <p>(".$tanggal.")<p>
  </div>";
} else {
  echo "<h3>Berita tidak ditemukan.</h3>";
}
?>
