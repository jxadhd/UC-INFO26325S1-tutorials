let count = 0;

var timer = setInterval(function() {
   console.log("The current Unix time is: " + new Date().getTime());
   count = increase(1, count);
}, 1000);

clearInterval(timer);

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
FizzBuzzSwitch(25)

var result = 1;
for (var i = 0; i < 10; i++) {
    result = result * 2;
    console.log(result);
}

var isDogNotBirdFor = function(li) {
    var output = false;
    for (var i = 0; i < li.length; i++) {
        if (li[i] === "Dog") output = true;
        if (li[i] === "Bird") output = false;
    }
    console.log(output);
}
var list1 = ["Cat", "Rabbit", "Dog"];
var list2 = ["Cat", "Rabbit", "Dog", "Bird"];
console.log("Is dog, and not bird in the list passed? Should return true, false:  \n");
isDogNotBirdFor(list1);
isDogNotBirdFor(list2);

var isDogNotBirdForeach = function(li) {
    var output = false;
    li.forEach(item => {
        if (item === "Dog") output = true;
        if (item === "Bird") output = false;
    })
    console.log(output);
}
console.log("Is dog, and not bird in the list passed? Should return true, false:  \n");
isDogNotBirdForeach(list1);
isDogNotBirdForeach(list2);

var isDogNotBirdWhile = function(li) {
    var output = false;
    var i = 0;
    while (i < li.length) {
        if (li[i] === "Dog") output = true;
        if (li[i] === "Bird") output = false;
        i++;
    }
    console.log(output);
}
console.log("Is dog, and not bird in the list passed? Should return true, false:  \n");
isDogNotBirdWhile(list1);
isDogNotBirdWhile(list2);

var whileProgram = function(arr) {
    var o = 0;
    var i = 0;
    while(i < arr.length) {
        o += arr[i];
        i++;
    }
    console.log(o);
}
arr = [1, 2, 3, 4, 5];
console.log("Returns sum of all num array items. Should return 15: \n");
whileProgram(arr);

function minmax(arr) {
    var min = 0;
    var max = 0;
    arr.forEach(i => {
        if (parseInt(parseInt(i)) < min) {
            min = parseInt(parseInt(i));
        }
        else if (parseInt(i) > max) {
            max = parseInt(i);
        }
    })
    console.log("Min: " + min);
    console.log("Max: " + max);
}
console.log("Returns minmax: \n")
var arr = ["1", "12", 56, -64, "802"];
minmax(arr);