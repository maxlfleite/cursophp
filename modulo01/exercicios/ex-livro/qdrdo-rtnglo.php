<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Quadrado ou Retângulo?</title>
</head>
<body>
    <header>
        <h1>Quadrado ou Retângulo?</h1>
    </header>
    <main>
        <p>O usuário digitará o valor de largura e altura de um quadrado ou retângulo em um formulário. Após isso, deverá escrever um script PHP que mostre o valor da área (Largura * Altura).</p>
    </main>
        <main>
            <h2>Calcular a Área</h2>
                <?php 
                $altura = $_GET['altura'] ?? false;
                $largura = $_GET['largura'] ?? false;
                $area = $altura * $largura;
                ?>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="altura">Entre a altura (m):</label>
                <input type="number" name="altura" id="altura" step="0.01" placeholder="0.00">
                <label for="largura">Entre a largura (m):</label>
                <input type="number" name="largura" id="largura" step="0.01" placeholder="0.00">
                <input type="submit" value="Calcular">
                </form>
        </main>
        <?php 
            if ($altura == $largura){
            $resultado = "QUADRADO";
        } else {
            $resultado = "RETÂNGULO";
        }
        ?>
        <section>
            <h2>Compilando o Resultado</h2>
            <ul>
                <li>Altura: <?=$altura?> metros.</li>
                <li>Largura: <?=$largura?> metros.</li>
                <li>Área: <?=number_format($area, 2)?> m<sup>2</sup></li>
            </ul>
            <p>Diante destes valores, temos que a área é um <?=$resultado?></p>
        </section>
</body>
</html>