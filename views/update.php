<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
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
        <h1>Editar Cliente</h1>
    </header>
    <?php
    require '../controllers/updateController.php';
    $cliente = require '../controllers/updateController.php';
    ?>
    <form action="../controllers/updateController.php?id=<?= htmlspecialchars($cliente['id']) ?>" method="post">
        <input type="text" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" required>
        <input type="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" required>
        <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" placeholder="Telefone">
        <input type="text" id="cpf" name="cpf" value="<?= htmlspecialchars($cliente['cpf']) ?>" placeholder="CPF">
        <input type="text" name="endereco" value="<?= htmlspecialchars($cliente['endereco']) ?>" placeholder="Endereço">
        <input type="submit" value="Atualizar">
    </form>
</div>
<footer>
    <p>&copy; 2024 CRUD de Clientes</p>
</footer>
</body>
</html>
