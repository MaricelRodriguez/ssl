<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

  <form action="/crud/addAction" method="post">
    <input type="text" name="name" placeholder="fruit name">
    <button type="submit">Add</button>
  </form>
</section>
