<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Sorteadon Números de 1 a 100</title>
</head>
<body>
    <main>
        <h1>Somar 10 valores sorteados</h1>
        <?php 
            $indice = 1;
            $resultado = 0;
            $num = 0;
            echo "<p>Sorteando valores de 1 a 100...</p>";
            while ($indice <= 10) {
                $num = rand(1, 100);
                echo "- $num ";
                $resultado += $num;
                $indice++;
            }
            echo " -";
            echo "<p>Total resultado $resultado.</p>";
        ?>
    </main>
    <main>
        <h1>Exibir números</h1>
        <p>Exibir números na tela até que um valor múltiplo de 7 seja sorteado.</p>
        <?php 
            $num = 0;
            $indice = 0;
            do {
                $num = rand(1, 100);
                echo "- $num ";
                $indice++;
            } while ($num % 7 != 0);
            echo " -";
            echo "<p>Terminado o programa! Foram sorteados <strong>$indice números</strong>!</p>";
        ?>
    </main>
    
</body>
</html>