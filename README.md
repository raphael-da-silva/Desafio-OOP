# Desafio-OOP
Desafio de Orientação a Objetos em PHP

Por padrão no PHP para fazermos upload de arquivo precisamos das seguintes funcionalidades:

```php
<?php

// Validar se veio aquivo $_FILES['nome_do_campo_formulario'];
if (!isset($_FILES['nome_do_campo_formulario'])) {
  echo 'Erro ao encontrar o arquivo';
}

// Acessar as informações do arquivo
echo $_FILES['nome_do_campo_formulario']['name'];
echo $_FILES['nome_do_campo_formulario']['size'];
// ...

// Fazer o Upload
$upload = move_uploaded_file($_FILES['nome_do_campo_formulario']['tmp_name'], 'local/destino.jpg');

if ($upload === true) {
  echo 'Arquivo salvo com sucesso';
} else {
  echo 'Erro ao salvar o arquivo';
}

// =================================================================================
// Desafio: Faça uma classe de Upload que facilite a ação de fazer upload de arquivo
// Abaixo como a classe deverá se comportar
// =================================================================================

$upload = new Upload('nome_do_campo_formulario');

// para acessar os dados do arquivo
echo $upload->name;
echo $upload->size;
echo $upload->tmp_name;

// Retorna "true" se deu erro no upload 
// que vem do formulário
// ou "false" caso contrário
echo $upload->hasError();

if ($upload->execute('caminho/para/salvar.jpg')) {
  echo 'Arquivo salvo com sucesso';
} else {
  echo 'Erro ao salvar o arquivo';
}

// Extra1: Criar métodos de de limpeza no nome do arquivo
// Extra2: Validar o tamanho do arquivo $upload->maxSize('2mb') / false se o arquivo for maior

```
