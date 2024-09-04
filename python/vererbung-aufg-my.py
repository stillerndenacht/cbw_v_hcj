class Screen:
    def __init__(self, selfname, diagonale, aufloesung, blaulichtfilter=False):
        self.selfname = selfname
        self.diagonale = diagonale
        self.aufloesung = aufloesung
        self.blaulichtfilter = blaulichtfilter

    def set_blau(self):
        # if True:
        if self.blaulichtfilter is False:
            self.blaulichtfilter = True
        else:
            self.blaulichtfilter = False

class Tv(Screen):
    def __init__(self,selfname, diagonale, aufloesung, tvmodule="analog"):
        super().__init__(selfname, diagonale, aufloesung, blaulichtfilter=False)
        self.tvmodule = tvmodule

class Monitor(Screen):
    def __init__(self,selfname, diagonale, aufloesung, kamera=False):
        super().__init__(selfname, diagonale, aufloesung, blaulichtfilter=False)
        self.kamera = kamera

scr1 = Screen("scr1" ,50, "UltraHD")
scr2 = Tv("scr2" ,64, "UltraHD")

print(scr1.selfname, scr1.blaulichtfilter)
scr1.set_blau()
print(scr1.selfname, scr1.blaulichtfilter)
scr1.set_blau()
print(scr1.selfname, scr1.blaulichtfilter)

print(scr2.selfname, scr2.blaulichtfilter)
scr2.set_blau()
print(scr2.selfname, scr2.blaulichtfilter)
