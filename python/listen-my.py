alter = [1, 2, 3,[5,6]]
print(alter)
for i in range(0, len(alter),1): 
    if type(alter[i] ) is int: 
        alter[i] += 1
    else:    
        print("Hier geht's nicht",alter[i])
print(alter)

liste = [1, 2, 3]
print(liste)
liste.insert(2, 4) 
print(liste)
liste.append([4, 5])
print(liste) 
print(liste[4][1])
print(id(liste))
a = 4
print(id(a))
print(id(liste[4][0]))