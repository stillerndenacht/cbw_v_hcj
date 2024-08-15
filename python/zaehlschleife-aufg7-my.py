# Implementieren Sie folgende Anwendungen mit Zählschleifen:
# Geben Sie eine Zahl und ihr Quadrat aus in einem Bereich von 1 bis 21. Nutzen Sie hierfür range.
# Wählen Sie 5 Zahlen aus dem Bereich 1 bis 21, erzeugen Sie eine Liste und geben Sie die Quadratzahlen aus.
# Kumulieren Sie alle Zahlen von 1 bis 30 und geben das Ergebnis aus. Nutzen Sie hierbei den kombinierten Zuweisungsoperator!
# Geben Sie Zeichenkette rückwärts aus. Lassen Sie hierbei jeden zweiten Buchstaben aus.
# Schreiben Sie eine for-Schleife, die alle durch4 teilbaren Zahlen überspringt und nicht ausgibt
#

for i in range(1, 22):
        print(i, i**2, sep=", ", end=" > ")

print("\nforloop mit liste und range")
list = [3, 6, 9, 12, 15]
for i in range(1, 22):
    if i in list:
        print(i, i**2, sep=", ", end=" > ")
# ----------------------------------------------------

print("\nKumulation der Zahlen 1 - 30")
sum = 0
for i in range(1, 31):
        sum += i
        if i % 4 == 0:
            print(f"i = {i}, aktuelle summe {sum}", end="\n")
        else:
            print(f"i = {i}, aktuelle summe {sum}", end="\t")
# ------------------------------------------------------------
print("\n\nZeichenkette rückwärts")
z = "Zeichenkette"
z2 = ""
print(len(z))
count = len(z)-1

for j in range(count, -1, -1):
        z2 += z[j]    
print(z2,"\n")

print("\n\nZeichenkette rückwärts mit Auslassungen")
z3 = ""
for j in range(count, -1, -1):
        if j % 2 == 0:
            z3 += z[j]    
print(z3,"\n")

print("\n oder auch so.... mit Schrittweite -2")
z4 = ""
for j in range(count, -1, -2):
        z4 += z[j]    
print(z4,"\n")