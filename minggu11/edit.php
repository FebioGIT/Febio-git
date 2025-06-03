<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM buku WHERE id=$id");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Buku</h2>
    <form method="post">
        <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br>
        <input type="text" name="penulis" value="<?= $data['penulis'] ?>"><br>
        <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>"><br>
        <input type="number" name="tahun" value="<?= $data['tahun'] ?>"><br>
        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        $sql = "UPDATE buku SET judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun='$tahun' 
                WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data diperbarui'); window.location='index.php';</script>";
        } else {
            echo "Gagal: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
