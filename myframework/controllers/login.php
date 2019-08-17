<?php

class login extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
  }

  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "login";
    $data["navigation"] = array("welcome"=>"/welcome","brews"=>"/brews", "register"=>"/register", "login"=>"/login","about"=>"/about");

    $this->parent->getView("header", $data);
    $this->parent->getView("login", $data);
    $this->parent->getView("footer", $data);
  }

  public function recieve(){
    if($_POST["type"] == "form"){
      $this->recieveForm();
    } else {
      $this->recieveAjax();
    }
  }

  public function recieveForm(){
    if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){
      header("location:/login?msg=Good Login");
    } else {
      header("location:/login?msg=Invalid User");
    }
  }

  public function recieveAjax(){
    if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){
      echo "good";
    } else {
      echo "bad";
    }
  }
}


 ?>
