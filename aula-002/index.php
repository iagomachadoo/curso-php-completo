<?php

// Definindo uma constante

define('PI', 3.14);

echo PI;

echo "<br><br>";

// Tipos primitivos

$nome = "Fulano da Silva"; // string
$instrutor = true; // booleano
$idade = 33; // int/integer
$altura = 1.75; // float/double
$curso = ['PHP', 'Laravel', 'MySql']; // array
$objeto = new \stdClass();// objeto
// resource
$ultimaVisualizacao = null; // null

// Trabalhando com array
$frutas = ['maçã', 'uva', 'abacaxi'];

print_r($frutas);
echo "<br><br>";

// Array associativo
// Esse tipo de array usa chaves nomeadas para acessar seus valores ou invés de índices numéricos como num array regular
// É usada a sintaxe de chave-valor, onde a chave é uma string que identifica o elemento do array, enquanto o valor é o valor associado a essa chave 
$idiomas = [
    'Brasil' => 'Português',
    'UEA' => 'Inglês',
    'Alemanha' => "Alemão"
];  

print_r($idiomas);
echo "<br><br>";

print_r($idiomas['Brasil']);
echo "<br><br>";

// Função compact()
// Essa função transforma variáveis em um array associativo transformando o nome da variável na chave e o valor da variável no valor da chave
$carro = 'Fiat';
$resultado = compact('carro');

print_r($resultado);
echo "<br><br>";

// Classe padrão StdClass
// Essa classe é padrão do php e é vazia, ou seja, não possui métodos nem propriedades. Ela é a classe padrão dos objetos que não são declarados
// Quando convertemos qualquer tipo pra um objeto, estamos criando um objeto StdClass

$obj = new \stdClass(); // Criando um objeto StdClass
$obj->nome = "Fulano"; // Atribuindo um valor ao objeto (usamos a sintaxe de seta)
$obj->sobrenome = "Silva";

var_dump($obj);
echo "<br><br>";

echo $obj->nome; // Acessando um valor do objeto (usamos a sintaxe de seta)
echo "<br><br>";

// Verificando o tipo de uma variável
echo gettype(PI); // double
echo "<br><br>";

echo gettype($obj); // object
echo "<br><br>";

// Null Coalescing Operator php
// Esse operador foi introduzido a partir da versão 7.0 do php e é representado pelo operador ??

// Forma antiga de validar dados
$_POST = [
    'nome' => 'Fulano',
    'sobrenome' => null,
];

$nome = '';
$sobrenome = '';

if($_POST['nome'] <> null){
    $nome = $_POST['nome'];
}else{
    $nome = 'Não preenchido';
}

if($_POST['sobrenome'] <> null){
    $sobrenome = $_POST['sobrenome'];
}else{
    $sobrenome = 'Não preenchido';
}

echo "{$nome} <br><br>";
echo "{$sobrenome} <br><br>";

// Validando dados com o Null Coalescing Operator
$nome = $_POST['nome'] ?? 'Não preenchido'; 
$sobrenome = $_POST['sobrenome'] ?? 'Não preenchido'; 

echo "{$nome} <br><br>";
echo "{$sobrenome} <br><br>";

// Validando múltipla com o Null Coalescing Operator
$primeiro = null;
$segundo = null;
$terceiro = null;
$quarto = null;

$resultado = $primeiro ?? $segundo ?? $terceiro ?? $quarto ?? 'Não preenchido';

echo "{$resultado} <br><br>";

?>