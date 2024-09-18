# QUESTION 383
# With regards to the directory structure below, select the proper forms of the 
# directives in order to import
# module_b. (Choose two.)

pypack (dir)
|
|-- upper (dir)
| |
| |-- lower (dir)
| | |
| | |_ module_c.py (file)
| |
| |_ module_b.py (file)
|
|_ module_a.py (file)

# A. True, man muss immer den "Pfad" angeben
from pypack.upper import module_b
# B. True, Variante ohne from
import pypack.upper.module_b # as modb
# pypack.upper.module_b.var
# C. False
import upper_module_b
# D. False
import module_b