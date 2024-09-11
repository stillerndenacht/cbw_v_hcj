# QUESTION 318
# What is the expected output of the following code?

lst = [x for x in range(5)] # 0,1,2,3,4
lst = list(filter(lambda x: x % 2 == 0, lst)) # 0,2,4
print(len(lst))

# A. 2
# B. The code will cause a runtime exception
# C. 1
# D. 3

# Lösung: D 