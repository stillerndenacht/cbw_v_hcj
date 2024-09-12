# QUESTION 270
# What is the expected output of the following snippet?

lst = [1, 2, 3, 4]
print("Vor -3,-2", lst)
# -2 ist das erste Element, was NICHT MEHR extrahiert wird
lst = lst[-3:-2] # [2], kein int-Literal, slicing liefert immer eine Liste
print("vor -1", lst)
lst = lst[-1] # Listenelement wird extrahiert 
# hier wird lst einem int zugewisen (lst wechselt den Datentypen)
print(lst) # 2

# A. 1
# B. 4
# C. 2
# D. 3

# Lösung: C
