<?php
declare(strict_types=1);

function binarySearch(int $needle, array $items): int
{
    $result = -1;

    if (($count = \count($items)) === 1) {
        return $items[0] === $needle ? 0 : $result;
    }

    $high = $count - 1;
    $low = 0;

    while ($low < $high) {
        $mid = (int)floor(($low + $high) / 2);
        $midItem = $items[$mid];

        switch (true) {
            case $needle === $midItem:
                return $mid;

            case $high - $low === 1:
                return $needle === $items[$high] ? $high : $result;

            case $mid < $needle:
                $low = $mid;
                break;

            default:
                $high = $mid;
        }
    }

    return $result;
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
