import random

a = 0
count = 0
print(
    "\n---------------unendlich Würfe----------- \nStartwert Zähler :",
    count,
    "\nStartwert Würfel : ",
    a,
)
while a != 6:
    count += 1
    a = random.randint(1, 6)
    print("\nVersuch : ", count, "\tIhre gewürfelte Zahl : ", a)

# Begrenzung der Würfe auf max 4
a2 = 0
count2 = 0
print(
    "\n---------------Begrenzung der Würfe----------- \nStartwert Zähler :",
    count2,
    "\nStartwert Würfel : ",
    a2,
)
while a2 != 6 and count2 < 4:
    count2 += 1
    a2 = random.randint(1, 6)
    print("\nVersuch : ", count2, "\tIhre gewürfelte Zahl : ", a2)
