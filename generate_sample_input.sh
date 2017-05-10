#!/bin/bash

row_number=$1
column_number=$2

for (( i = 0; i < ${row_number:=10}; i++ )); do
    array=()
    echo ${column_number:=10}
    for (( j = 0; j < $column_number; j++ )); do
        array+=( $(($(($RANDOM % $column_number)) + 1)) )
    done
    echo ${array[@]}
done
echo 0