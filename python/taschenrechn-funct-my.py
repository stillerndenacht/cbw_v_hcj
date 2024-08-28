

while True:
    ex = input("Wollen Sie etwas berechnen? Tippe 'exit' wenn nicht : ")
    if ex == "exit":
        break
    def rechenart():    
        
        def add():
            global summe
            summe = a + b
        def sub():
            global summe
            summe = a - b
        def mult():
            global summe
            summe = a * b
        def div():
            global summe
            summe = a / b

        if op == "+":
            add()
        elif op == "-":
            sub()
        elif op == "*":
            mult()
        elif op == "/":
            div()

    def cuttohalf():
        if half == "j":
            global summe
            summe = summe/2
            print(f"Ihr neues Ergebnis aus ({a} {op} {b})/2 = {summe}")
        else:
            print("Ja, du hast recht ... Wer braucht sowas?") 

    def rechnen():
        global a
        global b
        global op
        global half
        
        a = float(input("Erste Zahl : "))
        op = input("Wähle Operation + - * / : ")
        b = float(input("Zweite Zahl : "))

        rechenart()
        
        print(f"Ihr Ergebnis aus {a} {op} {b} = {summe}")
        half = input("Wollen Sie das Ergebnis halbieren? j/n : ")

        cuttohalf()

    rechnen()
    