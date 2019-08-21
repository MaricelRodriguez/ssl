<?php

class profile extends AppController{

  public function __construct($parent){
    $this->parent = $parent;

    if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != "1"){
      header("location:/login/loginSubmit?msg=You must login to view the profile page");
    }
  }

  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "profile";
    $data["navigation"] = $this->parent->getNav();

    $this->parent->getView("header", $data);
    $this->parent->getView("profile", $data);
    $this->parent->getView("footer", $data);
  }

  public function updatePicture(){
    if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg"){
      if(move_uploaded_file($_FILES["file"]["tmp_name"], "./assets/profileimg.jpg")){
        header("location:/profile");
      } else {
        echo "problem uploading";
      }
    } else {
      header("location:/profile?errfile=This file type is not allowed");
    }
  }
}

 ?>
