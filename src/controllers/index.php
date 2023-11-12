<?php

session_start();
function ctrlIndex($request, $response, $container) {

    $taskModel = $container->users();
    
    $user = $request->get("SESSION", "user");

    
    $tasks = $taskModel->getAll($user["id"]);

    $response->set("tasks", $tasks);

    
    $response->setTemplate("index.php");
    

    return $response;
    
}   