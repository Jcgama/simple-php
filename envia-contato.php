<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$_SESSION["success"] = "Feature ainda não implementada, nos desculpe.";
header("Location: index.php");
die();
?>