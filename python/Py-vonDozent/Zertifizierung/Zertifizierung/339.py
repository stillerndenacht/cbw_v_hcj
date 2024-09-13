# QUESTION 339
# Which of the following expressions evaluate to True? (Choose two.)

# A. 
ord("Z") - ord("z") == ord("0") # False, z und Z sind nicht im selben code point Bereich
# B. 
chr(ord('A') + 1) == 'B' # True (siehe Caesar-Chiffre)
# C. 
len('\'') == 1 # ( ' \ ' ' ) # True, Escape-Character zählen als ein Zeichen 
# D. 
len(""" """) == 0 # False, weil 1 Leerzeichen auch ein Zeichen ist.

# Lösung: BC