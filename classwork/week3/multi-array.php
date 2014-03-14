<!doctype html>
<html lang="en">
  <head>
    <title>Multi Array</title>
  </head>
  <body>
    <?php
      $pokerPlayers = array(
          array(
            "name" => "Frank",
            "hand" => array(
              "suit" => "hearts",
              "face" => "2 of Hearts",
              "value" => 2
            ),
            "bet" => null,
            "balance" => 300
          ),
          array(
            "name" => "Dick",
            "hand" => array(
              "suit" => "clubs",
              "face" => "Jack of Clubs",
              "value" => 10
            ),
            "bet" => null,
            "balance" => 500
          ),
          array(
            "name" => "Harry",
            "hand" => array(
              "suit" => "spades",
              "face" => "Ace of Spades",
              "value" => 13
            ),
            "bet" => null,
            "balance" => 350
          ),
          array(
            "name" => "Tom",
            "hand" => array(
              "suit" => "diamonds",
              "face" => "8 of Diamonds",
              "value" => 8
            ),
            "bet" => null,
            "balance" => 275
          )
        );
        // iterate over the array inside on an unordered list tag
        // based on the value of the hand of each player, using your judgement place a bet for each player (fold, bet or all in)
        // substract that amount from the balance of each player and set that value in the array
        // assign the value of the bet to the bet key
        // print out the name, and bet of each player
        // print out the winner of the hand

      foreach($pokerPlayers as $key => $player) {
         
          foreach($player as $prop => $value) {

          $playerCard = array();

          if(is_array($value)) {
            foreach ($value as $hand => $card) {
            $playerCard[$hand] = $card;
            }
          } 
          if($player['name'] == 'Tom') {
          $player['bet'] = 75;
          $player['balacne'] = $player['balacne'] - $player['bet'];
          }

          if($player['name'] == 'Frank') {
            $player['bet'] = 300;
            $player['balacne'] = $player['balacne'] - $player['bet'];
          }

          if($player['name'] == 'Dick') {
            $player['bet'] = 10;
            $player['balacne'] = $player['balacne'] - $player['bet'];
          }

          if($player['name'] == 'Harry') {
            $player['bet'] = 13;
            $player['balacne'] = $player['balacne'] - $player['bet'];
          }
       
       //echo $player['name'] . ' : ' . $player['bet'];
      // echo "</br>";
       echo "<p>" . $playerCard['face'] . ' ' . $playerCard['card'] . "</p>";

      }
    }
  
    ?>
  </body>
</html>
