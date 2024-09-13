# QUESTION 341
# What is the expected behavior of the following code?

string = str(1 / 3)
dummy = ''
for character in string: # 0.3333333333333333
    dummy = character + dummy # 3333333333333333.0, reverse
    # dummy = dummy + character # hier wäre C richtig
print(dummy[-1])

# A. it raises an exception
# B. it outputs 0
# C. it outputs 3
# D. it outputs 'None'

# Lösung: B
