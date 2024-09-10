# QUESTION 284
# If you need a function that does nothing, 
# what would you use instead of XXX? (Choose two.)

def idler():
    XXXXX
    # None ist eine Anweisung, daher macht die Funktion nicht nichts mehr.
    # Dieses None sorgt auch nicht dafür, dass None zurückgegeben wird.
    # Sondern dies macht eine Funktion implizit, wenn kein return verwendet wird.
    # Es muss aber in Funktionen immer min. 1 Anweisung stehen.  
    # kein return => None

idler()
# A. pass
# B. return
# C. exit
# D. None

# exit ist ein Funktionsname, mit dem man das Programm beenden.
# exit()
# None 
def nichts():
    2+3
    # break (Beenden nur für Schleife, Funktionen mit return)
    # continue (geht nicht, da keine nächste Iteration => Funktion ist keine Interation)

a = nichts()
print(a) # führt zu None 
# Lösung: AB

