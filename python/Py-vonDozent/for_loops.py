# In Python existieren natürlich auch for-Schleifen mit einer
# gegebenen Anzahl an Durchläufen.

# In JS:
# for(i = 0; i < 10; i++)
# In Python: Deutlich einfachere Syntax
# Flexibel, wir können "iterables" durchlaufen

# Eine for-Schleife funktioniert nicht ohne Iterable
# Es gibt keine Zählvariable im eigentlichen Sinn
# for i in <iterable>
# Wie kann ich dann # for(i = 0; i < 10; i++) abbilden?
# Wir bauen uns ein ITERABLE, was die Zahlen von 1 bis 10 enthält
# Als Liste dargestellt: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
# start INKLUSIVE, 11 EXKLUSIVE
# Konsistent für iterables und Slicing.
for i in range(1,11): 
    # Wie kann ich jetzt diese Ausgabe erzeugen?
    # 1 | 2 | 3 ...
    print(i, end=' | ')

print()

liste = [8,9,10]
# liste[i]
# range mit einem Argument
print("Range mit einem Element: ")
for i in range(6): # [0, 1, 2, 3, 4, 5], da 6 exklusive
    print(i, end=' | ')
    
# range(-6) erzeugt eine leere Range, da mit einem Argument bei 0 begonnen wird
# und es ins Positive laufen soll. -6 ist aber < 0 !

# range(-6,6) # [-6, -5, .. , 4, 5], da 6 EXKLUSIVE
print()
# Jede zweite Zahl in meiner range von 1 bis 30
for i in range(1, 31, 2): # [1, 3, 5, 7, .., 29]
    print(i, end=' | ')

print()

list(range(-20,-10)) # [-20, -19, -18, -17, -16, -15, -14, -13, -12, -11]
list(range(-20,-10, 2)) # [-20, -18, -16, -14, -12]

print("Quadratzahlen: ")
for i in range(1, 21):
     print(i**2, end=' | ')  

print()

# Bei for-Schleifen kann auch ein else gesetzt werden.
inp = int(input("Bitte Zahl eingeben: "))

for i in range(1, 101):
    print(i, end=" ")

    if i == inp:
        print(f"Bei {i} abgebrochen.")
        # Schleife wird verlassen und else ignoriert
        break
else:
    print("Bis 100 durchgelaufen.")


