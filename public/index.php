<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

include "../src/config.php";
include "../src/controllers/index.php";
include "../src/controllers/login.php";
include "../src/controllers/register.php";
include "../src/controllers/doLogin.php";
include "../src/controllers/doRegister.php";
include "../src/controllers/doLogout.php";
include "../src/controllers/confirm.php";
include "../src/controllers/consulta.php";
include "../src/controllers/validar_codi.php";



include "../src/middleware/isLogged.php";

include "../src/Emeset/Container.php";
include "../src/Emeset/Request.php";
include "../src/Emeset/Response.php";


 $request = new \Emeset\Request();
 $response = new \Emeset\Response();
 $container = new \Emeset\Container($config);

$r = '';
 if(isset($_REQUEST["r"])){
    $r = $_REQUEST["r"];
 }

if($r == "") {
    $response = CtrlIndex($request, $response, $container);
  $response->response();

  } elseif($r == "login") {
  $response = ctrlLogin($request, $response, $container);
  $response->response();

} elseif($r == "index") {
  $response = CtrlIndex($request, $response, $container);
  $response->response();

} elseif($r == "dologin") {
  $response = ctrlDoLogin($request, $response, $container);
  $response->response();

} elseif($r == "register") {
  $response = ctrlRegister($request, $response, $container);
  $response->response();

} elseif($r == "doregister") {
  $response = ctrlDoRegister($request, $response, $container);
  $response->response();

} elseif($r == "confirm") {
  $response = ctrlConfirm($request, $response, $container);
  $response->response();

} elseif($r == "consulta") {
  $response = ctrlConsulta($request, $response, $container);
  $response->response();

} elseif($r == "validar") {
   ctrlValidar($request, $response, $container);
  $response->response();

}
 else {
     $response = ctrlLogin($request, $response, $container);
       $response->response();
 } 

