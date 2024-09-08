import math


print("\n----------Aufgabe 1a -----------------\n")
print("""
      Eine Funktion ist eine Zusammenstellung von Anweisungen 
      unter einem gemeinsamen Identifikator, dem Funktionsnamen. 
      Sie dient dazu diese Abfolge von Befehlen, mit ggf. 
      unterschiedlichen Werten/Argumenten an anderer Stelle 
      im Programmablauf beliebig oft durchzuführen. 
      Wobei die Werte der Funktion mit übergeben werden.
      """)

print("\n----------Aufgabe 1b -----------------\n")

def kreis(r):
    umfang = 2*math.pi*r
    flaeche = math.pi*(r**2)
    return umfang, flaeche

r1 = 2
r2 = 10
r3 = 5

print(f"Radius r = {r1} \tKreisumfang : {kreis(r1)[0]} \tKreisfläche : {kreis(r1)[1]} das Ergebnis hat mich kurz verwirrt...")
print(f"Radius r = {r2} \tKreisumfang : {kreis(r2)[0]} \tKreisfläche : {kreis(r2)[1]}")
print(f"Radius r = {r3} \tKreisumfang : {kreis(r3)[0]} \tKreisfläche : {kreis(r3)[1]}")

print("\n----------Aufgabe 1c-----------------\n")

def kreis2(r=1):
    umfang = 2*math.pi*r
    flaeche = math.pi*(r**2)
    return umfang, flaeche

print(f"Radius r = Default 1 \tKreisumfang : {kreis2()[0]} \tKreisfläche : {kreis2()[1]} Hier mit Default-Parameter")
print(f"Radius r = {r3} \tKreisumfang : {kreis2(r3)[0]} \tKreisfläche : {kreis2(r3)[1]} Zum Vergleich")
print(f"Radius r = 6 \tKreisumfang : {kreis2(r=6)[0]} \tKreisfläche : {kreis2(r=6)[1]} Hier mit benanntem Parameter")

print("\n----------Aufgabe 1d-----------------\n")

liste = ["Max", "Hanah","Takata","Khaled"]
print(id(liste))

def print_name(list):
    print(id(list))
    list2 = []
    for i in list:
        print(i)
        print(i[::-1])
        list2.append(i[::-1])
        
    list.extend(list2)

print_name(liste)
print(liste)
print("Nein die Liste muss nicht zurückgegeben werden weil liste und list Referenzen auf die selbe Speicheradresse sind (siehe die id-Ausgabe ganz oben in der Aufgabe. Die list.extend-Methode schreibt also direkt in die Original-Liste) - Das war übrigens ein Schreckmoment und die größte Schwierigkeit dieser Aufgabe, denn wenn man in der for-Schleife direkt in die Liste schreibt, verlängert die sich ins Unendliche.... ")

print("\n----------Aufgabe 1e-----------------\n")

print("global Variablen sind solche, die von überall im Code erreichbar sind, wenn sie innerhalb von Funktionen deklariert werden, muss man sie mit dem Schlüsselwort global als global deklarieren. Nonlocal ist ein Schlüsselwort, um eine Variable die innerhalb einer Funktion deklariert wird auch für die umgebende Funktion zugänglich zu machen. Sie wird aber nicht global zugänglich, sondern nur innerhalb der Funktion und ihrer umgebenden/äußeren Funktion.")

print("\n----------Aufgabe 1f-----------------\n")

worte = ["Max", "Hanah","Takata","Hannah", "Khaled"]

def wortekey(x):
        return x[-1:-2:-1]
    
worte.sort(key=wortekey)
print(worte)

print("Die Sortfunktion benutzt den Key, um danach die Sortierung zu richten. Sie gibt ein Element der Liste in die Funktion, wartet auf die Rückgabe, welche hier der letzte Buchstabe des Elements ist, und benutzt diese Rückgabe als Sortierkriterium. (Ich habe absichtlich nicht einfach nur das Wort gedreht.)")

print("\n----------Aufgabe 2a-----------------\n")

print("Eine Lambda ist eine Funktion die ohne Funktionsnamen auskommt und ein Kurzschreibweise einer normalen Funktion darstellt. Aufbau: lambda  <Eingabe> : <Anweisung>, Anweisung ist auch Rückgabe. Um sie an anderer Stelle aufzurufen muss man ihr einen Identifier zuweisen")

