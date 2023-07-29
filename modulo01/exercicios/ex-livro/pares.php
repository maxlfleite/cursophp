<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sorteando 1000</title>
</head>
<style>
    *{
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
<body>
    <main>
        <h1>Mostrando apenas <strong>Pares</strong></h1>
        <?php
            $indice = 1;
            while ($indice <= 50) {
            $num = rand(1, 1000);
            if ($num % 2 == 0) {
            echo "$num, ";
            }
            $indice++;
            }
            echo "ACABOU!";
        ?>
    </main>
    <main>
        <h1>Mostrar 10 números sorteados múltiplos de 5</h1>
        <?php 
            $indice = 1;
            $num = 0;
            while ($indice <= 10) {
                $num = rand(1, 1000);
                if ($num % 5 == 0) {
                    echo "$num, ";
                    $indice++;
                }
            }
            echo "ACABOU!";
        ?>
    </main>
</body>
</html>