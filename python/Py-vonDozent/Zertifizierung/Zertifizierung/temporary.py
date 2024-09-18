# erstellen eines files - pfad vom Arbeitsverzeichnis der Konsole aus gesehen (hier hcj_cbw)
# jede Zugriffsart muss man extra initialisieren :(
filex = open("python/filehandling/testfile.txt", "w+")
filex.write("Ich existiere!")
filex.close()

file_test = "python/filehandling/testfile.txt"

with open(file_test, "r+") as datei:
    datei.read()

# File wird automatisch 

# öffnen zum Lesen - Lesen im Textmode ist default "rt"
filex = open("python/filehandling/testfile.txt") #
#print(filex.read()) 
filex = open("python/filehandling/testfile.txt", "w")
filex.write("Ich bin neu geboren") # überschreibt den Inhalt komplett
# öffnen zum lesen im Textmode
filex = open("python/filehandling/testfile.txt", "rt")
#print(filex.read())
# öffnen zum Schreiben im append-Mode
filex = open("python/filehandling/testfile.txt", "a")
filex.write(" und verlängert >")
filex.write("> und mehr verlängert >")
filex.write("\n> und noch mehr verlängert >")
filex = open("python/filehandling/testfile.txt", "rt")
#print(filex.read())
#filex = open("python/filehandling/testfile.txt")
#print(filex.read())
print(filex.readline())
print(filex.readline())
print(filex.readline())
print(filex.readline())