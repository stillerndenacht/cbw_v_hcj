# Der Computer denkt sich eine Zahl aus.
# Ihr als Spieler fangt an zu Raten. Der Computer gibt Euch einen Hinweis, ob die gesuchte Zahl größer oder kleiner ist, bis ihr die richtige Zahl trefft. Die Anzahl der Versuche soll ebenfalls protokolliert werden
# Variante mit Festlegung der erwarteten Versuche
import random
# random integer wird festgelegt als zahl
zahl = random.randint(1, 100)
# der counter wird mit 0 initialisiert
count = 0
# die Variable für die Versuchszahl wird mit 0 initialisiert
tryzahl = 0
# Eingabe der erwarteten Anzahl der Versuche
tryexpect = int(input("Wähle die Anzahl deiner Versuche : "))


# solange die Versuchszahl nicht der random zahl entspricht wird gelooped
while tryzahl != zahl:
    # der count wird um eins erhöht
    count += 1
    # Vergleich Anzahl Versuche vs. erwarteten Anzahl der Versuche
    if count > tryexpect:
        print("Die maximale Anzahl der Versuche ist erreicht!")
        break
    # die Eingabe von Versuchszahl wird angefordert
    tryzahl = int(input("Welche Zahl zwischen 1 und 100 willst du versuchen? : "))
    # die Anzahl der Versuche wird ausgegeben und die Versuchszahl dazu
    print(f"Versuch: {count} \t ihre Zahl: {tryzahl}")
    # Prüfung ob die Zahl im geforderten Bereich liegt
    if not 1 <= tryzahl <= 100:
        # wenn sie nicht im Bereich liegt Ermahnung
        print(f"Die angegebene Zahl {tryzahl} liegt nicht im vorgegebenen Bereich zwischen 1 und 100.")
        # wenn sie im Bereich liegt - Angabe ob zu hoch oder niedrig
    else:
        if tryzahl < zahl:
            print(f"die gesuchte Zahl ist größer als : {tryzahl}")
        else:
            print(f"die gesuchte Zahl ist kleiner als : {tryzahl}")
# wenn die Zahl trifft Gratulation - sonst zurück in den Loop
    
else:
    print(
        f"Versuch: {count} \t ihre Zahl: {tryzahl} stimmt genau mit der gesuchten Zahl {zahl} überein.\n * + * ---- Herzlichen Glückwunsch ...."
    )
