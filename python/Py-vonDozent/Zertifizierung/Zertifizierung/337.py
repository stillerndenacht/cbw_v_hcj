# QUESTION 337
# What is the expected behavior of the following code?

my_list = [1, 2, 3]
try:
    my_list[3] = my_list[2] # IndexError
except BaseException as error:
    print(error)

# A. it outputs error
# zu unspezifisch
# B. it outputs <class 'IndexError'>
# Das wäre bei print(type(error))
# C. it outputs list assignment index out of range
# IndexError bleibt ein IndexError, auch wenn er im BaseException
# abgehandelt wird. 
# D. the code is erroneous and it will not execute
# zu unspezifisch

# Lösung: C 