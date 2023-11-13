<?php

session_start();

function ctrlIndex($request, $response, $container) {

    $_SESSION['logged'] = false;

    $response->setTemplate("index.php");
    
    return $response;
    
}   