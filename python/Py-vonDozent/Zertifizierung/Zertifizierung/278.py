# QUESTION 278
# What is the expected behavior of the following snippet?
def a(x, y):
    return x[y] # int is not iterable

print(a(0, [1])) # x,y sind vertauscht
# [1] ist eine Liste

# A. cause a runtime exception
# B. print 1
# C. print 0,[1]
# D. print [1]