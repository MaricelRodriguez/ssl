<?php

class api extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
  }

  public function showApi(){
    $data = array();
    $data["root"] = "..";
    $data["pagename"] = "API";
    $data["navigation"] = $this->parent->getNav();

    //$data["api"] = $this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");
    $data["youtube"] = $this->parent->getModel("apiModel")->youtube(@$_GET["search"]);
    //var_dump($data["youtube"]["items"]);

    $this->parent->getView("header", $data);
    $this->parent->getView("api", $data);
    $this->parent->getView("footer", $data);
  }
}

 ?>
