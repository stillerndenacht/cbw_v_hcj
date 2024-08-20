# Geldautomat:
# es soll es verschiedene Nutzer
# verschiedene Konten mit limit, kontostand, gebuehr
# Einzahlen und Auszahlen
# Jede Einzahlung wird mit einer Wahrscheinlichkeit von 10% zu einem Gewinn
# (PIN-Abfrage)
# (was Euch noch einfällt)
# Listen, Schleifen, Bedingungen, ...

# nutzerliste = [[id, name, pin, kontenliste[]], [id, name, pin, kontenliste[]]]
# konteniste = [konten[], konten[], ...]
# konten [idkonto, kontostand, limit[], gebuehr[],sperr[0]]
# limit = []
# gebuehr = []
# sperr = [0,1]
# einzahlen/auszahlen

gebuehr = [5, 15]
limit = [1100, 2200, 3300]
sperr = [0, 1]
konten = [
    [1001, 11111, limit[0], gebuehr[0], sperr[0]],
    [1002, 11122, limit[0], gebuehr[0], sperr[0]],
    [2002, 21122, limit[0], gebuehr[0], sperr[0]],
    [2003, 21133, limit[0], gebuehr[0], sperr[0]],
    [3001, 31111, limit[0], gebuehr[0], sperr[1]],
]
kontenliste = [[konten[0], konten[1]], [konten[2], konten[3]], [konten[4]]]
nutzerliste = [[1, "Max", 100, kontenliste[0]], [2, "Karl", 200, kontenliste[2]]]

# nutzerx = nutzerliste[1] # wählt den Nutzer als [] muss GELOOPED werden
# nutzerx[0] # ist die id
# nutzerxname = nutzerx[1] # wenn [] des nutzerx da ist, wählt das den Name
# nutzerxpin = nutzerx[2] # wenn [] des nutzerx da ist, wählt das die PIN
# nutzerxkontenlist = nutzerx[3] # wenn [] des nutzerx da ist, wählt das den [] der Konten
# nutzerxkonto = nutzerxkontenlist[0] # wenn [] der nutzerkontenliste da ist, wählt das ein bestimmtes [] Konto muss GELOOPED werden
# nutzerxkontosperr = nutzerxkonto[4] # wenn [] des Konto da ist fragt das den Sperrverweis ab
# nutzerxkontolimit = nutzerxkonto[2] # wenn [] des Konto da ist fragt das das Limit ab
# nutzerxkontogebuehr = nutzerxkonto[3] # wenn [] des Konto da ist fragt das die Gebuhr ab
# print(nutzerxkontogebuehr)

print(len(nutzerliste))
start = input(
    "Wenn sie starten möchten drücken sie ENTER. --- \n ----- Wenn sie den Automaten beenden möchten tippen sie 'exit' :"
)
exitmsg = "Sie haben den Automaten beendet."
while start != "exit":
    start = input("Bitte ihre Nutzer ID eingeben : ")  # Start Abfrage ID
    if start == "exit":
        print(exitmsg)
        break
    else:
        for x in range(
            0, len(nutzerliste), 1
        ):  # loop durch nutzerliste Abgleich der ID
            start = int(start)
            print(x, start)
            nutzerx = nutzerliste[x]
            print(nutzerx)
            if nutzerx[0] == start:
                print(x, nutzerx[0], start)
                # Pin Eingabe - bei Erfolg Bereitstellung aller Daten
                for y in range(1, 4, 1):
                    pin = input("Bitte die PIN eingeben : ")
                    if pin == "exit":
                        print(exitmsg)
                        exit()
                    else:
                        nutzerxpin = nutzerx[2]
                        pin = int(pin)
                        # print(pin, "pin", nutzerxpin, "nutzerx[2]", nutzerx[2])
                        if nutzerxpin == pin:
                            # print("yes", nutzerxpin, pin)
                            nutzerxname = nutzerx[1]
                            print(f"Herzlich willkommen {nutzerxname}")
                            nutzerxkontenlist = nutzerx[3]
                            for z in range(0, len(nutzerxkontenlist), 1):
                                nutzerxkonto = nutzerxkontenlist[z]
                                usekonto = input(
                                    f"Wollen sie das Konto {nutzerxkonto[0]} bearbeiten j / n / exit : "
                                )
                                # print(nutzerxkonto[0])
                                if usekonto == "j":
                                    print(
                                        f"Was wollen sie mit Konto {nutzerxkonto[0]} tun?"
                                    )
                                    kontouse = input("""
                                             Tippen Sie für 
                                                    Auszahlung  'a'
                                                    Einzahlung  'e'
                                                    Kontostand  'k'
                                                    Abbruch     'exit'
                                                    """)
                                    match kontouse:
                                        case 'a':
                                            print(f"Auszahlung von Konto {nutzerxkonto[0]}")
                                        case 'e':
                                            print(f"Einzahlung auf Konto {nutzerxkonto[0]}")
                                        case 'k':
                                            print(f"Kontostand von Konto {nutzerxkonto[0]}")
                                        case 'exit':
                                            print(exitmsg)
                                            exit()
                                        case _:
                                            print(f"Ungültige Eingabe für Konto {nutzerxkonto[0]}")
                                            break        
                                elif usekonto == "exit":
                                    print(exitmsg)
                                    exit()

                        else:
                            print("Die PIN ist falsch")
                            print(f"Sie haben noch {3-y} Versuche.")

                else:
                    print(
                        "Sie haben die maximale Anzahl PIN erreicht! \n\tDer Automat wird abgebrochen."
                    )
                    exit()
        else:
            print("Diese Nutzer ID existiert nicht.")
            break
        # else:
        #     break
else:
    print(exitmsg)
    exit()
