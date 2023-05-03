<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SendMail</title>
    <style>
        form{
            margin-top: 100px;
        }

        div{
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: 0 auto 12px auto;
        }

        input,
        select{
            font-size: 16px;
            padding: 4px 8px;
        }

        button{
            font-size: 16px;
            padding: 8px;
        }
    </style>
</head>
<body>
    <form action="./sendmail.php" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
        </div>

        <div>
            <label for="pais">País:</label>
            <select id="pais" name="pais">
                <option value="">Selecione um país</option>
                <option value="brasil">Brasil</option>
                <option value="portugal">Portugal</option>
                <option value="eua">Estados Unidos</option>
                <option value="argentina">Argentina</option>
            </select>
        </div>

        <div>
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="10" cols="30"></textarea>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>

</body>
</html>