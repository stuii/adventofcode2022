<?php

$input = Solver::getInput();
$list = explode("\n", $input);
$elves = [0];
$index = 0;
foreach ($list as $cal) {
    if ($cal === '') {
        $elves[++$index] = 0;
    } else {
        $elves[$index] += (int)$cal;
    }
}

$elvesSum = array_sum(array_slice(rsort($elves), 0, 3));

Solver::setResult($elvesSum);