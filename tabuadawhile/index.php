<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<Header><h1>Tabuada <mark>WHILE</h1></mark></Header>
<h2>A tabuada criada utilizando o <EM>comando de repetição</EM><mark>while</mark></h2>
<!-- a tag mark realça o texto escoolhido.-->
<body>
    
    <?php
    $num = 0;
    $tab = 9;
    while ($num <= 10) {
        echo "$tab x $num = ".$tab*$num."<br>";
        $num++;
    }
    ?>
    <img src="matematica.png" alt="matematica">
</body>
</html>