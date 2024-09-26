my_list =[i for i in range(5)]
print(my_list)
[0,1,2,3,4]
m = [my_list[i] for i in range(4,0,-1) if my_list[i] % 2 != 0]
print(m)
[3,1]