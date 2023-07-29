<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 009</title>
</head>
<body>
    <header>
        <h1>Desafio 009</h1>
    </header>
    <?php 
            //coletor de dados
            $nota1 = $_GET['nota1'] ?? 0;
            $peso1 = $_GET['peso1'] ?? 1;
            $nota2 = $_GET['nota2'] ?? 0;
            $peso2 = $_GET['peso2'] ?? 1;
        ?>
    <main>
        <h2>Mediator Analisator Tabajara</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nota1">Nota 1</label>
        <input type="number" name="nota1" id="nota1" value="<?=$nota1?>">
        <label for="peso1">Peso da Nota 1</label>
        <input type="number" name="peso1" id="peso1" min="1" value="<?=$peso1?>">
        <label for="nota2">Nota 2</label>
        <input type="number" name="nota2" id="nota2" value="<?=$nota2?>">
        <label for="peso2">Peso da Nota 2</label>
        <input type="number" name="peso2" id="peso2" min="1" value="<?=$peso2?>">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
            $mediasimples = ($nota1 + $nota2) / 2;
            $mediaponderada = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);
            echo "<ul>
            <li>Média artimética <strong>simples</strong> = ".number_format($mediasimples, 2)."</li>
            <li>Média artimética <strong>ponderada</strong> = ".number_format($mediaponderada, 2)."</li>
            </ul>";

        ?>
    </section>
</body>
</html>