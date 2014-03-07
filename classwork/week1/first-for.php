<!doctype html>
<html lang="en">
  <head>
    <title>For Syntax</title>
  </head>
  <body>
    <?php
    // write a for loop that echos the numbers 10 to and including 100 counting by 10s
    // next write a for loop that counts down from 50 to 5 counting by 5s
    // build an array with three items, then loop over the array and echo each item
   for ($i = 10; $i <= 100; $i = $i + 10) {
              echo "<p>$i</p>";
      }

    for ($i = 50; $i > 0; $i = $i - 5) {
            echo "<p>$i</p>";            
    }

    for ($i = 0; $i <= 2; $i++) {
           $colors = ["red", "blue", "green"];
           echo $colors[$i];
           echo " ";
    }

    for ($i = 0; $i <= count($colors); $i++) {  //count counts the number of elements in an array
           $colors = ["orange", "purple", "brown"];
           echo $colors[$i];
           echo " ";
    }

    



    ?>
  </body>
</html>
