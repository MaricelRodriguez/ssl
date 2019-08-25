<?php

class crud extends AppController{

  public function __construct($parent){
    $this->parent = $parent;

    if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != "1"){
      header("location:/login/loginSubmit?msg=You must login to view the crud page");
    }
  }

  public function addAction(){


    $sql = "insert into fruit_table (name) values (:name)";
    $data["fruit"] = $this->parent->getModel("fruit")->insert($sql, array(":name"=>$_POST["name"]));

    header("location:/crud");
  }

  public function addForm(){
    $data = array();
    $data["root"] = "..";
    $data["pagename"] = "crud";
    $data["navigation"] = $this->parent->getNav();

    $this->parent->getView("header", $data);
    $this->parent->getView("addForm", $data);
    $this->parent->getView("footer", $data);
  }


  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "crud";
    $data["navigation"] = $this->parent->getNav();

    $file = "./assets/login.txt";
    $h = fopen($file, "r");

    while(!feof($h)){
      $user = fgets($h);
      $userparts = explode("|", $user);

      if(strtolower(trim($userparts[0]," ")) == $_SESSION["useremail"]){
        if(array_key_exists(2, $userparts)){
          $data["msg"] = $userparts[2];
        } else {
          $data["msg"] = "Data not found.";
        }
        break;
      }
    }

    fclose($h);

    $sql = "select * from fruit_table";
    $data["fruit"] = $this->parent->getModel("fruit")->select($sql);

    $this->parent->getView("header", $data);
    $this->parent->getView("crud", $data);
    $this->parent->getView("footer", $data);
  }
}


 ?>
