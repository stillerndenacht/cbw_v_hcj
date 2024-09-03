class Person:
    def __init__(self, name, alter, stadt):
        self.name = name
        self.alter = alter
        self.stadt = stadt
 
    def vorstellen(self):
        print(f"Hallo, ich bin {self.name}. Ich bin {self.alter} Jahre alt und wohne in {self.stadt}.")
 
    def älter_werden(self):
        self.alter += 1
        print(f"Happy Birthday! {self.name} ist jetzt {self.alter} Jahre alt.")
 
    def __str__(self):
        return f"Person: {self.name}, {self.alter} Jahre, wohnt in {self.stadt}"
 
person1 = Person("Max Mustermann", 30, "Berlin")
person2 = Person("Anna Meier", 25, "München")
 
 
person1.vorstellen()
person2.älter_werden()
person2.vorstellen()  
print(person2)

# Zuweisung zu infos ist ein String, keine Kopie der Referenz !
infos = person2
print(infos)