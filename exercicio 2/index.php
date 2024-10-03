

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do Dia</title>
</head>
<body>

<?php

$datetime = new DateTime("now", new DateTimeZone("Asia/Dubai"));
$hora = $datetime->format('H');


$mensagem = '';
$imagem = '';

if ($hora >= 0 and $hora <= 12) {
    $mensagem = "Bom dia!";
    $imagem = "imagem_bom_dia.jpg"; 
} elseif ($hora > 12 and $hora < 18) {
    $mensagem = "Boa tarde!";
    $imagem = "imagem_boa_tarde.jpg"; 
} elseif ($hora >= 18 and $hora <= 24) {
    $mensagem = "Boa noite!";
    $imagem = "imagem_boa_noite.jpg"; 
}
?>


    <h1><?php echo $mensagem; ?></h1>
        <img src="<?php echo $imagem; ?>" alt="<?php echo $mensagem; ?>">
</body>
</html>
