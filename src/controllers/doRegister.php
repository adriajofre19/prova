<?php

session_start();

function ctrlDoRegister($request, $response, $container){

    $taskModel = $container->users();
    $nom = $request->get(INPUT_POST, "nom");
    $cognoms = $request->get(INPUT_POST, "cognoms");
    $email = $request->get(INPUT_POST, "email");
    $telefon = $request->get(INPUT_POST, "telefon");
    $card = $request->get(INPUT_POST, "card");
    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");
    $rol = $request->get(INPUT_POST, "rol");
    

    $taskModel->addUser($nom,$cognoms,$email,$telefon,$card,$user,$pass,$rol);


    $response->redirect("location: index.php?r=adminpanel");
    return $response;
}