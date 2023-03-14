<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6 - Números primos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="box">
    <?php

    $r = 0;
    $nPrimo = isset($_POST["primo"]) ? $_POST["primo"] : 1;
    echo("<h1>Escolhendo o número $nPrimo</h1>");
    for ($i = 1; $i <= $nPrimo; $i++) { 
        // Primo só pode ser divisivel 2 vezes.
        $a = $nPrimo % $i;
        if ($a == 0) {
            echo("<a style = 'color: red; font-size: larger'>$i</a>");
            $r++;
        } else {
            echo("<a style = 'color: blue; font-size: larger'>$i</a>");
        }
    }
echo("<br/>");
if ($nPrimo == 1) {
    echo("<a style = 'color: darkgreen; font-size: larger'>$nPrimo é primo</a>");
}
elseif ($r == 2) {
    echo("<a style = 'color: darkgreen; font-size: larger'>$nPrimo é primo</a>");
} else {
    echo("<br/><a style='color: purple; font-size: larger'>$nPrimo Não é primo</a>");
}
    ?>
    <br/>
    <br/>
    <a class="voltar" href="index.php"></br>Voltar</a>
</div>
</body>
</html>