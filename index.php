<?php
//require_once "vendor/autoload.php";
//use App\classes\Home;
//$home = new $home;
//$home-> index();


require_once 'vendor/autoload.php';

use App\classes\Home;

//test();
$home = new Home(); //object create
$home->index(); //call