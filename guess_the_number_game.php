<?php
echo 'Please guess the number' . PHP_EOL;

function guess_number(){
  $rand_num = rand(5, 15);
  for($i = 0; $i < 5; $i ++) {
    echo "challenge" . "[" . ($i + 1) . "] :";
    $number = (int)trim(fgets(STDIN));
    
    if($number == $rand_num) {
      return $number . " is correct!";
    } else {
      echo "Your number is incorrect answer.";
    }
  }
  return "Sorry, you didn't guess the number. It was $rand_num";
}

echo guess_number();