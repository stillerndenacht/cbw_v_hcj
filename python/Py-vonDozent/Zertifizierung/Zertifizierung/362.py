# QUESTION 362
# What is the expected behavior of the following code?

my_list = [i for i in range(5)] # [ 0,1,2,3,4 ]
# Liste rückwärts durchgehen
m = [my_list[i] for i in range(4, 0, -1) if my_list[i] % 2 != 0] 
# [3,1]
print(m)

# A. it outputs [1, 3]
# B. the code is erroneous and it will not execute
# C. it outputs [3, 1]
# D. it outputs [4, 2, 0]

# Lösung: C 