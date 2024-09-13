# QUESTION 324
# The following class definition is given. We want the show () method to 
# invoke the get () method, and then
# output the value the get () method returns. Which of the 
# invocations should be used instead of XXX?

class Class:
    def __init__(self, val):
        self.val = val
    def get(self):
        return self.val
    def show(self):
        # print(self.get())
        # XXX

# A. print(get(self)) # Begründung wie bei C
# B. print(self.get()) # Korrekt, Aufruf immer mit self., wenn eine
# Klassenmethode aufgerufen werden soll. 
# # Es muss eine Unterscheidung, z.B. zu normalen Funktionen geben wie map()
# In der Klasse kann es auch eine Methode map() geben, also anderer Namensraum.  
# C. print(get()) # normaler Funktionsaufruf, builtin, eigene, ...
# hat nix mit Klasse zu tun
# D. print(self.get(val)) # self wird automatisch übergeben.