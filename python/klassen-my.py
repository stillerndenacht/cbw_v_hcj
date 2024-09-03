class Person:
    def __init__(self, vorname, nachname, groesse=0.0, famstand="ledig"):
        self.vorname = vorname
        self.nachname = nachname
        self.groesse = groesse
        self.famstand = famstand

    def heirat(self, new_nachname):
        self.famstand = "verheiratet"
        self.nachname = new_nachname
        print(f"Hochzeit neuer Name: {self.vorname} {self.nachname}")

    def scheidung(self, new_nachname):
        self.famstand = "geschieden"
        self.nachname = new_nachname
        print(f"Scheidung neuer Name: {self.vorname} {self.nachname}")

    # magic Methode __str__ verändert die Ausgabe von print(pers1)
    def __str__(self):
        perstxt = f"Ich heiße {self.vorname} {self.nachname} und bin {self.famstand}."
        return perstxt

    def __eq__(self, value):
        self.famstand == value.famstand


pers1 = Person("Christopher", "Lambert")
pers2 = Person("Audrey", "Hepburn")
pers3 = Person("Sean", "Connery")
pers4 = Person("Margot", "Robbie")

print(pers1.famstand)
pers1.heirat("Walken")
# pers2.heirat()
print(pers2.famstand)

# Magic Methoden Ausgaben
print(pers1)
pers1 == pers2
