//
//setInterval(function() {
   // console.log("The current Unix time is: " + new Date().getTime());
//}, 1000);

var user = "Josh Cross";
console.log("Current user: " + user);

var lengthOfName = function(firstName, lastName) {
    var fullName = firstName + lastName;

    return fullName.length;
}

var nameLength = lengthOfName("Josh", "Cross");
console.log("chars in name " + user + ": " + nameLength);

var FizzBuzz = function(num) {
        if (num % 3 === 0 && num % 5 ===0) {
            console.log("FizzBuzz");
        } else if (num % 3 === 0) {
            console.log("Fizz");
        } else if (num % 5 === 0) {
            console.log("Buzz");
        } else {
            console.log(num);
        }
}
FizzBuzz(30);

switch(prompt("What is the weather like today?")) {
    case "rainy":
        console.log("Remember to bring an umbrella.");
        break;
    case "sunny":
        console.log("Dress lightly");
        break;
    case "cloudy":
        console.log("Go outside.");
        break;
    default:
        console.log("Unknown weather type.");
        break;
}

var FizzBuzzSwitch = function(num) {
    switch (true) {
        case num % 3 === 0 && num % 5 === 0:
            console.log("FizzBuzz");
            return;
        case num % 3 === 0:
            console.log("Fizz");
            return;
        case num % 5 === 0:
            console.log("Buzz")
            return;
        default:
            console.log(num);
            return;
    }
}