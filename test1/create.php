<?php
require_once 'connect.php';

$FIO = $_POST['user_name'];
$adress = $_POST['ardress'];
$number = $_POST['telephone'];
$email = $_POST['email'];

mysqli_query($connect, "INSERT INTO `send1` (`id`, `FIO`, `adress`, `Number`, `email`) VALUES (NULL, '$FIO', '$adress', '$number', '$email')");

header('Location: index.php');
?>