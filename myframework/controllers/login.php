<?php

class login extends AppController{

  public function __construct($parent){
    $this->parent = $parent;
  }

  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "login";
    $data["navigation"] = $this->parent->getNav();

    $this->parent->getView("header", $data);
    $this->parent->getView("login", $data);
    $this->parent->getView("footer", $data);
  }

  public function loginSubmit(){
    $data = array();
    $data["root"] = "..";
    $data["pagename"] = "login";
    $data["navigation"] = array("welcome"=>"/welcome","brews"=>"/brews", "register"=>"/register", "login"=>"/login","about"=>"/about");

    $this->parent->getView("header", $data);
    $this->parent->getView("loginSubmit", $data);
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
    //Validation
    $url = "/login?";
    $err = false;

    $emailRegex = "/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/";

    if(trim($_POST["email"]," ") == ''){
      $errEmail = "erremail=Email cannot be blank&";
      $err = true;
      $url = $url.$errEmail;
    } else if(!preg_match($emailRegex, $_POST["email"])){
      $errEmail = "erremail=Invalid characters used&";
      $err = true;
      $url = $url.$errEmail;
    }

    if(trim($_POST["password"] == '')){
      $errPass = "errpass=Password cannot be blank&";
      $err = true;
      $url = $url.$errPass;
    }

    if($err){
      header("location:".$url);
    } else if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){
      $_SESSION["isloggedin"] = "1";
      $_SESSION["useremail"] = $_POST["email"];
      //header("location:/login/loginSubmit?msg=Login successful");
      header("location:/crud");
    } else {
      $_SESSION["isloggedin"] = "0";
      $_SESSION["useremail"] = "";
      header("location:/login/loginSubmit?msg=Login Failed");
    }
    //var_dump($_SESSION);
  }

  public function recieveAjax(){
    if($_POST["email"] == "mike@aol.com" && $_POST["password"] == "1234"){
      echo "success";
    } else {
      echo "failure";
    }
  }
}


 ?>
