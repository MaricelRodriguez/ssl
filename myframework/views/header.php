<!DOCTYPE html>
<html lang='en'>

<!-- Maricel Rodriguez -->

<head>
  <meta charset='utf-8'>
  <title>Witches Brew</title>
  <link href='./assets/css/bootstrap.min.css' rel='stylesheet'>
  <link href='./assets/css/styles.css' rel='stylesheet'>
</head>

<body>
<header>
  <div id='title'>
    <h1>Witches' Brew</h1>
    <h2>Magic in a Bottle</h2>
  </div>

  <div class='nav-wrap'>
    <nav>
    <?php

    foreach($data["navigation"] as $key=>$link){
      echo "<a href='".$link."'";
      if($data["pagename"] == $key){
        echo 'class="active"';
      };
      echo ">".$key."</a>";
    }
    ?>
    </nav>
  </div>
</header>

<?php
  echo "<h3>".$data["pagename"]."</h3>";
?>
