    <?php
    include("../koneksi.php");
    // kalau tidak ada id di query string
    if(!isset($_GET['id'])){ header('Location: index.php');
    }
    $id = $_GET['id'];
    // Fetech user data based on id
    $result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");
    while($user_data = mysqli_fetch_array($result))
    {
    $nama = $user_data['nama'];
    $username = $user_data['username'];
    $password = $user_data['password'];
    $level=$user_data['level'];
    }
    ?>
    <html>
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

h3 {
    font-size: 25px;
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
    <body>
            <div class="container">
            <h3>Formulir Edit User</h3>

        <form method="POST" action="prosesedit.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?php echo $username ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="<?php echo $password ?>"></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <select name="level" id="level" required>
                            <option > <?php echo $level ?></option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
        </div>
    </body>

    </html>