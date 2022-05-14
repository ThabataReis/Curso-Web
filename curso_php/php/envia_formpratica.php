<?php

include_once("conexaopratica.php");

$name = $_POST['nome'];
$surname = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$birthdate = $_POST['data_de_nascimento'];
$address = $_POST['endereco'];
$phone = $_POST['telefone'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$result = mysqli_query($conn, "INSERT INTO CADASTRO (`NOME`, `SOBRENOME`, `CPF`, `DATA_DE_NASCIMENTO`, `ENDERECO`, `CONTATO`, `EMAIL`, `SENHA`) VALUES ('$name', '$surname', '$cpf', '$birthdate', '$address', '$phone', '$email', '$senha')");

//echo $result;

mysqli_close($conn);

header('location: formpratica.php');

?>