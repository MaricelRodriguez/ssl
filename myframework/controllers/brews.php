<?php

class brews extends AppController{

  public function __construct($parent){
    $this->parent = $parent;

    if(!@$_SESSION["isloggedin"] || @$_SESSION["isloggedin"] != "1"){
      header("location:/login/loginSubmit?msg=You must login to view the brews page");
    }
  }

  public function index(){
    $data = array();
    $data["root"] = ".";
    $data["pagename"] = "brews";
    $data["navigation"] = $this->parent->getNav();

    $data["brews"] = array("Health Potion"=>"This health potion is a mash up of so many herbs, we lost count! It doesn't taste so great, but it will gaurentee good health for up to 48 hours!", "Stamina Flask"=>"Freshly squeezed apple nectar is the key to providing a boost of stamina. No, it is not just apple juice! There's some other stuff in there too!", "Love Potion"=>"Our patented love potion smells of lemongrass, surprisingly. The drinker will be infatuated with the first person they see! Results may vary.");

    $this->parent->getView("header", $data);
    $this->parent->getView("brews", $data);
    $this->parent->getView("footer", $data);
  }
}

 ?>
