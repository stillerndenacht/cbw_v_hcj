# QUESTION 379
# What is the expected output of the following code if the file named 
# non_zero_length_existing_text_file is a
# non-zero length file located inside the working directory?

try:
    f = open('non_zero_length_existing_text_file', 'rt')
    d = f.read(1) # 987654321, liest ein Zeichen und behält die Position in der Datei    
    print(len(d)) # Länge: 1
    f.close()
except IOError:
    print(-1)

# 1

# A. -1
# B. 0
# C. an errno value corresponding to file not found
# D. 1

# Lösung: D

try:
    f = open('namensliste.txt', 'rt')
    d = f.read() # komplette Datei auf einmal einlesen. 
    print(len(d)) # Länge: 1
    f.close()
except IOError:
    print(-1)


# try:
#     f = open('namensliste.txt', 'rt')
#     d = f.read(2,5) # komplette Datei auf einmal einlesen. 
#     print(d) 
#     f.close()
# except IOError:
#     print(-1)