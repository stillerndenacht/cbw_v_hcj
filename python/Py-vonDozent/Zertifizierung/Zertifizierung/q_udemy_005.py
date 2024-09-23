
mylist = ["carrot", "potato", "cauliflower", "radish"] 
mylist.sort(key=lambda x: x[-2], reverse=False) 

print(mylist) 
# cauliflower, carrot, radish, potato
# potato, radish, carrot, cauliflower bei reverse = True