<?php

session_start();
function ctrlIndex($request, $response, $container) {

    $taskModel = $container->users();
    
    $user = $request->get("SESSION", "user");
    $rooms = $taskModel->getRooms();

    
    $tasks = $taskModel->getAll($user["id"]);

    $apps = $taskModel->getRooms();

    $response->set("apps", $apps);

    $response->set("tasks", $tasks);
    $response->set("rooms", $rooms);

    
    $response->setTemplate("index.php");
    

    return $response;
    
}   