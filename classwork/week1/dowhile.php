<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now</title>
  </head>
  <body>
    <?php
      // write your own do-while loop

    $pizza = 0;

     do {
    	$pizza ++;

    	if ($pizza < 3) {
    		echo "<p> Eat more Pizza!! </p>";
    	} else {
    		echo "<p> You have eaten too much pizza! </p>";
    	
    	} 	
    } while ($pizza < 3) 
    ?>
  </body>
</html>
