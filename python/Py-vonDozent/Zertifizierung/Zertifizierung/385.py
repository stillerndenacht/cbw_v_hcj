# QUESTION 385
# What is the expected output of the following code?

import sys
b1 = type(dir(sys)) is str # list
b2 = type(sys.path[-1]) is str # string
print(b1 and b2) # False, da list und string

# A. False
# B. 0
# C. None
# D. True

# Lösung: A 