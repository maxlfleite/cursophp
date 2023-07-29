<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 005</title>
</head>
<body>
    <header>
        <h1>Desafio 005</h1>
    </header>
    <main>
        <h2>Analisador Numérico</h2>
        <?php 
            $numero = $_GET["numero"];
            $inteiro = (int) $numero;
            $fracionado = $numero - $inteiro;
            echo "<p>Analisando o número <strong>" . number_format($numero, 3, ",", ".") . "</strong>:</p>";
            echo "<ul>
                <li>Sua parte inteira é <strong>".number_format($inteiro, 0, ",", ".")."</strong></li>
                <li>Sua parte fracionada <strong>".number_format($fracionado, 3, ",", ".")."</strong></li>
                </ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>