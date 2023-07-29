<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitimos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <p>
        <?php
            //0x = Hexadecimal
            //0b = Binário
            //0 = Octal
            $num = 0x1A;
            echo "O valor da variavél é $num";
        
        ?>
    </p>
    <br>
    <p>
        <?php 
        //Descreve o tipo primitivo
        $var = 300;
        var_dump($var)
        ?>
    </p>
    <br>
    <p>
        <?php 
        $numero = 3e2;
        echo "O valor é $numero - ";
        var_dump($numero)
        ?>
    </p>
    <p>
        <?php 
        $Numero = (integer) 3e2; // coerção
        echo "O valor é $Numero - ";
        var_dump($Numero)
        ?>
    </p>
</body>
</html>

