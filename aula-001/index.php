<?php

echo "Hello, world";

echo "<br><br>";
// Tipos de comentários

// comentário de linha única

/*
comentário de bloco
*/

/**
 * comentário para documentação
*/

// Variáveis

$texto = "Hello, world";

echo $texto;

echo "<br><br>";

// Verificando variáveis

// A função isset() verifica se uma variável foi iniciada e tem um valor diferente de null. Podemos verificar várias variáveis na função isset, sendo que só retornará true se todas elas estiverem definidas e com valor diferente de null
$nome = "Fulano da Silva";
$idade = 35;
$formações = array();
$ultimaVisualizacao = null;

echo isset($nome); // 1
echo "<br><br>";

echo isset($idade); // 1
echo "<br><br>";

echo isset($formações); // 1
echo "<br><br>";

echo isset($ultimaVisualizacao); // 0

// A função empty verifica se uma variável é vazia, ou seja, se ela não existe ou se seu valor é considerado vazio de acordo com as regras do PHP. Ela retorna true caso a variável estiver vazia
// A função empty retorna true para os seguintes valores: 'null', 'false', '0', '0.0' '""' (string vazia) e array() (array vazio)
//  *Para verificar um array, o indicado é usar o empty() 
$nome = "Fulano da Silva";
$idade = 35;
$formações = array();
$ultimaVisualizacao = null;

echo empty($nome); // 1
echo "<br><br>";

echo empty($idade); // 1
echo "<br><br>";

echo empty($formações); // 0
echo "<br><br>";

echo empty($ultimaVisualizacao); // 0
?>