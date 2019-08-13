<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

<?php
  foreach($data["brews"] as $key=>$description){
    echo '<div class="brew">';
    echo '<img src="./assets/'.str_replace(' ', '', $key).'.svg" alt="'.$key.'"/>';
    echo '<p>'.$description.'</p>';
    echo '</div>';
  }
?>

</section>
