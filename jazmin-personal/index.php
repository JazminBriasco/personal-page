<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "Config/Autoload.php";
require "Config/Config.php";
//require "Views/css/style.css";

use Config\Autoload as Autoload;
use Config\Router 	as Router;
use Config\Request 	as Request;

Autoload::start();

//define("FRONT_ROOT", "/jazmin-briasco/");
//define("VIEWS_PATH", ROOT."Views/");


//session_start();
header('Cache-Control: no cache'); //disable validation of form by the browser
/*echo (dirname(__DIR__));
echo '<br>';
echo '<br>';
echo (dirname(__DIR__).'/jazmin-personal/header.php');
echo '<br>';
*/

require_once(dirname(__DIR__).'/jazmin-personal/Views/header.php');

Router::Route(new Request());

?>