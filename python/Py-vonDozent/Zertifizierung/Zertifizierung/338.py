# QUESTION 338
# What is true about the following snippet? (Choose two.)
class E(Exception):
    def __init__(self, message):
        self.message = message
    # magische Methode für String-Repräsentation
    def __str__(self):
        return "it's nice to see you"

try:
    print("I feel fine")
    raise Exception("what a pity") # E ist Kind von Exception, also ist Exception kein E
# Dieser Exception-Block passt nicht zu der Exception, die wir ausgelöst haben. 
except E as e:
    print(e) # hier wird __str__()
else:
    print("the schow must go on")

# A. the string it's nice to see you will be seen
# Falsch, da except E nicht ausgeführt wird.
# B. the string I feel fine will be seen
# Wahr, da Ausführung der Zeile VOR dem Auslösen der Exception.
# C. the code will raise an unhandled exception
# Wahr, weil kein passender Exception-Block vorhanden ist. 
# D. the string what a pity will be seen
# Falsch, da except E nicht ausgeführt wird.
# String what a pity ist Bestandteil des Tracebacks in der VM

# Lösung: BC
# D ist schwächstes der Antwortmöglichkeiten 
