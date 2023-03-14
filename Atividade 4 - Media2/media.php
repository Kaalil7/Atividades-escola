<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 4 - Média - PHP</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<div class="box">
<?php 

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];
$nota4 = $_GET['nota4'];
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
if ($media < 6) {
	echo "Sua nota é $media e você foi  insatisfatório // REPROVADO ❌</h1>";
}
elseif ($media >= 6 && $media <=7) {
	echo "Sua nota é $media e você foi  bom // APROVADO ✅</h1>";
}
elseif ($media >= 8) {
 	echo "Sua nota é $media e você foi  excelente // APROVADO ✅</h1>";
} 
?>
<a class="voltar" href="index.html"></br>Voltar</a>
</div>
</body>
</html>