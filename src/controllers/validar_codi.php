<?php

function ctrlValidar($request, $response, $container){

    $codiIntroduit = $_POST['codi'];

    // Comprova si el codi és correcte (aquesta és només una validació d'exemple)
    if ($codiIntroduit === "1234") {
        echo "ok";
    } else {
        echo "error";
    }
}