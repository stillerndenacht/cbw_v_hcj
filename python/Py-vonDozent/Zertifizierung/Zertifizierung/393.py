# QUESTION 393
# What is the expected output of the following snippet?

class Upper:
    def __init__(self):
        self.property = 'upper'

class Lower(Upper):
    def __init__(self):
        super().__init__() # Alle Objekte vom Typ Lower bekommen dann
        # die Properties von Upper mit, bei Weglassen dieses Aufrufs kommt es in
        # Zeile 17 zu einem AttributeError ! 
        # pass

Object = Lower()
print(isinstance(Object, Lower), end=' ') # True
print(Object.property) # upper

# A. True lower
# B. True upper
# C. False upper
# D. False lower