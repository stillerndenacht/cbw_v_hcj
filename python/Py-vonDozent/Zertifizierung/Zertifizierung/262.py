# Question 262:
#  How many lines does the following snippet output?
for i in range(1, 3):
    print("x", end="") # end="" erzeugt kein newline
else:
    print("x") # newline gehört noch zur ersten Zeile

# A. three
# B. one
# C. two
# D. four

# Lösung: B