# Masterclass php beer and code

## Arquivo php.ino
- O arquivo **php.ini** é responsável pelas configurações da linguagem em um nível global, como exibição de erros, limite de memória e de tempo de execução, configurações de upload de arquivos, configurações de banco de dados e muitas outras

- Para iniciarmos um servidor com php, devemos passar o comando `php -S localhost:8080` - 8080 é a porta que estará rodando o php, que irá variar de acordo com a configuração do ambiente de desenvolvimento

- Existem várias formas de saída de dados no php, uma delas é o **echo**, que serve para imprimir strings, int e float, mas o tipo array não pode ser imprimido com echo porque o echo transforma a variável passada em uma string, mas não consegue transformar um array. Para imprimir uma array, podemos usar o **print_r()**. E para imprimir um objeto, podemos usar o **var_dump** 