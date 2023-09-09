<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nis = $_POST["nis"];
    $name = $_POST["nama"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $noTelepon = $_POST["noTelepon"];
    $alamat = $_POST["alamat"];
    $beratBadan = $_POST["beratBadan"];
    $tinggiBadan = $_POST["tinggiBadan"];

    $sql = "UPDATE karyawan SET nis='$nis', nama='$name', jeniskelamin='$jeniskelamin', noTelepon='$noTelepon', alamat ='$alamat', beratBadan='$beratBadan', tinggiBadan='$tinggiBadan' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$id = $_GET["id"];
$sql = "SELECT * FROM karyawan WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit Siswa</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group">
            <label>NIS</label>
            <input type="text" name="nis" class="form-control" value="<?php echo $row['nis']; ?>" required>
        </div>
        <div class="form-group">
            <label>Nama : </label>
            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin : </label>
            <input type="text" name="jeniskelamin" class="form-control" value="<?php echo $row['jeniskelamin']; ?>" required>
        </div>
        <div class="form-group">
            <label>No Telepon : </label>
            <input type="text" name="noTelepon" class="form-control" value="<?php echo $row['noTelepon']; ?>" required>
        </div>
        <div class="form-group">
            <label>Alamat : </label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>" required>
        </div>
        <div class="form-group">
            <label>Berat Badan : </label>
            <input type="text" name="beratBadan" class="form-control" value="<?php echo $row['beratBadan']; ?>" required>
        </div>
        <div class="form-group">
            <label>Tinggi Badan : </label>
            <input type="text" name="tinggiBadan" class="form-control" value="<?php echo $row['tinggiBadan']; ?>" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</div>

</body>
</html>
