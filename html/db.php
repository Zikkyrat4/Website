<?php
$servername = "db";
$username = "root";
$password = "kali";
$dbName = "PTstart";

$link = mysqli_connect($servername, $username, $password);

if (!$link) {
  die("Ошибка подключения: " . mysqli_connection_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbName";

if(!mysqli_query($link, $sql)) {
  echo "Не удалось создать БД";
}

mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbName);

$sql = "CREATE TABLE IF NOT EXISTS users(
  id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(15) NOT NULL,
  email VARCHAR(50) NOT NULL,
  password VARCHAR(20) NOT NULL
)";

if(!mysqli_query($link, $sql)) {
  echo "Не удалось создать таблицу Users";
}

$sql = "CREATE TABLE IF NOT EXISTS posts(
  id  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  main_text VARCHAR(1000) NOT NULL
)";

if(!mysqli_query($link, $sql)) {
  echo "Не удалось создать таблицу Posts";
}

mysqli_close($link);
?>