# QUESTION 368
# Which of the following snippets will execute without raising any unhandled
# exceptions? (Choose two.)
# A. 
try:
    print(float("1e1")) # 10.0
except (ValueError, NameError):
    print(float("1a1"))
else: # try ohne exception führt zur Ausführung von else
    print(float("101"))
# Hier liegt keine unhandled excpetion vor. Bitte bei Bedarf else checken !
# B. 
try:
    print(1/1)
except:
    print(2/1)
else:
    print(3/0) # ZeroDivisonError 
# Hier haben wir eine unhandled exception !!! 

# C. 
try:
    print(1/0) # excpetion wird ausgelöst 
    # ZeroDivisionError
# Dies würde nur ausgeführt werden, wenn ZeroDivisionError direkt oder indirekt von
# ValueError erbt. 
except ValueError: # ZeroDivisionError erbt von ArithmeticError !
    print(1/1)
# Den folgenden Block kann man als Default setzen- 
# except ArithmeticError: # "Ist-Ein"-Beziehung zwischen ZeroDivisionError und ArtihmeticError
#     pass
# except Exception:
#     pass
else:
    print(1/2)
# Es liegt eine unhandled exception vor. 

# D.
try:
    print(0/1) # 0, es wird gar keine exception ausgelöst, die wir behandeln könnten
    # Der Code läuft sauber durch (KEINE Exception)
except:
    print(1/1)
else:
    print(2/1)

# Es läuft alles sauber durch (man kann 0/1 teilen)



try:
    print(0/1) # 0, es wird gar keine exception ausgelöst, die wir behandeln könnten
    # Der Code läuft sauber durch (KEINE Exception)
except:
    print(1/1)
else:
    print(2/1)

# Es wird eine exception ausgelöst, aber abgehandelt
# HANDLED exception
try:
    print(1/0) # ZeroDivisionError wird ausgelöst
except: # HIER wird die exception (bzw. alle möglichen) abgehandelt. 
    print(1/1)
else:
    print(2/1)

# unhandled exception:
# Ein Fehler wird ausgelöst, aber durch KEIN passendes except abgefangen !
# Das führt dazu, dass der Fehler nicht behandelt wird und dann in der VM landet.
try:
    print(1/0) # ZeroDivisionError wird ausgelöst
except ValueError: # HIER wird die exception (bzw. alle möglichen) abgehandelt. 
    print(1/1)
else:
    print(2/1)

# Exception == Fehler den das System mit  Fehlermeldung klar macht... ?!
#  Unhandled == wenn nur das System mit default Behandlung reagiert,
#  Handled == wenn du als Programmierer eine bestimmte Behandlungsvorschrift machst