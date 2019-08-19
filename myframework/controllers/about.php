<?php

class about extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
    //$this->about();
  }

  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "about";
    $data["navigation"] = $this->parent->getNav();

    $this->parent->getView("header", $data);
    $this->parent->getView("about", $data);
    $this->parent->getView("footer", $data);
  }
}

 ?>
