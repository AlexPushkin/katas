<?php
declare(strict_types=1);

function find(int $needle, array $items, int $start, int $end): int
{
    while ($start <= $end) {
        $mid = (int)floor(($start + $end) / 2);

        switch (true) {
            case $needle === $items[$mid]:
                return $mid;

            case $items[$mid] < $needle:
                $start = $mid + 1;
                break;

            default:
                $end = $mid - 1;
        }
    }

    return -1;
}

function binarySearch(int $needle, array $array):int
{
    return find($needle, $array, 0, \count($array) - 1);
}

assert(-1 === binarySearch(3, []));
assert(-1 === binarySearch(3, [1]));
assert(0 === binarySearch(1, [1]));
#
assert(0 === binarySearch(1, [1, 3, 5]));
assert(1 === binarySearch(3, [1, 3, 5]));
assert(2 === binarySearch(5, [1, 3, 5]));
assert(-1 === binarySearch(0, [1, 3, 5]));
assert(-1 === binarySearch(2, [1, 3, 5]));
assert(-1 === binarySearch(4, [1, 3, 5]));
assert(-1 === binarySearch(6, [1, 3, 5]));
#
assert(0 === binarySearch(1, [1, 3, 5, 7]));
assert(1 === binarySearch(3, [1, 3, 5, 7]));
assert(2 === binarySearch(5, [1, 3, 5, 7]));
assert(3 === binarySearch(7, [1, 3, 5, 7]));
assert(-1 === binarySearch(0, [1, 3, 5, 7]));
assert(-1 === binarySearch(2, [1, 3, 5, 7]));
assert(-1 === binarySearch(4, [1, 3, 5, 7]));
assert(-1 === binarySearch(6, [1, 3, 5, 7]));
assert(-1 === binarySearch(8, [1, 3, 5, 7]));
