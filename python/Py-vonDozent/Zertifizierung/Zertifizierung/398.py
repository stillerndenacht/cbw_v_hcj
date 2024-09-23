# QUESTION 398
# What is the expected output of the following code?
def foo(x, y, z):
    return x(y(z))

print(foo(lambda x: 2*x, lambda x: x//2, 2))

# A. 2
# B. 3
# C. 4
# D. an exception is raised

# Lösung: A 