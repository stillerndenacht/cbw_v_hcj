# QUESTION 330
# What is the expected output of the following code?
import sys
import math
b1 = type(dir(math)[0]) is str
b2 = type(dir(sys.path)[-1]) is str
print(b1 and b2)

# A. False
# B. None
# C. True
# dir ist eine Liste von Strings
# D. 0

# Lösung: C