<!doctype html>
<html lang="en">
  <head>
    <title>Math</title>
  </head>
  <body>
    <?php
    // get the length of your full name (first and last)
    // multiply that by M_PI and round it to the third decimal place
    // print out the result
    // then print out the ceiling value of the result

    // Next use your knowledge of strlen(), substr(), and rand() to print a random character from your name
    
    echo 5 * M_PI;
    $name = "Peter S";
    $result = round($name * M_PI, 3) . '</br>';
    echo $results;
    echo "</br>";
    echo ceil($results);

    $len = strlen($name);
    $num = rand(0, $len);
    echo substr($name, $num, $len);

    ?>
  </body>
</html>
