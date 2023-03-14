<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 1 - PHP</title>
	<style type="text/css">
		body{

			font-family: arial;
			color: white;
			background: url(bg.jpg);
		}
	</style>
</head>
<body>

<h1>Atividade 1 - PHP</h1>
<h2>Nome e número da chamada</h2>

<?php 

$nome = $_GET['nome'];
$num = $_GET['num'];
echo "<h1>O seu nome completo é $nome e seu número da chamada é $num</h1>";

 ?>

</body>
</html>