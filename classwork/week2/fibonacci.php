<!doctype html>
<html lang="en">
  <head>
    <title>Fibonacci</title>
  </head>
  <body>
    <?php
      // The first few numbers of the Fibonacci sequence are 1, 1, 2, 3, 5, 8, 13, 21, 34 and 55
      // Create a function that takes a number $n
      // if the number $n is equal to 1 or 2 then return 1
      // else return the function itself to proceed to the next fibonacci number
    

    $start = gettimeofday();
    function fib($n)
    {

      if ($n ==0) {
        return 0;
      } elseif ($n < 2) {
        return 1;
      } else {
        return fib($n -1 ) + fib($n -2);
      }
    }

print fib(50);
echo "<br>";
$end = gettimeofday():
print $end['sec'] - $start['sec'] . 'seconds';



    ?>
  </body>
</html>
