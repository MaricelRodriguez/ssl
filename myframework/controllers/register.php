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
    $data["navigation"] = array("welcome"=>"/welcome","brews"=>"/brews", "register"=>"/register", "login"=>"/login","about"=>"/about");

    $this->parent->getView("header", $data);
    $this->parent->getView("registerConfirmed", $data);
    $this->parent->getView("footer", $data);
  }

  public function registerAction(){
    $err = array();

    //Check Name
    if(empty($_POST["name"]) || $_POST["name"] == ""){
      $err["errname"]="Name cannot be blank";
    } else if(!preg_match("/^[a-zA-Z]*$/", $_POST["name"])){
      $err["errname"]="Name contains invalid characters";
    }

    //Check Gender
    if(empty($_POST["gender"]) || $_POST["gender"] == ""){
      $err["errgender"]="Please make a selection";
    }

    //Check Zodiac Sign
    if($_POST["zodiac"] == "select"){
      $err["errzodiac"]="Please make a selection";
    }

    if(count($err) > 0){
      $url = "location:/register?";
      foreach ($err as $key => $value) {
        $url = $url.$key."=".$value."&";
      }
      header($url);
    } else {
      header("location:/register/registerConfirmed");
    }
  }

}
 ?>
