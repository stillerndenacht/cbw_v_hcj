class Screen:
    def __init__(self, diagonale, aufloesung, blaulichtfilter=False):
        self.diagonale = diagonale
        self.aufloesung = aufloesung
        self.blaulichtfilter = blaulichtfilter

    def set_blau(self):
        if True:
            if self.blaulichtfilter is False:
                self.blaulichtfilter = True
            else:
                self.blaulichtfilter = False

class Tv(Screen):
    def __init__(self, diagonale, aufloesung, tvmodule="analog"):
        super().__init__(diagonale, aufloesung, blaulichtfilter=False)
        self.tvmodule = tvmodule

class Monitor(Screen):
    def __init__(self, diagonale, aufloesung, kamera=False):
        super().__init__(diagonale, aufloesung, blaulichtfilter=False)
        self.kamera = kamera

scr1 = Screen(50, "UltraHD")
print(scr1.blaulichtfilter)
scr1.set_blau()
print(scr1.blaulichtfilter)
scr1.set_blau()
print(scr1.blaulichtfilter)