print("\n----------Aufgabe 2b -----------------\n")

autos_ps = {"VW Golf":85, "Ford Mustang": 450, "BMW M3": 425, "Audi A7": 500}
print(autos_ps)
def func(b):
    b = list(b)
    b[1]*=1.2    
    return b
matts_tuning_werkstatt = dict(map(func, autos_ps.items()))

print(matts_tuning_werkstatt)
# Als map lambda war das einfach nicht möglich...

matts_tuning_werkstatt1 = list(map(lambda  x : x[1]*1.2, autos_ps.items()))
matts_tuning_werkstatt2 = list(map(lambda  x : x , autos_ps.keys()))

print(matts_tuning_werkstatt1)
print(matts_tuning_werkstatt2)

print("\n----------Aufgabe 2c-----------------\n")

worte2 = ["Max", "Hanah","Takata","Hannah", "Khaled"]
buchst = input("""
                Wähle einen Buchstaben
                der im Wort aus der Liste enthalten sein soll
                und bekomme eine Liste der passenden Worte : \t""").lower()

wortefilter = list(filter(lambda x : [x for i in x if i.lower() == buchst], worte2))
print(wortefilter)

print("\n----------Aufgabe 3a -----------------\n")

print("""
      eine Rekursion ist es, wenn eine Funktion sich innerhalb des eigenen Ablaufs selbst aufruft.
      Vorteil: der Code kann sehr kurz sein. Gut geeignet für Operationen deren Ergebnis
      bis zu einem bestimmten Abbruch-Kriterium zurück in die Operation gegeben wird.
      Nachteil: das In-sich-selbst-Aufrufen kann schnell zu unendlichen Rekursionen führen,
      wenn das Abbruchkriterium nicht korrekt definiert wird, oder gar nicht aus der Funktion
      heraus erreicht werden kann. Außerdem ist der Verlauf der Operation mitunter schwer nachvollziehbar.
      """)

print("\n----------Aufgabe 3b -----------------\n")
print("""
                                        # es fehlt eine Initialisierung von pliste
def rekursive_Liste(n):
     if n <=0:
          return 0
     else:
          liste = rekursive_liste(n-1)  # man braucht keine neue Bezeichnung,
                                        # um die Funktion aufzurufen.
                                        # außerdem wird ist Liste in der def mit Großbuchstabe
                                        #  
          pliste.append(n)              # da die entstehende Liste mit der kleinsten Zahl
                                        # beginnt macht es keinen Sinn, die von der größten
                                        # Zahl beginnende Funktion immer hinten an die Liste anzuhängen.
                                        # außerdem muss das Ergänzen von pliste vor dem Neu-Aufruf der Funktion
                                        # kommen, da sonst n selbst in der Liste fehlt
      
          return rekursive_Liste        # auch die Funktion selbst zurück zu geben ist nicht sinnvoll
      
                                        # es fehlt ein Funktionsaufruf
      
      --------- so wäre es richtig --- siehe Code
      """)
pliste = []
n = 10
def rekursive_Liste(n):
    if n <=0:
          return pliste
    else:
          pliste.insert(0,n)
          rekursive_Liste(n-1)

rekursive_Liste(n)
print(pliste)       
        

print("\n----------Aufgabe 3c-----------------\n")

print("""
    Ein Generator ist eine loop-Funktion, die einen Haltepunkt hat,
    an dem sie das Ergebnis von je einem Durchlauf ausgibt.
    Anschließend wartet sie, mit dem gemerkten aktuellen Endpunkt, 
    auf einen erneuten Aufruf, um den nächsten Loop zu durchlaufen.
      """)

print("\n----------Aufgabe 3d -----------------\n")

hauptstaedte = ["Berlin","Paris","London","Rome","Madrid","Tokyo","Beijing","Moscow","Cairo","Brasilia"]

def give(staedte):
     for i in range(len(staedte)):
        print(f"die {i+1}'te Stadt ist {staedte[i]}")
        yield staedte[i]

stadt = give(hauptstaedte)  
next(stadt)
next(stadt)
next(stadt)

print("\n .... als loop ....\n")

