# Was ist Objektorientierung?
# Paradigma zur Entwicklung
# Gliederung des Codes in Klassen 
# Kategorien von Objekten 
# Wir können "Dinge" anhand von Eigenschaften beschreiben
# z.B.: Monitor: Farbe, Größe, Fabrikat, Material, Seriennummer, u.v.m.
# Kategorien von Objekten nennt man Klassen
# Vorlagen für Objekte, d.h. beschreiben die Gemeinsamkeiten, damit
# man Objekte einer Kategorie zuordnen kann.
# Eine Klasse legt einen Standard fest, was einem Objekt zu eigen sein soll.
# Aus einer Klasse (Vorlage, Schablone) kann ich beliebig viele Objekte erzeugen.
# Neben den Eigenschaften gibt es Aktionen, die man mit Hilfe 
# der Objekte durchführen kann.
# Monitor: An- und Ausschalten, Höhe verstellen, Winkel verstellen,
# Helligkeit einstellen
# Vorteile: Verwaltung von Eigenschaften und Aktionen an einer Stelle
# Gleichartigkeit der Objekte
# Objektorientierung sind standardisierte dictionaries mit Aktionen
# Interaktionen und Abhängigkeiten zwischen den Klassen
# z.B. Multiplizitäten, "Ist ein" und "Hat ein"-Beziehung
# Modellierungsfragen: Welche Klassen gibt es und in welcher 
# Beziehung stehen sie zueinander? 

# Klassen werden mit dem Schlüsselwort class definiert 
class Monitor:
    # Wie schreibt man eine minimale Klasse
    # pass

    # "Konstruktor" 
    # Mit Hilfe des Konstruktors werden Objekte erzeugt.
    # Initialisierungsmethode
    # __new__(): Wird ein leeres Objekt erzeugt (vom System automatisch) 
    # __init__(): Befüllt dieses Objekt mit Attributen
    # Es kann nur einen Konstruktor geben 
    # Folglich gibt es keine Überladung von Methoden in Python 
    # Überladung: Mehrere Methoden mit demselben Namen, aber unterschiedlichen
    # Parameterlisten in Python NICHT MÖGLICH

    # Eigenschaften einer Klasse werden in Python innerhalb von __init__ definiert
    # Eigenschaften heißen INSTANZVARIABLEN (für jedes Objekt eigene Werte,
    # aber gleiche Eigenschaften), werden mit self gekennzeichnet
    def __init__(self, fabrikat, groesse, farbe, anstellwinkel=0, 
                 aufloesung="Full HD"):
        print("Objekt wird erzeugt")
        self.fabrikat = fabrikat
        self.groesse = groesse
        self.farbe = farbe
        self.anstellwinkel = anstellwinkel
        self.aufloesung = aufloesung
        self.isOn = False
        # lokale Variable und Instanzvariable 
        # print(id(self.fabrikat), id(fabrikat))

    # Im Kontext von Klassen heißen "Funktionen" Methoden :-).
    # Weitere Methoden (Aktionen):
    # Methoden sind wie Funktionen aufgebaut und enthalten dieselben
    # Sprachelemente
    def switch(self):
        if self.isOn == False:
            self.isOn = True
            print("Monitor ist an")
        else:
            self.isOn = False
            print("Monitor ist aus")

    # keine Typsicherheit trotz : float
    def winkel_stellen(self, winkel : float):
        if -40 < winkel < 40:
            self.winkel = winkel
            print("Winkel ist auf", winkel, "gestellt")
        else:
            print("Falscher Winkel")

    # magische Methoden 
    # Hiermit kann man etwa Objekte untereinander vergleichbar machen oder
    # sich ein Objekt aus String ausgeben lassen ohne weiteren Methodenaufruf
    # __eq__ ist der == Operator
    # In der Elternklasse ist == ein Vergleich auf die Referenz
    # (sind beide Objekte an derselben Stelle im Speicher?)
    # Hier überschreiben wir den Sinn von == im Bezug auf die Bildschirm-
    # größe
    def __eq__(self, value):
        if self.groesse == value.groesse:
            return True
        else:
            return False 

    # gt ist >
    def __gt__(self, value):
        if self.groesse > value.groesse:
            return True
        else:
            return False 

    # lt ist <, d.h. zum Beispiel monitor1 < monitor2
    # Es werden an beiden Seiten Operanden vom Typ Monitor erwartet
    def __lt__(self, value):
        if self.groesse < value.groesse:
            return True
        else:
            return False
        
    # String-Repräsentation eines Objektes erzeugen
    def __str__(self):
        string = f"Der Monitor ist vom Fabrikat {self.fabrikat} und hat die Größe {self.groesse}"
        return string

    # Es wird immer der zuletzt interpretierte Konstruktor / Methode genutzt
    # def __init__(self, test):
    #     print("Objekt wird erzeugt, 2")
    #     self.test = test

# Objekte werden in Python folgendermaßen erzeugt:
# Die ersten 3 Argumente MÜSSEN übergeben werden
# mon ist self (wird automatisch übergeben)
mon = Monitor("Samsung", 24, "schwarz")
mon2 = Monitor("Philipps", 27, "weiß", 10, "Ultra HD")
# keyword-Argument aufloesung=
mon3 = Monitor("Philipps", 24, "schwarz", aufloesung="Ultra HD")

# Methoden sind ebenfalls assoziiert mit einer Instanz bzw. einem Objekt
mon3.switch()
mon3.winkel_stellen(30)

# mon2 = Monitor("Sony")

# Zugriff auf Instanzvariablen
print(mon.fabrikat)
print(mon2.fabrikat)
print(mon3.aufloesung, mon3.anstellwinkel)

# Im Speicher verschiedene Objekte
print(id(mon), id(mon2))

# Überschriebene Methoden / Operatoren durch __eq__
# == ist hier für zwei Objekte vom Typ Monitor gültig. 
if mon == mon3:
    print("Selbe Bildschirmgröße")

if mon2 == mon3: # 27 zu 24
    print("Selbe Bildschirmgröße")

if mon2 > mon3: # 27 zu 24
    print("mon2 ist größer")

# Anwendung von __str__()
print(mon2) # ohne weiteren Aufruf einer Methode

class Test:
    def __init__(self, wert) -> None:
        self.wert = wert

t1 = Test(10) 
t2 = Test(10)

print(t1 == t2) 
# Operater der Elternklasse, daher "überschreiben"
# == vergleicht hier die id und keinen Inhalt