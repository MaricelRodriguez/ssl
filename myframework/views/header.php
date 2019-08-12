<html>

<?php

//var_dump($data["navigation"]);

foreach($data["navigation"] as $key=>$link){
  echo "<a href='".$link."'>".strtoupper($key)."</a> |";
}

?>

<h1>Header</h1>
