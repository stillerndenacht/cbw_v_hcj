# Ausführen im Terminal einfach über Start oben rechts in VScode
import random
import math

x = random.random()
print("random.random() : ", x)
y = math.trunc(10.5)
print("math.trunc(10.5) : ", y)
y2 = math.trunc(-10.5)
print("math.trunc(-10.5) : ", y2)

z = 10.532
print(
    "\nvariable z : ",
    z,
    "\nmath.ceil(z) : ",
    math.ceil(z),
    "\nmath.floor(z) : ",
    math.floor(z),
    "\nmath.trunc(z) : ",
    math.trunc(z),
    "\nround(z) : ",
    round(z),
    "\nround(z, 2) : ",
    round(z, 2),
)
z2 = 10.432
print(
    "\nvariable z2 : ",
    z2,
    "\nmath.ceil(z2) : ",
    math.ceil(z2),
    "\nmath.floor(z2) : ",
    math.floor(z2),
    "\nmath.trunc(z2) : ",
    math.trunc(z2),
    "\nround(z2) : ",
    round(z2),
    "\nround(z2, 2) : ",
    round(z2, 2),
)
