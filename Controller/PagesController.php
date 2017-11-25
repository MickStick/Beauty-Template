<?php
    require("ViewsController.php");
    class PagesController{

        public $view;
        public $View;

        public function __construct(){
            $this->view = new ViewsController;
            $this->View = [];
        }

        public function home(){
            $this->View["view"] = $this->view->render("home");
            $this->View["title"] = $this->view-> title("");
            return $this->View;
        }

        public function about(){
            $this->View["view"] = $this->view->render("about");
            $this->View["title"] = $this->view-> title("| About Us");
            return $this->View;
        }

        public function not_found(){
            $this->View["view"] = $this->view->render("404");
            $this->View["title"] = $this->view-> title("| Lost Are We");
            return $this->View;
        }
    }

?>