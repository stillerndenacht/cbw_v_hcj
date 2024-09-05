ww = "Versuch"
yy = ""
# print(ww[len(ww)-1:len(ww):1])
def recur(w,y):
    count = len(w)
    # Rekursionsabbau
    if count == 0:
        print(f"das gedrehte wort :{y} count {count}")
    # Rekursionsaufbau
    else:
        #print(f"das wort bisher :{y} count {count} Wort {w}")        
        y += w[len(w)-1:len(w):1]    
        w = w[:len(w)-1]
        print("w", w)
        recur(w, y)      
       
recur(ww, yy)

# this makes me happy :-)
def reverseRecurse(string):
    print(string)
    if len(string) == 1: # 1 oder 0 möglich
        return string # Rekursionabbau
    else:
        return string[-1] + reverseRecurse(string[:-1]) # exklusive -1 !
 
print(reverseRecurse("Versuch"))
















# def umdrehen(s):
#     if len(s) <= 1:
#         return s
#     else:
#         return s[-1] + umdrehen(s[1:-1]) + s[0]

# s = "Kurs"
# print(umdrehen(s))  

# s = "FAG41312"
# print(umdrehen(s))

