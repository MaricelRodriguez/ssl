<section class='center'
<?php
  echo 'id="'.$data["pagename"].'"';
?>
>

<?
  // foreach ($data["api"] as $item) {
  //   echo $item["volumeInfo"]["title"]."<br/>";
  // }
?>

<form method="get" action="/api/showApi">
  <input name="search" type="text" class="form-control" id="searchInput" placeholder="search videos">
  <button type="submit">Search</button>
</form>

<?
  foreach ($data["youtube"]["items"] as $item) {
    echo "<div class='video'>";
    echo "<b>".$item["snippet"]["title"]."</b><br/>";
    echo "<img src='".$item["snippet"]["thumbnails"]["default"]["url"]."' alt='thumbnail'/>";
    echo "</div>";
  }
?>

</section>
