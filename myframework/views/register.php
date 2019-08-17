<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

<form method="post" action="/register/registerAction">
  <div class="form-group">
      <label for="inputUsername">Name</label>
      <input name="name" type="text" class="form-control" id="inputname" placeholder="Name">
    </div>
    <!--
    <div class="form-group">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    -->
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

</section>
