# Ternärer Operator ist in Python eine sog. Conditional expression

a = 5; b = 7

# linker Ausgang WAHR, rechts Ausgang FALSCH
ergebnis = "Wahr" if a < b else "Falsch"

# beliebig veschachtelbar
ergebnis = "A kleiner B" if a < b else "A größer B" if a > b \
    else "a gleich b"

print(ergebnis)

# Aufgabe 3.5 Variante 1:
# Hier werden zusätzlich erste String-Funktionen erklärt

# frau = "Frau"
# herr = "Herr"
geschlecht= input("Wählen Sie Ihr Geschlecht: Frau oder Herr: ")
name = input("Gib Ihre Name: ")
 
# .upper() Frau => FRAU
# .lower() Frau => frau
geschlecht.title() 
# hallo ihr zusammen => Hallo Ihr Zusammen

titel = "hallo ihr zusammen"
print(titel.title())
# Hallo Ihr Zusammen
print(titel.capitalize()) 
# Hallo ihr zusammen

match geschlecht.capitalize(): # frau => Frau
    case "Frau": 
        print("Sehr geehrte Frau " + name)
    case "Herr": #herr
        print("Sehr geehrter Herr " + name)
    case _:
        print("Guten Tag " + name)


# Aufgabe 3.5:
print ("\n Aufgabe 3.5 \n")
 
lname = input("Wie ist Ihr Nachname?: ")
gender = input("Geben sie bitte ihr Pronomen ein (Er, Sie, Keins): ")
# Hier brauchen wir eine Zuweisung, weil Strings immutabel (unveränderlich) sind
# Diese Kopie muss dann neu zugewiesen werden, damit sie einen Effekt hat
gender.lower()
print(gender)

# gender ist immer None, da print None zurückliefert
# gender = print("Herzlich Wilkommen Herr ", lname) if gender == "Er" \
#     else print("Herzlich Wilkommen Frau ", lname) if gender == "Sie" \
#     else print("Herzlich Willkommen", lname) if gender == "Keins" \
#     else print("Das ist was schief gelaufen")
 
# print(gender)


greet = "Herzlich Willkommen"
gender = "Herr" if gender == "Er" \
    else "Frau" if gender == "Sie" \
    else "" if gender == "Keins" \
    else "Das ist was schief gelaufen"

print(greet, gender, lname)

