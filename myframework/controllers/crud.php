<?php

class crud extends AppController{

  public function __construct($parent){
    $this->parent = $parent;

    if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != "1"){
      header("location:/login/loginSubmit?msg=You must login");
    }
  }

  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "crud";
    $data["navigation"] = $this->parent->getNav();

    $this->parent->getView("header", $data);
    $this->parent->getView("welcome", $data);
    $this->parent->getView("footer", $data);
  }
}


 ?>
