<?php
// Inicializa variáveis
$nome = $cpf = "";
$erro = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valida os dados
    if (empty($_POST['nome']) || empty($_POST['cpf'])) {
        $erro = "Todos os campos são obrigatórios.";
    } elseif (strlen($_POST['cpf']) != 11) {
        $erro = "O CPF deve conter 11 caracteres.";
    } else {
        $nome = htmlspecialchars($_POST['nome']);
        $cpf = htmlspecialchars($_POST['cpf']);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Dados do Cliente</h2>
        <?php if ($erro): ?>
            <div class="alert alert-danger"><?= $erro; ?></div>
        <?php else: ?>
            <p><strong>Nome:</strong> <?= $nome; ?></p>
            <p><strong>CPF:</strong> <?= $cpf; ?></p>
            <p><strong>Data de Cadastro:</strong> <?= date('d/m/Y H:i:s', $_SERVER['REQUEST_TIME']); ?></p>
        <?php endif; ?>
        <a href="cadcliente.php" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>