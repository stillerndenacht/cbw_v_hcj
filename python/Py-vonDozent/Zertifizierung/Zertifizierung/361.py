# QUESTION 361
# What is the expected output of the following code if the file named
#  existing_text_file is a non-zero length
# text file located inside the working directory?

try:
    f = open('existing_text_file', 'w')
    d = f.readline()
    print(len(d))
    f.close()
# IOError evtl. outdated => OSError
# Es wird eine Exception geworfen und hier gefangen
# Wenn keine Exception passt, geht es an VM (unhandled exception). 
except IOError: # auch: OSError !
    print(-1)

# A. the length of the first line from the file
# B. -1
# C. the number of lines contained inside the file
# D. the length of the last line from the file

# Lösung: B (Lesen im Schreibmodus)