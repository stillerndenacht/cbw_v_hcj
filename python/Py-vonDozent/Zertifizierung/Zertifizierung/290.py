# QUESTION 290
# There is a stream named s open for writing. What option will you select to write a line to the stream?

# A. s.write("Hello\n")
# B. write(s, "Hello")
# C. s.writeln("Hello")
# D. s.writeline("Hello")

f = open('test.txt', 'w') # w ist ein der Modi, um eine Datei zu öffnen
# Zu welchem Zweck soll die Datei geöffnet werden? 
f.write("Hallo")
f.writelines(["Dies ist", "eine mehrzeilige", "Datei"])
# f.writeline f.writeln gibt es nicht 
f.close() # Wichtig, wenn 


f = open('test.txt', 'rb') # w ist ein der Modi, um eine Datei zu öffnen
# Zu welchem Zweck soll die Datei geöffnet werden? 
lines = f.readlines()
print(lines)
