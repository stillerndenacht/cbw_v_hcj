# QUESTION 372
# What is the expected behavior of the following code?

my_list = [i for i in range(5, 0, -1)]
m = [my_list[i] for i in range(5) if my_list[i] % 2 == 0]
print(m)

# A. it outputs [4, 2]
# B. it outputs [2, 4]
# C. it outputs [0, 1, 2, 3, 4]
# D. the code is erroneous and it will not execute