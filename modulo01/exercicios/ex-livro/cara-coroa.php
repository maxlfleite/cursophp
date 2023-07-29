<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cara ou Coroa</title>
</head>

<body>
    <header>
        <h1>Cara ou Coroa</h1>
    </header>
    <?php 
    $roladas = isset($_GET["roladas"]) ? $_GET["roladas"] : 1;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="roladas">Quantas roladas você deseja?</label>
        <input type="number" name="roladas" id="roladas" step="1">
        <input type="submit" value="Rolar">
        </form>
    </main>
    <section>
        <?php
        $words = array("Cara", "Coroa");
        $cara = 0;
        $coroa = 0;
        $indice = 1;
        while ($indice <= $roladas) {
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
        $perccara = ($cara / $roladas) * 100;
        $perccoroa = ($coroa / $roladas) * 100;
        ?>
    </section>
    <Main>
        <h2>Compilando o resultado</h2>
        <p>Após jogar a moeda <?=$roladas?> vezes, temos como resultado final:</p>
        <ul>
            <li>Cara: <?=$perccara?>%</li>
            <li>Coroa: <?=$perccoroa?>%</li>
        </ul>
    </Main>
</body>
</html>