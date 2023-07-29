<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 008</title>
</head>
<body>
    <header>
        <h1>Desafio 008</h1>
    </header>
    <?php 
        $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h2>Calculator Raizator Tabajara</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="numero">Entre o número que deseja calcular:</label>
        <input type="number" name="numero" id="numero" value="<?=$numero?>">
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section>
        <h2>Resultados</h2>
        <?php
        $raizquadrada = sqrt($numero);
        $raizcubica = $numero ** (1/3);
        echo "<ul>
            <li> A raiz quadrada de " . number_format($numero, 2, ",", ".") . " é <strong>" . number_format($raizquadrada, 2, ",", ".") . "</strong>.</li>";
            echo "<li> A raiz cúbica de " . number_format($numero, 2, ",", ".") . " é <strong>" . number_format($raizcubica, 2, ",", ".") . "</strong>.</li>
        </ul>";
        ?>
    </section>
</body>
</html>