<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Média</title>
</head>
<body>
    <header>
        <h1>Cálculo de Média</h1>
    </header>
    <main>
    <p>Desenvolver uma aplicação em PHP que receba quatro números reais digitados pelo usuário, calcular e exibir o valor da média desses números.</p>
    </main>
    <?php 
        $valor1 = $_GET["valor1"] ?? false;
        $valor2 = $_GET["valor2"] ?? false;
        $valor3 = $_GET["valor3"] ?? false;
        $valor4 = $_GET["valor4"] ?? false;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" id="valor1" placeholder="Número Inteiro" step="1">
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" id="valor2" placeholder="Número Inteiro" step="1">
        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" id="valor3" placeholder="Número Inteiro" step="1">
        <label for="valor4">Valor 4:</label>
        <input type="number" name="valor4" id="valor4" placeholder="Número Inteiro" step="1">
        <input type="submit" value="Calcular Média">
        </form>
    </main>
    <section>
        <?php 
        $media = ($valor1 + $valor2 + $valor3 + $valor4) / 4;
        ?>
        <p>Valores: <?=$valor1?>, <?=$valor2?>, <?=$valor3?>, <?=$valor4?></p>
        <p>Média: <strong><?=$media?></strong></p>
    </section>
</body>
</html>