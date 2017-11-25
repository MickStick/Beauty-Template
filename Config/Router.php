<?php
    require('Controller/PagesController.php');
    $Pages = new PagesController;
   
    if($_SERVER["REQUEST_URI"] == "/"){
        $View = $Pages->home();
        $PageView = $View["view"];
        $title = $View["title"];   
    }else if($_SERVER["REQUEST_URI"] == "/about"){
        $View = $Pages->about();
        $PageView = $View["view"];
        $title = $View["title"]; 
    }else{
        $View = $Pages->not_found();
        $PageView = $View["view"];
        $title = $View["title"]; 
    }

?>