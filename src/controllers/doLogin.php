<?php

session_start();

function ctrlDoLogin($request, $response, $container){

    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");

    $userModel = $container->users();

    $userModel = $userModel->login($user, $pass);
    
    if ($userModel) {
    $_SESSION['user'] = $userModel;
    $_SESSION['logged'] = true;
    $response->redirect("location: index.php");
    } else {
    $response->redirect("location: index.php?r=login");
    }

    return $response;
}