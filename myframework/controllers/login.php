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
    $email = strtolower(trim($_POST["email"]," "));
    $password = strtolower(trim($_POST["password"]," "));

    //Validation
    $url = "/login?";
    $err = false;

    $emailRegex = "/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/";

    if($email == ''){
      $errEmail = "erremail=Email cannot be blank&";
      $err = true;
      $url = $url.$errEmail;
    } else if(!preg_match($emailRegex, $email)){
      $errEmail = "erremail=Invalid characters used&";
      $err = true;
      $url = $url.$errEmail;
    }

    if($password == ''){
      $errPass = "errpass=Password cannot be blank&";
      $err = true;
      $url = $url.$errPass;
    }

    $loginmatch = false;
    $failmsg = "";

    $sql = "select password from user_table where email='".$email."'";
    $match = $this->parent->getModel("users")->select($sql);

    if(count($match) > 0){
      if($match[0]["password"] == $password){
        $loginmatch = true;
      } else {
        $failmsg = "Login Failed due to incorrect password";
      }
    } else {
      $failmsg = "Login Failed due to unknown email";
    }

    // $file = "./assets/login.txt";
    // $h = fopen($file, "r");
    //
    // while(!feof($h)){
    //   $user = fgets($h);
    //   $userparts = explode("|", $user);
    //
    //   if(strtolower(trim($userparts[0]," ")) == $email){
    //     if(strtolower(trim($userparts[1]," ")) == $password){
    //       $loginmatch = true;
    //     }
    //     break;
    //   }
    // }
    //
    // fclose($h);

    if($err){
      header("location:".$url);
    } else if($loginmatch){
      $_SESSION["isloggedin"] = "1";
      $_SESSION["useremail"] = $email;
      header("location:/crud");
    } else {
      $_SESSION["isloggedin"] = "0";
      $_SESSION["useremail"] = "";
      var_dump($match);
      var_dump($email);
      header("location:/login/loginSubmit?msg=".$failmsg);
    }
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
