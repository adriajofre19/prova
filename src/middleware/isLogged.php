<?php

function isLogged($request, $response, $container, $next){

    $logged = $request->get("SESSION", "logged");

    if(!$logged) {
        $response->redirect("location: index.php?r=login");
        return $response;
    }

    $response->set("user", $request->get("SESSION", "user"));

    $response = $next($request, $response, $container);

    return $response;
    
}

function isAdmin($request, $response, $container, $next){
    
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
                
            if ($user['rol'] == "admin"){
                $adminUser = true;
                $next($request, $response, $container);
            } else {
                $response->redirect("location: index.php");
                
            }
        } 
        return $response;
}

function isGestor($request, $response, $container, $next){
    
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
                
            if ($user['rol'] == "gestor" || $user['rol'] == "admin"){
                $gestorUser = true;
                $next($request, $response, $container);
            } else {
                $response->redirect("location: index.php");
                
            }
        } 
        return $response;
}