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
    <title>Cadastro e Dados do Cliente</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastro de Cliente</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required value="<?= $nome; ?>">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required maxlength="11" value="<?= $cpf; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <?php if ($erro): ?>
            <div class="alert alert-danger mt-4"><?= $erro; ?></div>
        <?php elseif ($nome && $cpf): ?>
            <div class="mt-4">
                <h4>Dados do Cliente</h4>
                <p><strong>Nome:</strong> <?= $nome; ?></p>
                <p><strong>CPF:</strong> <?= $cpf; ?></p>
                <p><strong>Data de Cadastro:</strong> <?= date('d/m/Y H:i:s', $_SERVER['REQUEST_TIME']); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
