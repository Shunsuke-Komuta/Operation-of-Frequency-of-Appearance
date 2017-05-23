<?php

require('OperationFrequencyAppearance.php');

$operationFrequencyAppearance = new OperationFrequencyAppearance;
while (true) {
    $num = trim(fgets(STDIN));
    if ($num == 0) {
        return;
    }
    $line = trim(fgets(STDIN));
    $operationFrequencyAppearance->output(explode(" ", $line));
}
