<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara ou Coroa</title>
</head>
<style>
    *{
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
<body>
    <h1>Cara ou Coroa</h1>
    <?php
    $words = array("Cara", "Coroa"); 
    $cara = 0;
    $coroa = 0;
    $indice = 1;
    while ($indice <= 50) {
        $result = rand(0, 1);
        $moeda = $words[$result];
        if ($result == 0) {
            $cara++;
        }
        if ($result == 1) {
            $coroa++;
        }
        $indice++;
        echo "$moeda, ";
    }
    echo "ACABOU!";
    $perccara = ($cara / 50) * 100;
    $perccoroa = ($coroa / 50) * 100;
    ?>
    <Main>
        <h1>Compilando o resultado</h1>
        <p>Após jogar a moeda 50 vezes, temos como resultado final:</p>
        <ul>
            <li>Cara: <?=$perccara?>%</li>
            <li>Coroa: <?=$perccoroa?>%</li>
        </ul>
    </Main>
</body>
</html>