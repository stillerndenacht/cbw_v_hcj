# da funktioniert bisher noch gar nix...
def reverse(x):
    y = ""
    count = len(x)
    for i in x:        
        #print(count)         
        y += x[count-1]
        #print("i",i,"y",y)
        count -= 1
    return y

wort = "Worte"
reverse(wort)
print(reverse(wort))
print(wort)

ww = "Versuch"
yy = ""
# def recur(w,y):
#     count = len(w)
#     if count > 0:
        
#         print(f"das wort bisher :{y} count {count}")
        
#         y += w[len(w):len(w)-2:-1]
#         #y += z
#         w = w[:len(w)-1]
#         print("w", w)
#         recur(w, y)
#     else:
        
#         print(f"das gedrehte wort :{y} count {count}")
def recur(w,y):
    count = len(w)
    if count == 0:
        print(f"das gedrehte wort :{y} count {count}")
    
    else:
        print(f"das wort bisher :{y} count {count} Wort {w}")
        
        y += w[len(w)-2:len(w)-1:1]
        #y += z
        w = w[:len(w)-1]
        print("w", w)
        recur(w, y)
       
        
recur(ww, yy)