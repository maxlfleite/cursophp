<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 011</title>
</head>
<body>
    <header>
        <H1>Desafio 011</H1>
    </header>
</body>
    <?php 
    //coletor de dador
        $valor = $_GET["valor"] ?? '0';
        $porcentagem = $_GET["porcentagem"] ?? '0';
    ?>
    <main>
        <h2>Porcentator Analisator Tabajara</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="valor">Informe o valor do item R$:</label>
        <input type="number" name="valor" id="valor" min="0.1" step="0.01" value="<?=$valor?>">
        <label for="porcentagem">Qual será o percentual de reajuste? (<strong><span id="porc">?</span>%</strong>)</label>
        <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcentagem?>">

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar dados">
        </form>
    </main>
    <?php 
         $reajuste = $valor * ($porcentagem/100);
         $acrescimo = $valor + $reajuste;
         $desconto = $valor - $reajuste;
    ?>
    <section>
        <h2>Resultado</h2>
        <p>Para o valor informado de R$ <?=number_format($valor, 2, ",", ".")?> temos:</p>
        <ul>
            <li>Para um reajuste de <?=$porcentagem?>%: R$ <?=number_format($reajuste, 2, ",", ".")?></li>
            <li>Se for um acréscimo, o novo valor será: R$ <?=number_format($acrescimo, 2, ",", ".")?></li>
            <li>Se for um desconto, o novo valor será: R$ <?=number_format($desconto, 2, ",", ".")?></li>
        </ul>

    </section>
    <script>
        mudaValor(); 
        function mudaValor() {
            porc.innerText = porcentagem.value;
        }
    </script>
</html>