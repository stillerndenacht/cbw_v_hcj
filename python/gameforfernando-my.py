
import random

while True:
    exitq = input("Wollen sie noch eine Runde versuchen 'ENTER' :\n\tWenn nicht tippen sie 'exit' : ")
    if exitq == "exit":
        break
    count = 0
    while True:        
        
        zahl = int(input("Wähle Zahl : "))
        wahl = input("Wähle ob gerade oder ungerade g/u : ")
        rand = random.randint(0,11)
        # print(zahl,wahl,rand)

        if (zahl+rand) % 2 == 0:
            geradeungerade = "g"
            # print(zahl + rand)        
        else:
            geradeungerade = "u"
            # print(zahl + rand)

        if geradeungerade == wahl:
            count += 1
            print(zahl + rand, " win at count ", count, "with your ",wahl," vs ",geradeungerade)            
        else:
            print(zahl + rand, " loose at count ", count, "with your ",wahl," vs ", geradeungerade)
            break