<!doctype html>
<html lang="en">
  <head>
    <title>Associative Array</title>
  </head>
  <body>
    <?php
      $cars = array(
          array(
            "make" => "Aston Martin",
            "model" => "V12 Vanquish",
            "year" => 2014,
            "doors" => 2,
            "transmission" => "Manual",
            "suspension" => "Sport",
            "color" => "Red",
            "price" => 279995
          ),
          array(
            "make" => "Lotus",
            "model" => "Elise",
            "year" => 2014,
            "doors" => 2,
            "transmission" => "Manual",
            "suspension" => "Sport",
            "color" => "Orange",
            "price" => 57113
          ),
          array(
            "make" => "Audi",
            "model" => "R8",
            "year" => 2014,
            "doors" => 2,
            "transmission" => "Manual",
            "suspension" => "Sport",
            "color" => "Black",
            "price" => 114900
          )
        );
        // iterate over the array inside on an unordered list tag
        // print out the data in a list item tag like so key: value
        // beneath the key/value information do the following
        // if the price is under 100000 echo that it is affordable
        // if the price is over 100000 and under 200000 echo that it is pricey
        // if the price is over 200000 echo that it is out of my league
    
    foreach($cars as $key => $value) {
      foreach($value as $prop => $foobar) {
        echo $prop . ' : ' . $foobar;
        echo '</br>';

      }
        if($value['price'] > 200000) {
          echo "<b>Out of my league </b>";
          echo '</br>';
        } elseif ($value['price']  > 100000) {
          echo "<b>Pricey </b>";
          echo '</br>';
        } else {
          echo "<b>I can do that! </b>";
          echo '</br>';
        }
        echo '</br>';
      }
      
    
    ?>
  </body>
</html>
