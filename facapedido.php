<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<link rel="stylesheet" href="style.css">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <img src="pizzaria.png"  style = "width: 100%; height: 10%;  alignment: center;">
	<title>PIZZARIA UT</title>

</head>
<body>

	<nav id="menu-h">
        <ul>
            <li><a href="facapedido.php">Faça seu Pedido</a></li>
            <li><a href="index.html">Promoções</a></li>
            <li><a href="cardapio.html">Cardápio</a></li>
            <li><a href="contato.html">Contato</a></li>
            <li><a href="acessfunc.php">Acesso Funcionario</a></li>
        
        </ul>
    </nav>
     
    <div class="container" >
        <a class="links" id="paracadastro"></a>
         
        <div class="content">      
     
          <!--FORMULÁRIO DE CADASTRO-->
          <div id="cadastro">
            <form method="post" action="processa2.php"> 
              <h1>Pedido</h1> 
       

    <h2>Seus Dados</h2><br><br>
      <label for="nome">Nome: </label>
      <input type="text" size="40" placeholder="Nome Completo" name="nome">
      <label for="cpf">CPF: </label>
      <input type="text" placeholder="987.654.321-00" name="cpf_func"><br><br>
      <label for="email">Email: </label>
      <input type="text" size="40" placeholder="E-mail Válido" name="email">
      <label for="telefone">Telefone: </label>
      <input type="text" placeholder="47 90000-0000" name="telefone"><br><br>
      
      <h2>Endereço</h2><br><br>
      <label for="cidade">Cidade:</label>
      <input id="cidade"type="text"placeholder=" Cidade" name="cidade"><br><br>
      <label for="cep">CEP:</label>
      <input id="cep"type="text"placeholder=" 21365-000" name="cep">
      <label for="bairro">Bairro:</label>
      <input id="bairro"type="text"placeholder=" Bairro" name="bairro"><br><br>
      <label for="rua">Rua:</label>
      <input type="text"size="30"placeholder=" Logradouro" name="rua">
      <label for="nu">Número:</label>
      <input id="numero"type="text"size="5"placeholder=" Número" name="num"><br><br>
      <label for="comp">Complemento:</label>
      <input type="text"size="30"placeholder=" Andar, Apartamento, Bloco" name="comp"><br><br>
      
      <h2>Pedido</h2><br><br>
      <label for="quantidade">Quantidade:</label>
      <input id="quantidade"type="text"placeholder=" 1, 2.." name="quantidade"><br><br>
      <label for="sabores">Sabores:</label>
      <input id="sabores"type="text"placeholder=" Calabresa, Frango ..." name="sabores"><br><br>
      <label for="tamanho">Tamanho:</label>
      <input id="tamanho"type="text"placeholder="P, M, G ou Extra G" name="tamanho"><br><br>
      <label for="complementos">Refrigerante:</label>
      <input id="refri"type="text"placeholder="Coca-Cola, Kuat, Pepsi..." name="refri"><br><br>
      <label for="Observacao">Observações:</label>
      <input id="observacao"type="text"placeholder="Tirar cebola..." name="observacao"><br><br>

                <input type="submit" value="Cadastrar Pedido"/> 
              </p>
            </form>
    
</body>
</html>