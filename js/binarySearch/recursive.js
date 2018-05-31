function assert(expect, actual) {
    if (expect !== actual) {
        throw Error(`Expected: ${expect}\nActual: ${actual}`);
    }
}

function binarySearch(needle, array) {
    return find(needle, array, 0, array.length - 1);
}

function find(needle, array, low, hi) {
    let count = hi - low + 1;

    if (count === 0) {
        return -1;
    }

    if (count === 1) {
        return needle === array[low] ? low : -1;
    }

    let mid = Math.floor((low + hi) / 2);
    let midValue = array[mid];
    if (midValue === needle) {
        return mid;
    }

    if (count === 2) {
        return array[hi] === needle ? hi : -1;
    }

    if (midValue < needle) {
        return find(needle, array, mid, hi);
    }

    return find(needle, array, low, mid);
}

assert(-1, binarySearch(3, []));
assert(-1, binarySearch(3, [1]));
assert(0, binarySearch(1, [1]));
assert(0, binarySearch(1, [1, 3, 5]));
assert(1, binarySearch(3, [1, 3, 5]));
assert(2, binarySearch(5, [1, 3, 5]));
assert(-1, binarySearch(0, [1, 3, 5]));
assert(-1, binarySearch(2, [1, 3, 5]));
assert(-1, binarySearch(4, [1, 3, 5]));
assert(-1, binarySearch(6, [1, 3, 5]));
assert(0, binarySearch(1, [1, 3, 5, 7]));
assert(1, binarySearch(3, [1, 3, 5, 7]));
assert(2, binarySearch(5, [1, 3, 5, 7]));
assert(3, binarySearch(7, [1, 3, 5, 7]));
assert(-1, binarySearch(0, [1, 3, 5, 7]));
assert(-1, binarySearch(2, [1, 3, 5, 7]));
assert(-1, binarySearch(4, [1, 3, 5, 7]));
assert(-1, binarySearch(6, [1, 3, 5, 7]));
assert(-1, binarySearch(8, [1, 3, 5, 7]));