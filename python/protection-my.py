# wirklich sicher ist Python nicht....
class Protect:
    knox0 = "knox 0"  # Eine Klassenvariable
    knox_anzahl = 0

    def __init__(self, selfname, knox1, knox2):
        self.selfname = selfname
        self.knox1 = knox1
        self.__knox2 = knox2

        Protect.knox_anzahl += 1
        print(
            f"{self.selfname} mit knox1 = {self.knox1} und knox2 = {self.__knox2} erfolgreich angelegt."
        )

    def change(self, knox1, knox2):
        self.knox1 = knox1
        self.__knox2 = knox2
        print(
            f"{self.selfname} erfolgreich auf \nknox1 = {self.knox1} und \nknox2 = {self.__knox2} geändert."
        )
    def getout(self):
        print(
            f"Ausgabe von {self.selfname}\nknox1 = {self.knox1}\nknox2 = {self._Protect__knox2}\n"
        )

print("\n-------Änderung von außerhalb--------------------")

safe1 = Protect("safe1", "knox 1", "knox 2") # Initialisierung eines Objekts

print("safe1.knox1 :", safe1.knox1)  # auf knox1 kann man ohne Probleme zugreifen
    # print("safe1.knox2 :" ,safe1.knox2) # auf knox2 kommt man nur mit Umweg
    # print("safe1.knox2 :" ,safe1.__knox2)
print("safe1.knox2 :", safe1._Protect__knox2)  # Umweg über Mit-Angabe der Klasse

print("Protect.knox0 :", Protect.knox0)  # Ausgabe einer Klassenvariable

safe1.knox1 += " extra 1"  # man kann auch ohne Funktion einfach die Werte ändern
print("safe1.knox1 :", safe1.knox1)

    # safe1.knox2 += "extra 2" # hier kann man nicht einfach was ändern
safe1._Protect__knox2 += " extra 2"  # aber so geht es dann doch
print("safe1.knox2 :", safe1._Protect__knox2)

Protect.knox0 += " extra 0"
print("Protect.knox0 :", Protect.knox0)

# und jetzt mal sehen wie das über Child-Classes geht


class Protectchild(Protect):
    def __init__(self, selfname, knox1, knox2, childknox1, childknox2):
        super().__init__(selfname, knox1, knox2)
        self.childknox1 = childknox1
        self.__childknox2 = childknox2
        print(
            f"{self.selfname} ergänzt mit childknox1 = {self.childknox1} und childknox2 = {self.__childknox2}."
        )

    def change(self, childknox1, childknox2, knox1, knox2):
        # Werte die man ausgeben, will müssen auch übergeben werden
        # allerdings werden die unten, beim Aufruf der Methode, benutzten Werte
        # nicht verwendet
        self.childknox1 = childknox1
        self.__childknox2 = childknox2
        # self.knox1 = knox2 # Zuordnung vertauscht
        # self.__knox2 = knox1
        print(
            f"Change der Childklasse überschreibt die Elternklasse\n{self.selfname} erfolgreich auf \nknox1 = {self.knox1} \nknox2 = {self._Protect__knox2} \nchildknox1 = {self.childknox1} \nchildknox2 = {self.__childknox2} geändert."
        ) # Für die Ausgabe der privaten Parameter aus der Elternklasse muss die Klasse mit angegeben werden
    def getout(self):
        print(
            f"Ausgabe von {self.selfname}\nknox1 = {self.knox1}\nknox2 = {self._Protect__knox2}\nchildknox1 = {self.childknox1}\nchildknox2 = {self.__childknox2}"
        )


safechild10 = Protectchild(
    "safchild10", "knox 10", "knox 20", "childknox 10", "childknox 20"
)
print("\n-------Änderung Child von außerhalb--------------------")

safechild10.knox1 += " extra 10"  # auch auf children kann man von außen zugreifen
print("safechild10.knox1 :", safechild10.knox1)
safechild10.childknox1 += " extra 10"
print("safechild10.childknox1 :", safechild10.childknox1)

safechild10._Protect__knox2 += " extra 20"
    # auch auf private children kann man von außen zugreifen
print("safechild10.knox1 :", safechild10._Protect__knox2)
safechild10._Protectchild__childknox2 += " extra 20"
    # man muss nur den richtigen class-Namen benutzen
print("safechild10.childknox2 :", safechild10._Protectchild__childknox2)

# ------ und jetzt noch die change-Methoden --------
print("\n-------change--------------------")
safe1.change("knox1change", "knox2change")

safechild10.change(
    "childknox10change", "childknox20change", "knox1change", "knox2change"
) # die letzten 2 Übergaben werden ignoriert, dürfen aber nicht leer sein, s.o.
print("\n-------getout-Ausgaben------------")
safechild10.getout()
safe1.getout()

# die Anzahl aus der Eltern-Klasse zählt auch die Kinder
print("Anzahl der Objekte ", Protect.knox_anzahl)