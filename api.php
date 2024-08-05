<?php
    header('Content-Type:application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];
    //echo json_encode($metodo);

    $url = $_SERVER['REQUEST_URI'];

    //echo json_encode($url);

    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path,'/');

    //echo json_encode($path);

    $pathparts = explode('/',$path);


    //CRIANDO VARIAVEIS PARA CADA PARTE DA URL

    $primeira = isset($pathparts[0]) ? $pathparts[0] : '';
    $segunda = isset($pathparts[1]) ? $pathparts[1] : '';
    $terceira = isset($pathparts[2]) ? $pathparts[2] : '';
    $quarta = isset($pathparts[3]) ? $pathparts[3] : '';

    //MONTANDO A RESPOSTA DA API EM JSON

    $response = [
        'metodo' => $metodo,
        'PrimeiraParte' => $primeira,
        'SegundaParte' => $segunda,
        'TerceiraParte' => $terceira,
        'QuartaParte' => $quarta,
    ];

    //MOSTRANDO A RESPOSTA
    //echo json_encode($response);

    //SELEÇÃO DE METODO

    switch($metodo){
        case 'GET':
            //LOGICA PARA GET
            break;
        case 'POST':
            //LOGICA PARA POST
            break;  
        case 'PUT':
            //LOGICA PARA PUT
            break;   
        case 'DELETE':
            //LOGICA PARA DELETE
            break;             
        default:
            echo json_encode(
                [
                    'mensagem' => 'Metodo não permitido!'
                ]               
             );
             break;
    }
?>