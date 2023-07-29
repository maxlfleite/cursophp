<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio 006</title>
</head>
<body>
    <?php 
    //coletor de variavéis
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 1;
    $resultado = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    ?>
    <header>
        <h1>Desafio 006</h1>
    </header>
    
    <main>
        <h1>Calculator Dividator Tabajara</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Entre o <strong>dividendo</strong>:</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">
            <label for="divisor">Entre o <strong>divisor</strong>:</label>
            <input type="number" name="divisor" id="divisor" min="1" value=<?="$divisor"?>>
            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <section>
        <h2>Resultado da Analise</h2>
        <?php 
        echo "<ul>
            <li>O dividendo é <strong>$dividendo</strong>.</li>
            <li>O divisor é <strong>$divisor</strong>.</li>
            <li>O resultado inteiro é <strong>$resultado</strong>.</li>
            <li>O resto desta divisão é <strong>$resto</strong>.</li>
        </ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>