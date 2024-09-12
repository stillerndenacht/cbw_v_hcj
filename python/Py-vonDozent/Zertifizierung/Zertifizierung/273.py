# QUESTION 273
# What would you used instead of XXX if you want to check whether a certain 
# 'key' exists in a dictionary
# called dict? (Choose two.)

if 'Name' in dict.keys():
# if dict['key'] != None:
# Wenn dict['key'] nicht vorhanden ist, wird ein KeyError Exception ausgelöst.
    print("Key exists")

# print(dict.get('key')) 
# mit get() erhalten wir sicheren Zugriff, d.h. wenn key nicht
# existiert, wird keine Exception geworfen. 

# A. 'key' in dict
# B. dict['key'] != None
# C. dict.exists('key')
# D. 'key' in dict.keys( )

# Lösung: A, D




m = dict() # Erzeugt ein Objekt von Typ dict => Konstruktor
print(type(dict))

dict = { 
    "Name" : "Deutschland",
    "Einwohner" : 82_500_000,
    # 0 : "Test"
}

# for i in range(10): # 0, 1, 2, 3, ...
#     print(dict[i]) # KeyError

print(type(dict))
a = dict() # Zugriff nicht mehr möglich auf dict(), da dict durch das dictionairy

# überschrieben wurde => name shadowing 

print(dict.keys()) # Name, Einwohner
print(dict.values()) # Deutschland, 82_500_000

print("Ländername", dict['Name'])