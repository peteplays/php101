<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php 	
    		$guess = 10; 
    		$number = 10;

    		if ($guess < $number) {
    			echo "Your guess is too high";
    		} else if ($guess == $number) {
    			echo "You got it right!";
    		} else {
    			echo "Your guess is too low!";
    		}
    ?>
  </body>
</html>
