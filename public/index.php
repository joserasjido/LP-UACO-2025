<?php

require_once "../app/config/AppConfig.php";

//Enrutador (provisorio)

$controller = $_GET["controller"] ?? APP_DEFAULT_CONTROLLER;
$action = $_GET["action"] ?? APP_DEFAULT_ACTION;

$base = "../app/resources/views/" . $controller . "/" . $action . ".html";
require_once $base;

//      user/edit.html?id=5 ==> user/edit/5
//      user/create.html    ==> user/create
//      user/index.html     ==> user