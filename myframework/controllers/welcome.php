<?php

class welcome extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
    //$this->home();
  }

  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "welcome";
    $data["navigation"] = $this->parent->getNav();

    $this->parent->getView("header", $data);
    $this->parent->getView("welcome", $data);
    $this->parent->getView("footer", $data);
  }
}

 ?>
