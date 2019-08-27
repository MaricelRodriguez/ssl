<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

  <form action=<? echo '"/crud/updateAction/'.$data["fruit"][0]["id"].'"'?> method="post">
    <input type="text" name="name" value=<? echo '"'.$data["fruit"][0]["name"].'"'; ?>>
    <button type="submit">Update</button>
  </form>
</section>
