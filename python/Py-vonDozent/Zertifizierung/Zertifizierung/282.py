# QUESTION 282
# What is the expected behavior of the following snippet?
def x(): # line 01
    return 2 # line 02
x = 1 + x() # line 03, x wird von einer Funktion zu int durch Zuweisung 
# x() # int is not callable, name shadowing
print(x) # line 04

# A. cause a runtime exception on line 02
# B. cause a runtime exception on line 01
# C. cause a runtime exception on line 03
# D. print 3

# Lösung: D