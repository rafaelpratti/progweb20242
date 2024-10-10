<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 - Relatório</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>Relatório de Clientes</h2>

    <?php
        $pessoa1 = array("codigo" => 1, "nome" => "Cristiano Ronaldo");
        $pessoa2 = array("codigo" => 2, "nome" => "Pablo Vegetti");
        $pessoa3 = array("codigo" => 3, "nome" => "Léo Jardim");
        $pessoa4 = array("codigo" => 4, "nome" => "Dimitri Payet");
        $pessoa5 = array("codigo" => 5, "nome" => "Philippe Coutinho");

        $lista['pessoa'][] = $pessoa1;
        $lista['pessoa'][] = $pessoa2;
        $lista['pessoa'][] = $pessoa3;
        $lista['pessoa'][] = $pessoa4;
        $lista['pessoa'][] = $pessoa5;

        var_dump($lista);

        foreach($lista as $listapessoas){

        
    ?>

    <table>
        
        <tr>
            <th>Código</th>
            <th>Nome</th>    
        </tr>
        
        <?php 
            foreach($listapessoas as $itempessoa => $valuepessoa){
        ?>

        <tr>
            <?php foreach($valuepessoa as $item => $value){
                echo "<td> $value </td>";
            } ?>
        </tr>

        <?php } ?>
        
    </table>
    
    <?php }?>
</body>
</html>