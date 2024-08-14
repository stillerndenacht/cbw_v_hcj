# Modul random ist für die Generieung von Zufallszahlen zuständig.
import random

print(random.random()) # 0.0 und EXKLUSIVE 1.0

random.randint(1,6) # Laplace W6 (Würfel mit 6 Seiten, jede Zahl gleich wahrscheinlich)

# Eine Zahl zufällig ziehen
liste_gueltige_zahlen = [2,4,6,9] # [] ist eine Liste.
print(random.choice(liste_gueltige_zahlen))

# Mischen einer Liste
deque = [2,3,4,5,6,7,8,9,10,11,'K','B','D','As']
random.shuffle(deque) # [5, 'B', 9, 'K', 'As', 11, 8, 2, 10, 3, 7, 'D', 4, 6]
print(deque)

# Mehrere Elemente ziehen
drawn = random.sample(deque, 3)
print(drawn)
# Elemente durchmischen

wurf = random.randint(1,100)
if wurf < 11: # Wahrscheinlichkeit von 10%
    print("Aktion1")
elif wurf < 51: # Wahrscheinlichkeit von 40%
    print("Aktion2")
else: # Wahrscheinlichkeit von 50%
    print("Aktion3")

# andere Verteilungsmodelle 
# Größe einer Person zufällig bestimmen
groesse = random.gauss(170, 20)


# Seed für Pseudozufallszahl setzen
# simulierte Zufallszahl
# VERY IMPORTANT für die Zertifizierung 
random.seed(4711) 

# Diese Zahlen sind immer gleich
print(random.randint(1,6)) # 2
print(random.randint(1,6)) # 4
print(random.randint(1,6)) # 6
