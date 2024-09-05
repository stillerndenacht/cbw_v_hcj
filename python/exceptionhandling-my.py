print("\n------ Minimalbeispiel ---------------\n")

try:
    eingabe = int(input("Zahl eingeben: "))
    print(f"ihre Eingabe ist korrekt : {eingabe}")
except ValueError:
    print("das ist keine Ganzzahl..")

print("\n----- erweitertes Beispiel verschiedene Fehlertypen -------\n")

try:
    eingabe2 = int(input("Zahl 2 eingeben: "))
    ausgabe = eingabe / eingabe2
except ValueError as e:
    print(e)  # Ausgabe: invalid literal for int() with base 10: 'l'
    print("das ist keine Ganzzahl..")
except ZeroDivisionError as what:
    print(what)
    print("Division durch 0 ist nicht erlaubt")
except BaseException as what: # ggf. die oberen excepts auskommentieren
    print(what)
    print(what.__class__)
    print("Irgend ein Fehler ... Du bist schuld!!")
else:
    print(f"ihre Eingabe ist korrekt : {eingabe2}")
    print(f"Ihr Ergebnis aus {eingabe}/{eingabe2}={ausgabe}")
finally:
    print("Das Finally kann jeden try-except schließen, unabhängig vom Ergebnis")

print("\n-- Beispiel in einer Funktion - zur Demonstration des Finally----\n")

def func():
    try:
        eingabe = int(input("Zahl in Function eingeben: "))
        print(f"ihre Eingabe ist korrekt : {eingabe}")
    except ValueError:
        print("das ist keine Ganzzahl..")
    try:
        eingabe2 = int(input("Zahl 2 in Function eingeben: "))
        ausgabe = eingabe / eingabe2
    except BaseException as what:
        print(what)
        print(what.__class__)
        print("Irgend ein Fehler ... Du bist schuld!!")
    else:
        print(f"ihre Eingabe ist korrekt : {eingabe2}")
        print(f"Ihr Ergebnis aus {eingabe}/{eingabe2}={ausgabe}")
        return ausgabe # return beendet die Funktion - aber finally kommt trotzdem
    finally: 
        print("Das Finally kommt auch nach korrektem Return")
    # dieses print kommt nur, wenn das return im else nicht ausgeführt wird    
    print("Während das hier nur kommt, wenn der Return fehlt")

func()