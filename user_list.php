<?php

$conn = new PDO ("mysql:host=localhost;dbname=izotova", "root", "");

$result= $conn->query("SELECT * FROM users");

foreach($result AS $row) {
    echo $row['id'].' '.$row['login'].' '.$row['password'].'<br>';
}
?>