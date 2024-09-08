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

print(whg3)

print(whg1 < whg2)

whg1.ein_leer()
whg2.aus_leer()
whg2.ein_leer("Müller")

whg1.info()
whg2.info()
whg3.info()

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