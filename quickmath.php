<?php
$points = 0;
$total = 0;

for ($i = 0; $i < 100; $i++) {
    $random1 = rand(1, 1000);
    $random2 = rand(1, 1000);
    $operator = rand(1, 3);

    switch ($operator) {
        case 1:
            $answer = $random1 + $random2;
            $operatorSymbol = "+";
            break;
        case 2:
            $answer = $random1 - $random2;
            $operatorSymbol = "-";
            break;
        case 3:
            $random2 = rand(1, 10);
            $random1 = $random2 * rand(1, 100);
            $answer = $random1 / $random2;
            $operatorSymbol = "/";
            break;
    }

    $question = readline($random1 . " " . $operatorSymbol . " " . $random2 . " = : ");
    $total++;

    if ($question == $answer) {
        echo "Correct!" . PHP_EOL;
        $points++;
    } else {
        echo "Incorrect!" . PHP_EOL;
    }
}

echo "You scored " . $points . " out of " . $total . " points.";
?>
