<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Operadores Relacionais</title>
</head>
<?php 
//coletor de dados

    $variavel1 = $_GET["variavel1"] ?? false;
    $variavel2 = $_GET["variavel2"] ?? false;
    $tipo = $_GET["tipo"] ?? false;

?>
<body>
    <header>
        <h1>Operadores Unários</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="variavel1">Entre a variável 1:</label>
            <input type="number" name="variavel1" id="variavel1">
            <label for="variavel2">Entre a varável 2:</label>
            <input type="number" name="variavel2" id="variavel2">
            <label for="tipo">Descreva o tipo de operação:</label>
            <input type="text" name="tipo" id="tipo">
            <input type="submit" value="Enviar">
        </form>
    </main>
        <?php 
        //processamento
        $resultado = ($tipo == "s") ? $variavel1 + $variavel2 : $variavel1 * $variavel2;
        ?>
    <section>
        <h2>Resultado</h2>
        <p>Os valores passados foram <?=$variavel1?> e <?=$variavel2?></p>
        <p>O resultado será <?=$resultado?></p>
    </section>
    <main>
        <h2>Analisando a Média e a Situação</h2>
        <?php 
        $nota1 = 10;
        $nota2 = 8;
        $media = ($nota1 + $nota2) / 2;
        echo "<p>A média do aluno diante das notas $nota1 e $nota2 é $media.</p>";
        //$situacao = ($media<6) ? "REPROVADO" : "APROVADO";
        //echo "<p>Situação do aluno: $situacao</p>";
        echo "<p>Situação do aluno: ". (($media<6) ? "REPROVADO" : "APROVADO") ."</p>";
        ?>
    </main>
    <main>
        <h2>Voto obrigatório ou facultativo?</h2>
        <?php 
        $nascimento = 1983;
        $ano = date('Y');
        $idade = $ano - $nascimento;
        echo "<p>Quem nasceu em $nascimento tem $idade anos de idade.</p>";
        $voto = ($idade>17 && $idade<65) ? "OBRIGATÓRIO" : "FACULTATIVO";
        echo "<p>Seu tipo de voto: $voto</p>";
        ?>
    </main>
    <main>
    <?php
        // Enter your code here, enjoy!
        date_default_timezone_set('America/Fortaleza');
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        echo "Hoje é dia " . date('d/j/Y') . " e agora são " . date('H:i') . "!";
        echo "<br/>Hoje é dia ". date('d') ." de ".strftime('%B')." de ".date('Y')." e agora são ". date('H') ." horas e ".date('i')." minutos!";
        
    ?>   
    </main>
</body>
</html>