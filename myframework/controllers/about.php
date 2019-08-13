<?php

class about extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
    $this->about();
  }

  public function brews(){
    $data = array();
    $data["pagename"] = "about";
    $data["navigation"] = array("welcome"=>"/welcome","brews"=>"/brews","about"=>"/about");

    $this->parent->getView("header", $data);
    $this->parent->getView("about");
    $this->parent->getView("footer");
  }
}

 ?>
