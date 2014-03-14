<!doctype html>
<html lang="en">
  <head>
    <title>Functions Final</title>
  </head>
  <body>
    <?php
    $fruits = array(
      "apple",
      "banana",
      "orange",
      "kiwi",
      "pear",
      "strawberry",
      "starfruit",
      "mango",
      "watermelon"
    );

  sort($fruits);
?>


      <ul>
      <?php
      $i = 0;
        foreach ($fruits as $fruit) {
            if (strlen($fruit) > 5) {
              //$fruit = substr($fruit, 0, 1);
              $fruit = ucfirst($fruit);
            }

      ?>
      <li class="<?php echo $i % 2 == 0 ? 'even' : 'odd' ?>"><?php echo $fruit; ?></li>

      <?php $i++; } ?>

      </ul>
  
  </body>
</html>



 <!--  // sort the array
    // iterate over the array of fruits
    // check if each fruit is greater than 5 characters long
    // if it is capitalize the first letter of the fruit
    // print the fruit inside an list item tag inside an unordered list tag
    // if the current index of the array is odd, give the list item a class of odd
    // if the current index of the array is even, give the list item a class of even

    // next get a random item from the array and print it out  -->