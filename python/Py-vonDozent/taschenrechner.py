zahl1 = float(input("Bitte geben Sie die erste Zahl " +
                    "an mit der gerechnet werden soll: "))
zahl2 = float(input("Bitte geben Sie die zweite Zahl an: "))
operator = input("Wähle den Operator +, -, *, /: ")
if operator == "+": # inhaltlicher Vergleich mit "+"
    # an dieser Stelle muss eine Anweisung stehen
    # { }
    # pass # "leere" Anweisung
    print("Ergebnis = ", zahl1 + zahl2)
elif operator == "-":
    print("Ergebnis = ", zahl1 - zahl2)
elif operator == "*":
    print("Ergebnis = ", zahl1 * zahl2)
elif operator == "/":
    if(zahl2 != 0):
        print("Ergebnis = ", zahl1 / zahl2)

    





zahl1 = float(input("Bitte geben Sie die erste Zahl " +
                    "an mit der gerechnet werden soll: "))
zahl2 = float(input("Bitte geben Sie die zweite Zahl an: "))
operator = input("Wähle den Operator +, -, *, /: ")
if operator == "+": # inhaltlicher Vergleich mit "+"
    # an dieser Stelle muss eine Anweisung stehen
    # { }
    # pass # "leere" Anweisung
    print("Ergebnis = ", zahl1 + zahl2)
elif operator == "-":
    print("Ergebnis = ", zahl1 - zahl2)
elif operator == "*":
    print("Ergebnis = ", zahl1 * zahl2)
elif operator == "/":
    print("Ergebnis = ", zahl1 / zahl2)
else:
    print("Unbekannter Operator")


# Aufgabe 3.4
print ("\n Aufgabe 3.4 \n")
# Eingabe der Zahlen und Konvertierung in int
zahl1 = int(input("Bitte gebe deine ERSTE zahl ein Zahl: "))
# Operator eingeben
sign = input("Bitte gib hier dein Rechenoperator ein: ")
zahl2 = int(input("Bitte gebe deine ZWEITE zahl ein Zahl: "))

# Implementierung von match durch Auswertung sign
match sign:
    case "+":
        # Mit dem f-String lassen sich Variablen in einen String einfach einbinden
        # Wir kennzeichnen den String mit f und nutzen die {}, um die 
        # Variablen einzusetzen.
        print (f"Ergebnis: {zahl1+zahl2}")
        # alternative Formulierung "zu Fuß":
        # Rechnung und String sind separat, Konvertierung mit str
        # ist nötig, da sonst TypeError (zwischen string und int)
        print ("Ergebnis: " + str(zahl1+zahl2))
    case "-":
        print (f"Ergebnis: {zahl1-zahl2}")
    case "*":
        print (f"Ergebnis: {zahl1*zahl2}")
    case "/":
        print (f"Ergebnis: {zahl1/zahl2}")
    case "//":
        print (f"Ergebnis: {zahl1//zahl2}")
    case "**":
        print (f"Ergebnis: {zahl1**zahl2}")
    case _:
        print ("Der Rechenoperator ist nicht bekannt")


# Aufgabe 4.2:

z = 1
# prompt_info = ""
prompt = f"Bitte Zahl {z} eingeben (nur positive, negative werden auf 0 gesetzt): "
Value1 = float(input (prompt)) 
Value1 = 0 if Value1 < 0 else Value1
z += 1
Value2 = float(input (prompt))
Value2 = 0 if Value2 < 0 else Value2
op = input("Bitte Operator eingeben (Gültig sind: +, -, *, /, //, **): ")

# zahl1 = int(input("Bitte gebe deine ERSTE zahl ein Zahl: "));
# if zahl1 < 0: 
#     zahl1 = 0

# zahl2 = int(input("Bitte gebe deine ZWEITE zahl ein Zahl: "));
# if zahl2 < 0: 
#     zahl2 = 0

# if zahl1 < 0:
#     print("Negative Zahl erkannt. Die Zahl wird auf 0 gesetzt.")
#     zahl1 = 0  # Setze negative Zahl auf 0

 
# negative Eingaben auf 0 setzen
# Value1 = 0 if Value1 < 0 else Value1
# Value2 = 0 if Value2 < 0 else Value2
 
 
# Ausgabe mit Match case
 
match op:
    case "+":
        print(f"Plusrechnung: {Value1} + {Value2} = {Value1 + Value2}")
    case "-":
        print(f"Minusrechnung: {Value1} - {Value2} = {Value1 - Value2}")
    case "*":
        print(f"Multiplikation: {Value1} * {Value2} = {Value1 * Value2}")
    case "/":
        print(f"Division: {Value1} / {Value2} = {Value1 / Value2}")
        # 6 / 3 = 2
    case "//":
        print(f"Ganzzahldivision: {Value1} // {Value2} = {Value1 // Value2}")
    case "**":
        print(f"Potenzierung: {Value1} ** {Value2} = {Value1 ** Value2}")
    case _:
        print("Ungültiger Operator")





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

print("Ergebnis = 0")