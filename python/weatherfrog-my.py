temp = float(input("\t WEATHERFrog \n \n Bitte geben sie einen Wert für die Temperatur in Grad Celsius ein  : "))
print("Ihr eingebener Temperatur-Wert : ", temp)
hum = float(input("\n Bitte geben sie einen Wert für die Luftfeuchtigkeit in % ein : "))
print("Ihr eingebener Luftfeuchtigkeitswert : ", hum)
print("Der Wetterfrosch dankt ihnen!! \n")
if temp < 5:
    print("Der Frosch ist eingefroren ... keine Vorhersage möglich ... \n \t Versuchen sie eine höhere Temperatur.")
elif temp >= 5 and temp < 10:
    print("Dem Frosch ist sehr sehr kalt, ... \n ...\n ...\n ... Versuchen sie eine höhere Temperatur.")
else : print("Diese Werte kennt der Frosch nicht...")
