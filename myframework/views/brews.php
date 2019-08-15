<section class='center container'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

<?php
  foreach($data["brews"] as $key=>$description){
    echo '<div class="brew row">';
    echo '<img class="col-md" src="./assets/images/'.str_replace(' ', '', $key).'.svg" alt="'.$key.'"/>';
    echo '<div class="col-md-6">';
    echo '<h4>'.$key.'</h3>';
    echo '<p>'.$description.'</p>';
    echo '</div>';
    echo '<div class="col-md btn-wrap text-center">';
    echo '<button class="" type="button" data-toggle="modal" data-target="#purchaseBrew">Purchase</button>';
    echo '</div>';
    echo '</div>';
  }
?>


<div class="progress-wrap">
  <h4>Our Next Brew is Coming</h4>
  <p>Stay on the lookout for our upcoming brew.  It's in the cauldron!</p>
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
  </div>
</div>

<div class="modal fade" id="purchaseBrew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>Your purchase is mysteriously on its way. Our bat will collect the funds upon arrival.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</section>
