# QUESTION 299
# Which line can be used instead of the comment to cause the snippet to produce 
# the following expected
# output? (Choose two.)
# Expected output:
# 1 2 3

# Code:
c, b, a = 1, 3, 2
# put line here
print(a, b, c) # 1, 2, 3

print(b, a, c) # 2, 1, 3
print(c, b, a) # 3, 2, 1 
# a 2
# b 3
# c 1
            
# A. c, b, a = b, a, c
# Dies ist äquivalent zu:
# c = b (c = 3)
# b = a (b = 2)
# a = c (a = 1)

# B. c, b, a = a, c, b
# C. a, b, c = c, a, b
# D. a, b, c = a, b, c # hat keinen Effekt