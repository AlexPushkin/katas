<?php
declare(strict_types=1);

function binarySearch(int $needle, array $items, int $start, int $end): int
{
    $count = $end - $start;

    if ($count === 0) {
        return -1;
    }

    if ($count === 1) {
        return $needle === $items[$start] ? $start : -1;
    }

    $mid = (int)floor($start + $end / 2);
    $midItem = $items[$mid];

    if ($midItem === $needle) {
        return $mid;
    }

//    if ($end - $mid === 1) {
//        return $needle === $items[$end] ? $end : -1;
//    }

    if ($mid < $needle) {
        return binarySearch($needle, $items, $mid, $end);
    }

    return binarySearch($needle, $items, $start, $mid);
}

function binaryWrapper(int $needle, array $items): int
{
    $count = \count($items);
    if ($count === 1) {
        return $needle === $items[0] ? 0 : -1;
    }

    return binarySearch($needle, $items, 0, $count - 1);
}


assert(-1 === binaryWrapper(3, []));
assert(-1 === binaryWrapper(3, [1]));
assert(0 === binaryWrapper(1, [1]));
#
assert(0 === binaryWrapper(1, [1, 3, 5]));
assert(1 === binaryWrapper(3, [1, 3, 5]));
assert(2 === binaryWrapper(5, [1, 3, 5]));
assert(-1 === binaryWrapper(0, [1, 3, 5]));
assert(-1 === binaryWrapper(2, [1, 3, 5]));
assert(-1 === binaryWrapper(4, [1, 3, 5]));
assert(-1 === binaryWrapper(6, [1, 3, 5]));
#
assert(0 === binaryWrapper(1, [1, 3, 5, 7]));
assert(1 === binaryWrapper(3, [1, 3, 5, 7]));
assert(2 === binaryWrapper(5, [1, 3, 5, 7]));
assert(3 === binaryWrapper(7, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(0, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(2, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(4, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(6, [1, 3, 5, 7]));
assert(-1 === binaryWrapper(8, [1, 3, 5, 7]));