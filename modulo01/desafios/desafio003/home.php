<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 003</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas Tabajara V1.0</h1>
    </header>
    <main>
        <h2>Real para Dólar</h2>
        <p>
            <?php
            $reais = $_GET["reais"];
            $dolar = $reais/4.73;
            //$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>R$ " . number_format($reais, 2, ",", "."); "</p>";
            echo "<p><strong>US$ " . number_format($dolar, 2, ",", "."); "</strong></p>";
            //echo numfmt_format_currency($padrao, $reais, "BRL"); echo numfmt_format_currency($padrao, $dolar, "USD");
            
            ?>
        </p>
        <p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
        </p>
    </main>
</body>
</html>