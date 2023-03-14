<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Média</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>

<?php 

$med1 = $_GET['med1'];
$med2 = $_GET['med2'];
$med3 = $_GET['med3'];
$med4 = $_GET['med4'];
$resul = ($med1 + $med2 + $med3 + $med4) / 4;
$media = $resul >= 6?"aprovado":"reprovado";
echo "<h1>Sua nota é final $resul e você foi $media</h1>";
 ?>
</body>
</html>