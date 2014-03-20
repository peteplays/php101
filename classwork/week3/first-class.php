<!doctype html>
<html lang="en">
  <head>
    <title>First Class</title>
  </head>
  <body>
    <?php
        // Create a class of anything you can think of (make sure its something you are familiar with)
        // Create three properties and threes methods, one to return each property
    class Guitar {
    	
    	public $strings = '12';
    	public $neck = '30';
    	public $body = 'Flying V';

    	public function __construct($strings, $neck, $body) {
    		$this->strings = $strings;
    		$this->neck = $neck;
    		$this->body = $body;

    	}
    	public function strum() {
    		return 'Plays the cord of E major on a ' . $this->strings . ' strings';
    	}

    	public function tune() {
    		$foobar = 'Tuned the guitar. ' . $this->strum();
    		return $foobar;

    	}

    	public function smash($victim) {
    		$smash = 'Took the guitar by the neck and threw it into the ' . $victim;
    		return $smash;
    	}
    }

    $ibanez = new Guitar('6','ZZ', 'Dreadnaught');
    $epiphone = new Guitar('12', '12', 'Flying V');
    echo $ibanez->strum();
   
    
    ?>
<br>
    <?php

    echo $epiphone->tune();

    ?>
<br>
    <?php

    echo $ibanez->tune();

    ?>
<br>
    <?php

    echo $epiphone->tune();

    ?>
<br>
    <?php

    echo $ibanez->smash('crowd');

    ?>
  </body>
</html>
