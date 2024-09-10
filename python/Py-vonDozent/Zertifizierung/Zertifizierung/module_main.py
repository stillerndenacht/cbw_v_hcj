# import-Direkte
# Hier wird alles importiert, alle Namen und Symbole 
import module1 as m1
import alpha.zeta as az 

print(az.secret)

# Zugriff auf module1 über den Namen module1
m1.greet()
print(m1.a) # Hallo aus Modul 1

def greet():
    print("Hallo aus Modul Main")

greet() # Hallo aus Modul Main
m1.greet() # Hallo aus Modul 1