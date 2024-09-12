# QUESTION 291
# You are going to read just one character from a stream called s. 
# Which statement would you use?

# A. ch = read(s, 1)
# B. ch = s.input(1)
# C. ch = input(s, 1)
# D. ch = s.read(1)

# Lösung: D 

f = open('test.txt') # w ist ein der Modi, um eine Datei zu öffnen
# Zu welchem Zweck soll die Datei geöffnet werden? 
# HalloDies isteine mehrzeiligeDatei
chara = f.read(1)
print(chara) # 'H'
chara = f.read(3) 
# Der Lesekopf geht dann nach dem H weiter
print(chara) # 'all'