<?php

class OperationFrequencyAppearance
{
    private $count;

    public function output($numbers)
    {
        $this->count = 0;
        $result = $this->calculate($numbers);
        echo $this->count . "\n";
        echo implode(" ", $result) . "\n";
    }

    private function calculate($numbers)
    {
        $array = array_count_values($numbers);
        $getFrequency = function ($value) use (&$array) {
            return $array[$value];
        };
        $nextData = array_map($getFrequency, $numbers);
        if ($numbers == $nextData) {
            return $numbers;
        }
        $this->count++;
        return $this->calculate($nextData);
    }
}
