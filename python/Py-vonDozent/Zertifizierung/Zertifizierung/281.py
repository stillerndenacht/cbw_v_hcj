# Question 281:
# What is the expected output of the following code?

def f(n):
    if n == 1:
        return '1'
    # String-Umwandlung sorgt für Konkatenation
    return str(n) + f(n-1)

print(f(2))

# A. 21
# B. 2
# C. 3
# D. 12

# Lösung: A