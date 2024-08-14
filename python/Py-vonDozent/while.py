# while-Schleifen
# Walross-Operator

a = 0
# Bedingung im Schleifenkopf wird irgendwann False
# Dann wird die Schleife abgebrochen
while a < 5:
    a += 1

# In Python gibt es KEINE do .. while Schleife 

# Würfelexperiment "Mensch ärgere Dich nicht"
# 

# Würfeln, bis eine 6 gewürfelt wird
 
# random import, um Zufallszahlen zu generieren
import random
 
# Zählvariable für Anzahl der Versuche
i = 1
 
# Variable fürs Würfeln
wurf = random.randint(1, 6)
 
# While-Schleife für den Würfelprozess (bis 6 gewürfelt wird)
while wurf != 6:
    print(f"{i}. Versuch: {wurf}, Schade, würfle nochmal.")
    i += 1
    wurf = random.randint(1, 6)
 
 
# Ausgabe wenn 6 gewürfelt wurde
print(f"{i}. Versuch: {i}, Glückwunsch. Sie haben eine {wurf} gewürfelt.")



# Variante ohne zweites randint() und Begrenzung der Versuche
import random
 
# Zählvariable für Anzahl der Versuche
i = 0
 
# Variable fürs Würfeln
wurf = 0
 
# While-Schleife für den Würfelprozess (bis 6 gewürfelt wird)
# In dieser Variante wird die Anzahl der Versuche auf 3 begrenzt
while wurf != 6 and i < 3:
    print(f"{i}. Versuch: {wurf}, Schade, würfle nochmal.")
    i += 1
    wurf = random.randint(1, 6)
 
 
# Ausgabe wenn 6 gewürfelt wurde
print(f"{i}. Versuch: Glückwunsch. Sie haben eine {wurf} gewürfelt.")


# "Gezinkter" Würfel: 6 soll doppelt so wahrscheinlich sein wie die anderen Zahlen
# Variante ohne zweites randint()
import random
 
# Zählvariable für Anzahl der Versuche
i = 0
 
# Variable fürs Würfeln
wurf = 0
 
# While-Schleife für den Würfelprozess (bis 6 gewürfelt wird)
# In dieser Variante wird die Anzahl der Versuche auf 3 begrenzt
while wurf >= 6 and i < 3:
    print(f"{i}. Versuch: {wurf}, Schade, würfle nochmal.")
    i += 1
    wurf = random.randint(1, 7)
 
 
# Ausgabe wenn 6 gewürfelt wurde
print(f"{i}. Versuch:  Glückwunsch. Sie haben eine 6 gewürfelt.")


# Man kann mit True erst einmal beliebig oft wiederholen,
# muss aber dann eine Abbruchbedingung in die Schleife einfügen
while True:
    if random.randint(1,6) == 6:
        print("Du hast eine 6 gewürfelt")
        # Mit break kann ich aus der Schleife ausbrechen
        break
    else:
        print("Schade, du hast keine 6 gewürfelt")


while True:
    wurf = random.randint(1,6) 
    if  wurf == 6:
        print("Du hast eine 6 gewürfelt")
        # Mit break kann ich aus der Schleife ausbrechen
        break
    else:
        print(f"Schade, du hast eine {wurf} gewürfelt")

# Walross-Operator ist spezifisch für Python
# Er erlaubt beispielsweise eine Zuweisung während einer Bedingungsabfrage
# und einer Schleife
while True:
    if  (wurf := random.randint(1,6)) == 6:
        print("Du hast eine 6 gewürfelt")
        # Mit break kann ich aus der Schleife ausbrechen
        break
    else:
        print(f"Schade, du hast eine {wurf} gewürfelt")
 
 # continue springt in den nächsten Schleifendurchlauf
 # break springt aus einer Schleife raus

a = 0
while a < 5:
    a += 1
    if a == 3:
        # Sprung in den nächsten Durchlauf
        continue
    
    print("Ausgabe:", a)


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
