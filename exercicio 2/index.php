<?php

$datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
$hora = $datetime->format('H');


$mensagem = '';
$imagem = '';

if ($hora >= 0 && $hora <= 12) {
    $mensagem = "Bom dia!";
    $imagem = "imagem_bom_dia.jpg"; 
} elseif ($hora > 12 && $hora < 18) {
    $mensagem = "Boa tarde!";
    $imagem = "imagem_boa_tarde.jpg"; 
} elseif ($hora >= 18 && $hora <= 24) {
    $mensagem = "Boa noite!";
    $imagem = "imagem_boa_noite.jpg"; 
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do Dia</title>
</head>
<body>
    <h1><?php echo $mensagem; ?></h1>
    <?php if ($imagem): ?>
        <img src="<?php echo $imagem; ?>" alt="<?php echo $mensagem; ?>" style="max-width: 100%; height: auto;">
    <?php endif; ?>
</body>
</html>
