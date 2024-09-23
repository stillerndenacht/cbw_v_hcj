# QUESTION 401
# What is the expected output of the following code if existing_file is the name of 
# a file located inside the working directory?

try:
    f = open('existing_file', 'w') # bei 'w' wird eine neue Datei angelegt, 
    # SOLLTE sie nichte xistieren. Vorhandene Datei wird überschrieben. 
    # f.read() # auch bei w erzeugt Lesen eine Exception. 
    print(1, end=' ')
except IOError as error: # auch: OSError
    print(error.errno, end=' ')
    print(2, end=' ')
else:
    f.close()
    print(3, end=' ')

# 1 3 

# r+ = rw
# w+
# rt = read text

# A. 2 3
# B. 1 3
# C. 1 2
# D. 1 2 3