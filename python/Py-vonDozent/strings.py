# String-Deklaration
name = "Matthias" # '' und ""

multiline = """
    Ein kompletter Fließtext
    in Python
"""

print(multiline)


single_line = "Text\nText" # \n wird als 1 Zeichen gezählt
print(len(single_line))
single_line = "TextText"
print(len(single_line))

# Zertifizierungsfrage
multiline = """
Das ist ein
 String"""

print(len(multiline)) # 20, da \n mitgezählt wird
# Vorsicht bei Leerzeichen, die man nicht sehen kann

# 
print(len("Hallo lieber \tKurs")) # 18
print(len("Hallo lieber     Kurs")) # 21

# Verketten und Wiederholen von Strings
kurs = "Kurs"
print(kurs * 3) # KursKursKurs, wie bei Listen: [8] * 3

# Listen und Strings haben slicing und Verkettungsoperatoren, sind iterables
# Sie unterscheiden sich aber in den Methoden

# Konkatenation (concatenation)
kurs2 = "Kurs" + " FAG41" + " " + "FAG312"
print(kurs2)

print(
    # Was ist die Ausgabe ?
    len(("Kurs" + "2") * 3) < len("Kurs" * 3 + "2") # False 
    # Kurs2Kurs2Kurs2       < KursKursKurs2
)

zahl1 = 1
print(type(zahl1))
print(f"Zahl: {zahl1}") # "Zahl: " + zahl1

# explizite Typkonvertierung
print("Zahl: " + str(zahl1)) 
# In JS: implizite Typkonvertierung 

# slicing-Operationen:
variable = "Montag"
print(variable[4:]) # 4 Startindex, wir fangen bei 0 an zu zählen !

# "nt" extrahieren
print(variable[2:4])

# negative Indizes tag
print(variable[-3:]) # tag
print(variable[:-3]) # Mon (zweites Argument EXKLUSIVE)

# g M extrahieren
print("-1 1", variable[-1:1]) # leerer Strings
# Da Schrittweite negativ und erster Index nicht gegeben, starten wir von hinten
# und laufen von 5 bis 4, also nur 5 (g)
print(":-4 -1", variable[:4:-1]) # Montag
# leerer String, da 6 am Ende des Strings
# Ende-Index befindet sich entgegen der Laufrichtung
print("-1:6:-5", variable[-1:6:-5]) # Montag
print("-1::-5", variable[-1::-5]) # Montag

# Jede Zahl unter -7 auch möglich
print("-1:-7:-5", variable[-1:-7:-5]) # Montag
# M ist schon exklusive 
print("-1:-7:-5", variable[-1:-6:-5]) # Montag

# wichtige String-Methoden
# object.operation() heißt ab sofort Methode !
# sorted() ist Funktion ! sort() ist eine Methode liste.sort()
print("matthias".upper()) # MATTHIAS
print("MaTThias".lower()) # matthias
print("matthias".capitalize()) # Matthias 
print("maTThias".capitalize()) # Matthias 
print("maTThias ist müde".title()) # Matthias Ist Müde
print("maTThias ist müde".capitalize()) # Matthias ist müde

# Immutabilitätseigenschaft 
name_m = "Matthias"
name_m.upper() # wirkungslos, da strings immutabel sind. Das Ergebnis
# muss zugewiesen werden.
print(name_m) # Matthias
name_c = name_m.upper()
print(name_c)

# bei Objekten, die wir aus Klassen erzeugen, handelt es sich um MUTABLE
# Datentypen

namensliste = "Mohsen Benjamin Claus".split()
namensliste = "Mohsen,Benjamin,Claus".split(',')

namensliste = "Mohsen,Benjamin Claus".split(',')
print(namensliste)
# [ Mohsen, Benjamin Claus ]

# Tab als Trennzeichen
namensliste = "Mohsen\tBenjamin\tClaus".split('\t')
print(namensliste)

vornachname = "Zaker Mohsen\tBenjamin\tClaus".split('\t')[0].split()
print(vornachname)

temp = "11.5°C;1;78%".split(';') # [ '11.5°C', '1', '78%' ]
# temp[0] = temp[0][:-2]
# temp[2] = temp[2][:-1]
# print(temp)

# string-Konkatenation
# class str
temp = temp[0][:-2] + " " + temp[1] + " " + temp[2][:-1]
liste = temp.split()
print(liste)
# temp ist hier list
temp = "11.5°C;1;78%".split(';')
temp = [temp[0][:-2],temp[1],temp[2][:-1]]
# list comprehension möglich
# '11.5 1 78'
print(temp) # jeden Buchstaben als Listenelement
# => [11.5, 1, 78]

# adresse = "Hauptstr23".split()
# hausnummer = adresse[1]

# nach weiteren Trennern suchen

strasse = "Hauptstr23"
hausnummer = [ x for x in strasse if x.isdigit()]
print(hausnummer)

# Operatoren, um Präsenz eines Buchstabens oder Teilstrings
# in einem String zu überprüfen

print("ist müd" in "Matthias ist müde") # True
print("ist müde" in "Matthias ist müde") # True
print("ist müdee" in "Matthias ist müde") # False

print("ist müdee" not in "Matthias ist müde") # True

print("Hallo zusammen" in "Hallo") # Es muss MINDESTENS der Teilstring im zu testenden
# String vorhanden sein. Wenn links länger ist als rechts von in, dann
# kann es nie TRUE werden.

# Weitere Methoden
print("    Matthias ".strip())

print("    Matthias ist müde.   ".strip())
# rstrip nur trailing whitespace entfernen
# lstring nur leading whitespace entfernen
# Ergebnis: strip()



# replace
print("    Matthias ist müde.   ".replace(' ', '')) # Matthiasistmüde.
print("    Matthias ist müde.   ".replace('a', 'A')) # "    MAtthiAs ist müde.   "

# join
";".join([ "LH3112", "München", "18:30" ]) # LH3112;München;18:30

# find
"Nils".find("l") # Index des gesuchten Buchstabens
"Matthias ist müde".find("t") # 2
"Matthias ist müde".rfind("t") # 11

index = "Matthias ist müde".find("t")
"Matthias ist müde"[index+1:].find("t")



satz = "Matthias ist müde" 
# Wie viele t
print(satz.count('t'))

list_index = [ ]
while satz.find("t") >= 0:
    # Index merken
    index = satz.find("t")
    satz = satz[index+1:]
    list_index.append(index)
    print(index)

print(list_index)

satz.find('a', 5)


"Nils".isascii() 
"Nils☼".isascii() # Ring-Zeichen ist in UTF-8 und nicht in ASCII

"Nils".isalpha() # True
"Nils007".isalpha() # False

"3904830948".isdigit() # True
"3904830948a".isdigit() # False