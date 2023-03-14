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
<h2>Cálculos matemáticos</h2>

<?php 

$n1 = $_GET['a'];
$n2 = $_GET['b'];
$resultado = $n1 + $n2;
echo "<p>O resultado entre $n1 + $n2 é $resultado</p>";
$resultado = $n1 - $n2;
echo "<p>O resultado entre $n1 - $n2 é $resultado</p>";
$resultado = $n1 * $n2;
echo "<p>O resultado entre $n1 x $n2 é $resultado</p>";
$resultado = $n1 / $n2; 
echo "<p>O resultado entre $n1 ÷ $n2 é $resultado</p>";
$resultado = $n1 % $n2;
echo "<p>O resto da divisão entre $n1 ÷ $n2 é $resultado</p>";
$resultado = pow($n1, $n2);
echo "<p>O resultado entre $n1 sobre $n2 é $resultado</p>";
$resultado = sqrt($n1);
echo "<p>O resultado da raiz quadrada de $n1 é $resultado</p>";
$resultado = sqrt($n2);
echo "<p>O resultado da raiz quadrada de $n2 é $resultado</p>";
$resultado = pow(sqrt($n1), $n2);
echo "<p>O resultado da raiz cúbica entre $n1 e $n2 é $resultado</p>";
$resultado = abs($n1);
echo "<p>O valor absoluto de $n1 é $resultado</p>";
$resultado = abs($n2);
echo "<p>O valor absoluto de $n2 é $resultado</p>";
 ?>

</body>
</html>