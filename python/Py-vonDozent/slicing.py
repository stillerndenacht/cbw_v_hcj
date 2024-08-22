liste = [1, 2, 3, 4, 5, 6]
# liste[5] = liste[-1]
# Mit dem slicing kann man Listen "zurechtschneiden"
# slicing liefert eine bearbeite Kopie der Liste
# slicing verallgemeinert den Zugriff über Indizes
# in beliebige Schneideoperationen
print(liste[3])  # 4

# Slicing erzeugt eine kopierte Teilliste
# alle Indizes 0 bis 3
# dieselbe Logik wie bei range
print(liste[0:4])
# Start bei 2, Durchlaufen bis zum Ende
print(liste[2:])

liste = [1, 2, 3, 4, 5, 6]
print(liste[1:4])
# [2, 3, 4]

print(liste[1:-2])
# [2, 3, 4], da 4 = -2

print(liste[-5:-2])
# [2, 3, 4]

liste = [1, 2, 3, 4, 5, 6]

print(liste[-5:-2:2])

# [], da wir bei -5 starten und weiter nach links laufen und NIEMALS
# an -2 kommen
# nur "gültig" mit Startindex s => -2, -3, -4, ...
# [s:-5:-1]
print(liste[-5:-2:-1])

print(liste[-5:-2:1])

liste = [1, 2, 3, 4, 5, 6]
print(liste[:-4:-1])
# [6, 5, 4]

# Liste hört bei Index -6 auf, man kann aber auch
# größere Werte angeben, hier keine IndexError
print("-10000: ", liste[:-10000:-1])
print("+10000: ", liste[:10000:1])
print(liste[-8])

# Alle Listenelemente rausschneiden und kopieren 
hard_copy = liste[:]

# jedes zweite Element der Liste
hard_copy = liste[::2]

print(liste[:-4:1])
# [1, 2] 

print(liste[-1:-4:1])

print(liste[::-1])
# [6, 5, 4, 3, 2, 1]

print(liste[:-5:-1])


# Schrittweite wird IMMER mit den Indizes verrechnet
print(liste[-3:-5:-1])

