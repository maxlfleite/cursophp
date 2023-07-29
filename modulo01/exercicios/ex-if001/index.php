<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercicio IF 01</title>
</head>
<body>
    <header>
        <h1>TSE + DETRAN</h1>
        <p>Vamos descobrir se você pode ou não votar e dirigir.</p>
    </header>
    <?php
    date_default_timezone_set('America/Fortaleza');
    $atual = date('Y');
    $ano = $_GET["ano"] ?? 2000;
    $idade = $atual - $ano;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Entre o seu ano de <strong>nascimento</strong></label>
            <input type="number" name="ano" id="ano" required value="<?=$ano?>" >
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <p>Você tem <strong><?=$idade?> anos.</strong></p>
        <?php
        if ($idade >= 18) {
            echo "<p>Você <strong>já pode</strong> tirar seu titulo de eleitor e sua carteira de motorista</p>";
        } else {
            echo "<p>Você ainda <strong>NÃO pode</strong> tirar seu titulo de eleitor nem sua carteira de motorista</p>";
        }
        ?>
    </section>
</body>
</html>