# QUESTION 381
# What is the expected behavior of the following code?

the_list = "1, 2, 3".split() # ['1,','2,','3']
the_string = ''.join(the_list) # '1,2,3'

# the_list2 = the_string.split(',') # ['1', '2', '3']
# print(''.join(the_list2).isdigit()) # True
# isdigit() schaut, ob in einem String nur Ziffern stehen. 
# the_string.isalnum() # Alle Ziffern und alle Buchstaben
# the_string.isalpha() # nur Buchstaben
print(the_string.isdigit()) # isdigit() True, wenn '123', es ist aber '1,2,3'
# print(the_string[0].isdigit()) # '1,2,3' 

# A. it raises an exception
# B. it outputs nothing
# C. it outputs True
# D. it outputs False

# Lösung: D
