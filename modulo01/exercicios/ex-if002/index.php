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
        ?>
    <header>
        <h1>Média Escolar</h1>
    </header>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="nota1">Nota 1</label>
    <input type="number" name="nota1" id="nota1" step="0.1" value="<?=*?>">
    <label for="nota2">Nota 2</label>
    <input type="number" name="nota2" id="nota2" step="0.1" value<?=?>>
    <input type="submit" value="Calcular">
    </form>
</body>
</html>