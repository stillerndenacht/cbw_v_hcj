# QUESTION 344
# What is the expected behavior of the following code?

the_list = "alpha;beta;gamma".split(":") # the_list = [ "alpha;beta;gamma" ]
# Wir splitten nach :, es gibt aber keinen : in alpha;beta;gamma
the_string = ''.join(the_list) # whitespace ' '
# Nimmt eine Liste von Strings und fügt zwischendrin ein Trennzeichen ein.
print(the_string.isalpha())

# A. it raises an exception
# B. it outputs True
# C. it outputs False
# D. it outputs nothing