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

header('Cache-Control: no cache'); //disable validation of form by the browser
echo 'index';
try{
    require('/jazmin-personal/Views/header.php');

}catch(Exception $e){
    try{
        require('jazmin-personal/Views/header.php');
    
    }catch(Exception $e){
        try{
            require('/Views/header.php');
        
        }catch(Exception $e){
        
        }    try{
            require('Views/header.php');
        
        }catch(Exception $e){
        
        }    try{
            require('/header.php');
        
        }catch(Exception $e){
        
        }    try{
            require('header.php');
        
        }catch(Exception $e){
        }    try{
            require(ROOT.'jazmin-personal/Views/header.php');
        
        }catch(Exception $e){
        
        }  
        }    
      
}
require('jazmin-personal/Views/header.php');
require('/Views/header.php');
require('Views/header.php');
require('/header.php');
require('header.php');
require(ROOT.'jazmin-personal/Views/header.php');


Router::Route(new Request());

?>