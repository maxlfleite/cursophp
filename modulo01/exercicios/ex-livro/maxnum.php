<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Mostrar o Maior Número</title>
</head>
<body>
    <header><h1>Maior Número</h1></header>
    <?php 
    $num1 = $_GET["num1"] ?? false;
    $num2 = $_GET["num2"] ?? false;
    $num3 = $_GET["num3"] ?? false;
    ?>
    <main>
        <p>Considerando três números inteiros digitados pelo usuário, determine e exiba o maior número.</p>
    </main>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num1">Entre o primeiro número:</label>
        <input type="number" name="num1" id="num1" step="1">
        <label for="num2">Entre o segundo número:</label>
        <input type="number" name="num2" id="num2" step="1">
        <label for="num3">Entre o terceiro número:</label>
        <input type="number" name="num3" id="nmum3" step="1">
        <input type="submit" value="Analisar">
        <p>Dado os números <?=$num1?>, <?=$num2?>, <?=$num3?>:</p>
        <p>O maior número entre eles é <?=max($num1, $num2, $num3)?>.</p>
        </form>
    </main>
</body>
</html>