def search(needle, array, start, end):
    while start <= end:
        mid = int((start + end) / 2)

        if array[mid] == needle:
            return mid

        if array[mid] < needle:
            start = mid + 1
        else:
            end = mid - 1

    return -1


def binary_search(needle, array):
    return search(needle, array, 0, len(array) - 1)


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
