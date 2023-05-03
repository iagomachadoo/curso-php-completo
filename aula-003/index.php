<?php

// Switch case

$corFavorita = 'azul';

switch ($corFavorita) {
    case 'vermelho':
        echo 'Selecionou vermelho';
        echo "<br><br>";
        break;
    case 'verde':
        echo 'Selecionou verde';
        echo "<br><br>";
        break;
    default:
        echo 'Nenhuma cor selecionada foi o azul';
        echo "<br><br>";
        break;
}

// Loops

// loop for

for ($i=0; $i <= 5; $i++) { 
    echo "{$i} <br>";
}

echo "<br>";

// loop while

$a = 5;
while ($a >= 0) {
    echo "{$a} <br>";
    $a--;
}

echo "<br>";

// loop do...while

$b = 0;
do {
    echo "{$b} <br>";
    $b++;
} while ($b <= 5);

echo "<br>";

// loop foreach

$cores = ['azul', 'vermelho', 'verde'];

foreach ($cores as $i => $cor) {
    echo "A cor {$cor} tem o índice {$i} <br>";
}

echo "<br>";

// clausura continue

$cores = ['azul', 'vermelho', 'verde'];
$resultado = [];

foreach ($cores as $key => $value) {
    if( !($key % 2 === 0) ){
        continue;
    }

    array_push($resultado, $value);
}

var_dump($resultado);

echo "<br><br>";

// funções

// criando e invocando uma função
$obj = new \stdClass();

$obj->nome = "Fulano";
$obj->cidade = "São Paulo";

function dd($var){
    echo "<pre>";
    if(gettype($var) !== 'object'){
        echo 1 . "<br>";
        print_r($var);
    }else{
        echo 2 . "<br>";
        var_dump($var);
    }
    echo "</pre>";
    die();
}

// dd($cores);
// dd($obj);

echo "<br><br>";

// função com parâmetro tipado - type hint

mostrarIDade(1996);

function mostrarIDade(int $anoNascimento){
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;

    echo "A minha idade é {$idade}";
}

echo "<br><br>";

// tipando o parâmetro e o retorno

$resultado = mostrarIDade2(1996);
echo $resultado;

function mostrarIDade2(int $anoNascimento) : int{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;

    return $idade;
}

echo "<br><br>";

// closure e lambda

// lambda

$carros = ['uno', 'gol', 'focus', 'celta', 'fusca'];

$resultado = array_filter($carros, function($carro){
    return (strlen($carro) > 3);
});

print_r($resultado);

echo "<br><br>";

// closure

$filtro = [
    'carro1' => 'focus',
    'carro2' => 'fusca'
];

$carros = ['uno', 'gol', 'focus', 'celta', 'fusca'];

$resultado = array_filter($carros, function($carro) use ($filtro){
    return ($carro === $filtro['carro1']) || ($carro === $filtro['carro2']);
});

print_r($resultado);
?>