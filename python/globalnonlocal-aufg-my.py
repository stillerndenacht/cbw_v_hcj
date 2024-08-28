# •Erstelle eine Variable kontostand im globalen scope.
# •Erstelle zwei Funktionen einzahlen und auszahlen, die ohne Parameterübergabe den Kontostand um einen gewünschten Wertdiff verändert.
# •Es soll in der Funktion einzahlen eine Variable gebuehr erstellt und genutzt werden.
# •WertDiff soll jeweils an einzahlen und auszahlen übergeben werden.
# •Wenn der einzuzahlende Betrag > 500 ist,soll eine innere Funktion aufgerufen werden,die auf eine Meldepflicht hinweist.
# •Die innere Funktion verdoppelt den Gebührensatz gebuehr in diesem Fall, nutzen Sie hier keine Übergabe.

kontost = 0
while True:
    ex = input("Was willst du denn noch?? Tippe 'exit' um zu beenden : ")
    if ex == "exit":
        break
    def einzahlen():
        betrag = int(input("Gib Geld her : "))
        gebuhr = 0.02
        def meldepf():
            print("Sie wissen schon, dass dafür eine Meldepflicht besteht!!!")
            nonlocal gebuhr
            gebuhr *= 2
            
        if betrag > 500:
            meldepf()
            
        global kontost
        
        kontost += (betrag-(gebuhr*betrag))

    def auszahlen():
        betrag = int(input("Wieviel Geld willst du : "))
        global kontost
        kontost -= betrag

    what = input( "Was willst du tun? Einzahlen oder Auszahlen e / a : ")
    if what == "e":
        einzahlen()
    elif what == "a":
        auszahlen()

    print(f"Dein erbärmlicher Kontostand ist jetzt : {kontost} €")