# QUESTION 373
# The __bases__ property contains:

# A. base class location (addr)
# B. base class objects (class)
# C. base class names (str)
# D. base class ids (int)

# Lösung: B

class Parent:
    pass

class Super:
    pass

class Test(Parent, Super): # Alle Klassen sind von object abgeleitet
    pass

print(Test.__bases__) # NUR DIREKTE ELTERN