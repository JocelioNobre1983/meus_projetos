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
    <header><h1>Concluído!</h1></header>
    <main>
        <?php 
            $nome = $_GET["nome"];
            $email = $_GET["email"];        
            $telefone = $_GET["telefone"];
            echo "Obrigado, <strong>$nome</strong> \u{1F609}. Seus dados foram atualizados. <p>Nossos consultores entraram em contato nos canais: <strong>$telefone</strong> e <strong>$email</strong> \u{1F44A}.</p>";
        ?>
    </main>
        <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>