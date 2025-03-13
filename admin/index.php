<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data User</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
    rel="stylesheet"
    />
    <link rel="icon" href="../icon.jpg">
    <link rel="stylesheet" href="stylees.css">
</head>
<body>
<header>
        <nav>
            <a class="item" href="index.php">Tabel User</a>
            <a class="item" href="informasi.php">Tabel Informasi</a>
            <div class="underline"></div>
        </nav>

    </header>
    <section class="user">
    <h1 class="heading">Data User</h1>
        <table border="1" class="table">
            <tr>
                <th>Nomer</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th> 
                <th>Level</th>
                <th>Action</th> 
                <th>Action</th> 
            </tr>
            <?php
            include '../koneksi.php';
            $query_mysql = mysqli_query($mysqli, "SELECT * FROM user") or die(mysqli_error($mysqli));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)) { 
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['level']; ?></td>
                <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn-update">Edit</a> </td>
                <td><a href="hapususer.php?id=<?php echo $data['id']; ?>" class="btn-hapus">Delete</a> </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <br>
    <div class='btn-log'>
    <a href="../register.php" class="btn">Tambah User</a>
    <a href="../index.php" class="btn">Log Out</a>
    <div>
    </section>
    

    <script src="main.js"></script>
</body>
</html>