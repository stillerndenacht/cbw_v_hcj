# Unkontrollierte Programmabstürze
# Beispiel: Falsche Nutzereingabe
# Exception handling ist ein Sicherheitsmechanismus, mit dem
# der Fehlerfall "abgefangen" werden kann. Zudem haben wir die Möglichkeit,
# auf einen spezifischen Fehlerfall zu reagieren. Eine 
# Fehlerbehandlungsstrategie implementieren. 
# Das, was wir als Programmierer nicht beeinflussen können,
# sollten wir mit einer Ausnahmebehandlung abfangen / absichern. 
# Beispiele: Dateizugriffe (Schreiben / Lesen), Netzwerkzugriffe, 
# Einbinden externer Geräte, Nutzereingaben jeglicher Art, 
# Unvorhergesehene Zustände
# Eine Exception kann auch formuliert, wenn es sehr aufwändig ist, den Fehler im Code
# von vornherein auszuschließen. 

# eingabe = int(input("Zahl eingeben: "))
# print(eingabe)

# # Im Fehlerfall wird Zeile 8 nicht mehr ausgeführt und das ganze Programm 
# # stürzt ab
# print("Weiterer Programmverlauf")

# Mit try sichern wir einen bestimmten Bereich des Codes für Fehler ab
def eingabe_ganzzahlwert():
    try: 
        eingabe = int(input("Zahl eingeben: "))
        eingabe2 = int(input("2. Zahl eingeben: "))
        print(eingabe / eingabe2) # hier kann eine ZeroDivision entstehen
        # Verhindern mit einer if Bedingung ODER einfach es in die Exception 
        # laufen lassen. 
        # return eingabe
    except ValueError as e:
        # e ist das sog. Exception-Objekt
        # Dieses kann man sich optional mit as e holen
        print(e)
        print("Du hast keine gültige Ganzzahl eingegeben. ")
    # beide Exception-Typen werden über diesen Block abgefangen.
    except (ValueError, ZeroDivisionError) as e:
        # e ist das sog. Exception-Objekt
        # Dieses kann man sich optional mit as e holen
        print(e)
        print("ValueError und ZeroDivisionError. ")
        # return eingabe_ganzzahlwert()
    # Default-Fall:
    # Entweder
    # except:
    # ODER
    # BaseException ist die "Urvaterklasse" aller Exceptions, also 
    # fallen alle Exceptions darunter und kann daher als Ersatz für den Default-Fall
    # genommen werden. "Ist-Ein"-Beziehung. 

    # Reihenfolge der Exceptions-Blöcke spielt eine wichtige Rolle,
    # da eventuell spezifischere Fehlerblöcke nicht mehr ausgeführt werden,
    # wenn eine allgemeinere Exception oben steht.
    except BaseException as f:
        print(f.__class__) # Von welchem Typ ist dieser Fehler? 
        print("Alle anderen Fehlertypen. ")
    # else nur, wenn alles sauber durchgelaufen ist, wird else ausgeführt.
    # Die except Anweisungen kann man als if, elif verstehen...
    else:
        print("Alles sauber durchgelaufen")
        return eingabe
    # finally wird IMMER ausgeführt, egal, ob es eine Exception gibt oder nicht
    finally:
        # Verbindungen zu Ressourcen schließen (Datenbank, Netzwerk, Datei, ...)
        print("Bin im Finally")
    
    print("Code wird weiter ausgeführt")

 
eingabe = eingabe_ganzzahlwert()
# # Im Fehlerfall wird Zeile 8 nicht mehr ausgeführt und das ganze Programm 
# stürzt ab
print("Aber es geht weiter... ")
