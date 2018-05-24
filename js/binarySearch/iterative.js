function binarySearch(needle, array) {
    let arrayLength = array.length;

    if (arrayLength === 0) {
        return -1;
    }

    if (arrayLength === 1) {
        return array[0] === needle ? 0 : -1;
    }

    let low = 0;
    let hi = length - 1;

    while (low < hi) {
        let mid = Math.floor((low + hi) / 2);
        let midValue = array[mid];

        if (midValue === needle) {
            return mid;
        }

        if (midValue < needle) {
            low = mid;
        } else {
            hi = mid;
        }
    }

    return -1;
}