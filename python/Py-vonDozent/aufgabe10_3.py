import random
 
# Lottozahlen generieren
# Lottozahlen auf 6 begrenzen.
# Permutation mit Zurücklegen

lottozahl = []
zählung = 0
 
while zählung < 6:  # Da ich  nur 6 Zahlen brauche möchte ich das die Schleife 6 mal durchlaufen wird.
    zufallszahl = random.randint(1, 50) #  Hier gebe ich Zufallszahl einen random wert den ich vorher fest gelegt habe
    lottozahl.append(zufallszahl) # Hier wird die Zufallszahl zu lottozahl hinzugefügt
    zählung += 1 # Hier wird der Wert von "zählung" um 1 erhöht. Ganz unten da er die ganze schleife durchlaufen soll.
 
print(lottozahl)
 

lottozahl = []
zählung = 0
zahlen = list(range(1,50)) # [1, 2, 3, .., 49]
 
while zählung < 6:  # Da ich  nur 6 Zahlen brauche möchte ich das die Schleife 6 mal durchlaufen wird.
    zufallszahl = random.randint(1, len(zahlen)) #  Hier gebe ich Zufallszahl einen random wert den ich vorher fest gelegt habe
    zahlen.pop(zahlen.index(zufallszahl)) 
    lottozahl.append(zufallszahl) # Hier wird die Zufallszahl zu lottozahl hinzugefügt
    zählung += 1 # Hier wird der Wert von "zählung" um 1 erhöht. Ganz unten da er die ganze schleife durchlaufen soll.
 
print(lottozahl)


import random
number = list(range(1, 50))
# Ziehen ohne Zurücklegen wird hier durchgeführt
lotto_number = random.sample(number, 6)
print("Lotto number: ", lotto_number)