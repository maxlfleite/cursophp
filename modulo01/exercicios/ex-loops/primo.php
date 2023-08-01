<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Números Primos</title>
</head>
<body>
    <header><h1>Analisador de Números Primos</h1></header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
        <label for="num">Qual número você deseja analisar?</label>
        <input type="number" name="num" id="num" step="1" placeholder="0-100">
        <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <?php
        $num = $_GET["num"] ?? false;
        $primo = 0;
        echo "O número $num é divisível por  ";
        for ($i = 1; $i <= $num; $i++){
            if ($num % $i == 0){
                echo "$i ";
                $primo++;
            }
        }
        echo ".";
        if ($primo == 2) {
            echo "<p>O número $num é PRIMO.</p>";
        }
        if ($primo > 2) {
            echo "<p>O número $num NÃO é PRIMO.</p>";
        }
        ?>
    </section>
</body>
</html>