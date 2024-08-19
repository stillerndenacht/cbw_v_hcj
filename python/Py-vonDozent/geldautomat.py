# Unterschiedliche Nutzer
# Kontostand, Limit, Dispo, Gebühr
# Einzahlen
# Auszahlen
# Kontostand abfragen

# Erweiterbarkeit innerhalb der Einzellisten
# Nutzer werden über den Index bestimmt
# EINDEUTIGE Liste erforderlich
usernames = ["user1", "user2", "user3"] # [0] für user 0
pins = ["1234", "5678", "9012"]
limits = [500, 1000, 750]  
kontostaende = [1000, 2000, 1500]  
gebuehren = [5, 3, 4]  

# geeignet für eine mehrdimensionale Liste
user1 = ["12345", "Matthias Hofmann", 100000 , 9847, 2 ]
user2 = ["12346","Ben Q.", 1000000, 489, 5]
user3 = ["12347","Theodor W. Ardorno", 1000000, 98411, 10] 
user4 = ["12348","Arno Grün", 100, 100, 0] 

gesamt_user = [ user1, user2, user3, user4 ]

# Variante 1:
# Nutzung der einzelnen Listen für names, pins, etc.

# PIN-Abfrage implementieren
# Anzahl der Fehlversuche 
nutzerid = input("Bitte Nutzer-ID eingeben: ")

# Überprüfen, ob der Nutzer existiert in der Liste usernames
if nutzerid not in usernames:
    print("Ungültiger Benutzername. Hier ist Ihre Karte...")
    exit() # Programm beenden

# Wo steht die PIN? Welchem Index in den Listen
# ist der Nutzer zugeordnet?
user_index = usernames.index(nutzerid) # nutzerid "user2"
# 1 (da "user2" an Index 1 in der Liste usernames steht)

versuche = 0
while versuche < 3:    
    pin = input("Bitte geben Sie Ihren PIN ein: ")
    versuche += 1
    
    # Ist die PIN korrekt?
    if pin == pins[user_index]: # :-)
        print("Willkommen, ", usernames[user_index])
        break
    else:
        print(f"PIN ist falsch, noch {3-versuche} Versuche")
else:
    print("Keine Versuche mehr möglich. Karte ist gesperrt.")  
    exit()  

# Ausgabe Menü
while True:
    print(""" 
        1 Auszahlen
        2 Einzahlen
        3 Kontostand 
        4 Beenden
    """)

    eingabe = input("Auswahl: ")

    # if elif ...
    # match 
    # Nutzt dabei ERSTMAL nur pass

    if eingabe == "1":
        break
        pass
    elif eingabe == "2":
        pass
    elif eingabe == "3":
        print("Kontostand: ",kontostaende[user_index]," €uro")
    elif eingabe == "4":
        exit()
    
    # Veriante mit match case
    # match eingabe:
    #     case "1":
    #         pass
    #     case "2":
    #         pass
    #     case "3":
    #         pass
    #     case "4":
    #         pass  

# True in Walross-Anweisung ändern

def menu():
    print(""" 
        1 Auszahlen
        2 Einzahlen
        3 Kontostand 
        4 Beenden
    """)

menu()

while (eingabe := input("Auswahl: ")) != "4":
    menu()

    if eingabe == "1":
        pass
    elif eingabe == "2":
        pass
    elif eingabe == "3":
        print("Kontostand: ",kontostaende[user_index]," €uro")

else:
    print("Geldautomat wurde beendet. ")
    exit()

