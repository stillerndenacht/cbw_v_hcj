import math
# QUESTION 403
# Assuming that the math module has been successfully imported, which of the 
# following expressions evaluate to True? (Select two answers)

# A. False
math.hypot(2,5) == math.trunc(2.5)
# sqrt(2*2 + 5*5)     ==         2
# B. True
math.floor(2.5) == math.trunc(2.5)
#      2        ==       2
# C. False
math.ceil(2.5) == math.floor(2.5)
#      3        ==       2
# D. True
math.hypot(3,4) == math.sqrt(25)
# sqrt(3*3 + 4*4)     ==       sqrt(25)

# Lösung: BD 

math.ceil(3.3) # 4
math.ceil(-2.5) # -2
math.trunc(-5.8) # -5
math.trunc(99.8) # 99
math.floor(-7.2345) # -8
math.floor(9.542) # 9

# This makes me happy ;-)
