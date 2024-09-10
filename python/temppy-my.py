autos_ps = {"VW Golf":85, "Ford Mustang": 450, "BMW M3": 425, "Audi A7": 500}
print(autos_ps)
 
matts_tuning_werkstatt = list(map(lambda b: b * 1.2, autos_ps.values()))
print(matts_tuning_werkstatt)
matts_tuning_werkstatt1 = list(map(lambda b: (b[0], b[1] * 1.2), autos_ps.items()))
print(matts_tuning_werkstatt1)

matts_tuning_werkstatt2 = dict(map(lambda b: (b[0], b[1] * 1.2), autos_ps.items()))
print(matts_tuning_werkstatt2)

matts_tuning_werkstatt2 = dict(for x,y in enumerate(autos_ps.items()): x, y*1.2)
print(matts_tuning_werkstatt2)