var superHero = {
    firstName: "Peter",
    lastName: "Parker",
    powers: [
        "Super Strength",
        "Wall climbing"
    ],
};

superHero.powers.push("Web Swinging");
console.log(superHero.powers);

superHero["Kryptonite"] = "Josh Cross";
console.log(superHero);