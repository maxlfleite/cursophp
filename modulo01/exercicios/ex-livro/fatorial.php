<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Fatorial</title>
</head>
<body>
    <header><h1>Fatorial</h1></header>
    <main>
        <article>
            <p>Considerando um número digitado pelo usuário em um formulário, escreva um script PHP que calcule e exiba o valor da fatorial do respectivo número.</p>
        </article>
        <h2>Calculando Fatorial</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Entre o número que deseja saber o fatorial:</label>
        <input type="number" name="num" id="num" step="1">
        <input type="submit" value="Calcular">
        </form>
    </main>
    
    <section>
        <h2>Resultado</h2>
        <?php 
    $num = $_GET["num"] ?? false;
    $fatorial = 1;
        echo "$num! = ";
    for($i = $num; $i >= 2; $i--) {  
        $fatorial *= $i;
        echo "$i x ";
    }
    echo "1 = <strong>$fatorial</strong>.";
    ?>
        <!-- <p>O fatorial de <?=$num?>! = <?=$fatorial?></p> -->
    </section>
</body>
</html>