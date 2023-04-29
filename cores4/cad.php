<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body >
    <header><h1>Cadadrasto realizado!&#x1F609</h1></header>
    <main class="cadastro">
    <?php
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        echo "Sr. <strong>$nome</strong>, seu cadastro foi realizado. Por favor, confirmar no <strong>$email</strong>. &#x1F609";/*para colocar um emotion, podemos utilizar o site emogipedia.org, escolher o emogi e copiar o cógido após a letra "U", acrescenta &#x + codigo*/
    ?>   
        Clique <a href="pag001.html" target="_self" rel="next">aqui</a> para acessar o site.
    </main>    
</body>
</html>