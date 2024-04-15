<?php
echo '数字を入力してください' . PHP_EOL;
$min_number = (int)trim(fgets(STDIN));
echo 'もう一つ数字を入力してください' . PHP_EOL;
$max_number = (int)trim(fgets(STDIN));

function game_start($min_number, $max_number){
  echo 'Please guess the number' . PHP_EOL;
  echo guess_number($min_number, $max_number);
}


function guess_number($min_number, $max_number){
  $rand_num = rand($min_number, $max_number);
  for($i = 0; $i < 5; $i ++) {
    echo "challenge" . "[" . ($i + 1) . "] :";
    $number = (int)trim(fgets(STDIN));
    
    if($number == $rand_num) {
      return $number . " is correct!";
    } else {
      echo "Your number is incorrect answer." . PHP_EOL;
    }
  }
  return "Sorry, you didn't guess the number. It was $rand_num";
}

game_start($min_number, $max_number);