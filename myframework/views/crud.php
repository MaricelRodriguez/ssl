<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

  <p><? echo $data["msg"]?></p>

  <a href="/crud/addForm">Add New Fruit</a>

  <ul>
  <?
  // var_dump($data["fruit"][0]);

    foreach ($data["fruit"] as $fruit) {
      echo "<li>".$fruit["name"];
      echo " <a href='/crud/delete/".$fruit["id"]."'>Delete</a> | <a href='/crud/updateForm/".$fruit["id"]."'>Update</a></li>";
    }
  ?>
  </ul>
</section>
