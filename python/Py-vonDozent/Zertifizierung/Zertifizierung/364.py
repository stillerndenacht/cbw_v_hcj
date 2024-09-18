# QUESTION 364
# What is the expected output of the following code?

def foo(x, y):
    print(type(y)) # class function

    # y(x) + y(x + 1) 
    # 1 + y(2) = 5
    return y(x) + (x + 1)

    # y(1) 1 * 1 + ( 1 + 1)

print(foo(1, lambda x: x*x))

# Die Benennung von den Variablen für lambda
# hat nichts mit den anderen Variablen zu tun, diese sind intern für lambda !

# A. 3
# B. 5
# C. 4
# D. an exception is raised