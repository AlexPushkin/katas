import math


def binary_search(needle, array):
    return search(needle, array, 0, len(array) - 1)


def search(needle, array, low, high):
    count = high - low + 1

    if count == 0:
        return -1

    if count == 1:
        return low if array[low] == needle else -1

    mid = int(math.floor((low + high) / 2))
    mid_value = array[mid]

    if mid_value == needle:
        return mid

    if count == 2:
        return high if array[high] == needle else -1

    if mid_value < needle:
        return search(needle, array, mid, high)

    return search(needle, array, low, mid)


assert -1 == binary_search(3, [])
assert -1 == binary_search(3, [1])
assert 0 == binary_search(1, [1])

assert 0 == binary_search(1, [1, 3, 5])
assert 1 == binary_search(3, [1, 3, 5])
assert 2 == binary_search(5, [1, 3, 5])
assert -1 == binary_search(0, [1, 3, 5])
assert -1 == binary_search(2, [1, 3, 5])
assert -1 == binary_search(4, [1, 3, 5])
assert -1 == binary_search(6, [1, 3, 5])

assert 0 == binary_search(1, [1, 3, 5, 7])
assert 1 == binary_search(3, [1, 3, 5, 7])
assert 2 == binary_search(5, [1, 3, 5, 7])
assert 3 == binary_search(7, [1, 3, 5, 7])
assert -1 == binary_search(0, [1, 3, 5, 7])
assert -1 == binary_search(2, [1, 3, 5, 7])
assert -1 == binary_search(4, [1, 3, 5, 7])
assert -1 == binary_search(6, [1, 3, 5, 7])
assert -1 == binary_search(8, [1, 3, 5, 7])
