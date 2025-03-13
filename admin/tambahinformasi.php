<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../icon.jpg">
    <title>Halaman Tambah Informasi</title>
    <style>
* {
  box-sizing: border-box;
}

html,
body,
.wrapper {
  height: 100%;
}

@keyframes rotate {
  100% {
    background-position: 15% 50%;
  }
}

body {
  display: grid;
  place-items: center;
  margin: 0;
  padding: 0 24px;
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

@media (width >= 500px) {
  body {
    padding: 0;
  }
}

.container {
  position: relative;
  z-index: 3;
  width: 100%;
  margin: 0 20px;
  padding: 70px 30px 44px;
  border-radius: 1.25rem;
  background: #f8f8f8;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.eu{
  font-family: "Poppins", sans-serif;
  font-size: 40px;
  color: #f8f8f8;
  margin-bottom: 100px;
}

.eui{
  font-family: "Poppins", sans-serif;
  font-size: 40px;
  color: #f8f8f8;
  margin-bottom: 230px;
}

@media (width >= 500px) {
  .container {
    margin: 0;
    width: 480px;
    margin-top: -260px;
  }
}

.container > h1 {
  font-size: 36px;
  font-weight: 700;
  margin: 0 0 0px;
}

.form {
  width: 100%;
  margin: 0;
  display: grid;
  gap: 16px;
}

.form > input,
.form > button {
  width: 100%;
  height: 56px;
}

.form > input {
  border: 2px solid #ebebeb;
  font-family: inherit;
  font-size: 16px;
  padding: 0 16px;
}

.form > button {
  cursor: pointer;
  width: 100%;
  height: 56px;
  padding: 0 16px;
  border-radius: 0.5rem;
  background: #282d34;
  color: #f9f9f9;
  border: 0;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 600;
  text-align: center;
  letter-spacing: 2px;
  transition: all 0.375s;
}

.form button:hover {
  background-color: #333333;
}

.form > a {
  color: rgb(110, 87, 224);
  font-size: 1rem;
  text-align: left;
  text-decoration: none;
  margin-bottom: 6px;
}

.form > select {
    width: 100%;
    height: 56px;
    padding: 16px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Informasi</h1><br>
        <form class="form" action="tambahinformasi.php" method="post">
            <input type="text" name="bagian" placeholder="Bagian Eropa"> 
            <input type="text" name="negara" placeholder="Negara Eropa"> 
            <input type="text" name="penjelasanbudaya" placeholder="Informasi">
            <button class="button" name="sumbit" type="submit">Tambah Informasi</button>
            <?php
            if(isset($_POST['sumbit'])){
                $bagian= $_POST['bagian'];
                $negara= $_POST['negara'];
                $penjelasanbudaya= $_POST['penjelasanbudaya'];
                include_once("../koneksi.php");

                $result = mysqli_query($mysqli,
                "INSERT INTO budaya(bagian,negara,penjelasanbudaya) VALUES ('$bagian','$negara','$penjelasanbudaya')");

                header("location:informasi.php");
            }
            ?>
        </form>
    </div>
</body>
</html>