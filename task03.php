<?php
  
$first = 0;
$second = 1;

for ($i = 0; $i < 10; $i++) {
    if ($i <= 1) {
        $fibonacci = $i;
    } else {
        $fibonacci = $first + $second;
        $first = $second;
        $second = $fibonacci;
    }

    echo $fibonacci . "</br>";

    if ($fibonacci > 100) {
        break; // Exit the loop if Fibonacci number exceeds 100
    }
}

