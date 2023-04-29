<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulário2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Obrigado!</h1></header>
    <main>
        <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $telefone = $_GET["telefone"];
        echo "Obrigado, Sr. <strong>$nome $sobrenome</strong>. Nossos consultores entraram em contato no número <strong>$telefone</strong>";
        ?>
        <hr>
    </main>
    <a href="javascript:history.go(-1)">Voltar</a>    
    </body>
</html>