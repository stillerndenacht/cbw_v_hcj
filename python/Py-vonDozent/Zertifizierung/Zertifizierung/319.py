# QUESTION 319
# What is the expected behavior of the following code?
def unclear(x):
    #print("Hallo")
    if x % 2 == 1: # 1 % 2:  0*2, Rest 1; 1 // 2 = 0, 1-0*2 = 1
        # Modulo: 10 // 3 = 3 # Wie oft geht die 3 in die 10?
        # Was bleibt dann als Rest? 10 - 3*3 (Teiler und wie oft er reingegangen ist)
        return 0
    # In Python können wir, müssen aber keinen Rückgabewert angeben.
    # Wenn kein Rückgabewert angegeben ist, dann wird None zurückgegeben.
    # Hier ist Python flexibel, andere Sprachen wie Java fordern einen Rückgabewert,
    # wenn einer angegeben wird in der Signatur
    # public int methode() { } => int 

print(unclear(1) + unclear(2)) 
# 0 + None (Fehler)
# Zur Laufzeit erfolgt erst die Typisierung, 
# in Python ist ein TypeError runtime exception 

# Ist 0 + None ein sinnvoller Wert?
# Der Operator + nicht für int + None definiert

# A. prints 0
# B. cause a runtime exception
# C. prints 3
# D. print an empty line

# Lösung: B