<?php
require '../db.php';

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
        $sql = "INSERT INTO clientes (nome, email, telefone, cpf, endereco) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $telefone, $cpf, $endereco]);

        header('Location: ../views/index.php');
        exit();
    } else {
        session_start();
        $_SESSION['errors'] = $errors;
        header('Location: ../views/create.php');
        exit();
    }
}
?>
