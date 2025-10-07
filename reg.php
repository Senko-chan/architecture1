<?php
$login=$_POST["login"];
echo $login;

echo "<br>";

$password=$_POST["password"];
echo $password;

$conn = new PDO ("mysql:host=localhost;dbname=izotova", "root", "");
$conn -> exec("INSERT INTO users (login, password) VALUES ('$login', '$password')");
?>

