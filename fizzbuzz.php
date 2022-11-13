<?php

for($number = 1; $number <= 100; $number ++ ){
  if($number % 3 == 0 && $number % 5 == 0) {
    echo "FizzBuzz!<br>";
  } elseif($number % 3 == 0) {
    echo "Fizz!<br>";
  } elseif($number % 5 == 0) {
    echo "Buzz!<br>";
  } else {
    echo $number."<br>";
  }
}

?>
