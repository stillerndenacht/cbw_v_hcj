# QUESTION 409
# What is the expected output of the following code if there is no file named non_existing_file 
# inside the working directory?

try:
    f = open('non_existing_file2', 'r')
    print(1, end=' ')
except IOError as error: # OSError
    print(error.errno, end=' ') # Error number 2
    print(2, end=' ')
else:
    f.close()
    print(3, end=' ')


# A. 2 2
# B. 1 3
# C. 1 2 3
# D. 2 2 3