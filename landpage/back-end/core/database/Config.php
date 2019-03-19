<?php

$noar = false;

if($noar == true){
    return[
        'database' => [
            'name' => 'domcom_landpage',
            'username' => 'domcom_landpage',
            'password' => 'senha123',
            'connection' => 'mysql:host=localhost',
            'options' => []
        ]
    ];    
}else{
    return[
        'database' => [
            'name' => 'landpage',
            'username' => 'root',
            'password' => '',
            'connection' => 'mysql:host=localhost',
            'options' => []
        ]
    ];   
}

?>