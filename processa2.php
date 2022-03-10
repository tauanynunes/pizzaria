<?php

session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf= filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'comp', FILTER_SANITIZE_STRING);

$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
$sabores = filter_input(INPUT_POST, 'sabores', FILTER_SANITIZE_STRING);
$tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
$refri = filter_input(INPUT_POST, 'refri', FILTER_SANITIZE_STRING);
$observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO pedidos (nome, cpf, email, telefone, cidade, cep, bairro, rua, numero, complemento, quantidade, sabores, tamanho, refri, observacoes) VALUES ('$nome', '$cpf', '$email', '$telefone', '$cidade', '$cep', '$bairro', '$rua', '$numero', '$complemento', '$quantidade', '$sabores', '$tamanho', '$refri', '$observacao')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.html");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.html");
}