# What is the expected output of the following code?
 
List = (1, 2, 4, 8) # auf tupel achten !!! 
print(List)
List = List[1:-2]
print(List)
List = list(List)
print(List)
 
'''
A:  (2)
    [2]
B:  2
    2
C:  (2,4)
    [2,4]
D:  (2,)
    [2]    
'''