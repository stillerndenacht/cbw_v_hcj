# Mit list comprehensions kann man schnell und unkompliziert
# Listen mit Werten initialisieren

# Bildungsregel wird in [ ] angegeben
# Kurzform der for-Schleife 
# [1, 4, 9, 16, 25, 36, 49, 64, 81, 100, 121, 144, 169, 196, 225, 256, 289, 324, 361, 400]
quadrat = [ x**2 for x in range(1,21) ]
        # [ tranformierte Wert / Operation für ein Listenelement ]
        # danach for x in <iterable>
        # (filtern)
print(quadrat)

# quadrat = [ x**2 for x in range(1,21) if x % 2 == 0 ]
# alle Quadratzahlen, die durch 5 teilbar sind :-)
quadrat = [ x**2 for x in range(1,101) if x**2 % 5 == 0 ]
print(quadrat)

# Für die Transformation kann auch eine Funktion stehen
# Für das Filtern muss die Funktion True oder False zurückgeben 

quadrat = []
# ausführliches Aufschreiben:
for x in range(1,21):
    quadrat.append(x**2)

# ausführliches Aufschreiben:
for x in range(1,21):
    if x % 2 == 0: # 2,4,6,8,10
        quadrat.append(x**2)

normale_zahlen = [ x for x in range(1,101) ]
print(normale_zahlen)