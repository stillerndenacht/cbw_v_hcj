a = int(input("Bitte geben sie eine erste Zahl ein: "))
print("Ihre Zahl a : ", a)
b = int(input("Bitte geben sie eine zweite Zahl ein: "))
print("Ihre Zahl b : ", b)
rechenart = input("Wählen Sie eine der folgenden Berechnungsarten + , - , * ,  / : ")
print("Ihre gewählte Rechenart : ", rechenart)
if rechenart == "+": 
    ergebnis = a + b 
    print("Ihr Ergebnis aus", a, " + ", b, " ist ", ergebnis)
elif rechenart == "-":
    ergebnis = a - b 
    print("Ihr Ergebnis aus", a, " - ", b, " ist ", ergebnis)
elif rechenart == "*":
    ergebnis = a * b 
    print("Ihr Ergebnis aus", a, " * ", b, " ist ", ergebnis)
elif rechenart == "/":
    ergebnis = a / b; 
    print("Ihr Ergebnis aus", a, " / ", b, " ist ", ergebnis)
else : print("Keine gültige Eingabe")
