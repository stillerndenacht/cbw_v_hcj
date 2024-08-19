# Unterschiedliche Nutzer
# Kontostand, Limit, Dispo, Gebühr
# Einzahlen
# Auszahlen
# Kontostand abfragen

limit_automat = 500

# Erweiterbarkeit innerhalb der Einzellisten
# Nutzer werden über den Index bestimmt
# EINDEUTIGE Liste erforderlich
usernames = ["user1", "user2", "user3"] # [0] für user 0
pins = ["1234", "5678", "9012"]
limits = [500, 2100, 750]  
kontostaende = [1000, 2000, 1500]  
gebuehren = [5, 3, 4]  
dispo = [ 200, 500, 350 ]
# pro Tag darf maximal 9999 € eingezahlt werden
einzahlung_limit = [9999, 9999, 9999]

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
    # == 
    # Vergleich mit is nicht möglich, da mutable und immutable Data type Vergleich
    if pin == pins[user_index]: # :-)
        print("Willkommen, ", usernames[user_index])
        break
    else:
        print(f"PIN ist falsch, noch {3-versuche} Versuche")
# Wenn 3mal falsch eingegeben (Bedingung in 42 wird False)
else:
    print("Keine Versuche mehr möglich. Karte ist gesperrt.")  
    exit()  

ausbezahlt = 0
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
        abheben = False
        money = int(input("Wie viel Geld auszahlen? "))
        if money % 5 != 0:
            money -= money % 5 # Rest wird von money subtrahiert.
            print(f"Auszahlungsanforderung wird angepasst {money}")

        # Dispo darf nicht überschritten werden UND Tageslimit auch nicht
        # Tageslimit wird mit ausbezahlt verrechnet
        if money > kontostaende[user_index] + dispo[user_index]:    
            print("Nicht genügend Guthaben.")  
        elif money > limits[user_index] - ausbezahlt:
            print("Tageslimit erreicht.")  
        elif money > limit_automat:
            errormsg = f"""
            Es tut uns leid, das wir Ihre Anfrage nicht bearbeiten können.
            Diese Service-Station verfügt nicht genügend Bargeld
            Die Aktuelle summe die wir ihnen Auszahlen können beträgt 
                                {limit_automat}  
            Ein Service-Team von uns ist bereits auf den Weg um diesen 
            Fehler zu beheben. Bitte versuchen Sie es an einer anderen 
            Service-Station oder in einigen Tagen erneut.")
            """
            print(errormsg)

        else:         
            # Hinweis, wenn Kunde ins Dispo geht   
            if money > kontostaende[user_index]:
                confirm = input("Sie rutschen ins Dispo: Möchten Sie fortfahren? J/N ")
                if confirm == "J":
                    abheben = True
                else:
                    print("Sie haben kein Geld abgehoben")
            else:
                abheben = True
            
            if abheben == True:
                kontostaende[user_index] -= money  
                ausbezahlt += money
                limit_automat -= money
                print(f"Sie haben {money} € abgehoben.") 
            
            print(f"Aktueller Kontostand: {kontostaende[user_index]} €")       

 
    # ÄNDERUNG
    elif eingabe == "2":
        # Geld einzahlen
        money = int(input("Wie viel Geld einzahlen? "))
        # nur durch 5 teilbare Beträge einzahlbar
        if money % 5 != 0:
            money -= money % 5 # Rest wird von money subtrahiert.
            print(f"Einzahlung wurde angepasst: {money} ")
        
        # Aktualisierung auf dem Kontostand?
        if money > einzahlung_limit[user_index]:
            print("Sie haben innerhalb kurzer Zeit \
                  größere Beträge eingezahlt. Bitte Meldepflicht beachten. ")
      
        kontostaende[user_index] += money
        limit_automat += money
        einzahlung_limit[user_index] -= money
    
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

# Variante mit Walross genauso wie Variante 1
# In die pass-Abschnitte kann der Code übernommen werden.
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

