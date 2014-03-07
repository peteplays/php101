<!doctype html>
<html lang="en">
  <head>
    <title>First Function</title>
  </head>
  <body>
    <?php
    // Write a function that RETURNS your name  <-- throwing you a curve ball here
    // Then echo the result of that function

    function name() {
      return "Peter ";
    }

    $length = strlen ("John");
    echo name();
    print $length;

    ?>
    
</br></br>

    <?php


    function names() {
      return "Peter" . " ";
    }

    $partial = substr(names(), 0, 4);
    
    echo strtoupper(names());
    echo strtolower(names());
    echo names();
    echo $partial;
   

    ?>
  </body>
</html>
