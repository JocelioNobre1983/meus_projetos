<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudopata</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header><h1>Obrigado!</h1></header>
    <main>
    <?php
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $telefone = $_GET["telefone"];
        echo "Sr <strong>$nome</strong>, cadastramos os seus contatos <strong>$email</strong> e <strong>$telefone</strong>. \u{1F44A}";
    ?>
     <p>Agora poderá acessar o <a href="estudopata.html" target="_self"><mark>estudopata.com</mark></a> e aproveitar todo o conteúdo educacional.</p>
    </main>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>