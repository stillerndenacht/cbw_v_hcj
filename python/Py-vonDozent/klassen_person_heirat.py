class Person:
    def __init__(self, vorname, nachname, groesse=0.0, famstand="ledig"):
        self.vorname = vorname
        self.nachname = nachname
        self.groesse = groesse
        self.famstand = famstand
        self.ehepartner = None
 
    def set_ehepartner(self, ehepartner):
        self.ehepartner = ehepartner
        self.famstand = "verheiratet"

    def set_nachname(self, nachname):
        self.nachname = nachname

    def heirat(self, ehepartner, new_nachname=""):
        self.famstand = "verheiratet"

        self.ehepartner = ehepartner
        ehepartner.set_ehepartner(self)
        
        if new_nachname == "doppel":
            self.nachname = self.nachname + " " + ehepartner.nachname
        elif new_nachname == "doppeldoppel":
            self.nachname = self.nachname + " " + ehepartner.nachname
            ehepartner.set_nachname(self.nachname)
        elif new_nachname == "erster":
            ehepartner.set_nachname(self.nachname)
        
        print(f"Hochzeit neuer Name: {self.vorname} {self.nachname}")
 
    def scheidung(self, new_nachname):
        self.famstand = "geschieden"
        self.nachname = new_nachname
        print(f"Scheidung neuer Name: {self.vorname} {self.nachname}")
 
    # magic Methode __str__ verändert die Ausgabe von print(pers1)
    def __str__(self):
        perstxt = f"Ich heiße {self.vorname} {self.nachname} und bin {self.famstand}" + \
        f" mit {self.ehepartner.vorname} {self.ehepartner.nachname}."
        # perstxt += f" Verheiratet mit {self.ehepartner}"
        return perstxt
    
pers1 = Person("Christopher", "Lambert")
pers2 = Person("Audrey", "Hepburn")
pers3 = Person("Sean", "Connery")
pers4 = Person("Margot", "Robbie")

# pers1.heirat(pers4, "doppel")
pers4.heirat(pers1, "doppeldoppel")

print(pers1.ehepartner)
print(pers4.ehepartner)
# print(pers4)


 