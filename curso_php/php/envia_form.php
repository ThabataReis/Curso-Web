<?php

include_once("conexao.php");

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$result = mysqli_query($conn, "INSERT INTO USUARIO (email, senha) VALUES ('$email', '$senha')");

//echo $result;

mysqli_close($conn);

header('location: form.php');

?>
