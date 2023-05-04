<?php

// informações de conexão com o banco de dados
$host = "localhost";
$dbname = "teste_pdo";
$user = "root";
$password = "";

// cria uma nova conexão com o MySQL usando PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem sucedida!";
    
} catch(PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}

?>