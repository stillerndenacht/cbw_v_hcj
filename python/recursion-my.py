xx = 5
countx = 0
def recursion(x, count):
    #print("vor if id(x) ",id(x))
    if x > 0:
        #print("im if id(x) ",id(x))        
        z = f"ich bin die {count}'te Wiederholung bei x = {x}"
        print(z)
        x -= 1
        count += 1        
        recursion(x, count)
    else:
        print(f"ich bin die letzte Wiederholung bei count = {count} und x = {x}")

#print("id xx \t",id(xx))
recursion(xx, countx)