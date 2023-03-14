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
        <form action="primos.php" method="post">
            Número primo<select name="primo">
                <?php
                for ($n1 = 1 ; $n <= 100; $n++) { 
                    echo("<option value = $n> $n </option>");
                }

                $a = 0;$b = 1;$cont = 1;while ($cont <= 10){
                    echo $a."<br>".$b."<br>";
                    $a = $a + $b;$b = $a + $b;$cont++;}
                ?>
            </select>
            </br><input type="submit" class="botao" value="Calcular">
        </form>
    </div>
    
</body>
</html>