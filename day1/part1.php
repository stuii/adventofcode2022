<?php

$input = Solver::getInput();
$list = explode("\n", $input);
$elves = [0];
$index = 0;
foreach ($list as $cal) {
    if ($cal === '') {
        $index++;
        $elves[$index] = 0;
    } else {
        $elves[$index] += (int)$cal;
    }
}

rsort($elves);


Solver::setResult($elves[0]);