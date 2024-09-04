<?php
			include "koneksi.php";
			$query = "SELECT * FROM berita ORDER BY id_berita DESC";
			$result = mysqli_query($koneksi, $query);
			$no = 1;
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row['judul']; ?></td>
					<td><?php echo $row['isi']; ?></td>
					<td><?php echo $row['tanggal']; ?></td>
					<td>
						<a href="detail.php?id=<?php echo $row['id_berita']; ?>">Detail</a>
						<a href="edit.php?id=<?php echo $row['id_berita']; ?>">Edit</a>
						<a href="hapus.php?id=<?php echo $row['id_berita']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</a>
					</td>
				</tr>
				<?php
			}
			mysqli_close($koneksi);
			?>
		</tbody>