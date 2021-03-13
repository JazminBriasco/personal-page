<?php
    namespace Controllers;

    class ViewController{

        public static function navView(){
            require_once(dirname(__DIR__).'/Views/nav.php');
        }

        public static function homeView(){
            ViewController::navView();
            require_once(dirname(__DIR__).'/Views/home.php');
        }
        
        public static function skillsView(){
            ViewController::navView();
            require_once('Views/skills.php');
        }

        public static function contactView(){
            ViewController::navView();
            require_once('Views/contact.php');
        }

      
    }


?>