stadt2 = give(hauptstaedte)
for j in range(len(hauptstaedte)):
    next(stadt2)


print("\n----------Aufgabe 4a -----------------\n")

print("""
      eine Klasse ist eine Bauanleitung für ein Objekt.
      Sie enthält Eigenschaften(Eigenschaftshülsen) und Methoden.
      Ein Objekt ist eine Instanz einer Klasse, 
      also nach dieser Bauanleitung hergestellt.
      Es hat konkrete Eigenschaften und auf es können die Methoden
      angewendet werden.
      """)

print("\n----------Aufgabe 4b -----------------\n")

class wohnung:
    def __init__(self, name, preis, quadrmeter, mieter="0"):
        self.name = name
        self.preis = preis
        self.quadrmeter = quadrmeter
        self.mieter = mieter

    def info(self):
        print(f"""
        Name der Wh             : {self.name}
        Preis der Wh            : {self.preis} €
        Grösse der Wh           : {self.quadrmeter} m2
        Aktueller Mieter der Wh : {self.mieter}    
        """)

    def __str__(self):
        ausg = f"""
        Name der Wh             >> {self.name}
        Preis der Wh            >> {self.preis} €
        Grösse der Wh           >> {self.quadrmeter} m2
        Aktueller Mieter der Wh >> {self.mieter}    
        """
        return ausg

    def __lt__(self, value):
        if self.quadrmeter < value.quadrmeter:
            return True
        else:
            return False
    
    
    def ein_leer(self, ein="0"):
        if not ein == "0":
            self.mieter = ein
            print(f"Wh : {self.name} wurde bezogen durch {self.mieter}")
        else:
            print(f"Wh : {self.name} wurde geräumt")

    def aus_leer(self, aus="0"):
        if aus == "0":
            print(f"Wh : {self.name} Der Mieter {self.mieter} zieht aus.")
            self.ein_leer()
        elif self.mieter == aus:
            print(f"Wh : {self.name} Der Mieter {self.mieter} zieht aus.")
            self.ein_leer()


class mieter:
    def __init__(self, mname, alter):
        self.mname = mname
        self.alter = alter


opfer1 = mieter("Gerkan", 65)
opfer2 = mieter("Marg", 75)
opfer3 = mieter("Partner", 35)

whg1 = wohnung("whg1", 1000, 50, opfer3.mname)
whg2 = wohnung("whg2", 2000, 80, opfer2.mname)
whg3 = wohnung("whg3", 4000, 150, opfer1.mname)

whg1.info()
whg2.info()
whg3.info()

print("\n----------Aufgabe 4c -----------------\n")

print(whg3)

print("\n----------Aufgabe 4d -----------------\n")

print(whg1 < whg2)

print("\n.... Test der Methoden .... \n")

whg1.ein_leer()
whg2.aus_leer()
whg2.ein_leer("Müller")

whg1.info()
whg2.info()
whg3.info()

print("\n----------Aufgabe 4e -----------------\n")

print("""
    Vererbung bedeutet, dass eine (Unter)Klasse von einer (Ober)Klasse
    alle Eigenschaftshülsen und Methoden übernimmt.
    Ggf. können noch zusätzliche Methoden, Eigenschaftshülsen dazu
    kommen oder die bestehenden Methoden überschrieben werden.
""")

class penthouse(wohnung):
    def __init__(self, name, preis, quadrmeter, mieter="0", kamin=True):
        super().__init__(name, preis, quadrmeter, mieter)
        self.kamin = kamin

    def info(self):
        print(f"""
        Name der Wh             : {self.name}
        Preis der Wh            : {self.preis} €
        Grösse der Wh           : {self.quadrmeter} m2
        Aktueller Mieter der Wh : {self.mieter}
        Kamin                   : {self.kamin}    
        """)
    
    def __str__(self):
        ausg = f"""
        Name der Wh             >> {self.name}
        Preis der Wh            >> {self.preis} €
        Grösse der Wh           >> {self.quadrmeter} m2
        Aktueller Mieter der Wh >> {self.mieter}
        Kamin                   >> {self.kamin}     
        """
        return ausg

whgph4 = penthouse("whgph4", 6000, 300, opfer2.mname, False)
print(whgph4)
whgph4.info()



print("\n----------Aufgabe 4-----------------\n")