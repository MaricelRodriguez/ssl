<?php

class api extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
  }

  public function showApi(){
    $data = array();
    $data["root"] = "..";
    $data["pagename"] = "welcome";
    $data["navigation"] = $this->parent->getNav();
    $data["api"] = $this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");

    $this->parent->getView("header", $data);
    $this->parent->getView("api", $data);
    $this->parent->getView("footer", $data);
  }
}

 ?>
