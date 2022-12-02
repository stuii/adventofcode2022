<?php

$input = Solver::getInput();

$map = ['A' => 1, 'B' => 2, 'C' => 3, 'X' => 1, 'Y' => 2, 'Z' => 3];
$score = 0;

foreach (explode("\r\n", $input) as $line) {
    $throws = explode(' ', $line);
    $score += ((($map[$throws[0]] + 1) % 3) === ($map[$throws[1]] % 3) ? 6 : ($map[$throws[0]] === $map[$throws[1]] ? 3 : 0)) + $map[$throws[1]];
}

Solver::setResult($score);