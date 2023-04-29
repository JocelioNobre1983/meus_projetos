<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Bank</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header><h1>Conectado com sucesso!</h1></header>
    <main>
        <?php
        $usuario = $_POST["usuario"];
        $senha = $_POST["password"];
        if ($usuario == "jcostan" && $senha == 12345){
            echo "<strong>Agência</strong>: 4254<br>";
            echo "<strong>Conta</strong>: 1234-6<br>";
            echo "<strong>SALDO</strong> R$ <mark>1.000.000,00</mark><br>";
        }
        else{
            echo "Usuário/senha inválidos. Tente outra vez. Você tem mais 2 <strong>tentativas</strong><p></p>";
        }
        ?>
    </main>
    <section>
        <div>    
            <h2>Redes socias:</h2>
                <ol type="1">
                    <li><a href="https://www.facebook.com/caixa/about/?ref=page_internal" target="_blank" rel="external">Facebook</a></li>
                    <li><a href="https://www.instagram.com/caixa/?hl=pt-br" target="_blank" rel="external">Instagram</a></li>
                    <li><a href="https://twitter.com/Caixa?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" rel="external">Twiter</a></li>
                </ol>
        </div>
    </section>
    <img src="iconebanco.png" alt="icone">
    <a href="javascript:history.go(-1)">Inicio</a>
</body>
</html>