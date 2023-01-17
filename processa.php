<?php

//tamanho da senha
$tamanho = (int)readline('Digite o tamanho da senha ( entre 6 e 60 caracteres)');

//verifica o tamanho da senha
if ($tamanho < 6 || $tamanho > 60){
    die("Tamanho inválido\n");
}


//caracteres da senha
$caracteres = [];

//maiusculas
if (readline('Permitir letras maiúsculas? (s/n ') == 's') {
    $caracteres = array_merge($caracteres, range('A', 'Z'));
}
//minusculas

if (readline('Permitir letras minúsculas? (s/n ') == 's') {
    $caracteres = array_merge($caracteres, range('a', 'z'));
}

if (readline('Permitir números? (s/n ') == 's') {
    $caracteres = array_merge($caracteres, range(0, 9));
}

//caracteres especiais

if (readline('Permitir caracteres especiais?? (s/n ') == 's') {
    $caracteres [] = '!';
    $caracteres [] = '@';
    $caracteres [] = '#';
    $caracteres [] = '%';
    $caracteres [] = '&';
    $caracteres [] = '*';
    $caracteres [] = '+';
}

//validação
if (empty($caracteres)) {
    die("Nenhuma opção definida\n\n");
}
//ajusta a quantidade de caracteres
while(count($caracteres) < $tamanho) {
    $caracteres = array_merge($caracteres,$caracteres);

}

//bagunçando os caracteres
shuffle($caracteres);

//nova senha
$senha = implode('',array_slice($caracteres,0,$tamanho));

//nova senha
echo "\nNova senha: ".$senha."\n\n";





    echo "<pre>";
    print_r($senha);
    echo "</prev";
    exit;
