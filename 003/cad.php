<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulários</title>
    <link rel="shortcut icon" href="murro.png" type="image/x-icon">
    <!--esse comando insere simbolo (favicon), de preferência, extenção .ico no canto superior esquerdo do título da página-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Concluído!</h1></header>
    <main>
        <?php 
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $telefone = $_GET["telefone"];
        echo "Senhor <strong>$nome $sobrenome</strong>, obrigado pelo cadastro. <p> Nossos cosultores entrarão em contato no número <strong>$telefone</strong>.</p><hr>";
        
        ?>
    </main>
    <a href="javascript:history.go(-1)">Voltar</a>
    <!--comando img é utilizaso para upload de imagens-->
    <img src="completed.png" alt="completo">
    
</body>
</html>