<!doctype html>
<html lang="en">
  <head>
    <title>Your Function</title>
  </head>
  <body>
    <?php
    // Write a function that takes an argument $name that is defaulted to null
    // within the block check if the argument value is null and return No Name Set
    // else return $name as a formatted string "This is your first function $name!"

    // write a function that takes an argument and returns the square of that arguemtn

   function myName($name = null) {
    if( myName == null) {
      return "No Name Set";
    } else {
      return  "This is my first Function "  ;
    }
  }



  echo myName("Peter");


  function square($x) {
    return sqrt($x);

  }

  echo square(36);
   
  


    ?>
  </body>
</html>


 <!-- function name() {
      return "Peter ";
    }

    $length = strlen ("John");
    echo name();
    print $length; -->