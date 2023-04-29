<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
    <header><h1><strong>Concluído!</strong></h1></header>
<body>
    <main>
    <?php
    $num = 0;
    $tab = $_POST["numero"];
    for ($num=0; $num <= 10 ; $num++) { 
        echo "$num x <strong><mark>$tab</mark></strong> = ".($num*$tab)."<br>";
    }
    ?>
    </main>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>