# QUESTION 315
# What is the expected output of the following code?
def f(n):
    if n == 1:
        return 1
    return n + f(n - 1)

print(f(2)) 

# A. 21
# B. 12
# C. 3
# D. None

# Lösung: C, da int und das Ergebnis der Rechnung rekursiv
# aufgelöst wird. 