# Masterclass php beer and code

## Arquivo php.ino

- O arquivo **php.ini** é responsável pelas configurações da linguagem em um nível global, como exibição de erros, limite de memória e de tempo de execução, configurações de upload de arquivos, configurações de banco de dados e muitas outras

## Iniciar o servidor

- Para iniciarmos um servidor com php, devemos passar o comando `php -S localhost:8080` - 8080 é a porta que estará rodando o php, que irá variar de acordo com a configuração do ambiente de desenvolvimento

## Tipos de saída de dados

- Existem várias formas de saída de dados no php, uma delas é o **echo**, que serve para imprimir strings, int e float, mas o tipo array não pode ser imprimido com echo porque o echo transforma a variável passada em uma string, mas não consegue transformar um array. Para imprimir uma array, podemos usar o **print_r()**. E para imprimir um objeto, podemos usar o **var_dump**

## Loops

- O loop **for** é mais utilizado quando sabemos antecipadamente quantas vezes o loop deve ser executado

- O loop **while** é mais utilizado quando não sabemos quantas vezes o loop deve ser executado e precisamos verificar uma condição em cada iteração para determinar se o loop continua ou não. O while faz a verificação antes de executar o bloco de código, portanto, se a condição for falsa desde o início, não teremos nenhuma iteração

- O loop **do...while** é semelhante ao **while**, mas a sua principal diferença é que no do...while temos a verificação no final do bloco, dessa forma, mesmo se a condição seja falsa desde o início teremos pelo menos uma iteração

- O loop **foreach** é semelhante ao **for**, mas com uma sintaxe mais enxuta. O foreach é mais usado em iterações com arrays

- A clausura **continue** é muito usada juntamente com os loops. A função dela é pular uma iteração e passar para a próxima quando uma determinada condição for atendida. Ela ajuda a controlar o fluxo de execução do loop 

## funções

- Podemos definir o tipo de parâmetro que uma função aceita e o tipo de essa função retorna.
    - Para definirmos o tipo do parâmetro, devemos passar a palavra reservada do tipo que queremos antes do parâmetro na função

    - `function ex(int $par){}`

    - Para definirmos o tipo do retorno da função, devemos passar a palavra reservada do tipo que queremos depois do parâmetro

    - `function ex(int $par) : int {}`

- Temos as funções lambda e closure
    - Esse tipo de função são funções anônimas que permitem a criação de uma função sem nome específico, podendo ser atribuída a uma variável, passado como argumento para uma função ou como retorno de uma função

    - Lambda
        ```
            <?php

                $sum = function (int $x, int $y): int
                {
                    return $x + $y;
                };

                var_dump( $sum(5, 2) ); // 7


                function soma($sum, $x, $y)
                {
                    return $sum($x, $y);
                }

                var_dump( soma($sum, 5, 2) ); // 7

            ?>
        ```

    - Closure
        ```
            <?php
                $name = "Jociel";

                $printName = function()
                {
                    echo "My name is " . $name;
                };

                $printName(); // PHP Notice:  Undefined variable: name

                $printNameClosure = function() use ($name)
                {
                    echo "My name is " . $name;
                };

                $printNameClosure(); // My name is Jociel
            ?>
        ```

    - Lambda e closure são semelhantes, mas a diferença entre eles, é que o closure tem acesso a variáveis do escopo externo. Para isso, usamos a palavra chave **use** possibilitando passar qualquer variável do escopo externo para dentro da função

    - Funções lambda e closure são instâncias da classe **Closure**

## Data e hora

- Quando estivermos trabalhando com data e hora no php, devemos definir qual timezone iremos usar, para que a data e hora estejam corretas
    - `date_default_timezone_set('America/Sao_Paulo');`

- Quando trabalhamos com datas, temos os seguintes argumentos para passarmos para a função **date**
    - Dia = d
    - Mês = m
    - Ano = Y (aqui o ano é por extenso)
    - Ano = y (aqui o ano é abreviado)
    - `date('d/m/Y') - a formatação pode ser feita com outro símbolos como . e -`

- Quando trabalhamos com hora, temos os seguintes argumentos para passarmos para a função **date**
    - Hora = h
    - Minuto = i
    - Segundo = s
    - `date('h:i:s' - a formatação pode ser feita com outro símbolos)`

- Podemos usar juntamente os argumentos de data e hora dentro da função **date**
    - `date("d/m/Y - h:i:s")`

## Try-catch

- Um bloco try-catch é usado para o tratamento de exceções, que são erros ou condições anormais que ocorrem durante a execução do programa

- É usado para detectar e manipular exceções lançadas por uma seção específica do código

- Estrutura padrão 
    ```
        try {
            // código que pode gerar exceções
        } catch (Exception $e) {
            // código que trata a exceção
        }

    ```

    - O bloco **try** contém o código que pode gerar uma exceção 

    - O bloco **catch** contém o código que trata a exceção

    - Quando uma exceção é lançada dentro do bloco try, o PHP interrompe a execução normal do código e procura um bloco catch correspondente que possa tratar a exceção. Se um bloco catch é encontrado, ele é executado, e o código continua a ser executado normalmente.

    - O argumento **$e** (que pode ser qualquer outra variável) passado para o bloco catch contém informações sobre a exceção lançada, incluindo seu tipo, mensagem e código de erro. Você pode usar essas informações para depurar e corrigir erros em seu código.

## Incluindo arquivos 

- Temos 4 funções no php que nos possibilita incluir arquivos internos e externos dentro de outros arquivos, essa funções são:
    - **include**
    - **include_once**
    - **require**
    - **require_once**

- A diferença do **include** pro **include_once** é que o include_once garante que o arquivo incluído seja incluído apenas uma vez durante a execução do script PHP. Isso também serve para o **require** e **require_once**

- A diferença entre **include** e **require** é que, se o arquivo incluído não for encontrado, o **include** gerará apenas um **aviso**, enquanto o **require** gerará um **erro fatal**. Portanto, é recomendável usar **require** quando você precisa que o arquivo incluído seja obrigatório para o funcionamento do seu código.

## Composer

- O Composer é uma ferramenta para gerenciar dependências em projetos PHP. Ele é muito útil para gerenciar bibliotecas de terceiros e componentes de código que são necessários para o projeto

- Para usar o composer num projeto
    - Devemos instalar o composer no sistema, baixando ele através do site https://getcomposer.org/download/

    - Depois, devemos rodar o comando **composer init** para que o arquivo de configuração **composer.json** seja criado. Este arquivo é usado para definir as dependências do seu projeto. Além desse arquivo, o diretrio **vendor** é criado, ele armazena todos os pacotes instalados

    - Para adicionar um novo pacote, devemos usar o comando `composer require nomePacote` (cada pacote tem um nome específico que deve ser pesquisado para realizar a instalação). Após a instalação de um novo pacote, o arquivo composer.json é atualizado 