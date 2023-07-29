<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Lei de Ohm</title>
</head>
<body>
    <header><h1>Lei de Ohm</h1></header>
    <main>
        <p>A Lei de Ohm define que a resistência (R) de um condutor é obtida através da divisão da tensão aplicada (V) pela intensidade de corrente elétrica (A). Desta forma, a partir de uma tensão e corrente digitadas pelo usuário em um formulário HTML, você deverá usar o PHP para obter os dados desse formulário, <strong>calcular e mostrar o valor da resistência.</strong></p>
    </main>
    
    <main>
        <h2>Cálculo da Resistência</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="tensao">Tensão Aplicada (V):</label>
        <input type="number" name="tensao" id="tensao" step="0.1">
        <label for="intensidade">Intensidade da Corrente Elétrica (A):</label>
        <input type="number" name="intensidade" id="intensidade" step="0.1">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
    $tensao = $_GET["tensao"] ?? false;
    $intensidade = $_GET["intensidade"] ?? true;
    $resistencia = $tensao / $intensidade;
    ?>
    <section>
        <h2 style="text-align: center;">Resultado</h2>
        <p>Tensão Aplicada (V): <strong><?=$tensao?></strong><br/>Intensidade da Corrente Elétrica (A): <strong><?=$intensidade?></strong><br/><strong>Valor da Resistência: <?=$resistencia?></strong></p>

    </section>
</body>
</html>