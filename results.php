<?php
  // get user input 
  $userNumber = $_POST["userNumber"];

  // sets the counter to 1
  $counter = 1;

  // sets the product of the factorial of the user number to the user number
  $factorial = $userNumber;

  // if the user number is less than one,  set the factorial variable to 1. 
  if ($userNumber < 1) {
    $factorial = 1;
  } else {
    // multiply the user number by the counter, and then add one to the counter, and repeat this until the counter is equal to the user number. This multiplies the factorial which is equal to the user number, by every number up to the users number.
    do {
      $factorial = $factorial * $counter;
      $counter++;
    } while ($counter < $userNumber);
  }
  // display the factorial of the number
  echo "The factorial of the number " . $userNumber . " is " . $factorial;

?>

