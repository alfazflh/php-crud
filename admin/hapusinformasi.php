<?php
include '../koneksi.php';
$id = $_GET['id']; 


$hapus = mysqli_query($mysqli, "DELETE FROM budaya WHERE id = '$id'") or die(mysqli_error($mysqli));

if($hapus) {
    header("Location: informasi.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>