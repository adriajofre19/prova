<?php

function ctrlConfirm($request, $response, $container){

    $taskModel = $container->users();
    
    $taskModel = $taskModel->getLastUser();

    $response->set("taskModel", $taskModel);

    $response->setTemplate("confirm.php");

    return $response;    
}