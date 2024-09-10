# Question 263:

# Which of the following literals reflect the value given as 34.23? (Choose two.)
# A. .3423e2
# B. 3423e-2
# C. .3423e-2
# D. 3423e2

a = 34.23
print(.3423e2 == a)
print(3423e-2 == a) # 500.-

# positiver Wert hinter e verschiebt das Komma nach rechts,
# negativer Wert verschiebt das Komma nach links 
