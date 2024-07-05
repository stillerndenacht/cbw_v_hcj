// Vergleichsoperatoren
// ==, !=, ===, !==
// Die Operatoren mit den drei === vergleichen nur auf Ebene desselben Datentyps
console.log(4==="4") // false => strikter Modus, d.h
console.log(4==="5") // false
console.log(4===5) // false
console.log(4===4) // true
// Die Operatoren mit den zwei == Symbolen vergleichen INHALTLICH
// über den Datentypen hinweg.
console.log(4=="4") // true
console.log(4==4) // true
console.log(4==5) // false
console.log(4=="5") // false


// Logische Operatoren
// &&, ||, !
// Literale true, false
// && VERUNDUNG
// BEIDE Ausdrücke müssen true sein
console.log(true && true) // true
console.log(true && false) // false
console.log(false && true) // false
console.log(false && false) // false

// || VERODERN
// Mindestens einer der beiden Ausdrücke MUSS true ergeben,
// damit insgesamt true herauskommt.
console.log(true || true) // true
console.log(true || false) // true
console.log(false || true) // true
console.log(false || false) // false

let l = 10.0;
let m = 20.0;
console.log(l>5 && m<5);
// 10 > 5 : true, m < 5 : false

// Log
console.log(!true) // false
console.log(!false) // true

// Beliebig kombinier mit (), >, <, ==, !=
let a = true;
let b = true;
let c = true;

// Nur wenn ausschließlich a, b oder c wahr wird, 
// soll der gesamte Ausdruck wahr werden
// a = true; b = false; c = false => true
// a = false; b = true; c = false => true
// a = false; b = false; c = true => true
// ALLE ANDEREN FÄLLE sollen false werden.
let ergebnis = (a && !b && !c)  || (!a && b && !c) || (!a && !b && c);
             true && true && true

let warm = true;
let sunny = true;

// Nur wenn es warm und sunny ist, gehe ich aus dem Haus
// true: man geht aus dem Haus
// false: Man bleibt im Haus
console.log(warm && sunny);

// Ich möchte aus dem Haus gehen, wenn es warm und sunny ist,
// sunny und nicht warm oder warm und nicht sunny
console.log(warm || sunny);

// Ich möchte nur aus dem Haus gehen, wenn es weder sunny, noch warm ist
console.log(!warm && !sunny);

// Ich möchte aus dem Haus gehen, wenn es ENTWEDER sunny ist ODER warm,
// aber nicht beides
// warm && sunny false
// ! wird zuerst ausgeführt, dann &&, dann das || 
console.log(warm&&!sunny || !warm&&sunny);

console.log(warm^sunny); // XOR-Operator, nur true, wenn eines 
// der beiden Ausdrücke true ist.  

// Kombinierten Zuweisungsoperatoren
// = 
let x = 5;
x = x + 4; // x += 4
// +=
x += 4;
// -=, *=, **=, %=, /=
x -= 4; // x = x - 4;
x *= 4; // x = x * 4;
x **= 4; // x = x ** 4;
x %= 4; // x = x % 4;
x /= 4;  // x = x / 4

// Inkrement- und Dekrementoperatoren
// x = x + 1;
// x = x - 1;
// x += 1;
// x -= 1;
// x++;
// x--;
// Prä- und Postinkrementlogik
x++; // Postinkrement (nachher)
++x; // Präinkrement (vorher)
// Unterschied: x wird beim Präinkrement VOR der Auswertung 
// um eins erhöht bzw. vermindert.
// Postinkrement wird das NACH der Auswertung erhöht bzw. vermindert.
console.log(a + a++)
console.log(a + ++a)
console.log(a + a++ + 2)
console.log(a + ++a + 2)
console.log(a + ++a + 2 + a)
console.log(a + a++ + 2 + a)



// 5 ^ 8 
// Bitmuster:
// 0101 => 0*8 + 1*4 + 0*2 + 1*1
// 1000 => 1*8 + 0*0 + 0*0 + 0*0
// ---------
// 1101 => 13 XOR ^

// Boolean-Variablen
// intern: 0 false, 1 true
// 00000000 
// 00000001 