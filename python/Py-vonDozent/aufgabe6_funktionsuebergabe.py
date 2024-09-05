jahreseinkommen_liste = [15000, 34000, 45000, 50000, 55000, 60000, 75000, 100000, 120000 ] # Hier wurde eine Liste erstellt
 
def taxes(x):                       # Sollte jemand mehr als 20000 im jahr verdienen wird dies pauschal besteuert mit 5%  
    if x >= 20000:
        return x * 0.05             # X steht für den eintrag bzw den wert den an x übergeben wurde
    return 0                        # Sollte jemand dies nicht erfüllen gibt er 0 zurück
 
def taxes2(x):                      # Diese Steurn sollen erst greifen wenn x (hier einkommen) über einen gewisse summe drüber ist.
    if x <= 35000:
        return x * 0.22
    elif x <= 50000:
        return x * 0.33
    elif x <= 100000:
        return x * 0.35             # Fehler?!!? Da so weniger bleibt als wenn man weniger verdient.
    else:
        return x * 0.55

# c ist die Liste mit dem Einkommen
# modell ist das gewählte Steuermodell (taxes oder taxes2)
def taxes_calc (c, modell):                 #c Steht für die lsite die wir dieser Functionübergeben wollen.
    steuern = []                    # Hier wird eine Leere Liste erzeugt
    was_bleibt = []                 # Hier wird eine Leere Liste erzeugt        
    for x in c:
        tarif = modell(x)                     # Hier gehen wir in eine for-Schleife diese erzeugt x und sucht in c danach
        steuern.append(tarif)
        was_bleibt.append(x-tarif)
        # a = taxes(x)                # a wird erzeugt und weis ihn das ergebnis aus der Funktion taxes zu.
        # b = taxes2(x)               # b wird erzeugt und weis ihn das ergebnis aus der Funktion taxes2 zu.
        # steuern.append(a+b)         # Fügt der Liste steuern die Werte von a + b hinzu
        # was_bleibt.append(x-(a+b))  # Fügt der Liste was_bleibt die Werte von x - a + b hinzu.
   
    return steuern, was_bleibt      # gibt die Liste steuern und was_bleibt aus
 
 
print(taxes_calc(jahreseinkommen_liste, taxes))    # printet und für die Funktion taxey_calc aus mit der Liste jahreseinkommen_liste





def steuern_rechnen(steuer_modell, einkommen_liste):
   
    return [steuer_modell(einkommen) for einkommen in einkommen_liste]
 
def gestaffelte_steuern(einkommen):
   
    if einkommen <= 20000:
        return einkommen * 0.1
    elif einkommen <= 50000:
        return 20000 * 0.1 + (einkommen - 20000) * 0.2
    else:
        return 20000 * 0.1 + 30000 * 0.2 + (einkommen - 50000) * 0.3
 
def pauschal_steuern(einkommen):
    if einkommen <= 20000:
        return 0
    else:
        return einkommen * 0.2
 
 
einkommen = [15000, 30000, 60000]
 
gestaffelte_steuer = steuern_rechnen(gestaffelte_steuern, einkommen)
print(gestaffelte_steuer)
 
pauschale_steuer = steuern_rechnen(pauschal_steuern, einkommen)
print(pauschale_steuer)