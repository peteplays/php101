<!doctype html>
<html lang="en">
  <head>
    <title>Switch It!</title>
  </head>
  <body>
  <p>Create a switch statement with 3 different cases and a default case, feel free to use alternative syntax as well!</p>
  <?php
  		$weather = "sunny";
  		switch ($weather) {
  			case "rainy":
  			echo 'Its not beach weather';
  			break;

  			case "nice":
  			echo 'Its a great day to go to the beach';
  			break;

  			case "sunny":
  			echo 'Lets go to the BEACH!!!';
  			break;

  			default;
  			echo 'You are having some CRAZY weather!!!';
  		}



  ?>
  </body>
</html>
