<?php

session_start();

function ctrlDoRegister($request, $response, $container){

    $taskModel = $container->users();
    $nom = $request->get(INPUT_POST, "nom");
    $cognoms = $request->get(INPUT_POST, "cognoms");
    $data_naix = $request->get(INPUT_POST, "data_naix");
    $adreca = $request->get(INPUT_POST, "adreca");
    

    $taskModel->addUser($nom,$cognoms,$data_naix,$adreca);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];

    if ($_FILES["resguard"]["error"] === UPLOAD_ERR_OK) {
        $nombreFoto = "resguard_" . $nom;
        $rutaDestino = "resguards/" . $nombreFoto;

        move_uploaded_file($_FILES["resguard"]["tmp_name"], $rutaDestino);
            
    } 
    } 
    $response->redirect("location: index.php?r=confirm");
    return $response;

}