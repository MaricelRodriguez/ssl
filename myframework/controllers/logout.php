<?php

class logout extends AppController{
  public function __construct(){
    $_SESSION["isloggedin"] = "0";
    session_destroy();
    header("location:/login");
  }
}


 ?>
