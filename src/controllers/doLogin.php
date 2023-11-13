<?php

session_start();

function ctrlDoLogin($request, $response, $container){

    $pass = $request->get(INPUT_POST, "pass");

    
    if ($pass == '1234') {
    $_SESSION['logged'] = true;
    $response->redirect("location: index.php?r=consulta");
    } else {
    $response->redirect("location: index.php?r=login");
    }

    return $response;
}