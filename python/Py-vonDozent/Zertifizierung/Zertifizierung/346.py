# QUESTION 346
# Assuming that the snippet below has been executed successfully, w
# hich of the following expressions
# evaluate to True?

string = 'python'[::2] # slicing 'pto'

string = string[-1] + string[-2]
         # 'o'          't'

# A. string[0] == 'o'
# True 
# B. string is None
# Falsch, da ein String zurückgegeben wird. 
# C. len(string) == 3
# len ist 2, da 'ot'
# D. string[0] == string [-1]
# 'o' ist nicht 't'