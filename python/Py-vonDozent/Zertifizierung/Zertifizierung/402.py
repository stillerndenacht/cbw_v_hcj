# QUESTION 402
# What is the expected output of the following code?

def foo(x,y,z):
    return x(y) - x(z)
    #     2 % 2 - 1 % 2
    #       0   -   1

print(foo(lambda x: x % 2, 2, 1))

# A. 1
# B. -1
# C. an exception is raised
# D. 0

# Lösung: B