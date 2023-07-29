<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 001</title>
</head>
<body>
    <header>
        <h1>Resultado do Desafio 001</h1>
    </header>
    <main>
        <?php 
        $numero = $_GET["numero"];
        //$ant = $_GET["numero"]-1;
        //$suc = $_GET["numero"]+1;
        echo "<p>O numero que você digitou foi <strong>$numero</strong>.</p>";
        echo "<p>O seu <em>antecessor</em> é " . ($numero - 1)." </p>";
        echo "<p>O seu <em>sucessor</em> é " . ($numero + 1)."</p>";
        ?>
        <p>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </p>
    </main>
</body>
</html>