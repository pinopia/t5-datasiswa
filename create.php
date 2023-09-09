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

    $sql = "INSERT INTO karyawan (id, nis, nama, jeniskelamin, noTelepon, alamat, beratBadan, tinggiBadan) VALUES ('$id', '$nis', '$name', '$jeniskelamin',  '$noTelepon', '$alamat', '$beratBadan', '$tinggiBadan' )";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Siswa</h2>
    <form method="post">
        <div class="form-group">
            <label>Id:</label>
            <input type="text" name="id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>NIS:</label>
            <input type="text" name="nis" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <input type="text" name="jeniskelamin" class="form-control" required>
        </div>
        <div class="form-group">
            <label>No Telepon:</label>
            <input type="text" name="noTelepon" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Berat Badan:</label>
            <input type="text" name="beratBadan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tinggi Badan:</label>
            <input type="text" name="tinggiBadan" class="form-control" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Tambah</button>
