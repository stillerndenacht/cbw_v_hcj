def what_am_i_doing(lst):   # berechnet summe der listen werte (rekusiv)
    if len(lst) == 0:       
         return 0   
    return lst[0] + what_am_i_doing(lst[1:]) 

print(what_am_i_doing([1,2,3,4])) 



[1,2,3,4]
1 
[2,3,4]
# +2
# +3
# +4
# =10
