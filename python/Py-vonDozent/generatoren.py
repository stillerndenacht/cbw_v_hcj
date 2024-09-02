# Ein Generator ist spezialisierte Funktion, die man unterbrechen
# kann und bei einem erneutem Aufruf fortsetzen kann.
# Der Zustand der Funktion wird im Speicher gehalten.
# Wird verwendet, um Sequenzen von Daten zu generieren
# z.B. zufallsbasierte Daten, Adressen, Datei einlesen
# Mit Generatoren kann man die Laufzeitperformance steigern
# und den Speicher schonen (BigData !,Datenanalyse,  KI Modelle, ...)

# Wir möchten 3 Werte aus einem Generator zurückliefern
# Aufruf -> 1 wert, nächster Aufruf -> nächster Wert

def werte_liefern():
    yield "Kevin"
    yield "Veit"
    yield "Daniel"
    # return "Matthias"

# Es wird Generator-Objekt benötigt
# Zuweisung einer Variablen zu der Funktion (Eine Art Funktionsreferenz)
# Durch den Aufruf wird diese Funktion als Generator verfügbar,  
# weil Schlüsselwort yield vorhanden ist
werte_generator = werte_liefern()

print(werte_liefern()) # werte_liefern() gibt Dir ein generator object zurück
print(next(werte_generator)) # Werte können mit next() abgerufen werden.
print(next(werte_generator))
print(next(werte_liefern())) # alternativ: Direkter Aufruf der Funktion

# Namensgenerator programmieren:
import random 

# Der Generator soll genau n (z.B. 10) Namen zurückliefern 
# Er soll 10mal angefordert werden können (durch next())!
def namen_generieren(n):
    vornamen = [ "Emilia", "Emma", "Sophia", "Hannah", "Mia" ]
    nachnamen = [ "Schmidt", "Müller", "Schulze", "Fischer" ]

    # Eine Generator-Funktion können wir auch innerhab einer
    # for Schleife unterbrechen
    for i in range(n): 
        vorname = random.choice(vornamen)
        nachnahme = random.choice(nachnamen)

        voller_name = f"{vorname} {nachnahme}" # f-Strings als Literal für Zuweisung
        yield voller_name # Schlüsselwort für Generator-Funktion
        # yield gibt einen Wert zurück
        # unterbricht (man drückt auf Pause)
        # beim NÄCHSTEN next wird hier fortgesetzt
        # return beendet die Funktion / den Generator
        # yield unterbricht ihn nur 

# Generator-Objekt speichern
namens_generator = namen_generieren(10)
print(namens_generator) # generator object <ID0x9887628e763>
# Einen Namen aus dem Generator holen
# erster_name = next(namens_generator)

for i in range(10): 
    print(next(namens_generator))

# Schon bei dem ersten Durchlauf wird StopIteration ausgelöst, wenn
# Zeilen 58 und 59 ausgeführt werden.
# for i in range(11): # Stop-Iteration Fehler bei 11. Aufruf,
#     # da alle yields verbraucht sind, wenn 58 und 59 NICHT ausgeführt werden. 
#     print(next(namens_generator))


# print(erster_name)

import time # hier: Für Laufzeitmessung

start_zeit_generator = time.time() # aktuelle Systemzeit holen
# Der Generator soll genau n (z.B. 10) Namen zurückliefern 
# Er soll 10mal angefordert werden können (durch next())!
def namen_generieren_inf():
    vornamen = [ "Emilia", "Emma", "Sophia", "Hannah", "Mia" ]
    nachnamen = [ "Schmidt", "Müller", "Schulze", "Fischer" ]

    # Eine Generator-Funktion können wir auch innerhab einer
    # for Schleife unterbrechen
    while True: 
        vorname = random.choice(vornamen)
        nachnahme = random.choice(nachnamen)

        voller_name = f"{vorname} {nachnahme}" # f-Strings als Literal für Zuweisung
        yield voller_name 


inf_namen = namen_generieren_inf()

# for i in range(100000):
#     print(next(inf_namen), sep=",", end='')

# Über das open() wird ein file handler geliefert
# dieser filehandler heißt namens_datei
# bei with muss man die Datei nicht schließen oder freigeben
# with sorgt automatisch für das korrekte Handling
with open("namensliste.txt", 'w', encoding='UTF-8') as namens_datei:
    for i in range(100_000):
        namens_datei.write(next(inf_namen) + ", ")

end_zeit_generator = time.time() # Stoppuhr
print("Gesamtzeit Generator: ", end_zeit_generator - start_zeit_generator)

start_zeit_funktion = time.time() 
print("Zeit: ", time.time()) # Anzahl Sekunden seit dem 1.1.1970
# Generator als "normale" Funktion umsetzen
def namen_generieren_fkt(n):
    vornamen = [ "Emilia", "Emma", "Sophia", "Hannah", "Mia" ]
    nachnamen = [ "Schmidt", "Müller", "Schulze", "Fischer" ]

    namens_liste = []
    for i in range(n): 
        vorname = random.choice(vornamen)
        nachnahme = random.choice(nachnamen)

        voller_name = f"{vorname} {nachnahme}" # f-Strings als Literal für Zuweisung
        namens_liste.append(voller_name)

    return namens_liste

namens_liste = namen_generieren_fkt(100_000) # namens_liste ist hier list
# namens_liste = iter(namens_liste) # Redefinition von Liste: namens_liste ist iter

with open("namensliste_fkt.txt", 'w', encoding='UTF-8') as namens_datei:
    for i in namens_liste:
        # next arbeitet auch auf normalen Liste
        namens_datei.write(i + ", ")

end_zeit_funktion = time.time()
print("Gesamtzeit Funktion: ", end_zeit_funktion - start_zeit_funktion)
print("Differenz: ", (end_zeit_funktion - start_zeit_funktion) - (end_zeit_generator - start_zeit_generator))
# Der Generator ist etwas langsamer als die Funktion (durch den Overhead
# mit yield und next), jedoch erheblich speicherschonender

# Die Generierung aller Namen auf einmal verbraucht bei 
# 100_000 Namen ca. 1465 kb (namen_generieren_fkt)
# Bei dem Generator sind dies nur wenige Byte, weil
# immer nur ein Wert zurückgegeben wird

# Die Generierung "unendlich langer" Sequenzen ist überhaupt nur
# mit Generatoren möglich
