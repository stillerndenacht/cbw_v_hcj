def localvar():
    u = 9
# print(u) # u ist hier undefined

vari = 10
def accessvar():
    print("vari nach accessvar \t\t\t\t: ",vari) # lesender Zugriff auf äußere Variablen ist möglich

accessvar()

def accessvar2():
    print("vari in accessvar2 \t\t\t\t: ",vari)
    print("id in accessvar2 \t\t\t\t: ",id(vari))
   # var += 10 # das geht nicht weil schreibender Zugriff

accessvar2()
print("vari nach accessvar2 \t\t\t\t: ",vari)
print("id nach accessvar2 \t\t\t\t: ",id(vari))

def accessvar3():
    #print("vari vor global in accessvar3 : ",vari) # Lesen vor global geht nicht
    #print("id vor global accessvar3 : ",id(vari))
    global vari # Lösung global Zugriff
    global vari2, vari3, b, c # man kann auch mehrere Variablen global definieren
    print("vari in nach global accessvar3 \t\t\t: ",vari)
    print("id in nach global accessvar3 \t\t\t: ",id(vari))

    vari = vari + 10 # ---- jetzt geht's - aber ab hier neue id
    print("vari in nach global und Neuzuweisung accessvar3 : ",vari)
    print("id in nach global und Neuzuweisung accessvar3 \t: ",id(vari))

accessvar3()
print("vari nach accessvar3 \t\t\t\t: ",vari)
print("id nach accessvar3 \t\t\t\t: ",id(vari))

print("-------------------------------------")
def outerfunction():
    x = "Print aus der outerfunction"
    def innerfunction(): # Definition einer Funktion in einer anderen
        print("Hallo aus innerfunction")
    innerfunction()
    print(x)
outerfunction()  
# innerfunction() # innere Funktionen können nur durch ihre Outerfunktion ausgeführt werden
print("------------innerfunction mit Argument-Übergabe und Return ---------------")

def outerfunction2():
    x = "Print aus der outerfunction2"
    def innerfunction2(x): # Definition einer Funktion in einer anderen
        print("Hallo aus innerfunction2")
        x += "  +  x aus inner"
        return x
    x = innerfunction2(x)
    print(x)
outerfunction2() 
print("--------------nonlocal-----------------------") 
def outerfunction3():
    x = "Print aus der outerfunction3"
    def innerfunction3(): # Definition einer Funktion in einer anderen
        print("Hallo aus innerfunction3")
        nonlocal x # nonlocal zur Übernahme des x aus der Outerfunction
        x += " + x aus innerfunction3"
        def innerinnerfunct3():
            nonlocal x
            x += " + x aus innerinner3"
        innerinnerfunct3()
    innerfunction3()
    print(x)
outerfunction3() 
 