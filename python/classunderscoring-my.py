class Auto:
    def __init__(self, bezeichnung, ps):
        self.__bezeichnung = bezeichnung  # "private" Instanzvariable
        self.__ps = ps

    def setPS(self, ps):
        if ps > 0:
            self.__ps = ps

    def show_bezeichnung(self):
        print("show bezeichnung", self.__bezeichnung)
        print("show bezeichnung hupe", self.hupe)

    def show_bezeichnung2(self, __bezeichnung): # diese Methoden überschreibt das ursprüngliche Argument
        self.__bezeichnung = __bezeichnung      # man übergibt das Argument mit der Funktion, siehe unten beim Funktionsaufruf
        print("show bezeichnung2", self.__bezeichnung)
        print("show bezeichnung2", self.__bezeichnung)
        print("show bezeichnung2 hupe", self.hupe)

    def show_bezeichnung3(self):        # diese Methode beruht auf https://docs.python.org/3/reference/expressions.html#index-5
        print("show bezeichnung3", self.__bezeichnung) # hier kommt das überschriebene __bezeichnung aus show bezeichnung2
        print("show bezeichnung3", self.__bezeichnung__) # dort steht, wenn der Name mind 2 Underscores angehängt hat wird er nicht gemangelt
        print("show bezeichnung3 hupe", self.hupe)      

a = Auto("BMW Test", 150)
a.hupe = "MIIIEEEP"
a.show_bezeichnung()

a.__bezeichnung = "BMW show2"
a.show_bezeichnung2(a.__bezeichnung) # hier wird das neue __bezeichnung übergeben

a.__bezeichnung__ = "BMW show3"
a.show_bezeichnung3()

print(dir(a))
