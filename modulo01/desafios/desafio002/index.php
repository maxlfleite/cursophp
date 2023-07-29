<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 002</title>
</head>
<body>
    <header>
        <h1>Sorteador numérico</h1>
    </header>
    <main>
        <h2>Trabalhando com números aleatórios</h2>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
        $ale = mt_rand(0, 100);
        echo "<p>O número gerado foi: <strong>$ale</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro número</button>
    </main>
</body>
</html>