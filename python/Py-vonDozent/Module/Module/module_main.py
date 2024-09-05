# import-Direkte
# Hier wird alles importiert, alle Namen und Symbole 
import module1

# Zugriff auf module1 über den Namen module1
module1.greet()
print(module1.a) # Hallo aus Modul 1

def greet():
    print("Hallo aus Modul Main")

greet() # Hallo aus Modul Main
module1.greet() # Hallo aus Modul 1