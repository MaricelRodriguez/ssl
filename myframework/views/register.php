<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

<form method="post" action="/register/registerAction">
  <div class="form-group">
      <label for="name">Name</label>
      <p class="error"><? echo @$_GET["errname"]?></p>
      <input name="name" type="text" class="form-control" id="name" placeholder="Name">
  </div>

  <div class="form-group">
      <label for="gender">Gender</label><br/>
      <p class="error"><? echo @$_GET["errgender"]?></p>
      <input type="radio" name="gender" value="male" id="male"> Male
      <input type="radio" name="gender" value="female" id="female"> Female
      <input type="radio" name="gender" value="other" id="other"> Other
  </div>

  <div class="form-group">
    <label for="zodiac">Zodiac Sign</label>
    <p class="error"><? echo @$_GET["errzodiac"]?></p>
    <select class="form-control" name="zodiac" id="zodiac">
      <option value="select">SELECT</option>
      <option value="aquarius">Aquarius</option>
      <option value="pisces">Pisces</option>
      <option value="aries">Aries</option>
      <option value="taurus">Taurus</option>
      <option value="gemini">Gemini</option>
      <option value="cancer">Cancer</option>
      <option value="leo">Leo</option>
      <option value="virgo">Virgo</option>
      <option value="aquarius">Libra</option>
      <option value="pisces">Scorpio</option>
      <option value="aries">Sagittarius</option>
      <option value="taurus">Capricorn</option>
  </select>
  </div>

  <div class="form-group">
      <label for="interest">Message</label><br/>
      <p class="description">Optional</p>
      <textarea name="message" id="message"></textarea>
  </div>

  <div class="form-group">
      <label for="interest">Email Opt-in</label><br/>
      <p class="description">Optional</p>
      <input type="checkbox" name="emailoptin" value="true" id="emailoptin"> I would like to recieve emails<br>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</section>
