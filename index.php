<?php

require('OperationFrequencyAppearance.php');

$rowNumber = 1;
while(true)
{
    $stdin = trim(fgets(STDIN));
    if ($stdin == 0) return;
    if ($rowNumber % 2 == 0) OperationFrequencyAppearance::output(explode(" ", $stdin));
    $rowNumber++;
}