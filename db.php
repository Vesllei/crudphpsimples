<?php
// db.php
$host = 'localhost';
$db = 'clientes_db';
$user = 'root';
$pass = '211013';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    die("Não foi possível conectar ao banco de dados $db :" . $e->getMessage());
}
?>

<!-- CREATE TABLE `clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `telefone` VARCHAR(15),
  `cpf` VARCHAR(14) NOT NULL,
  `endereco` VARCHAR(255),
  PRIMARY KEY (`id`)
);

CREATE DATABASE clientes_db;
USE clientes_db;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15),
    cpf VARCHAR(14) NOT NULL,
    endereco TEXT
); -->
