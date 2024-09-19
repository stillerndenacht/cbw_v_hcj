# QUESTION 360
# What is the expected output of the following code if there is no file named
# non_existing_file inside the
# working directory?
try:
    f = open('non_existing_file', 'w')
    print(1, end=' ')
    s = f.readline() # HIER WIRD DER FEHLER GEWORFEN, weil write Modus zum Lesen genutzt wird.
    # ABER: Man kann auch eine leere, angelegte Datei lesen. 
    # Man kann Lesen und Schreiben gleichzeitig mit r+, dann geht es, aber nicht mit w alleine. 
    # print(s)
    print(2, end=' ')
except IOError as error:
    print(3, end=' ')
else:
    f.close()
    print(4, end=' ')

# A. 1 2 4
# B. 1 2 3 4
# C. 2 4
# D. 1 3