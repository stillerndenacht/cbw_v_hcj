a = int(input("Bitte geben sie eine erste positive Zahl ein: "))

if a < 0 : 
    print("Ihre Zahl muss positiv sein, die Eingabe wird auf O gesetzt \n")
    a = 0
print("Ihre Zahl a : ", a)

rechenart = input("Wählen Sie eine der folgenden Berechnungsarten + , - , * ,  / : ")
print("Ihre gewählte Rechenart : ", rechenart)

if rechenart == "/":
    b = int(input("Bitte geben sie eine zweite Zahl ein, die größer 0 ist: "))
    if b <= 0 : 
        print("Ihre Zahl muss größer 0 sein, die Eingabe wird auf 1 gesetzt \n")
        b = 1

else :  
    b = int(input("Bitte geben sie eine zweite positive Zahl ein: "))

if b < 0 : 
    print("Ihre Zahl muss positiv sein, die Eingabe wird auf O gesetzt \n")
    b = 0
    print("Ihre Zahl b : ", b)


match rechenart:
    case "+": 
        ergebnis = a + b 
        print("Ihr Ergebnis aus", a, " + ", b, " ist ", ergebnis)
    case "-":
        ergebnis = a - b 
        print("Ihr Ergebnis aus", a, " - ", b, " ist ", ergebnis)
    case "*":
        ergebnis = a * b 
        print("Ihr Ergebnis aus", a, " * ", b, " ist ", ergebnis)
    case  "/":
        ergebnis = a / b; 
        print("Ihr Ergebnis aus", a, " / ", b, " ist ", ergebnis)
    case _ : print("Keine gültige Eingabe")
