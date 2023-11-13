<?php

function ctrlDoLogin($request, $response, $container){

    $taskModel = $container->users();
    $user = $request->get(INPUT_POST, "user");
    $pass = $request->get(INPUT_POST, "pass");

    $taskModel = $taskModel->login($user, $pass);

    if ($taskModel) {
    $_SESSION['user'] = $taskModel;
    $_SESSION['logged'] = true;
    $response->redirect("location: index.php");
    } else {
    $response->redirect("location: index.php?r=login");
    } 

    return $response;

    $response->redirect("location: index.php?r=adminpanel");
    return $response;
}