import random
random.seed(42)
 
list_2 = []
for _ in range(11):
    list_2.append(round(random.uniform(1,10), 1))
print(list_2)
 
list_2[1] = -list_2[1]
list_2[3] = -list_2[3]
 
list_2[0] = 0.4
list_2[-1] = 0.1
print(f"unsorted list: {list_2}")
 
list_2 = [ -9, -0.9, 0.1, 0.4]

list_sort = sorted(list_2)
print("Ascending order sorted list: ",list_sort)

# alternative Lösung auf dem Original
list_2.sort()

# reverse ein Argument, was man an sorted geben
list_rev = sorted(list_2, reverse=True)
print("Descending order sorted list: ",list_rev)

# alternative Lösung auf dem Orignal
# reverse() dreht eine Liste nur um, Sortierung muss vorher passieren 
list_2.reverse()

new_list = list(filter(lambda x: not(0 < x < 1) , list_2))

new_list = list(filter(lambda x: (x < 0 or x > 1) , list_2))

filtered_list = []
for num in list_2:
    if not (0 <= num <= 1):
        filtered_list.append(num)

print("Deleted elements b/w 0 and 1: ",new_list)
 
del_el = list_2.pop(0)
list_2.append(del_el)
print("Shifted first element to the last:",list_2)
 
import math
list_3 = sorted(map(lambda x: math.floor(x), list_2))
print("Sorted with absolute number: ",list_3)
 