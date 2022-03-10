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
<br></br>
<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="func_log.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu e-mail</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="email_login" required="required" type="password" placeholder="data de nascimento" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar"/> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="processa.php"> 
          <h1>Cadastro</h1> 
           
          <label for="nome_func">Nome: </label>
  <input type="text" size="40" placeholder="Nome Completo" name="nome_func">
  <label for="cpf_func">CPF: </label>
  <input type="text" placeholder="987.654.321-00" name="cpf_func"><br><br>
  <label for="email_func">Email: </label>
  <input type="text" size="40" placeholder="E-mail Válido" name="email_func">
  <label for="rg_func">RG: </label>
  <input type="text" placeholder="1.127.125" name="rg_func"><br><br>
  
  <label for="data">Data de Nascimento:</label>
            <input type="date" name="data" id="data"><br><br>

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
  
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>

</body>
</html>