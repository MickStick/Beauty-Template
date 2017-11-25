<?php

    class ViewsController{
        public $render;
        public function __construct(){
            
        }

        public function render($view){
            
            return "View/".$view.".php";          

        }

        public function send($data){
            return $data;
        }

        function title($data){
            return $title = $data;
        }

        
    }
?>