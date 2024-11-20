<?php
$username = $_POST['username'];
$password = $_POST['password'];

$mysqli = new mysqli('localhost', 'root', '', 'praktikumWeb');
$rs = $mysqli->query("CALL SP_Login ('".$username."','".$password."')");
$row = $rs->fetch_object();

if ($row) {
    header("location: Lat5_1.php");
    exit;
} else {
    echo "Data tidak terdaftar. <a href='formlogin.html'>Kembali ke Login</a>";
}
?>
