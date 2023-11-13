<?php

function ctrlConsulta($request, $response, $container){

    $taskModel = $container->users();
    
    $users = $taskModel->getAllUsers();

    $response->set("users", $users);

    $response->setTemplate("consulta.php");

    return $response;    
}




