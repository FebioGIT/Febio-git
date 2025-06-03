<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Buku Baru</h2>
    <form method="post">
        <input type="text" name="judul" placeholder="Judul" required><br>
        <input type="text" name="penulis" placeholder="Penulis"><br>
        <input type="text" name="penerbit" placeholder="Penerbit"><br>
        <input type="number" name="tahun" placeholder="Tahun"><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        $sql = "INSERT INTO buku (judul, penulis, penerbit, tahun) 
                VALUES ('$judul', '$penulis', '$penerbit', '$tahun')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data disimpan'); window.location='index.php';</script>";
        } else {
            echo "Gagal menyimpan data: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
