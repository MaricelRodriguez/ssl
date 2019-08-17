<?php

class register extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
  }

  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "register";
    $data["navigation"] = array("welcome"=>"/welcome","brews"=>"/brews", "register"=>"/register", "login"=>"/login","about"=>"/about");

    $this->parent->getView("header", $data);
    $this->parent->getView("register", $data);
    $this->parent->getView("footer", $data);
  }

  public function registerConfirmed(){
    $data = array();
    $data["root"] = "..";
    $data["pagename"] = "register";
    $data["navigation"] = array("welcome"=>"/welcome","brews"=>"/brews", "register"=>"/register","about"=>"/about");

    $this->parent->getView("header", $data);
    $this->parent->getView("registerConfirmed", $data);
    $this->parent->getView("footer", $data);
  }

  public function registerAction(){
    $err = array();

    //Nam
    if(empty($_POST["name"]) || $_POST["name"] == ""){
      array_push($err, "Name has not been entered");
    } else {
      if(!preg_match("/^[a-zA-Z]*$/", $_POST["name"])){
        array_push($err, "Invalid characters used");
      }
    }

    if(count($err) > 0){
      header("location:/register?msg=".implode("&", $err));
    } else {
      header("location:/register/registerConfirmed");
    }
  }

}
 ?>
