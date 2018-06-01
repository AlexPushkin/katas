<?php
declare(strict_types=1);

function binarySearch(int $needle, array $items, int $start, int $end): int
{
    if ($start > $end) {
        return -1;
    }

    $mid = (int)floor(($start + $end) / 2);

    switch (true) {
        case $items[$mid] === $needle:
            return $mid;

        case $items[$mid] < $needle:
            return binarySearch($needle, $items, $mid + 1, $end);

        default:
            return binarySearch($needle, $items, $start, $mid - 1);
    }
}

function binaryWrapper(int $needle, array $items): int
{
    return binarySearch($needle, $items, 0, \count($items) - 1);
}


assert(-1 === binaryWrapper(3, []));
assert(-1 === binaryWrapper(3, [1]));
assert(0 === binaryWrapper(1, [1]));
assert(0 === binaryWrapper(1, [1, 3, 5]));
assert(1 === binaryWrapper(3, [1, 3, 5]));
assert(2 === binaryWrapper(5, [1, 3, 5]));
assert(-1 === binaryWrapper(0, [1, 3, 5]));
assert(-1 === binaryWrapper(2, [1, 3, 5]));
assert(-1 === binaryWrapper(4, [1, 3, 5]));
assert(-1 === binaryWrapper(6, [1, 3, 5]));
assert(0 === binaryWrapper(1, [1, 3, 5, 7]));
assert(1 === binaryWrapper(3, [1, 3, 5, 7]));
assert(2 === binaryWrapper(5, [1, 3, 5, 7]));
assert(3 === binaryWrapper(7, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(0, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(2, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(4, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(6, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(8, [1, 3, 5, 7]));