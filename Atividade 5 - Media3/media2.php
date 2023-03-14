<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atividade 5 - Média - PHP</title>
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
switch ($media) {
    case ($media < 6):
        echo "Seu resultado foi insatisfatorio // REPROVADO //// Sua nota foi $media ❌";
        break;
     case ($media >= 6 && $media <= 7):
        echo "Seu resultado foi bom // APROVADO // Sua nota foi $media ✅ ";
        break;
     case ($media >= 8):
        echo "Seu resultado foi excelente // APROVADO // Sua nota foi $media ✅ ";
        break;
}

?>
<a class="voltar" href="index.html"></br>Voltar</a>
</div>
</body>
</html>