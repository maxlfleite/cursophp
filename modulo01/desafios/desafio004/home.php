<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 004</title>
</head>
<body>
        <header>
            <h1>
                Conversor de Moedas
            </h1>
        </header>
    <main>
        
        <?php 
        date_default_timezone_set('America/Sao_Paulo');
        $inicio = date("m-d-Y", strtotime("-1 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $reais = $_GET["reais"];
        $dolar = $reais / $cotacao;
        echo "<p>R$ " . number_format($reais, 2, ",", "."); "</p>";
        echo "<p><strong>US$" . number_format($dolar, 2, ",", "."); "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>