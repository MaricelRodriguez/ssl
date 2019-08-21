<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

<form method="post" action="/profile/updatePicture" enctype="multipart/form-data">
  <h4>Upload Profile Picture</h4>
  <img src="/assets/profileimg.jpg" alt="profile pic">
  <div class="form-group">
      <label for="inputFileForm">Profile Picture</label>
      <p class="error"><? echo @$_GET["errfile"]?></p>
      <input name="file" type="file" class="form-control" id="inputFileForm">
  </div>

  <button type="submit">Submit</button>

</form>


</section>
