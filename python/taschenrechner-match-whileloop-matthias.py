# Erweitern Sie den Taschenrechner so, dass der
# Nutzer solange Rechnungen hintereinander
# durchführen kann, bis der Nutzer den Befehl “exit”
# zum Abbruch gibt.
 
exitmsg = (
    "Sie haben den Taschenrechner mit 'exit' abgebrochen. \n °°° :( ...  Schade....)"
)
a = input(
    "-------- Dieser Taschenrechner rechnet-------- \n ------ Um ihn zu beenden tippen sie 'exit' ein. -------\n----Um zu beginnen drücken sie ENTER :"
)
 
# "exit" => exit()
# '+' (checkt ob exit ist => '+')
# '6.7' (checkt ob exit ist) => 6.7
def checkExit(inp, isOperator = False):
    if inp == "exit":
        print(exitmsg)
        exit() # Standard-Systembefehl zum Beenden des Programms
    elif inp != "exit" and not isOperator:
        return float(inp)
    else:
        return inp
 
 
def checkPositive(inp):
    if inp < 0:
        return 0
 
    return inp
 
 
 
while True:
    a = input("Bitte geben sie eine erste positive Zahl ein: ")
   
    a = checkExit(a)
    a = checkPositive(a)
 
    print("Ihre Zahl a : ", a)
 
    rechenart = input(
        "Wählen Sie eine der folgenden Berechnungsarten + , - , * ,  / : "
    )
    checkExit(rechenart, True)
 
    b = input("Bitte geben sie eine zweite Zahl ein, die größer 0 ist: ")
    b = checkExit(b)
    b = checkPositive(b)
       
 
    if rechenart == "/" and b == 0:
        print("Ihre Zahl muss größer 0 sein, die Eingabe wird auf 1 gesetzt \n")
        b = 1
 
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
        case "/":
            ergebnis = a / b
            print("Ihr Ergebnis aus", a, " / ", b, " ist ", ergebnis)
        case _:
            print("Keine gültige Eingabe")
 
 
 