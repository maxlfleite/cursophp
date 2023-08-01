<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Contador</title>
</head>
<body>
    <header><h1>Contador Profissional</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="inicio">Entre o número de início do contador:</label>
        <input type="number" name="inicio" id="inicio" step="1" required>
        <label for="fim">Entre o número final do contador:</label>
        <input type="number" name="fim" id="fim" step="1" required>
        <label for="passo">Deseja contar a que passo?</label>
        <select name="passo" id="passo">
            <?php 
            for($i=1;$i<6;$i++) {
               echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Contar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        $inicio = $_GET["inicio"] ?? false;
        $fim = $_GET["fim"] ?? false;
        $c = $_GET["passo"] ?? false;
        if ($fim > $inicio) {
            while ($fim > $inicio) {
                echo "$inicio ";
                $inicio += $c;
            }
          echo "$inicio ";
        }
        if ($fim < $inicio){
            do {
                echo "$inicio ";
                $inicio -= $c;
            } while ($inicio >= $fim);
        }
        ?>
    </section>
</body>
</html>