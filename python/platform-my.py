import platform
# https://docs.python.org/3/library/platform.html#module-platform

print("platform.platform() :            ",platform.platform()) # bspw. Windows-11-10.0.22631-SP0
print("platform.platform(aliased=True) : ",platform.platform(aliased=True))
print("platform.platform(aliased=1, terse=1) : ",platform.platform(aliased=1, terse=1)) # aliased True => ggf. Alias Names, terse True => Minimal info bsp. Windows 11
print("platform.uname() :      ",platform.uname())
print("platform.version() :             ",platform.version())
print("platform.processor() :           ",platform.processor())
print("platform.machine() :             ",platform.machine())
print("platform.system() :              ",platform.system())
print("platform.python_version_tuple() : ",platform.python_version_tuple())