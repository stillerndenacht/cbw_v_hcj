# Question 272:
# How many elements will the list2 list contain after execution 
# of the following snippet?
list1 = [False for i in range(1, 10)]
# [ False, False, False, False, False, False, False, False, False ]
list2 = list1[-1:1:-1]
print(len(list2))
# A. zero
# B. five
# C. seven
# D. three