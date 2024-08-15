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
while a != "exit":
    a = input("Bitte geben sie eine erste positive Zahl ein: ")
    if a == "exit":
        print(exitmsg)
        break
    else:
        a = int(a)

    if a < 0:
        print("Ihre Zahl muss positiv sein, die Eingabe wird auf O gesetzt \n")
        a = 0

    print("Ihre Zahl a : ", a)

    rechenart = input(
        "Wählen Sie eine der folgenden Berechnungsarten + , - , * ,  / : "
    )
    if rechenart == "exit":
        print(exitmsg)
        break
    else:
        print("Ihre gewählte Rechenart : ", rechenart)

    if rechenart == "/":
        b = input("Bitte geben sie eine zweite Zahl ein, die größer 0 ist: ")
        if b == "exit":
            print(exitmsg)
            break
        else:
            b = int(b)

        if b <= 0:
            print("Ihre Zahl muss größer 0 sein, die Eingabe wird auf 1 gesetzt \n")
            b = 1

    else:
        b = input("Bitte geben sie eine zweite positive Zahl ein: ")
        if b == "exit":
            print(exitmsg)
            break
        else:
            b = int(b)

    if b < 0:
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
        case "/":
            ergebnis = a / b
            print("Ihr Ergebnis aus", a, " / ", b, " ist ", ergebnis)
        case _:
            print("Keine gültige Eingabe")
else:
    print(exitmsg)
