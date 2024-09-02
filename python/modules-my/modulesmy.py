import module1my
from module2my import greet as gr, a as aa
import module3my

module1my.greet()
print(module1my.a)
print(aa) # das A gibt es in module2my gar nicht - es ist von module1my importiert
print(gr()) # auch das greet gibt es in module2my gar nicht - es ist von module1my importiert
module3my.test()
a = "ich bin A aus modulesmy"
def greet():
    print("Hallo aus modules")