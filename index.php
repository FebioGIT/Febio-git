<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Buku Perusahaan</h2>
    <a href="tambah.php">+ Tambah Buku</a><br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM buku");
        while ($data = mysqli_fetch_assoc($query)) {
            echo "<tr>
                <td>$no</td>
                <td>{$data['judul']}</td>
                <td>{$data['penulis']}</td>
                <td>{$data['penerbit']}</td>
                <td>{$data['tahun']}</td>
                <td>
                    <a href='edit.php?id={$data['id']}'>Edit</a> | 
                    <a href='hapus.php?id={$data['id']}' onclick=\"return confirm('Yakin?')\">Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
