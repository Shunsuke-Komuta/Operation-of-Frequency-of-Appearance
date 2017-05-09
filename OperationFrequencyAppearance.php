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
        if ($this->isEnd($array)) {
            return $numbers;
        }

        $this->count++;
        $getFrequency = function ($value) use (&$array) {
            return $array[$value];
        };
        return $this->calculate(array_map($getFrequency, $numbers));
    }

    private function isEnd($array)
    {
        return empty(array_filter($array, function ($key, $value) {
            return $key != $value;
        }, ARRAY_FILTER_USE_BOTH));
    }
}
