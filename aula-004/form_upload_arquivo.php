<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <style>
        form{
            border: 2px solid #212121;
            max-width: 500px;
            margin: 200px auto;
            padding: 12px;
        }

        div{
            display:flex;
            flex-direction: column;
            margin-bottom: 24px;
        }

        button{
            max-width: max-content;
        }
    </style>
</head>
<body>
    <form action="./upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="arquivo">Selecione o arquivo:</label>
            <input type="file" id="arquivo" name="arquivo">
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>

</body>
</html>