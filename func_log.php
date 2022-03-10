<?php

session_start();
include_once("conexao.php");

$consulta = "SELECT * FROM pedidos";
$con = $conn -> query ($consulta) or die ($conn->error);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<link rel="stylesheet" href="style.php">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <img src="pizzaria.png"  style = "width: 100%; height: 10%;  alignment: center;">
	<title>PIZZARIA UT</title>	

</head>
<body>
	<h1>Pedidos</h1>
	<br></br>
	<tbody>
	<table border='1px'>
	<thead>	
	<tr>
			<th>Nome</th>
			<th>CPF</th>
			<th>Email</th>
			<th>Telefone</th>
			<th>Cidade</th>
			<th>CEP</th>
			<th>Bairro</th>
			<th>Rua</th>
			<th>Número</th>
			<th>Complemento</th>
			<th>Quantidade</th>
			<th>Sabores</th>
			<th>Tamanho</th>
			<th>Refrigerante</th>
			<th>Observações</th>
		</tr>
	</thead>
		<?php while($dado = $con->fetch_array() ) { ?>
		<tr>
			<td><?php echo $dado["nome"];?></td>
			<td><?php echo $dado["cpf"];?></td>
			<td><?php echo $dado["email"];?></td>
			<td><?php echo $dado["telefone"];?></td>
			<td><?php echo $dado["cidade"];?></td>
			<td><?php echo $dado["cep"];?></td>
			<td><?php echo $dado["bairro"];?></td>
			<td><?php echo $dado["rua"];?></td>
			<td><?php echo $dado["numero"];?></td>
			<td><?php echo $dado["complemento"];?></td>
			<td><?php echo $dado["quantidade"];?></td>
			<td><?php echo $dado["sabores"];?></td>
			<td><?php echo $dado["tamanho"];?></td>
			<td><?php echo $dado["refri"];?></td>
			<td><?php echo $dado["observacoes"];?></td>
		</tr>
		<?php } ?>
	</table>	
		</tbody>		
</body>
</html>