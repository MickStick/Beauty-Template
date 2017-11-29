<?php
    require('Controller/PagesController.php');
    $Pages = new PagesController;
   
    if($_SERVER["REQUEST_URI"] == "/" && $_SERVER["REQUEST_METHOD"] == "GET"){
        $View = $Pages->home();
        $PageView = $View["view"];
        $title = $View["title"];   
    }else if($_SERVER["REQUEST_URI"] == "/about" && $_SERVER["REQUEST_METHOD"] == "GET"){
        $View = $Pages->about();
        $PageView = $View["view"];
        $title = $View["title"]; 
    }else if(($_SERVER["REQUEST_URI"] == "/services" || $_SERVER["REQUEST_URI"] == "/services") && $_SERVER["REQUEST_METHOD"] == "GET"){
        $View = $Pages->services();
        $PageView = $View["view"];
        $title = $View["title"]; 
    }else{
        $View = $Pages->not_found();
        $PageView = $View["view"];
        $title = $View["title"]; 
    }

?>