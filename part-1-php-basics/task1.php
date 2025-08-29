<?php

function findSecondLargest(array $numbers)
{
    $numbers = array_filter($numbers, function ($n) {
        return is_int($n);
    });

    if (count($numbers) < 2) {
        return null;
    }

    $numbers = array_unique($numbers);

    rsort($numbers);

    return $numbers[1] ?? null;
}

//test
echo findSecondLargest([1, 2, 3, 4, 5,100]);