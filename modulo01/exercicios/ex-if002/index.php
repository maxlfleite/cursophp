<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício IF 002</title>
</head>
<body>
    <!-- Criar um exercício que lê 2 notas de um aluno e mostra sua situação entre aprovado(<7), recuperação(5, 6) e reprovado(>5) -->
        <?php 
        $nota1 = $_GET["nota1"] ?? 0.0;
        $nota2 = $_GET["nota2"] ?? 0.0;
        ?>
    <header>
        <h1>Média Escolar</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nota1">Nota 1</label>
        <input type="number" name="nota1" id="nota1" step="0.1" placeholder="0.0">
        <label for="nota2">Nota 2</label>
        <input type="number" name="nota2" id="nota2" step="0.1" placeholder="0.0">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
        $media = ($nota1 + $nota2) / 2;
        if ($media < 5) {
            $situacao = "REPROVADO";
        } elseif ($media >= 5 && $media < 7) {
            $situacao = "em RECUPERAÇÃO";
        } else {
            $situacao = "APROVADO";
        }
        ?>
        <h2>Boletim</h2>
        <P>Com a MÉDIA <?=number_format($media, 1)?>, o aluno está <strong><?=$situacao?></strong>.</P>
    </section>
</body>
</html>