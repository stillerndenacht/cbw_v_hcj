# QUESTION 376
# What is the expected behavior of the following code?

string = '123'
dummy = 0
for character in reversed(string): # '321'
    dummy += int(character)

print(dummy)

# "Schreibtischtest"
# 6

# A. it outputs 321
# B. it outputs 123
# C. it outputs 6
# D. it raises an exception

# Lösung: C
