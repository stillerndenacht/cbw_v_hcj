# QUESTION 320
# If any of a class's components has a name that starts with 
# two underscores (___), then:

# A. the class component's name will be mangled
# B. the class component has to be an instance variable
# C. the class component has to be a class variable
# D. the class component has to be a method

# Lösung: A

class Auto:
    def __init__(self, bezeichnung, ps):
        self.__bezeichnung = bezeichnung # "private" Instanzvariable
        self.__ps = ps

    def setPS(self, ps):
        if ps > 0:
            self.__ps = ps 
        
    def show_bezeichnung(self):
        print("show bezeichnung", self.__bezeichnung)
        print("show bezeichnung", self.hupe) # hupe wurde außen definiert
        # und gehört nicht zum Standard der Klasse 
        # von innerhalb der Klasse kann ich nicht auf den in Zeile 
        # 27 gesetzten Wert zugreifen, weil wir hier __bezeichnung in der Klasse
        # definiert haben.  

a = Auto("BMW Test", 150)
a.__bezeichnung = "BMW" # eine neue Instanzvariable NUR FÜR a anlegen
a.hupe = "MIIIEEEP"
a.show_bezeichnung()

print(dir(a))

# a._Auto__ps = -10 # Setzen eines nicht plausiblen Wertes. 
a.setPS(-10) # saubere Lösung
print(a._Auto__ps)

print(a._Auto__bezeichnung) # name mangling (Verschleierung des Namens)
print(a.__bezeichnung)
# valide, aber nicht empfehlenswert :-)
# print(a.__bezeichnung) # _Auto__bezeichnung # Zugriff nicht möglich 
