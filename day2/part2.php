<?php

$input = Solver::getInput();

$map = ['A' => 0, 'B' => 1, 'C' => 2];
$score = 0;

foreach (explode("\r\n", $input) as $line) {
    [$opponent, $outcome] = explode(' ', $line);
    $throw = ((($map[$opponent] + 3) + ($outcome === 'X' ? -1 : ($outcome === 'Z' ? 1 : 0))) % 3) + 1;
    $score += ((($map[$opponent] + 2) % 3) === ($throw % 3) ? 6 : (($map[$opponent] + 1) === $throw ? 3 : 0)) + $throw;
}


Solver::setResult($score);