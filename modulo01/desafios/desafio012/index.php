<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 012</title>
</head>
<?php 
    //coletor de dados
    $total = $_GET["segundos"] ?? 0;
?>
<body>
    <header>
        <h1>Desafio 012</h1>
    </header>
    <main>
        <h2>Desafio dos Segundos</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Entre a quantidade de segundos<strong>(s)</strong></label>
            <input type="number" name="segundos" id="segundos" min="0" step="1" <?=$total?>>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
    // processamento dos dados
    $sobra = $total;
    //Total Semanas
    $semana = intdiv($sobra, 604800);
    $sobra = $sobra % 604800;
    //Total Dias
    $dias = intdiv($sobra, 86400);
    $sobra = $sobra % 86400;
    //Total Horas
    $horas = intdiv($sobra, 3600);
    $sobra = $sobra % 3600;
    //Total Minutos
    $minutos = intdiv($sobra, 60);
    $sobra = $sobra % 60;
    //Total Segundos
    $segundos = $sobra;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você entrou, <strong><?=number_format($total, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>