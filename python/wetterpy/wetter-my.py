import csv

# Pfad zur CSV-Datei vom Arbeits-Verzeichnis der Konsole aus
csv_datei_pfad = 'python/wetterpy/wetter_aufgabe.csv'
weatherraw = []

# Öffne die CSV-Datei im Lese-Modus
with open(csv_datei_pfad, 'r') as csv_datei:
    csv_reader = csv.reader(csv_datei)  # Erstelle einen CSV-Reader

    # Schleife durch die Zeilen der CSV-Datei
    for zeile in csv_reader:
        string = zeile[0]
        #print(string)
        weatherlinex = string.splitlines()
        #print(weatherlistx)
        weatherraw.append(weatherlinex)
    #print("weatherlist", weatherraw[1])
    weatherlist = weatherraw[1::]
    print(weatherlist[0])
    for i in weatherlist:
        #print("i",i[0], type(i[0]))
        i[0] = i[0].replace(" ", "")
        i[0] = i[0].split(";")
    print(weatherlist[0])    