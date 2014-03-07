<!doctype html>
<html lang="en">
  <head>
    <title>Foreach</title>
  </head>
  <body>
   <ul>
    <?php
    // create an array of vegatables and fruits
    // then create an unordered list tag
    // within that tag iterate over the array with a foreach loop and echo out the items in the array in a list item tag
    $eat = ["apple", "orange", "carrot", "broccoli"];

  
    foreach ($eat as $healthy) {
      echo "<li> $healthy </li>";
    }

    ?>
  </ul>
  </body>
</html>
