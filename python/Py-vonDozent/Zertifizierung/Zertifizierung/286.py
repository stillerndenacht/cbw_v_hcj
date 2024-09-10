# QUESTION 286
# The first parameter of each method:

# A. holds a reference to the currently processed object
# B. is always set to None
# C. is set to a unique random value
# D. is set by the first argument's value

class Auto:
    # hirsebrei ist self, man kann es nennen, wie es will. 
    def __init__(hirsebrei, bez, ps):
        print(id(hirsebrei)) 
        # Der Kontext, mit dem __init__ aufgerufen wird, ist bmw
        # Beide ids sind gleich
        hirsebrei.bez = bez
        hirsebrei.ps = ps

    def start(self):
        print(id(self)) # Diese Methode wird im Kontext von einem Objekt verwendet
        # z.B. bmw.start() => self hat die id von der Variable bmw
        # Damit kann ich auch NUR dieses soezifische Objekt ändern / lesen 
        # und die anderen unberührt lassen. 
        pass

bmw = Auto("BMW 118d", 150)
print(id(bmw))
bmw.start()