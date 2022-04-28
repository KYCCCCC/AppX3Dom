<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI = $_SERVER['REQUEST_URI'];
// echo "REQUEST_URI". $_SERVER['REQUEST_URI'];
$pageURI = substr($pageURI,strrpos($pageURI,'index.php')+10);
// echo 'pageuri'.$pageURI;
new Controller($pageURI);
// echo "muc";