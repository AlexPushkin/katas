function assert(expect, actual) {
    if (expect !== actual) {
        throw Error(`Expected: ${expect}\nActual: ${actual}`);
    }
}

function find(needle, array, start, end) {
    while (start <= end) {
        let mid = Math.floor((start + end) / 2);

        if (array[mid] === needle) {
            return mid;
        }

        if (array[mid] < needle) {
            start = mid + 1;
        } else {
            end = mid - 1;
        }
    }

    return -1;
}

function binarySearch(needle, array) {
    return find(needle, array, 0, array.length - 1);
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