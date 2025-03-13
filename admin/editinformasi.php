<?php

include '../koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    if(isset($_POST['submit'])) {

        $id = $_POST['id'];
        $bagian = $_POST['bagian'];
        $penjelasanbudaya = $_POST['penjelasanbudaya'];
        $negara = $_POST['negara'];

        $query = "UPDATE budaya SET id='$id', bagian='$bagian', penjelasanbudaya='$penjelasanbudaya' , negara='$negara' WHERE id='$id'";
        $result = mysqli_query($mysqli, $query);

        if($result) {
            header("Location: informasi.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    $query = "SELECT * FROM budaya WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header("Location: informasi.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Informasi</title>
    <link rel="icon" href="../icon.jpg">
    <style>
body {
    margin: 0;
    padding: 0;
    background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0.5),
    rgba(0, 0, 0, 0.8)
    ),
    url("../header.png");
    background-repeat: no-repeat;
    background-size: cover;
    font-family: "Poppins", sans-serif;
}

.container {
    max-width: 400px;
    margin: 150px auto;
    background-color: #f8f8f8;
    border-radius: 1.25rem;
    padding: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 30px;
    text-align: center;
    color: #333;
}

form {
    width: 100%;
    margin: 0;
    display: grid;
    gap: 16px;
}

table {
    width: 100%;
}

td {
    padding: 10px 0;
}

input[type="text"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    height: 40px;
}

input[type="submit"] {
    width: 60%;
    background-color: #282d34;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #333333;
}

</style>
</head>
<body>
    <div class="container">
        <header>
            <h1 class="title">Edit Informasi</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
        <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>"><br>

        <label for="bagian">Bagian</label>
            <input type="text" id="bagian" name="bagian" value="<?php echo $data['bagian']; ?>"><br>

        <label for="bagian">Negara</label>
            <input type="text" id="negara" name="negara" value="<?php echo $data['negara']; ?>"><br>

        <label for="penjelasanbudaya">Penjelasan Budaya</label>
            <input type="text" id="penjelasanbudaya" name="penjelasanbudaya" value="<?php echo $data['penjelasanbudaya']; ?>"><br>
            
            <input type="submit" name="submit" value="Edit" class="button">
        </form>
        </section>
    </div>

   
</body>
</html>