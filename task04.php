<?php


function fibonacci ($number){

  $first = 0;
  $second = 1;

  echo "The first $number Fibonacci numbers are:\n";

  for ($i = 0; $i < $number; $i++) {
      if ($i <= 1) {
          $fibonacci = $i;
      } else {
          $fibonacci = $first + $second;
          $first = $second;
          $second = $fibonacci;
      }

      echo $fibonacci . " ";

  }
}


fibonacci(15);
  