# Seit Python 3.11 als "Ersatz" für switch case Anweisungen in anderen Sprachen
# match case enthält kein break
# Semantik von match case weicht von switch case ab
# Flexiblerer Einsatz

# Eingabe: Lieblingsjahreszeit
# input liefert einen String zurück
jahreszeit = input("Geben Sie ihre Lieblings-Jahreszeit an: ")

# Zur Laufzeit können wir den Datentypen abfragen
# type()
print(type(jahreszeit))

# Nur ein case wird ausgeführt
match jahreszeit:
    case "Frühling":
        print("Es blüht so schön. ")
    case "Sommer":
        print("Kann nicht heiß genug sein...")
    case "Herbst":
        print("Die Farben so bunt.")
    case "Winter":
        print("Schifoan.")
    case _: # default
        print("Nicht gültig")

# 
match jahreszeit:
    case "Frühling" | "Sommer":
        print("Es blüht so schön. ")
    case jahreszeit if jahreszeit == "Sommer" or jahreszeit == "Frühling":
        print("Kann nicht heiß genug sein...")
    case "Herbst":
        print("Die Farben so bunt.")
    case "Winter":
        print("Schifoan.")
    case _: # default
        print("Nicht gültig")
