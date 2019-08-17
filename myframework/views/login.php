<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>
<!--
<h4>Form Request</h4>
<form method="post" action="/login/recieve">
  <input type="hidden" name="type" value="form">
  <div class="form-group">
      <label for="inputEmailForm">Name</label>
      <input name="email" type="text" class="form-control" id="inputEmailForm" placeholder="Email Address">
    </div>
    <div class="form-group">
      <label for="inputPasswordForm">Password</label>
      <input name="password" type="password" class="form-control" id="inputPasswordForm" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<br/>

<h4>Ajax Request</h4>
-->
<form>
  <div class="form-group">
    <label for="inputEmailAjax">Email</label>
    <p class="error"><? echo @$_GET["erremail"]?></p>
    <input type="text" class="form-control" id="inputEmailAjax" placeholder="Email Address">
  </div>
  <div class="form-group">
    <p class="error"><? echo @$_GET["errpass"]?></p>
    <label for="inputPasswordAjax">Password</label>
    <input type="password" class="form-control" id="inputPasswordAjax" placeholder="Password">
  </div>
  <button type="button" onclick="AjaxSubmit()" class="btn btn-primary">Submit</button>
</form>

</section>
