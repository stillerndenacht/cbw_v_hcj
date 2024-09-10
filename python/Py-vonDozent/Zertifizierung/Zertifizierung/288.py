# QUESTION 288
# If you want to access an exception object's components and store them in an object called e, you have to
# use the following form of exception statement:

# A. except Exception(e):
# B. except e = Exception:
# C. except Exception as e: # Syntax ist so definiert und konsistent zu den imports
# D. such an action is not possible in Python 

try:
    print( 8 / 0)
except ZeroDivisionError as e:
    print(e)

# Exception-Objekte beinhalten zusätzliche Informationen zum Fehler
# oder StackTrace
# Wir benutzen Exception-Objekte auch gerne, um diese in einer eigenen 
# Implementierung zu erweitern.

class MyFancyDivisionError(ZeroDivisionError):
    def __init__(self, *args):
        super().__init__(*args)
        print(args)
        self.errormsg = args[0]
        self.errorcode = args[1]

class MyFancyDivisionErrorSpec(ZeroDivisionError):
    def __init__(self, *args):
        super().__init__(*args)
        self.dividend = args[0]
        if dividend == 8:
            print("Fehler 404: Die 8 ist böse")
        else:
            print("Teile nie durch 0")



div = 1
dividend = 1
try:
    if div == 0 and dividend != 8:
        # raise löst direkt die Ausnahme aus
        # raise kann aber auch durch darunterliegende Funktionsaufrufe
        # ausgelöst werden, aber HIER abgefangen werden in dem try-except
        raise MyFancyDivisionError(f"Teile nie {dividend} durch 0", 400)
    elif div == 0 and dividend == 8:
        raise MyFancyDivisionError(f"Die 8 ist ganz böse", 404, 8)
    elif div == 1 and dividend == 1:
        raise BaseException(f"1 und 1")
    else:
        print( dividend / div)
# Unterschiedliche Exceptions sind wie if .. elif und else
except MyFancyDivisionError as e:
    print(e.errormsg)
    print(e.errorcode)


div = 0
dividend = 8
try:
    if div == 0:
        raise MyFancyDivisionErrorSpec("")
except MyFancyDivisionErrorSpec as e:
    print(e)