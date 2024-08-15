# Erinnerungsaufgabe: Einrückung verändern sowie 
# a und b verändern und schauen, was passiert.
a = 9
b = 10

# In Python gibt es keine { } für die scopes.
# () nur Priorisierung und Funktionen
# {} nur für f Strings und dictionairies
# Es muss aber etwas geben, um den Code, der unter der Bedingung ausgeführt wird,
# von dem anderen Code zu trennen.
# In Python wird mir Einrpckung (indentation)
if a < b:
    # nach dem if muss ein Ausdruck stehen
    print("Wahr") # wird nur unter der Bedingung a < b True ausgeführt

print("Weiter gehts") # wird immer ausgeführt


if a < b:
    # nach dem if muss ein Ausdruck stehen
    print("a kleiner b") # wird nur unter der Bedingung a < b True ausgeführt
    # Abfragen beliebig verschachtelbar
    if a < 100:
        print("a kleiner 100")
# Dieser Fall wird NUR DANN geprüft, wenn if FALSE
elif a > b:
    print("a größer b")


# Logische Operatoren
# and, or, not
# In JS; and &&, or || not !

# Abfrage wird UNABHÄNGIG von vorher überprüft.
if a > b and a < 100:
    print("a größer b und kleiner 100")
else:
    print("Alles Andere")

print("Weiter gehts") # wird immer ausgeführt


# Spezielle Syntax in Python für die Angabe von Intervallen
# Ein Wert liegt zwischen 50000 und 100000
# Traditionelle Art:
a = 55000
if a >= 50000 and a <= 100000:
    print("Wert liegt im Intervall")
else:
    print("Wert liegt NICHT im Intervall")

a = 55000
# In Python:
if 50000 <= a <= 100000:
    print("Wert liegt im Intervall")
else:
    print("Wert liegt NICHT im Intervall")