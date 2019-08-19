<!DOCTYPE html>
<html lang='en'>

<!-- Maricel Rodriguez -->

<head>
  <meta charset='utf-8'>
  <title>Witches Brew</title>
  <link href=<? echo $data["root"]."/assets/css/bootstrap.min.css" ?> rel='stylesheet'>
  <link href=<? echo $data["root"]."/assets/css/styles.css" ?> rel='stylesheet'>

</head>

<body>
<header class="row">
  <div id='title' class="col-sm">
    <h1>Witches' Brew</h1>
    <h2>Magic in a Bottle</h2>
  </div>

  <div class='nav-wrap col-sm'>
    <nav class="flex-row">
    <?php

    foreach($data["navigation"] as $key=>$link){
      if($key == "login" && @$_SESSION["isloggedin"] && @$_SESSION["isloggedin"]==1){
        echo "<a href='/crud'";
        if($data["pagename"] == "crud"){
          echo 'class="active"';
        };
        echo ">crud</a>";
        echo "<a href='/logout'";
        echo ">logout</a>";
      } else {
        echo "<a href='".$link."'";
        if($data["pagename"] == $key){
          echo 'class="active"';
        };
        echo ">".$key."</a>";
      }
    }
    ?>
    </nav>
  </div>
</header>

<?php
  echo "<h3>".$data["pagename"]."</h3>";
?>
