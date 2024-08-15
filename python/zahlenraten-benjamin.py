[09:22] Benjamin Mor Hallegouét
# Zahlenraten. Die zu erratene Zahl ist eine Zufallszahl zwischen 1 und 100.
 
# import random um die Zufallszahl zu generieren
import random
 
# Eingabe für Schwierigkeitsgrad
difficulty = input("Schwierigkeitsgrad auswählen: leicht (20 Versuche), normal (10 Versuche), schwer (5 Versuche): ")
 
# hier werden die Anzahl der Versuche (tries) und der Bereich der Systemnachrichten wie "heiß" und "kalt" (offset)
# gemäß dem Schwierigkeitsgrad definiert
match difficulty.lower():
    case "leicht":
        tries = 20
        offset = [3, 5, 10, 20, 30]
    case "normal":
        tries = 10
        offset = [5, 7, 12, 22, 32]
    case "schwer":
        tries = 5
        offset = [7, 9, 14, 24, 34]
    case _:
        print("Ungültige Eingabe")
# Zufallszahl generieren, hier zwischen 1 und 100
secret = random.randint(1, 100)
 
# Zählervariable für Anzahl der Versuche
i = 1
 
# While-Schleife fürs Raten
# Solange die Zahl nicht erraten wurde, wird in die Schleife gesprungen
# Das System schaut, ob die geratene Zahl im vorher definierten Bereich ist
# Es gibt je nachdem eine entsprechende Meldung auf der Konsole aus
# Wird die richtige Zahl erraten, wird in den else Fall gesprungen
while (guess := int(input(f"{i}. Versuch: Zahl eingeben: "))) != secret:
    i += 1
    if (secret - offset[0]) < guess < (secret + offset[0]):
        print("Heiß")
    elif (secret - offset[1]) < guess < (secret + offset[1]):
        print("Warm")
    elif (secret - offset[2]) < guess < (secret + offset[2]):
        print("Lauwarm")
    elif (secret - offset[3]) < guess < (secret + offset[3]):
        print("Kalt")
    elif (secret - offset[4]) < guess < (secret + offset[4]):
        print("Eiskalt")
    else:
        print("0 Kelvin")
   
    if i > tries:
        print(f"Leider alle Versuche verbraucht. Die Zahl ist {secret}.")
        break
   
else:
    # Bei Erraten der richtigen Zahl gibt es eine entsprechende Meldung einschließlich der Anzahl der Versuche
    print(f"Richtig geraten! Die Zahl ist {secret}. Benötigte Versuche: {i}")
 