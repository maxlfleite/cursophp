<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 007</title>
</head>
<body>
    <header>
        <h1>Desafio 007</h1>
    </header>
    <?php 
    //coletor de dados - Sal min é de R$ 1320
    $salario = $_GET["salario"] ?? 0;
    $salmin = intdiv($salario, 1380.60);
    $sobra = $salario % 1380.60;
    ?>
    <main>
        <h1>Salarator Minimator Tabajara</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Entre o salário desejado:</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">
            <p>O salário mínimo atual é de R$ 1.380,60</p>
            <input type="submit" value="Analisar">
            
        </form>
    </main>
    <section>
        <h2>Resultado da análise</h2>
        <?php 
            echo "<p>Diante do salário informado de R$ " . number_format($salario, 2, ",", ".") . ":</p>
            <ul>
            <li>São ao total $salmin salário(s) mínimo(s);</li>
            <li>Mais o valor de R$ " . number_format($sobra, 2, ",", ".") . " </ul>";
            
        ?>
    </section>
</body>
</html>