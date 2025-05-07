var aPerson = {
    name: "Josh Cross",
    age: 23,
    degrees: "NZ Diploma in Digital Media and Design, Smoking Cones, Current working towards Bachelor of Commerce in Information Systems and Operations and Supply Chain Management"
};

console.log(aPerson);
var sentence = `Hi, my name is ${aPerson.name}. I am ${aPerson.age} years old and I have the following degrees: ${aPerson.degrees}.`;
console.log(sentence);

var betterPerson = {
    firstName: aPerson.name.split(" ")[0],
    lastName: aPerson.name.split(" ")[1],
    age: aPerson.age,
    degrees: Array.from(aPerson.degrees.split(", "))
}

var looper = function () {
    var out =``;
    for (var i = 0; i < betterPerson.degrees.length; i++) {
        var output = `     ${i + 1}.  ${betterPerson.degrees[i]} \n`;
        out += output;
    }
    return out;
}
var looped = looper(aPerson);

var sentence = `Hello, my first name is ${betterPerson.firstName}. I also have a last name, it is ${betterPerson.lastName}. I am ${betterPerson.age} years old and I have these degrees:\n` + looped;
console.log(sentence);