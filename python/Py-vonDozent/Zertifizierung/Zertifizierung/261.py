# QUESTION 261
# What is the expected output of the following snippet?
i = 5

while i > 0:
    i = i // 2 # Ganzzahldivision führt zu 2, da Nachkommastellen abgeschnitten werden
    if i % 2 = 0:
    # if i % 2 == 0: # 2 % 2 == 0 => True 5 % 2 1, da 2*2 = 4, Rest 1
        break # Abbruch der Schleife (KEIN else)
else:
    i += 1

print(i)

# A. the code is erroneous
# B. 3
# C. 7
# D. 15

# Lösung: A