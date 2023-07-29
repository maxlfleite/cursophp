<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio010</title>
</head>
<body>
    <header>
        <h1>Desafio 010</h1>
    </header>
    <main>
        <h2>Idadator Analisator Tabajara</h2>
        <?php 
            //coletor de dados
            $atual = date("Y");
            $nascimento = $_GET["nascimento"] ?? 2000;
            $ano = $_GET["ano"] ?? $atual;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="nascimento">Entre o ano de nascimento:</label>
            <input type="number" name="nascimento" id="nascimento" value="<?=$nascimento?>" min="1900" max="<?=$atual-1?>">
            <label for="ano">Entre o ano que você deseja saber a idade (atualmente estamos em <strong><?=$atual?></strong>):</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>" min="1900">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $idade = $ano - $nascimento;
        echo "<p> A sua idade em $ano: <strong>$idade anos.</strong></p>";
        ?>
        

    </section>
</body>
</html>