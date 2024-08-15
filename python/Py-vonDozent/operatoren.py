# Dies ist ein Kommentar
# Nummerische Operatoren
# +, -, /, %, *
# **, //
# ** Potenz
# // Ganzzahldivision
# Potenz hat eine höhere Reihenfolge als Division, z.B.
# 9 ** 1/2 => falsches Ergebnis
# 9 ** (1/2) => richtiges Ergebnis 3.0

3 ** 3 # 3 * 3 * 3

a = True
b = False

true = True
false = True 

# Bitoperatoren
# Anwendungen: u.a. Kryptogtrafie, Netzwerk, effiziente Berechnungen
# Operatoren, die das Bitmuster von zwei Zahlen auswertet
# <<, >>, &, |, ^
# Bitshift-Operatoren
erg = 8 << 2
print(bin(8))
print(bin(erg))

erg2 = 16 >> 2 # 4
# Die beiden letzten Stellen werden verworfen, da sie nach außen geschoben werden.
erg2 = 17 >> 2 # 4
erg2 = 18 >> 2 # 4
erg2 = 19 >> 2 # 4

# Bitmuster vergleichen
# beide Stellen müssen 1 sein (für 1)
print(18 & 16)
# 10010
# 10000
# ==&==
# 10000

# mindestens eine Stelle 1 : 1
print(18 | 16)
# 10010
# 10000
# ==|==
# 10010

# nur bei unterschiedlichen Stellen 1
print(18 ^ 16)
# 10010
# 10000
# ==^==
# 00010

# Vergleichsoperatoren
# >, <, ==, !=, <=, >=
# Nummerische Vergleiche wie in JavaScript
# Strings:
"Hallo" < "hallo"
"zZzZ" < "zzzz"

# Buchstaben werden nacheinander verglichen
# jeder Buchstabe hat einen code point
# bei Ungleichheit der codee points gewinnt der Buchstabe mit dem niedrigeren 
# code point
# 
# der kleinere ord-Wert gewinnt
# code point wert in Python mit ord
print(ord('H'))
ord("Hallo"[0] < "hallo"[0])

"Hallo" < "Hallo1234" # Hallo1234 ist länger, vorher identische Substrings
"Hallo" < "Hallo1234"
# "Hallo" < "HaLo1234"
"Hallo" < "1234HaLo"

# ord('0') 48
# ord('A') 65
# ord('a') 97

# bei Unterschied: code point
# bei Gleichheit, aber unterschiedlicher Länge gewinnt das kürzere Wort

# import math
# math.

# logische Operatoren
# and: UND-Verknüpfung
# or: ODER-Verknüpfung
# not: Negation
A = True
B = True

print(A and B) # True
print(A or B) # True
print (not A and B) # False

# A, B, C
# Mindestens eine der 3 Variablen soll True werden
A = True; B = False; C = False
# and wird vorrangig zu or ausgeführt
print(A or B and C)


# Beobachtungen:
# Bei Strings, int, float, boolean
# Zwei Variablen oder Literale vom selben Datentypen können problemlos
# verglichen werden
# Alle Vergeichsoperationen funktioneren

# Unterschiedliche Basisdatentypen
# int und string funktionieren nicht bei Vergleichsoperatoren
# Hier wäre zusätzliche Konvertierung notwendig
# str(89)
# 

gender="" # bool("") => False
if gender: # gender hat hier den Wert False, weil leerer String
    # Hier nur, wenn gender True ist
    print("Es steht etwas im String")
else:
    print("Es steht nichts im String")

bool(89) < bool("Hallo") # False
bool(89) <= bool("Hallo") # True

8 < 9.6

# Scopes sind in Python nur auf Modulebene, Funktionsebene und Klassenebene definiert.
# Nach einer Kontrollstruktur kann eine Variable weiterhin genutzt werden, auch
# dann, wenn sie innerhalb der Kontrollstruktur definiert wurde.
zahl1 = float(input("Geben Sie die erste Zahl ein: "))
zahl2 = float(input("Geben Sie die zweite Zahl ein: "))
if (zahl1>= 0 and zahl2>= 0): # 0 will not be accepted
  operation = input("Geben Sie das Rechenzeichen ein (+, -, *, /): ")
 
  match operation:
    case "+":
        print("ergebnis = ",zahl1 + zahl2)
    case "-":
        print("ergebnis = ",zahl1 - zahl2)
    case "*":
        print("ergebnis = ",zahl1 * zahl2)
    case "/":
        if zahl2 != 0:
            print("Ergebnis = ", zahl1 / zahl2)
        else:
            print("Fehler: Division durch Null ist nicht erlaubt.")
    case _: # default
        print("ergebnis Fehler: Ungültiges Rechenzeichen. Bitte verwenden Sie +, -, * oder /.")
else:
    print("Ergebnis = 0")

# Merkwürdig: Ich kann auf operation hier zugreifen
# WAS IST DARAN EIGENTLICH MERKWÜRDIG?
print(operation)