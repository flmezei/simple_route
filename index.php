<?php
include "core/Requests/Request.php";

$request = new Request();
print_r($request->input('idade'));
die;

$uriRequest = $_SERVER['REQUEST_URI'];

$uri = explode("/",$uriRequest);
$newUri = array_values(array_filter($uri, function($_URI){
    return ($_URI != "");
}));

$rota = isset($newUri[0]) ? $newUri[0] : "";

if ($rota == 'user' && $_SERVER['REQUEST_METHOD'] == 'GET'){
    if ($rota[1] != '' && $rota[1] != 'create'  && $rota[1] != 'edit') {
        include('views/user/show.php');
    } else {
        include('views/user/index.php');
    }  

    if ($rota[1] == 'create') {
        include('views/user/show.php');
    } 
     
}

/*

Classe ser humano

    comunicação
        falar
        expressão corporal
        desenho
        escrita

    respirar


    movimentação
        engatinhar
        andar
        correr
        nadar

    raciocinio

    tem corpo
    tem orgãos



Anderson Trombini14:22
Uma classe é um conjunto de funções.

Flavio Eduardo Mezei14:24
A classe é um conjunto de funções que tratam o comportamento de seus objetos através de métodos.

Priscila Polaquini de Macedo Leite14:24
A classe determina objetos com características semelhantes. 
ela vai determinar o comportamento dos objetos com os métodos
*/




?>



