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
    # Klassenvariablen
    # gültig pro Klasse und nicht pro Instanz !
    # Speicherbereich der ganzen Klasse !
    # es ist direkt unter class definiert und hat KEIN self,
    # da sie keine Bindung mit einem Objekt hat, sondern mit der Klasse selbst
    kunde = "FAG31241"
    # Wie viele Konten haben wir?
    anzahl = 0

    def __init__(self, kontonummer, kunde, kontostand):
        # public bedeutet, uneingeschränkter Zugriff nach außen
        self.kontonummern = kontonummer
        self.kontostand = kontostand
        # private wird durch __ VOR dem Variablennamen 
        # der Instanzvariable genutzt, um eine
        # private Variable zu definieren.
        # Idee: Kein Zugriff von außen
        # Encapsulation
        self.__kunde = kunde
        # Erzeugte Konten zählen
        Konto.anzahl += 1
        
    # Möglichkeit 2: Geld abheben durch Klasse Konto
    # Eine zentrale Stelle ist hierfür zuständig
    # Änderungen nur an einer Stelle erforderlich
    # Plausibilitäten einfach umsetzbar 
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

    # Kunde setzen auf saubere Weise :-)
    def inhaber_wechsel(self, neuer_inhaber):
        self.__kunde = neuer_inhaber # bestehende Instanzvariable private
        print(self.__kunde) 
        # Instanzvariable kann auch außerhalb von __init__ erstellt werden.
        # In anderen Sprachen nicht möglich 
        self.kunde = "Fernando" # neu angelegte Instanzvariable
        # self.kunde ist NICHT self.__kunde
        # weil es ein anderer Variablenname ist
        # (unterschiedliche Sichtbarkeiten = unterschiedliche Variablennamen)
        kunde = "Lea" # nur lokal in inhaber_wechsel
        print(self.kunde, self.__kunde, kunde, Konto.kunde)
        # Konto.kunde ist die Variable, die über alle Konten hinweg gilt

    # @staticmethod NICHT relevant für die Zertifizierung 
    @staticmethod
    def greet():
        print("Grüße aus der Klasse Konto.")


k1 = Konto("3493", "Fritz", 800)
k1.auszahlung(200)

k2 = Konto("3498", "Veit", 10_000)
# Zugriff auf Klassenvariablen über den Klassennamen 
print("Anzahl Konten:", Konto.anzahl)

# Auslesen von Kontostand jederzeit möglich 
print(k1.kontostand)
# Wer ist eigentlich für das Setzen des Kontostandes zuständig?
# Zugriff durch Programmierer kann ungewollt sein
# Erschweren der Fehlersuche, Seiteneffekte, ... 
# Daher: Die Klasse Konto verwaltet den Kontstand, also sollte nur diese
# den Kontostand auch ändern können. 
k1.kontostand = 1_000_000

# Verwendung von staticmethod
# Methode greet() mit dem Klassennamen aufrufen 
Konto.greet()

# Möglichkeit 1: "Implementierung von Abfragen außerhalb der Klasse"
# Zuständigkeit? Evtl. Redundanz, da man an mehreren Stellen im Programm evtl. 
# Geld abheben muss, Änderungen müssen dann überall übernommen
# Wartbarkeit und Wiederverwendbarkeit?
betrag = 200
wallet = 0
if (betrag <= k1.kontostand):
    wallet += betrag


print(k1.kontostand)

# Python bietet KEINEN technischen Zugriffsschutz auf private Variablen
# name mangling macht es möglich !
# Vorteile: Programmierer muss eine Intention haben, die Variable zu ändern.
k1._Konto__kunde = "Matthias"
print(k1._Konto__kunde)

k1.inhaber_wechsel("Claus")
# Keinen Zugriff auf Kunde
# print(k1.__kunde)
# k1.__kunde = "Matthias"

