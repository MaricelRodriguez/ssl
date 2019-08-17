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


<div class="modal fade" id="errormodal" tabindex="-1" role="dialog" aria-labelledby="errormodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-header">
      <h5 class="modal-title">SUBMISSION ERROR</h5>
    </div>
    <div class="modal-content">
      <div class="modal-body">
        <p>
          <?php
             echo @$_GET["msg"];
           ?>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php
  if(@$_GET["msg"] || @$_GET["msg"] != ""){
?>
<script type="text/javascript">setTimeout(function(){$("#errormodal").modal();}, 500);</script>
<?php } ?>
<header class="row">
  <div id='title' class="col-sm">
    <h1>Witches' Brew</h1>
    <h2>Magic in a Bottle</h2>
  </div>

  <div class='nav-wrap col-sm'>
    <nav class="flex-row">
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
