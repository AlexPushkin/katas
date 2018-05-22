<?php
declare(strict_types=1);

function binarySearch(int $needle, array $items): int
{
    $count = \count($items);

    if ($count === 1) {
        return $needle === $items[0] ? 0 : -1;
    }

    $high = $count - 1;
    $mid = (int)floor($high / 2);
    $midItem = $items[$mid];

    if ($midItem === $needle) {
        return $mid;
    }

    if ($high === 1) {
        return $needle === $items[$high] ? $high : -1;
    }

    if ($mid < $needle) {
        return binarySearch($needle, array_slice($items, $mid));
    }

    return binarySearch($needle, array_slice($items, 0, $mid));
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