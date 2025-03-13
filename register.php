<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="icon.jpg">
</head>
<body>
<div class="eui">
    <h1>europetour.</h1>
</div>
    <div class="container">
        <h1>User Registration</h1>
        <form class="form" action="register.php" method="post">
                <input type="text" id="nama" name="nama" required placeholder="Name">

                <input type="text" id="username" name="username" required placeholder="Username">

                <input type="text" id="password" name="password" required placeholder="Password">

                    <select name="level" id="level" required>
                        <option value="user">User</option>
                    </select>

                    <button name="submit" type="submit">Register</button>

            <div class="login">
                <p>Already have an account? <a href="login.php">Login here</a></p>
            </div>

            <?php
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    include_once("koneksi.php");                                                        

    $result = mysqli_query($mysqli,
    "INSERT INTO user(nama,username,password,level) VALUES ('$nama','$username','$password','$level')");

    header("location:index.php");

}

?>
        </form>
    </div>

</body>
</html>

