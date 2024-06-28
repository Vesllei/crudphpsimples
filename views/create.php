<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#telefone').inputmask('(99) 99999-9999');
        $('#cpf').inputmask('999.999.999-99');
    });
    </script>
</head>
<body>
<div class="container">
    <header>
        <h1>Cadastrar Cliente</h1>
    </header>
    <?php
    session_start();
    if (isset($_SESSION['errors'])) {
        echo '<ul>';
        foreach ($_SESSION['errors'] as $error) {
            echo '<li>' . htmlspecialchars($error) . '</li>';
        }
        echo '</ul>';
        unset($_SESSION['errors']);
    }
    ?>
    <form action="../controllers/createController.php" method="post">
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="Email">
        <input type="text" id="telefone" name="telefone" placeholder="Telefone">
        <input type="text" id="cpf" name="cpf" placeholder="CPF">
        <input type="text" name="endereco" placeholder="Endereço">
        <input type="submit" value="Cadastrar">
    </form>
</div>
<footer>
    <p>&copy; 2024 CRUD de Clientes</p>
</footer>
</body>
</html>
