<?php
require '../controllers/readController.php';
$clientes = require '../controllers/readController.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container">
    <header>
        <h1>Lista de Clientes</h1>
        <nav>
            <ul>
                <li><a href="create.php">Cadastrar Cliente</a></li>
            </ul>
        </nav>
    </header>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= htmlspecialchars($cliente['id']) ?></td>
                <td><?= htmlspecialchars($cliente['nome']) ?></td>
                <td><?= htmlspecialchars($cliente['email']) ?></td>
                <td><?= htmlspecialchars($cliente['telefone']) ?></td>
                <td><?= htmlspecialchars($cliente['cpf']) ?></td>
                <td><?= htmlspecialchars($cliente['endereco']) ?></td>
                <td>
                    <a href="update.php?id=<?= htmlspecialchars($cliente['id']) ?>">Editar</a>
                    <a href="../controllers/deleteController.php?id=<?= htmlspecialchars($cliente['id']) ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<footer>
    <p>&copy; 2024 CRUD de Clientes</p>
</footer>
</body>
</html>
