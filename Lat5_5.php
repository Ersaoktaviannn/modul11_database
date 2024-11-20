<?php

include "koneksi2.php";

$sql = "INSERT INTO user (username, password, level) VALUES (:userName, :passWord, :leVel)";

$statement = $pdo->prepare($sql);

$statement->bindValue(':userName', 'Adam');
$statement->bindValue(':passWord', 'ahay');
$statement->bindValue(':leVel', '1');

$inserted = $statement->execute(); 
if ($inserted) {
    echo 'Data berhasil ditambahkan!<br>';
}

?>
