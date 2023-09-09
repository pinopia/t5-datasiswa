<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Daftar Siswa</h2>
    <a href="create.php" class="btn btn-primary mb-3">Tambah Siswa</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            $sql = "SELECT * FROM karyawan";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nis']}</td>
                            <td>{$row['nama']}</td>
                            <td>{$row['jeniskelamin']}</td>
                            <td>{$row['noTelepon']}</td>
                            <td>{$row['alamat']}</td>
                            <td>{$row['beratBadan']}</td>
                            <td>{$row['tinggiBadan']}</td>
                            <td>
                                <a href='edit.php?id={$row['id']}' class='btn btn-info btn-sm'>Edit</a>
                                <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Hapus</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data.</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
