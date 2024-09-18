# QUESTION 387
# What is the expected behavior of the following code?

def foo(x, y): # y ist lambda Funktion, Funktionen können ganz normal als Argument übergeben werden.
    return y(x) + y(x+1) # 1*1 + 2*2, Funktion wird erst mit () ausgeführt. 

print(foo(1, lambda x: x*x))

# This makes me happy

# A. 4
# B. 3
# C. an exception is raised
# D. 5

# Lösung: D
