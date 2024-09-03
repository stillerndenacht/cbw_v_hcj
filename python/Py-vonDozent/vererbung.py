# Vererbung in Python
# Wir setzen sog. "Ist ein"-Beziehung in Code um
# Die Elternklasse ist eine Teilmenge im Hinblick auf ihre Eigenschaften
# und Methoden der Kindklasse
# Je weiter wir in der Verbungshierarchie (also im Stammbaum)
# heruntergehen, desto mehr Eigenschaften / Aktion enthalten diese in der Regel
# d.h. diese sind "spezialisierter"
# Klassen in den oberen Ebenen verallgemeinern
# z.B. Auto - E-Auto
# Bildschirm - Fernseher
# Bildschirm - Monitor
# Bildschirm - Monitor - Mobilmonitor
# Konto - Girokonto (Erweiterung von Konto)

# Wie setzt man das in Python um?
# Überladen ist nicht möglich, aber Überschreiben schon !
# Überschreiben bedeutet, dass Methoden der Elternlasse
# neu implementiert werden können (wir geben eine andere
# Semantik / Geschäftslogik) als in den Elternklassen

# Konto erbt automatisch - wie alle Klassen - von object
class Konto:
    def __init__(self, kontonummer, kunde, kontostand):
        self.kontonummer = kontonummer
        self.kunde = kunde
        self.kontostand = kontostand

    def auszahlung(self, betrag):
        if betrag <= self.kontostand:
            self.kontostand -= betrag
            print(f"Auszahlung von {betrag} erfolgreich.")
            return True
        else:
            print("Nicht genügend Guthaben.")
            return False

    def einzahlung(self, betrag):
        self.kontostand += betrag
        print(f"Einzahlung von {betrag} erfolgreich.")

# Vererbung in Python funktioniert grundsätzlich so wie in anderen Sprachen
# Die Klassen, von denen abgeleitet wird, stehen in Klassern dahinter
# Mehrfachvererbung ist möglich
# Vererbung ermöglicht Wiederverwendung von Code und Vermeidung von Redundanz
class Girokonto(Konto):
    def __init__(self, kontonummer, kunde, kontostand, dispo, dispozins):
        # Aufruf des Konstruktors der Elternklasse
        super().__init__(kontonummer, kunde, kontostand)
        # Erweiterung der Klasse Konto in Girokonto durch diese neuen Eigenschaften
        self.dispozins = dispozins
        self.dispo = dispo

    # auszahlung überschreibt die Methode auszahlung der
    # Elternklasse, da hier ja ein Dispo eingeräumt wird 
    # Damit ändere ich die Geschäftslogik für Girokonten,
    # verwende aber Eigenschaften wie Kontostand aus der 
    # Elternklasse wieder.
    # Die Anzahl der Argumente in den abgeleiteten Klassenmethoden
    # können variieren (hier: test). 
    def auszahlung(self, betrag, test):
        if betrag <= self.kontostand + self.dispo:
            self.kontostand -= betrag
            print(f"Auszahlung von {betrag} erfolgreich.")
            return True
        else:
            print("Nicht genügend Guthaben.")
            return False
            

# Girokonto braucht alle Eigenschaften und Methoden
# der Klasse Konto, ansonsten wäre Girokonto kein
# vollständiges Konto.
# Wir verwenden also die init-Methode von Konto und die eigene
# __init__ Methode in Girokonto, um das Objekt vollstänig zu 
# erzeugen.

giro_nils = Girokonto("123456789", "Nils", 100, 2000, 0.01)

# Auszahlung ist in Girokonto implementiert.
# Diese hat eine spezifische Geschäftslogik nur für Girokonten
# Daher ist sie zweimal vorhanden (einmal in Konto und einmal 
# in Girokonto). Hier wird sie in der Klasse Girokonto
# aufgerufen. 

giro_nils.auszahlung(100, True)

k1 = Konto("3493", "Fritz", 800)
k1.auszahlung(200)

# Was würde passieren, wenn ich den folgenden Aufruf tätige?
# Einzahlung ist für alle Kontenarten gleich
# Es gibt in der Klasse Girokonto keine Methode einzahlung
# Daher wird die Mehode einzahlung von der Elternklasse verwendet.
# Diese Methode einzahlung ist kompatibel mit ALLEN
# von Konto abgeleiteten Klassen. Ich kann sie mit allen
# Kontenarten verwenden. 
giro_nils.einzahlung(150)

print(giro_nils.kontostand)