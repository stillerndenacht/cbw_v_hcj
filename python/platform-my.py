import platform
# https://docs.python.org/3/library/platform.html#module-platform

print(platform.platform()) # bspw. Windows-11-10.0.22631-SP0
print(platform.platform(aliased=True))
print(platform.platform(aliased=1, terse=1)) # aliased True => ggf. Alias Names, terse True => Minimal info bsp. Windows 11
print(platform.uname())
print(platform.version())
print(platform.processor())
print(platform.machine())
print(platform.system())