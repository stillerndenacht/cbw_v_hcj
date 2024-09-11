# QUESTION 305
# Executing the following snippet -

dct = {'pi': 3.14}
dct['pi'] = 3.1415 # dicts auch Zugriff mit [] subscription Operator

# A. to hold two keys named 'pi' linked to 3.14 and 3.1415 respectively
# nicht möglich, da es keine zwei Schlüssel mit demselben Namen geben kann.

# B. to hold two key named 'pi' linked to 3.14 and 3.1415
# ein Schlüssel kann nicht auf zwei Werte verweisen, man bekommt pro Schlüssel
# nur einen Wert !

# C. to hold one key named 'pi' linked to 3.1415
# ein Schlüssel - ein Wert ! Zeile 5 überschreibt Zeile 4

# D. to hold two keys named 'pi' linked to 3.1415
# zwei Schlüssel - ein Wert nicht möglich

# Lösung: C