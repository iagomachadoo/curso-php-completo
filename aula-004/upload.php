<?php

// $dados = $_FILES['arquivo'];
// echo "<pre>";
// var_dump($dados);
// echo "</pre>";

// destino do arquivo
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['arquivo']['name']);
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verifica se o arquivo de imagem é real
if(isset($_POST['submit'])){
    $check = getimagesize($_FILES['arquivo']['tmp_name']);

    if($check !== false){
        echo "O arquivo é uma imagem - " . $check['mime'] . ". <br>";

    }else{
        echo "O arquivo não é uma imagem";
        $uploadOk = 0;
    }
}

// Verifica se o arquivo já existe
if(file_exists($target_file)){
    echo "Desculpe, o arquivo já existe";
    $uploadOk = 0;
}

// Verifica o tamanho do arquivo
if($_FILES['arquivo']['size'] > 500000){
    echo "Desculpe, seu arquivo é muito grande";
    $uploadOk = 0;
}

// Verifica o tipo do arquivo
if($imageFileType != 'jpg' && $imageFileType != 'png'){
    echo "Desculpe, só aceitamos arquivos do tipo jpg e png";
    $uploadOk = 0;
}

// Verifica o status da variável $uploadOk (0 - não permite download, 1 - permite download)
if($uploadOk === 0){
    echo "Desculpe, seu arquivo não foi enviado para o servidor";
}else{
    // verifica se o diretório de armazenamento do arquivo existe
    if(!file_exists('uploads')){
        mkdir('uploads', 0777, true);
    }

    // move o arquivo da pasta /tmp para a /uploads
    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $target_file)){
        echo "O arquivo " . basename($_FILES['arquivo']['name']) . " foi enviado com sucesso!";
    }else{

    }
}

?>