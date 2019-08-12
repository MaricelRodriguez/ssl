<?php

class welcome extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
    $this->home();
  }

  public function home(){
    $data = array();
    $data["pagename"] = "home";
    $data["navigation"] = array("home"=>"/home","brews"=>"/brews","about"=>"/about");

    $this->parent->getView("header", $data);
    $this->parent->getView("body");
    $this->parent->getView("footer");
  }

  public function about(){
  }

}



 ?>
