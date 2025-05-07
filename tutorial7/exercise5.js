var bigObject = {
    firstName: "Alex",
    middleName: "Justin",
    lastName: "Matthews",
    numberOfJunkSpeedingTickets: 305,
    dateOfBirth: {
        year: 1996,
        month: 4,
        day: 23,
    },
    age: 22,
    address: {
        number: 123,
        street: "Ilam Rd",
        city: "Christchurch",
        postcode: 8011,
        country: "New Zealand",
        countryShortName: "NZ",
    },
    junkData: "asadgasdgsabsavbjhvbjhsdkafvjhsadvjvbjhsavfjh4vvjvs a4k2",
    cars: [
        {
            make: "Toyota",
            model: "Corolla",
            year: 1998,
            colour: "White",
            odometer: 190500,
        },
        {
            make: "Tesla",
            model: "Roadster",
            year: 2017,
            colour: "Red",
            odometer: 20000,
        },
        {
            make: "Mercedes",
            model: "Benz",
            year: 2006,
            colour: "Black",
            odometer: 385412,
        },
        {
            make: "BMW",
            model: "i8",
            year: 2018,
            colour: "Blue",
            odometer: 100,
        },
    ],
    favouriteFood: "Sushi",
    moreJunkData: 12435253,
};

// BEGIN EXERCISE 5
function removeBadFields(obj) {
    delete bigObject["age"];
    delete bigObject["favouriteFood"];

}

// BEGIN EXERCISE 6
function printAllCarMakesAndModels(obj) {
    output = ``;
    for(var i = 0; i < obj.cars.length; i++) {
        var line = `${obj.cars[i].make} ${obj.cars[i].model}\n`;
        output += line;
    }
    console.log(output);
}

// BEGIN EXTRA EXERCISE
function removeJunkFields(obj) {
    li = Object.keys(obj);
    for(var i = 0; i < li.length; i++) {
        if ("junk".match(li[i])) {
            delete li[i];
        }
    }
}

removeBadFields(bigObject);
printAllCarMakesAndModels(bigObject);
removeJunkFields(bigObject);

console.log("Coderunner questions:")

function sum(numbers) {
    var o = 0;
    for(var i = 0; i < numbers.length; i++) {
        o += parseInt(numbers[i]);
    }
    return o;
}

function minMaxString (n) {
    var arr = [];
    for(var i = 0; i < n.length; i++) {
        arr.push(parseInt(n[i]));
    }
    return `${Math.min(...arr)}${Math.max(...arr)}`;
}

var numbers = ["1", "2", "3", "4", "5"];
var total = sum(numbers);
console.log(total);
console.log(minMaxString(["1", "12", "56", "-64", "802"]));
console.log(minMaxString(["100"]));
