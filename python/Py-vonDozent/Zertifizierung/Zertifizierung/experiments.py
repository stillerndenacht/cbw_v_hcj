myl = [[i + j for i in range(1, 5, 1)] for j in range(-1, 6, 3)]

# for j in range(-1, 6, 3):
#     for i in range(1, 5, 1):
#         myl.append(i+j)


# -1, 2, 5
# -1
# -1
# myl[] = [0,1,2,3]
#       = [3,4,5,6]
#       = [6,7,8,9]
myp = []
 
for l in myl: # l ist jeweils eine Liste
    for k in l: # k ist ein Listenelement
        if k not in myp: # Dubletten werden gefiltert
            myp.append(k)
 
print(myp) # [0,1,2,3,4,5,6,7,8,9]
