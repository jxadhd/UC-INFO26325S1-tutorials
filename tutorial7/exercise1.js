var nums = [4, 5, 1, -50, 14, 16, 88];


function printArray() {
    document.getElementById("output").innerText = nums.toString();
}


// BEGIN EXERCISE 1a
function appendToArray(num1) {
    // ONLY EDIT THE LINE BELOW
    nums.push(num1);
    // ONLY EDIT THE LINE ABOVE
    document.getElementById("output").innerText = nums.toString();
}


// BEGIN EXERCISE 1b
function removeLastFromArray() {
    // ONLY EDIT THE LINE BELOW
    nums.pop();
    // ONLY EDIT THE LINE ABOVE
    document.getElementById("output").innerText = nums.toString();
}


// BEGIN EXERCISE 1c
function removeFirstFromArray() {
    // ONLY EDIT THE LINE BELOW
    nums.shift();
    // ONLY EDIT THE LINE ABOVE
    document.getElementById("output").innerText = nums.toString();
}


// BEGIN EXERCISE 1d
function addToStartOfArray(num1) {
    // ONLY EDIT THE LINE BELOW
    nums.unshift(num1);
    // ONLY EDIT THE LINE ABOVE
    document.getElementById("output").innerText = nums.toString();
}
