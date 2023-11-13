<?php

session_start();


function ctrlLogin($request, $response, $container){

    $response->setTemplate("login.php");

    return $response;    
}

