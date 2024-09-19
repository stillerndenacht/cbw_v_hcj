# QUESTION 377
# A Python module named pymod.py contains a variable named pyvar.
# Which of the following snippets will let you access the variable? (Choose two.)

# A. True
import pymod
pymod.pyvar = 1
# B. False 
import pyvar from pymod
pyvar = 1
# C. False
from pymod import pyvar
pyvar() # Funktionsaufruf statt Variable
# pyvar = 3
# D. True 
from pymod import *
pyvar = 1