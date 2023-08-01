<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header><h1>Relembrando Função</h1></header>
    <main>
        <h2>Corpo da função</h2>
        <?php 
        function somaa($a, $b) {
        return $a + $b;
        }
        $x = 7;
        $y = 10;
        $resultado = somaa($x, $y);
        ?>
    </main>
    <section>
        <p>Resultado de uma função simples:</p>
        <p><?=$x?> + <?=$y?> = <?=$resultado?></p>
    </section>
    <!-- Função com múltiplos paramentros -->
    <main>
        <h2>Função com Múltiplos Parametros</h2>
        <?php 
        function somab() {
            $p = func_get_args();
            $t = func_num_args();
            $sum = 0;
            for ($i = 0; $i < $t; $i++) {
                $sum += $p[$i];
        }
            return $sum;
    }
            $result = somab(4, 8, 10, 7, 5);
        ?>
    </main>
    <section>
        <p>Resultado de uma função com múltiplos parâmetros:</p>
        <p>Neste exemplo foram colocados 5 parâmetros e sua soma é <?=$result?></p>
    </section>
    <main>
        <h2>Função com passagem de referência</h2>
        <p>Neste exemplo eu coloquei que a variavél k recebesse 3 e chamei a função passando este valor somando 2. Co o valor foi passado por referência, ele alterou a variavél j e também a variavél k.</p>
        <?php 
        function teste(&$j) {
            $j += 2;
            echo "<p>O valor de j é $j</p>";
        }
        $k = 3;
        teste($k);
        echo "<p>O valor de k é $k</p>";
        ?>
    </main>
</body>
</html>