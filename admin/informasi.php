<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Informasi</title>
    <link rel="stylesheet" href="stylees.css">
    <link rel="icon" href="../icon.jpg">
</head>
<body>
<header>
        <nav>
            <a class="item" href="informasi.php">Tabel Informasi</a>
            <a class="item" href="index.php">Tabel User</a>
            <div class="underline"></div>
        </nav>

    </header>
    <section class="user">
    <h1 class="heading">Informasi</h1>
        <table border="1" class="table">
            <tr>
                <th>Nomer</th>
                <th>Bagian</th>
                <th>Negara</th>
                <th>Informasi Budaya</th>
                <th>Action</th> 
                <th>Action</th> 
            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM budaya") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['bagian']; ?></td>
                <td><?php echo $data['negara']; ?></td>
                <td><?php echo $data['penjelasanbudaya']; ?></td>
                <td><a href="editinformasi.php?id=<?php echo $data['id']; ?>" class="btn-update">Edit</a> </td>
                <td><a href="hapusinformasi.php?id=<?php echo $data['id']; ?>" class="btn-hapus">Delete</a> </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <br>
    <div class='btn-log'>
    <a href="tambahinformasi.php" class="btn">Tambah Informasi</a>
    <div>
    </section>
    
</body>
</html>