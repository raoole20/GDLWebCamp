<?php

$conection = new mysqli('localhost', 'root', 'admin', 'proyecto-final');

if( $conection->connect_error){
    echo $error -> $conection->connect_error;
}

function formatear( $var ) {
    echo '<pre>';
    var_dump( $var );
    echo '</pre>';
}

function crear_json( $camisas, $etiquetas, $boletos) {

    $json = [];
    foreach( $boletos as $key => $value){
        if( (int)$value === 0 ){ continue; }
        $json[$key] = $value; 
    }

    $camisas  = (int) $camisas;

    if( $camisas > 0 ){
        $json['camisas'] = $camisas;
    }
    $etiquetas  = (int) $etiquetas;

    if( $etiquetas > 0 ){
        $json['etiquetas$etiquetas'] = $etiquetas;
    }

    return json_encode( $json );
}

function eventos_json( $eventos ){
    $eventos_json = [];

    foreach( $eventos  as $key => $value){
        foreach( $value as $evento ){
            $eventos_json[$key][] = $evento;
        }
    }
    return json_encode($eventos_json);
}