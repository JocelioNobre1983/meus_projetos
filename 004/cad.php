<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header><h1>Obrigado!</h1></header>
    <main>    
        <?php
            $nome = $_GET["nome"];
            $email = $_GET["email"];
            $telefone = $_GET["telefone"];
            echo "Obrigado, Sr <strong>$nome</strong>. Entraremos em contado no e-mail <strong>$email</strong> ou no telefone <strong>$telefone</strong>";
        ?>
    </main>
    <a href="javascript:history.go(-1)">Voltar</a>
    <img src="completed.png" alt="completo">
    </body>
</html>
