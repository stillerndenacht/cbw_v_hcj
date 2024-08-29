# Text mit Umlauten
 
Umlaut_Text = "Der Mörder ist immer der Gärtner"
 
# Liste der Indizes der Umlaute in Umlaut_Text. Gewünschte Liste:  [5, 26]
# [0, 1,2,3, ..., 31 ]
list =  [x for x in range(len(Umlaut_Text)) if Umlaut_Text[x] in "äöüÄÖÜ"]
Umlaut_Text[5] # 'ö'
"ö" in "äöüÄÖÜ" # True
 # ['ä', 'ö', 'ü', ...]
 
print(list)


text = "Der Mörder ist immer der Gärtner"
umlauts = ['ä','Ä','ö','Ö','Ü','ü']
# <Wert> in <Iterable>
umlaut_indices = [i for i, char in enumerate(text) if char in umlauts]
print(umlaut_indices)

# enumerate:
# 0 D
# 1 e
# 2 r
# ...
# i (ist Index)
# char Wert

print("---- Aufgabe 9.1 ----------")
umlaut = "Isch hän än kommischet jefühl bei die Sach, dat is janz schön vertüddelt."
umlautindex = []
countx = 0
for countx, x in enumerate(umlaut):
# for x in umlaut:
    if x == "ä" or x == "ö" or x == "ü":
        #umlauti = countx
        print(countx)
        print(x)
        umlautindex.append(countx)
#    countx += 1
print(umlautindex)
print("Länge umlaut :", len(umlaut))

# eigene Implementierung von replace
# "zu Fuß"
newumlaut = ""
for y in umlaut:
    if y == "ä":
        y = "&auml;"
    elif y == "ö":
        y = "&ouml;"
    elif y == "ü":
        y = "&uuml;"
    newumlaut += y
print(newumlaut)
print("Länge newumlaut :", len(newumlaut))

umlaut.replace('ä', '&auml;') # für ö und ü entsprechend anpassen 



# • Gegeben seien folgende Strings.
# Überprüfen Sie, ob beide Strings gleich sind, wenn man sie
# nicht case sensitive betrachtet:
A = "VGhpcyBpcyBhIHRlc3QgZmlsZSBkYXRhIHRvIHVzZSBhIGxhbmd1YWdlIEJpbmFyeSBkYXRh"
B = "VGhpcyBpcyBhIhRlc3QgzmlsZSBkYXRhIHRvIHVzZSBhIGxhbmd1YWdlIEJpbmFyeSBkYXrh"
 
 
 
print(A == B)
print(A.lower() == B.lower())
print(A.upper() == B.upper())
 

# Längerer Text (Lorem Ipsum)
 
Long_Text = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr,\
      sed diam nonumy eirmod tempor invidunt ut labore et dolore magna \
    aliquyam erat, sed diam voluptua. At vero eos et accusam et justo \
     duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata \
        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, \
            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet."
 
word_count = len(Long_Text.split())
 
print(f"Anzahl Wörter in Long_Text: {word_count}")
 
# Sätze zählen
 
sentence_count = len(Long_Text.split(". ")) # \n statt " " wäre hier problematisch
print(f"Anzahl Saetze in Long_Text: {sentence_count}")
 
# Buchstaben zählen (ohne Leerzeichen)
 
letter_count = len(Long_Text.replace(" ", ""))
print(f"Anzahl Buchstaben in Long_Text: {letter_count}")



def text_analyzer(text):
  text.replace('"', '\"')
  text.replace("'", "\"")
               
  words = text.split()
  word_count = len(words)
 
  # "Dies ist eine wörtliche Rede."
  sentences = text.split('.')
  sentences.extend(text.split('!'))
  sentences.extend(text.split('?'))
  # Würde ." und " zählen, hier gäbe es doppelte Einträge.
  # Als Lösungsansatz evtl. set
  sentences.extend(text.split('\"')) 
  sentence_count = len(sentences)
 
  letters = ''.join(text.split())
  print(letters)
  letter_count = len(letters)
 
  return word_count, sentence_count, letter_count
 
 
text = "Dies ist ein Beispieltext. Er wird zur Demonstration verwendet. Wie viele Wörter, Sätze und Buchstaben enthält er?"
 
 
result = text_analyzer(text)
print("Wortanzahl:", result[0])
print("Satzanzahl:", result[1])
print("Buchstabenanzahl:", result[2])




text_lang ="""
Besonders in Städten wie Flensburg, Kiel oder Lübeck, aber auch in den Urlaubsregionen an der Küste: Überall ist Wohnraum knapp.
Aber damit nicht genug. Der Mieterbund Schleswig-Holstein berichtet auf NDR Nachfrage, dass Vermieter immer häufiger Eigenbedarf
anmelden und ihren Mietern kündigen. Demnach ist die Zahl der Betroffenen, die in die Beratungen kommen, in den vergangenen Jahren deutlich gestiegen.
Der Mieterbund registriert landesweit aktuell etwa 600 Fälle pro Jahr. Doch das sei nur ein kleiner Ausschnitt,
sagt Carsten Wendt vom Mieterbund Schleswig-Holstein. Die Dunkelziffer sei immens.
Denn Wendt weiß, dass "die überwiegende Anzahl der Mieter keine rechtliche Beratung in Anspruch nimmt. "
"""
 
print(text_lang.count(" "), " Wörte gibt es in dem Text.")
print(text_lang.count(".") + text_lang.count("!") + text_lang.count("?"), " Sätze gibt es in dem Text.")
print(len(text_lang.replace(" ", "").replace(".", "").replace(",", "")), "Buchstaben gibt es insgesamt.")


text = "264.8"
 
print(text.isdecimal())

if text.isdecimal():
    text = float(text)

print(text)
print(type(text))




# Überprüfung, ob String float ist
 
test_float = "5.0"
test = "1.000.000,567"
# "50"
# "100000"
# "1000000"
if test_float.isdigit():
    print("test_float ist int")
    true_test_int = int(test_float)
# "5.0" => "50"
# "100.000" => 100.0 (noch nicht berücksichtigt)
# elif test_float.count(".") > 1:
#     # Tausenderpunkte entfernen
#     test_float = test_float.replace(".", "")
#     true_test_float = int(test_float)
#     pass
elif test_float.replace(".", "", 1).isdigit():
    print("test_float ist float")
    true_test_float = float(test_float)
    print(true_test_float)
# "1.000.000,23" => weder int noch float
else:
    print("test_float ist nicht int oder float")