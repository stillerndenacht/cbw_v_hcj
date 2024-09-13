# QUESTION 345
# Which of the following expressions evaluate to True? (Choose two.)
# A. 
121 + 1 != '1' + 2 * '2' # True
# 122 != '122', da * vor +
# Wenn beide Operanden unterschiedliche Datentypen haben, kann == nie True ergeben.
# In Python gibt es kein ===. Sprachen mit expliziter Typisierung
# erlauben solche Vergleiche gar nicht.  

# B. 
'1' + '1' + '1' < '1' * 3
# False, da beides gleich
# C. 
'AbC'.lower() < 'AB' # False
# Weil code points der kleinen Buchstaben größer sind als die der Großbuchstaben. 
# Außerdem ist links der String länger. 
# Es wird Buchstabe für Buchstabe verglichen.
# Beim ersten Unterschied wird anhand des code points entschieden.
# Hier sind beide Teilstrings gleich:  
# 'ab' < 'abc' liefert True, da 'ab' kürzer als 'abc' 
#D. 
'3.14' != str(3.1415)
# True, da unterschiedliche Längen. 
# Beim Vergleich spielen Teilstrings keine Rolle. 
  