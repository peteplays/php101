<!doctype html>
<html lang="en">
  <head>
    <title>Array</title>
  </head>
  <body>
    <?php
    // assign your name to a variable
    // explode your name to an array
    // reverse the array and the join it

    // create a for loop of that iterates 100 times
    // push the number from the for loop into an array if it is divisible by 2
    // once the loop is complete remove the first and last elements of the array
    // print out the number of elements in the array
    
    $name = 'Peter';

    $exp = explode(' ', $name);
    rsort($exp);

    $exp = implode(' ', $exp);
    echo $exp;
    


     
    ?>
  </body>
</html>
 <!-- for ($i <= 5; $i > 0; $i = $i - 5) {
            echo "<p>$i</p>";            
    }



     

     for ($i = 1; $i <= 100; $i++) {
              if ($i % 2 == 0) {
                foreach ($i as $num) {
                  echo "<p>$num</p>";
                }
              }
      }


      $partial = substr ($myName, 0, 3);  // this will only show 0 to 3 in an array
      print $partial; -->
