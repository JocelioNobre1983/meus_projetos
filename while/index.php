<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo do PHP</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <H2>Estudo do WHILE.</H2>
        <h3>Executa as declarações aninhadas repetidamente, enquanto a expressão do <b>while</b> forem avaliadas como true.</h3>
        <?php
            $a = 1;
            while ($a <= 3) 
            {
            echo "<p>Estudo do <b><strong>WHILE</strong></b></p>";
            $a++;//A variável quantificadora tem que ficar dentro das chaves.
            }
            ?>
        <hr>
        <H2>Estudo do DO WHILE.</H2>
        <h3> DO WHILE, a expressão de avaliação é verificada ao final de cada iteração em vez de no começo como no WHILE.</h3>
        <?php
            $num = 1;
                do {
            echo "<p>Estudo do <b><strong> DO WHILE</strong></b></p>";
            $num++;
            //A variável quantificadora tem que ficar dentro das chaves.
            } while ($num <= 4);        
        ?>    
</body>
</html>