<?php

// Trabalhando com data e hora

// d = dia
// m = mês
// Y = ano

// Definindo o timezone
date_default_timezone_set('America/Sao_Paulo');

echo "Hoje é " . date('d/m/Y') . "<br><br>";
echo "Hoje é " . date('d/m/y') . "<br><br>";
echo "Hoje é " . date('d.m.Y') . "<br><br>";
echo "Hoje é " . date('d-m-Y') . "<br><br>";
echo "Hoje é " . date('l') . "<br><br>";

echo "<hr>";

// h = hora
// i = minuto
// s = segundo

echo "Agora é " . date('h:i:s') . "<br><br>";

echo "Data e hora completa: " . date("d/m/Y - h:i:s");

echo "<hr>";

// Tratamento de exceção com try-catch

// tratando o erro manualmente, isso é necessário no php, no laravel, isso já é feito por debaixo dos panos

$numerador = 20;
$denominador = 0;

// echo $numerador / $denominador;

try {
    if(!$denominador){
        throw new Exception("Divisão por zero");
    }

    echo $numerador / $denominador;

} catch (Exception $e) {
    echo "{$e->getMessage()}";

} finally {
    echo "<br> Fim da execução...";
}

echo "<br><br>";

// Incluindo arquivos 

require_once('config.php');

$connection = getConnection();

echo $connection;

?>