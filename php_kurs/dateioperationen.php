<?php
// copy("Quelle","Ziel"); # Datei kopieren
// mkdir("Verzeichnis"); # Verzeichnis erstellen
// rename("Quelle","Ziel"); # Datei | Verzeichnis umbenennen oder verschieben
// rmdir("Verzeichnis"); # leeres Verzeichnis löschen
// unlink("Datei"); # Datei löschen

//  wenn du hier was auskommentierst musst du ggf. den Ordner dateiopera von Hand aus dem Verzeichnis php_kurs löschen
echo "------- dateioperationen ----------<br>";

echo " --- und jetzt wird alles angelegt --- <br>";
mkdir('dateiopera');
if (!file_exists('dateiopera')) {
    mkdir('dateiopera');
} else {
    echo 'dateiopera war schon da<br>';
}

copy("file_upload_testfile.txt", "dateiopera/file_upload_testfile.txt");
# Achtung copy benennt auch um, wenn es unter anderem Name ins Ziel kommt

rename("dateiopera/file_upload_testfile.txt", "dateiopera/file_renamed_testfile.txt" );
sleep(10);
mkdir("dateiopera/operainner");

echo "--- Achtung rename verschiebt auch ....!<br>";
rename("dateiopera/file_renamed_testfile.txt", "dateiopera/operainner/file_renamed_testfile.txt" );
echo "<br> --- FERTIG!! 5 Sekunden zum anschauen --<br>";
sleep(5);

# ------ Löscht alles wieder, wenn es denn da ist. Wenn nicht gibt's einen Fehler
echo " ** ich mach erstmal alles wieder weg --- <br>";
sleep(1);
unlink("dateiopera/operainner/file_renamed_testfile.txt");
sleep(1);
rmdir("dateiopera/operainner");
sleep(1);
rmdir('dateiopera');
echo " --- alles weg --- kuck .... im Verzeichnisbaum ...<br>";


