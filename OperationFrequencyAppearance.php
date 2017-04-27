<?php

class OperationFrequencyAppearance {

    private static $count;

    public static function output($numbers)
    {
        self::$count = 0;
        $result = self::calculate($numbers);
        echo self::$count . "\n";
        echo implode(" ", $result) . "\n";
    }

    private static function calculate($numbers)
    {
        $array = array_count_values($numbers);
        if (self::isEnd($array)) return $numbers;

        self::$count++;
        return self::calculate(array_map(function($value) use (&$array) {
            return $array[$value];
        }, $numbers));
    }

    private static function isEnd($array)
    {
        return empty(array_filter($array, function($key, $value) {
            return $key != $value;
        }, ARRAY_FILTER_USE_BOTH));
    }
}