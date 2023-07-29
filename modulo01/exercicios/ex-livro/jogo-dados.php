<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Dados</title>
</head>
<body>
    <!-- Mostrar quantas vezes cada uma das faces foi sorteada-->
    <h1>Jogo de Dados</h1>
    <main>
    <?php 
    
    $lado1 = 0;
    $lado2 = 0;
    $lado3 = 0;
    $lado4 = 0;
    $lado5 = 0;
    $lado6 = 0;
    $indice = 1;
    while ($indice <= 20) {

        $lado = rand(1,6);
        if ($lado==1){
            $lado1++;
        }
        if ($lado==2){
            $lado2++;
        }
        if ($lado==3){
            $lado3++;
        }
        if ($lado==4){
            $lado4++;
        }
        if ($lado==5){
            $lado5++;
        }
        if ($lado==6){
            $lado6++;
        }
        $indice++;
        
        echo "<img src='dados/dado-lado-". $lado.".jpg' alt='dado'>";
    } 
        echo "<p>Ao todo foram encontrado os seguintes resultados</p>";
        echo "<ul>
            <li>Número 1x $lado1</li>    
            <li>Número 2x $lado2</li>    
            <li>Número 3x $lado3</li>    
            <li>Número 4x $lado4</li>    
            <li>Número 5x $lado5</li>    
            <li>Número 6x $lado6</li>    
        </ul>";
    ?>
    </main>
    

    
   
</body>
</html>