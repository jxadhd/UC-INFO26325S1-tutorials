console.log("Lets print the current time once per second");

setInterval(function() {
    console.log("The current Unix time is: " + new Date().getTime());
}, 1000);
