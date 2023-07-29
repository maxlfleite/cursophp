<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desconto</title>
</head>
<body>
    <header>
        <h1>Loja do Gateiro</h1>
    </header>
    <main>
        <p>Criar uma aplicação em PHP que receba, através da digitação dos dados em um formulário, o nome, a quantidade, o preço unitário e o desconto de um determinado produto.</p>
    </main>
    <?php 
    $produto = isset($_GET['produto']) ? ucfirst(strtolower($_GET['produto'])) : false;
    $preco = $_GET['preco'] ?? false;
    $qnt = $_GET['qnt'] ?? false;
    $desc = $_GET['desc'] ?? false;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="produto">Produto:</label>
        <input type="text" name="produto" id="produto" placeholder="Caneca" >
        <label for="preco">Preço Unidade R$:</label>
        <input type="number" name="preco" id="preco" step="0.01" >
        <label for="qnt">Quantidade:</label>
        <input type="number" name="qnt" id="qnt" placeholder="0" >
        <label for="desc">Desconto %:</label>
        <input type="number" name="desc" id="desc" placeholder="Apenas Números" >
        <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
        $totalcompra = ($preco * $qnt);
        $pagamento = $totalcompra - ($totalcompra * ($desc/100));
        $desconto = $totalcompra - $pagamento;
    ?>
    <section>
        <h2>Detalhes da Compra</h2>
        <ul>
            <li>Produto: <?=$produto?></li>
            <li>Preço Unitário R$ <?=$preco?></li>
            <li>Quantidade: <?=$qnt?></li>
            <li>Total sem desconto: R$ <?=number_format($totalcompra, 2, ",", ".")?></li>
            <li>Desconto: R$ <?=number_format($desconto, 2, ",", ".")?></li>
            <li><strong>Total a pagar: R$ <?=number_format($pagamento, 2, ",", ".")?></strong></li>
        </ul>
    </section>
</body>
</html>