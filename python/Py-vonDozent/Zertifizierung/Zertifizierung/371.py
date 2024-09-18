# QUESTION 371
# What is the expected behavior of the following code?

x = 8 ** (1 / 3) # 3. Wurzel von 8, da 8^(1/3)
# 4*4 = 16 (4^2) = 16. Wurzel ist Gegenoperation von Potenz
# 16: Quadratwurzel : Welche Zahl hat sich mit sich selbst mutlipliziert, 
# um auf 16 zu kommen?
# 3. Wurzel: 
# 2^3 = 2*2*2 = 8, 3. Wurzel aus 8 = 2
# 3^3 = 3*3*3 = 27, 3. Wurzel aus 27 = 3
# 4^3 = 4*4*4 = 64, 3. Wurzel aus 64 = 4

y = 2. if x < 2.3 else 3. # 2. wird zu 2.0, Literal 2. gültig
print(y)

# A. the code is erroneous and it will not execute
# B. it outputs 2.0
# C. it outputs 2.5
# D. it outputs 3.0

# Lösung: B