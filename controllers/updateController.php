<?php
require '../db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];

    $errors = [];

    if (empty($nome)) {
        $errors[] = 'O nome é obrigatório.';
    }

    if (empty($email)) {
        $errors[] = 'O email é obrigatório.';
    }

    if (empty($cpf)) {
        $errors[] = 'O CPF é obrigatório.';
    }

    if (empty($errors)) {
        $sql = "UPDATE clientes SET nome = ?, email = ?, telefone = ?, cpf = ?, endereco = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $telefone, $cpf, $endereco, $id]);

        header('Location: ../views/index.php');
        exit();
    } else {
        session_start();
        $_SESSION['errors'] = $errors;
        header('Location: ../views/update.php?id=' . $id);
        exit();
    }
} else {
    $sql = "SELECT * FROM clientes WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$cliente) {
        die('Cliente não encontrado');
    }

    return $cliente;
}
?>
