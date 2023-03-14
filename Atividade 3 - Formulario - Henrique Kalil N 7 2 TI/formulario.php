<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 3 - Formulário - PHP</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<div>
<?php 

$nome = $_GET['nome'];
$ano = $_GET['ano'];
$sexo = $_GET['sexo'];
$idade = date("Y") - $ano;
echo "$nome Tem $idade anos de idade e é $sexo";

?>
<a href="index.html"></br>Voltar</a>
</div>
</body>
</html>