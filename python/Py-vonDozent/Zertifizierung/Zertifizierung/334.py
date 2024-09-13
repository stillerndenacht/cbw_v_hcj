# QUESTION 334
# What is the expected behavior of the following code?
m = 1
def foo(n):
    global m
    # assert: Vergewisserung, Checkpoint
    assert m == 0 # wenn m nicht 0 ist, wird eine AssertionError Exception ausgelöst. 
    try:
        return 1 / n # ZeroDivisionException
    # ZeroDivisionException erbt von ArtihmeticError
    # Daher wird dieser Fehler in dem folgenden Block abgehandelt
    except ArithmeticError:
        m += 1
        raise # ArithmeticError # "re-raise" löst nochmal einen ArithmeticError 
        # und das wird dann in Zeile 21 abgehandelt
    # raise # Hier lösen wir als Programmierer eine BaseException aus

try:
    foo(0)
    # Bei Rückkehr aus foo(0) ist noch eine Excpetion da !
except ArithmeticError:
    m += 2
except: # AssertionError wird hier abgehandelt. 
    m += 1
print(m)