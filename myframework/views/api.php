<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

<?
  foreach ($data["api"] as $item) {
    echo $item["volumeInfo"]["title"]."<br/>";
  }

?>

</section>
