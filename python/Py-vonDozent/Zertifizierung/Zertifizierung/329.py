# QUESTION 329
# Which one of the platform module functions should be used to
# determine the underlying platform name?

# A. platform.python_version()
# B. platform.processor()
# C. platform.platform()
# D. platform.uname()

import platform
print(platform.python_version())
print(platform.processor())
print(platform.platform())
print(platform.uname())

# Lösung: C
# D unserer Meinung nach auch möglich. 

# Windows-11-10.0.22631-SP0
# uname_result(system='Windows', node='DESKTOP-FP4OP26',
#  release='11', version='10.0.22631', machine='AMD64')
