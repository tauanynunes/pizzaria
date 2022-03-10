<?php

session_start();
include_once("conexao.php");

$nome_func = filter_input(INPUT_POST, 'nome_func', FILTER_SANITIZE_STRING);
$cpf_func = filter_input(INPUT_POST, 'cpf_func', FILTER_SANITIZE_STRING);
$email_func = filter_input(INPUT_POST, 'email_func', FILTER_SANITIZE_EMAIL);
$rg_func = filter_input(INPUT_POST, 'rg_func', FILTER_SANITIZE_STRING);

$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);

$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'comp', FILTER_SANITIZE_STRING);

// echo "Nome: $nome_func <br>";
// echo "Cpf: $cpf_func <br>";
// echo "Email: $email_func <br>";
// echo "RG: $rg_func <br>";
// echo "Data: $data <br>";
// echo "Cidade: $cidade <br>";
// echo "Cep: $cep <br>";
// echo "Bairro: $bairro <br>";
// echo "Rua: $rua <br>";
// echo "Numero: $numero <br>";
// echo "Complemento: $complemento <br>";

$result_usuario = "INSERT INTO usuarios (nome, cpf, email, rg, data, cidade, cep, bairro, rua, numero, complemento) VALUES ('$nome_func', '$cpf_func', '$email_func', '$rg_func', '$data', '$cidade', '$cep', '$bairro', '$rua', '$numero', '$complemento')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.html");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.html");
}