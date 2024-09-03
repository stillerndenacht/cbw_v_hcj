# In dem Moment, wo ich import module1 ausführe,
# wird DAS KOMPLETTE module1 ausgeführt, d.h.
# Variablen gesetzt, Funktionen definiert, etc.
import module1 as m1

print(m1.greet())
#  print(module1.__dict__) # Was beinhaltet module1 eigentlich?
# Jedes Modul heißt so wie die Datei, in dem es beheimatet ist. 
# print(module1.__name__) # Wie heißt das Modul? 

print(m1.__name__) # Name des Original-Moduls, weil es importiert wurde

# Hier kommt als Modulname __main__, weil das Programm über dieses Skript
# gestartet wurde. 
print(__name__) # Was kommt hier? 

# Beobachtung:
# Wenn ich von hier aus den Python-Code starte, wird die Bedingung
# # in module1 in Zeile  10 NICHT ausgeführt, weil
# module1 NICHT Startpunkt ist. 