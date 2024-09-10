# QUESTION 269
# Assuming that String is six or more letters long, the following slice
# string[1:-2]
# is shorter than the original string by:

# A. four chars
# B. three chars
# C. one char
# D. two chars

string = "Matthias"
# weggeschnitten wird: M sowie as, weil -2 schon EXKLUSIVE bei der Extraktion ist
# Insgesamt müssen also immer genau 3 Buchstaben wegfallen
print(string[1:-2]) # "atthi" 

# Lösung: B
