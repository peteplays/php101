<!doctype html>
<html lang="en">
  <head>
    <title>Buddies!</title>
  </head>
  <body>
  <p>Create an array called $buddies and put the names of three of your best pals in it.</p>
  <?php
  $theBand = ["Mary", " Peter ", " Paul"];
  echo $theBand[1];
  

  unset ($theBand[1]);
  echo $theBand[1];

  $theBand[1] = "John";
  echo $theBand[1];

  ?>
  </body>
</html>
