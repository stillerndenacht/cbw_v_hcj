def mul(elems):  # 2, 5, 8, 7  
    res = 1
    for i in elems: # [ 2, 5, 8, 7 ]
        res *= i
 
    print(res)
 
liste = []
while True:
    elem = input("Zahl oder calc: ")
    if elem != "calc":
        liste.append(float(elem))
    elif elem == "exit":
        exit()
    else:
        mul(liste) # 2,3,5,10 => *
        # mul(2,3,5,10)

# a = float(input("Nummer 1: "))
# b = float(input("Nummer 2: "))
# zeichen = input("Rechnung: ")
 
# if zeichen == '+': calc = lambda a,b: a+b
# if zeichen == '-': calc = lambda a,b: a-b
# if zeichen == '*': calc = lambda a,b: a*b
# if zeichen == '/': calc = lambda a,b: a/b
 
# print(calc(a,b))