<?php
require_once('User.php');

$name = htmlspecialchars($_POST["name"]);
$age = (int)$_POST["age"];
$email = htmlspecialchars($_POST["email"]);
$phone = (int)$_POST["phone"];

$userAux = new User($name,$age,$email,$phone);
$userAux->printUser($name,$age,$email,$phone);
?>