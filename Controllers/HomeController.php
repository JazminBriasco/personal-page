<?php
    namespace Controllers;
    
class HomeController
{
    public function __construct()
    {
    }
    
    public function Index($message = 1)
    {
        
        ViewController::navView();
        ViewController::homeView();
      //  ViewController::bootstrapView();
    }
}
?>