class Failure(IndexError):
    def __init__(self, message):
        self.message = message # Instanzvariable, self 
    # magische Methode, die bei print(error)
    # dann problem ausgibt.  
    def __str__(self):
        return "Problem"

# class Failure2(IndexError):
#     def __init__(self, hirsebrei):
#         self.hirsebrei = hirsebrei

try:
    print("Launch")
    # Es wird eine Eception voom Typ Failure 
    # ausgelöst und eine Message gegeben.
    raise Failure("Ignition") # self ist ein Objekt vom Typ "Failure"

# BaseException würde ALLE Fehler aufsaugen, da
# ALLE Fehlertypen von BaseException früher oder später erben.
# except BaseException:
#     pass

# Es wird der Block ausgewählt, zu dem Failure als Fehlertyp passt.
# RuntimeError erbt von BaseException und IndexError erbt auch von BaseException,
# ABER in unterschiedlichen Linien
# BaseException => IndexError => Failure
# BaseException => RuntimeError
# RuntimeError matched nicht auf Failure.
# Deswegen wird der Block ignoriert
# accident kann ohne Definition dort stehen und wird zur Laufzeit ein Problem.
except RuntimeError as error:
    print(accident)
    
# IndexError deckt sowohl Failure, als auch IndexError ab.
# Durch IndexError as error werden hier alle Exceptions abgehandelt, die
# von IndexError erben, einschl. IndexError selbst.
# Aber ich habe hier nur Zugriff auf alle Eigenschaften von IndexError, 
# NICHT von Failure. Deshalb bekomme ich nicht
# error.message, ABER ich kann mit print(error) zumindest die magische Methode
# __str__() von Failure ansprechen, weil error vom Typ Failure ist und
# das referenziert.
# IndexError => Failure
# "Polymorphie" 

# Man kann nicht über error auf .message zugreifen, weil nicht garantiert werden kann,
# dass ALLE Erben von IndexError ein Feld namens message haben.
# Hier werden aber potenziell auch andere Erben in anderen Linien von IndexError
# abgehandelt
except IndexError as error: # error ist eine Referenz auf ein Objekt vom Typ Failure
    print("Ignore")
    print(error) # "Problem" - was passt zu __str__()
    print(isinstance(error, RuntimeError)) # False
# except Failure as error:
#     print("Ignore")
#     print(error.message) # "Problem"
    
    
# Dieser Block wird nie ausgeführt, weil IMMEr eine Exception in try
# ausgelöst wird (raise) 
else:
    print("Landing")
finally:
    print("finally: Wird immer ausgelöst")


print("Wird immer ausgeführt")