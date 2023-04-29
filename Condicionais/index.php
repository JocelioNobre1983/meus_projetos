<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header><h1>Codicionais</h1></header>
    <?php 
        $num = 8;
        echo "<strong>If</strong> and <strong>Else</strong>";
        if ($num > 10 && $num < 15){
            echo "<p>O número <strong>$num</strong> está entre <EM>10 e 15</EM>.</p><hr>";
        }
        else {
            echo "<p>O número <strong>$num não</strong> está entre <EM>10 e 15</EM>.</p><hr>";
        }
    ?>
    <<?php 
        echo "<strong>If</strong> and <strong>ElseIf</strong> and <strong>Else</strong> "; 
        $a = 3;
        $b = 10;
        if ($a > $b) {
            echo "<p>O número <strong>$a</strong> é <EM>maior</EM> que <strong>$b</strong>.</p><hr>";
        }
        elseif ($a < $b) {
            echo "<p>O número <strong>$a</strong> é <EM>menor</EM> que <strong>$b</strong>.</p><hr>";
        }
        else {
            echo "<p>O número <strong>$a</strong> é <EM>igual</EM> ao número <strong>$b</strong>.</p><hr>";
        }
    ?>

</body>
</html>