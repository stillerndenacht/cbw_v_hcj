# Aufgabe: erhöhe die PS-Zahlen
autos_ps = {"VW Golf":85, "Ford Mustang": 450, "BMW M3": 425, "Audi A7": 500}
print(autos_ps)

# Lösung die nur die values in eine neue Liste schreibt
matts_tuning_werkstatt = list(map(lambda b: b * 1.2, autos_ps.values()))
print(matts_tuning_werkstatt)

# Lösungen mit Rückübertragung in eine Liste
matts_tuning_werkstatt1 = list(map(lambda b: (b[0], b[1] * 1.2), autos_ps.items()))
print("mit list map lambda",matts_tuning_werkstatt1)

# gleiche Lösung die aber ein Dictionary erzeugt
matts_tuning_werkstatt2 = dict(map(lambda b: (b[0], b[1] * 1.2), autos_ps.items()))
print("mit dict map lambda",matts_tuning_werkstatt2)

# alternative Lösung mit list-Comprehension die auch ein Dictionary erzeugt
matts_tuning_werkstatt3 = dict((a, b * 1.2) for a, b in autos_ps.items() )
print("mit list-comprehension",matts_tuning_werkstatt3)

# und hier noch eine normale Funktion, die im map benutzt wird
def func(b):
    b = list(b)
    b[1]*=1.2    
    return b
matts_tuning_werkstatt4 = dict(map(func, autos_ps.items()))

print("mit einem normalen Funktion-call in map",matts_tuning_werkstatt4)