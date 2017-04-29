<?php

require('OperationFrequencyAppearance.php');

$operationFrequencyAppearance = new OperationFrequencyAppearance;
$rowNumber = 1;
while(true)
{
    $stdin = trim(fgets(STDIN));
    if ($stdin == 0) return;
    if ($rowNumber % 2 == 0) $operationFrequencyAppearance->output(explode(" ", $stdin));
    $rowNumber++;
}