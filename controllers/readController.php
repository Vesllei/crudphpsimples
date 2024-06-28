<?php

require '../db.php';

$sql = "SELECT * FROM clientes";
$stmt = $pdo->query($sql);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $clientes;
?>
