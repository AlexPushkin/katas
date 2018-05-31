export function assert(expect, actual) {
    if (expect !== actual) {
        throw Error(`Expected: ${expect}\nActual: ${actual}`);
    }
}

