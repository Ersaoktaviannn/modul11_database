<?php
include "koneksi.php"; if (empty($_POST['e'])) {
mysqli_query($koneksi,"INSERT INTO user VALUES ('$_POST[username]', '$_POST[password]', '$_POST[level]')");
} else {
mysqli_query($koneksi,"UPDATE user SET password = '$_POST[password]', level = '$_POST[level]' WHERE username = '$_POST[username]'");
}

header("location:Lat5_1.php");
