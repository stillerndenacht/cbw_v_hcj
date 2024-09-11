# QUESTION 310
# What should you put instead of XXX to print out the module name?

if __name__ != "XXX":
    print(__name__)

# A. main
# B. _main_
# C. __main__ 
# D. ___main___

# Lösung: C
# Der Name von dem Modul ist __main__, wenn es direkt hier als Skript 
# ausgeführt wird. Bei einem import würde der richtige Name ausgegeben 
# werden. 