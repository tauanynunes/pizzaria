<?php
// Define que o arquivo terá a codificação de saída no formato CSS
header("Content-type: text/css");

$cor_fundo = '#CEA15B';
$cor_texto = '#003333';
$cor_table = '#FFFFFF';
$titulo = '#FFFFFF';
?>

body {
background: <?php echo $cor_fundo; ?>;
}

table {
    background: <?php echo $cor_table; ?>;
    padding: 15px;
    border: 5px;
    width: 50px;   
}

h1 {
    background: <?php echo $titulo; ?>;   
    padding: 15px;
    text-align: center;
}

th {
    padding: 5px;
}

td {
    padding: 15px;
 
}
