# Rekursion ist ein Selbstaufruf einer Funktion

# Was passiert hier?
# Endlosschleife, die mir den Speicher vollmüllt 
# def func():
#     a = 9 
#     func() # Rekursion 

# func()


def factorial(n):
    if n == 0 or n == 1:
        return 1
    else:
        return n * factorial(n - 1) # Rückgabe ist abhängig von dem Ergebnis der Fkt.
    
print(factorial(5))
print(factorial(0))
# 5! = 5*4*3*2*1 # 120 Möglichkeiten, 5 orte nacheinander zu besuchen, sodass
# ich nur einmal an jedem Ort war, es müssen alle Orte besucht werden.

def act_to(n):
    if(n == 0):
        return 0
    # print(n)
    return n + act_to(n-1)
 
sum = act_to(10)
print(sum)




# nicht rekursiver Ansatz:
n1 = int(input("how many terms you wanna have: "))
 
F1 = 0
F2 = 1
print("{} -> {}".format(F1, F2), end=" -> ")
count = 3
 
while count <= n1:
    F3 = F1 + F2    
    print("{} -> ".format(F3), end=" ")
    F1 = F2
    F2 = F3
    count += 1


print("Fim")


# rekursiver Ansatz:
# Berechnen der n-ten Fibonacci-Zahl
def fibonacci(n):
    if n == 0:
        return 0
    elif n == 1:
        return 1
    else:
        return fibonacci(n - 1) + fibonacci(n - 2)

print(fibonacci(n1))