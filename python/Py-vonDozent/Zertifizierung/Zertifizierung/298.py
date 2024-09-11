# QUESTION 298
# How many stars (*) does the snippet print?

s = '*****'
s = s - s[2] # es gibt kein - Operator für Strings
# Neuzuweisung
# s = s + s[2] # dies funktioniert, da Neuzuweisung und read only auf s[2]
# in s steht jetzt: '******'

print(s)

# A. the code is erroneous
# B. five
# C. four
# D. two

# Strings sind immutable 
# s[2] = 'ä' # 

# s = s[:] # echte Kopie mit unterschiedlichen ids vorher und nachher