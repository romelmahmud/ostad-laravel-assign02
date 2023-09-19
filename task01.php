<?php

// For Loop
function printEvenNumber1 () {
  for($i = 1; $i<=20; $i++){
  if($i%2 == 0){
    echo $i;
  }
  }
}

// printEvenNumber1();

// While Loop

function printEvenNumber2 () {

 $i= 1;
  while($i<=20){
  if($i%2 == 0){
    echo $i;
  }
  $i++;
  }
}

// printEvenNumber2();


// Do While Loop

function printEvenNumber3 () {

  $i= 1;
 do {
   if($i%2 == 0){
    echo $i;  
  } 
  $i++;
}
while($i<=20);
}
 
 printEvenNumber3();