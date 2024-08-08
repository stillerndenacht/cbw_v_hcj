import { Site } from './Site'

export type Book = {
  // any darf nicht implizit zugewiesen werden.
  id: number;
  title: string;
  author: string;
  isbn: string;
  rating: number;
  wert ?: number;
  seite ?: Site[];
};

// Typisierung einer Funktion
// (motor : string) ist die Eingabe an eine Funktion
// : string am Ende ist der Datentyp der Rückgabe !
const Auto = (motor: string): string => { return ""; }

const Hotel = (pool: string): string => { return ""; }


export type motor = {
  name: string,
  price: number
  maxpower: number
}
 
export type Bike = {
    name: string;
    color: string;
    price: number;
    motor ?: motor[];
}

// Wie schreibe ich ein passendes Objektliteral?
const mybike : Bike = {
  color : "red",
  name : "Kawasaki",
  price : 10000,
  // wie bekomme ich hier einen Motor rein?
  // wie die Bookslist ;-)
  motor : [{
    name : "V8",
    price : 2500,
    maxpower : 420,
  }, {
    name : "E-Hybrid",
    price : 5000,
    maxpower : 600,
  }]
}