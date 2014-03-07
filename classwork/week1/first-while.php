<!doctype html>
<html lang="en">
  <head>
    <title>While</title>
  </head>
  <body>
    <?php
    // write a while loop

    $pizza = 0;

    while ($pizza < 3) {
    	$pizza ++;

    	if ($pizza < 3) {
    		echo "<p> Eat more Pizza!! </p>";
    	} else {
    		echo "<p> You have had too much pizza! </p>";
    	}

    }

    ?>
  </body>
</html>
