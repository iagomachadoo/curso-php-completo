<?php

require_once('./config.php');

// Verificando se o PDO está disponível
// if(!defined('PDO::ATTR_DRIVER_NAME')){
//     echo 'PDO não está disponível. Ative no php.ini';
// }

// Pegando dados do bd
$usuarios = $pdo->query('SELECT * FROM usuarios')->fetchAll();

echo "<pre>";
print_r($usuarios);
echo "</pre>";

// Inserindo registros no bd

// informações do novo registro a ser inserido
// $nome = "João";
// $email = "joao@example.com";

// try {
//     // prepara a instrução SQL com parâmetros
//     $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");

//     // vincula os valores aos parâmetros
//     $stmt->bindParam(":nome", $nome);
//     $stmt->bindParam(":email", $email);

//     // executa a instrução SQL
//     $stmt->execute();

//     echo "Novo registro inserido com sucesso!";
// } catch(PDOException $e) {
//     echo "Erro ao inserir novo registro: " . $e->getMessage();
// }

// Atualizando registro no banco de dados

// Dados do registro a ser atualizado
// $id = 6; // ID do registro a ser atualizado
// $nome = "João Machado"; // Novo nome a ser inserido
// $email = "joaomachado@example.com"; // Novo email a ser inserido

// try {
//     // Montando a query SQL de atualização
//     $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";

//     // Preparando a query para ser executada
//     $stmt = $pdo->prepare($sql);

//     // Associando os parâmetros da query com os valores informados
//     $stmt->bindParam(":nome", $nome);
//     $stmt->bindParam(":email", $email);
//     $stmt->bindParam(":id", $id);

//     // Executando a query
//     $stmt->execute();

//     echo "Registro atualizado com sucesso!";
// } catch(PDOException $e) {
//     echo "Erro ao atualizar registro: " . $e->getMessage();
// }

// // Fechando a conexão com o banco de dados
// $pdo = null;

// Deletando um registro do banco de dados

// try {
//     // prepara a query de delete
//     $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = :id");

//     // substitui o parâmetro :id com o valor desejado
//     $id = 6; // exemplo de ID a ser deletado
//     $stmt->bindParam(':id', $id);

//     // executa a query
//     $stmt->execute();

//     echo "Registro deletado com sucesso!";
// } catch(PDOException $e) {
//     echo "Erro ao deletar registro: " . $e->getMessage();
// }

// $pdo = null; // fecha a conexão
?>