<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 013</title>
</head>
<body>
    <header>
        <h1>Desafio do Caixa Eletrônico</h1>
    </header>
    <?php 
    //coletor de dados
    $money = $_GET["money"] ?? "0";
    ?>
    <main>
        <h2>Caixa eletronico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="money">Quanto você gostaria de sacar? R$</label>
        <input type="number" name="money" id="money" step="5" value="<?=$money?>">
        <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
    //processamento dos programas
    $sobra = $money;
    $cem = intdiv($sobra, 100);
    $sobra = $sobra % 100;
    $cinquenta = intdiv($sobra, 50);
    $sobra = $sobra % 50;
    $vinte = intdiv($sobra, 20);
    $sobra = $sobra % 20;
    $dez = intdiv($sobra, 10);
    $sobra = $sobra % 10;
    $cinco = intdiv($sobra, 5);
    ?>
    <section>
        <h2>Resultado do saque</h2>
        <ul>
            <li>Notas de R$ 100,00: <?=$cem?></li>
            <li>Notas de R$ 50,00: <?=$cinquenta?></li>
            <li>Notas de R$ 20,00: <?=$vinte?></li>
            <li>Notas de R$ 10,00: <?=$dez?></li>
            <li>Notas de R$ 5,00: <?=$cinco?></li>
        </ul>
    </section>
</body>
</html>