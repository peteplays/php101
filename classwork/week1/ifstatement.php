<!doctype html>
<html lang="en">
  <head>
    <title>if statment!</title>
  </head>
  <body>
    <p>Complete the if statement</p>
    <p>
      <?php
        $age = 17;    // Set this to a number greater than 18

        if ($age > 17) {
          echo "You're old enough to vote!";
        } else if ($age == 17) {
          echo "You are almost there...";
        } else {
          echo "You can't vote!";
        }
        
      ?>
    </p>
  </body>
</html>
