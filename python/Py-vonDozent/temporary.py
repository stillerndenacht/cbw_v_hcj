import random

i = 0
# Man kann mit True erst einmal beliebig oft wiederholen,
# muss aber dann eine Abbruchbedingung in die Schleife einfügen
while cond := i < 3:
    if random.randint(1,6) == 6:
        print(f"Du hast eine 6 gewürfelt und {i} Versuche gebraucht")
        # Mit break kann ich aus der Schleife ausbrechen
        break
    else:
        print("Schade, du hast keine 6 gewürfelt")

    i += 1
# Wenn die Schleife nicht mit break beendet wurde, springt das Programm in else
else:
    print("Du hast leider die maximale Anzahl der Versuche erreicht")

print("Ende", cond)