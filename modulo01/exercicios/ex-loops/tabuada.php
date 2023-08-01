<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Tabuada</title>
</head>
<body>
    <header><h1>Tabuada</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Escolha um número para ver sua tabuada.</label>
    <select name="num" id="num">
        <?php 
        for ( $i=1; $i <= 9; $i++){
            echo "<option value='$i'>$i</option>";
        }
        ?>
        <input type="submit" value="Calcular">
    </select>
    </form>
    </main>
    <section>
    <h2>Tabuada dos <?=$i?></h2>
        <?php 
        $num = $_GET["num"] ?? false;
        for ($i = 1; $i <= 10; $i++){
            $tab = $num * $i;
            echo "$num x $i = $tab <br />";
        }
        ?>
        
    </section>
</body>
</html>