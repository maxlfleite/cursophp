<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Reajuste Salarial</title>
</head>
<body>
    <header><h1>Reajuste Salarial</h1></header>
    <main><p>A partir do salário e da categoria digitados pelo usuário em um formulário, elabore uma página em PHP que receba os dados desse formulário e calcule o reajuste de salário baseando-se na Tabela 7.1 a seguir. O programa deverá aceitar tanto letras maiúsculas como minúsculas para determinar a categoria do funcionário.</p></main>
    <main>
        <h2>Reajuste Salarial</h2>
        <fieldset>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="salario">Salário atual R$:</label>
        <input type="number" name="salario" id="salario" step="0.01" placeholder="1320.00">
        <select name="categoria" id="categoria">
            <option value="0">(escolha uma categoria)</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
            <option value="4">D</option>
            <option value="5">E</option>
            <option value="6">F</option>
            <option value="7">G</option>
            <option value="8">H</option>
            <option value="9">I</option>
            <option value="10">J</option>
            <option value="11">L</option>
            
        </select>
        <!--
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" placeholder="A-J">
        -->
        <input type="submit" value="Enviar">
        </form>
        </fieldset>
    </main>
    <section>
        <!-- Treinando com switch -->
        <?php 
        $salario = $_GET["salario"] ?? false;
        $categoria =  isset($_GET["categoria"]) ? $_GET["categoria"] : false;
        $reajuste = 0;
        switch ($categoria) {
            case 1:
            case 3:
                $reajuste = $salario + ($salario*0.1);
                echo "<p>Esta categoria concede ao funcionário um <strong>aumento de 10%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
                break;
            case 2:
            case 4:
            case 5:
                $reajuste = $salario + ($salario*0.15);
            echo "<p>Esta categoria concede ao funcionário um <strong>aumento de 15%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
            break;
            case 6:
            case 11:
                $reajuste = $salario + ($salario*0.25);
            echo "<p>Esta categoria concede ao funcionário um <strong>aumento de 25%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
                break;
            case 7:
            case 8:
                $reajuste = $salario + ($salario*0.35);
            echo "<p>Esta categoria concede ao funcionário um <strong>aumento de 35%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
            break;
            case 9:
            case 10:
                $reajuste = $salario + ($salario*0.5);
            echo "<p>Esta categoria concede ao funcionário um <strong>aumento de 50%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
        }
        ?>
    </section>
    <!--
    <section>
        <?php 
        $salario = $_GET["salario"] ?? false;
        $categoria =  isset($_GET["categoria"]) ? strtoupper($_GET["categoria"]) : false;
        $reajuste = 0;
        if ($categoria == "A"|| $categoria == "C"){
            $reajuste = $salario + ($salario*0.1);
            echo "<p>Por pertencer a <strong>categoria $categoria</strong>, o funcionário receberá um <strong>aumento de 10%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
        }elseif ($categoria == "B"|| $categoria == "D"|| $categoria == "E"){
            $reajuste = $salario + ($salario*0.15);
            echo "<p>Por pertencer a <strong>categoria $categoria</strong>, o funcionário receberá um <strong>aumento de 15%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
        }elseif ($categoria == "F"|| $categoria == "L"){
            $reajuste = $salario + ($salario*0.25);
            echo "<p>Por pertencer a <strong>categoria $categoria</strong>, o funcionário receberá um <strong>aumento de 25%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
        }elseif ($categoria == "G"|| $categoria == "H"){
            $reajuste = $salario + ($salario*0.35);
            echo "<p>Por pertencer a <strong>categoria $categoria</strong>, o funcionário receberá um <strong>aumento de 35%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
        }elseif ($categoria == "I"|| $categoria == "J"){
            $reajuste = $salario + ($salario*0.5);
            echo "<p>Por pertencer a <strong>categoria $categoria</strong>, o funcionário receberá um <strong>aumento de 50%</strong>.</br>O seu salário será reajustado para <strong>R$ ".number_format($reajuste, 2, ",", ".")."</strong>.</p>";
        }
        
        ?>
    </section>
    -->
</body>
</html>