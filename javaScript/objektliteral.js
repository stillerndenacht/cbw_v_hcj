let england = {
    capital : "London",
    population: 60000000,
    // Änderungen in der Bevölkerung verrechnen.
    deltaPopulation : function(population) {
        this.population += population;
    }
}

// Zugriff bei assoziativen Listen
// key : value
console.log(england["capital"]); // "London"
console.log("Population vorher:", england["population"]);
// Methode aufrufen
england.deltaPopulation(25000);
console.log("Population nachher:", england["population"]);