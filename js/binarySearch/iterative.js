function assert(expect, actual) {
    if (expect !== actual) {
        throw Error(`Expected: ${expect}\nActual: ${actual}`);
    }
}

function binarySearch(needle, array) {
    let arrayLength = array.length;

    if (arrayLength === 0) {
        return -1;
    }

    if (arrayLength === 1) {
        return array[0] === needle ? 0 : -1;
    }

    let low = 0;
    let hi = arrayLength - 1;

    while (low < hi) {
        let mid = Math.floor((low + hi) / 2);
        let midValue = array[mid];

        if (midValue === needle) {
            return mid;
        }

        if (hi - low === 1) {
            return needle === array[hi] ? hi : -1;
        }

        if (midValue < needle) {
            low = mid;
        } else {
            hi = mid;
        }
    }

    return -1;
}

assert(-1, binarySearch(3, []));
assert(-1, binarySearch(3, [1]));
assert(0, binarySearch(1, [1]));
//
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