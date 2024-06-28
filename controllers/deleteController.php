<?php

require '../db.php';

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header('Location: ../views/index.php');
exit();
?>
