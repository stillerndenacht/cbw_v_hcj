import csv

# Pfad zur CSV-Datei vom Arbeits-Verzeichnis der Konsole aus
csv_datei_pfad = 'python/wetterpy/wetter_aufgabe.csv'
daten = []

# Öffne die CSV-Datei im Lese-Modus
with open(csv_datei_pfad, 'r') as csv_datei:
    csv_reader = csv.reader(csv_datei)  # Erstelle einen CSV-Reader

    # Schleife durch die Zeilen der CSV-Datei
    for zeile in csv_reader:
        string = zeile[0]
        print(string)
        