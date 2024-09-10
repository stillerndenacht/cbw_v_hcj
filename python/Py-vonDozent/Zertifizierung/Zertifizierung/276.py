# QUESTION 276
# Select the valid fun () invocations:
# (Choose two.)

def fun(a, b=0):
    return a * b

# bis Zeile 15 alle gültige Aufrufe
fun(0, b=1)
fun(1,1)
# fun(1,1,1) # in Python muss die Anzahl der Argumente übereinstimmen
fun(b=1, a=2)
fun(a=3, b=2) 
fun(a=8) # b=0
fun(8) # b=0

# fun()

# A. 
fun(b=1) # keyword für b, a fehlt
# B. 
fun(a=0) # keyword und default 
# C. 
# fun(b=1, 0) # positionale Argumente vor Keyword !
# D. 
fun(1) # a positional, b Default

