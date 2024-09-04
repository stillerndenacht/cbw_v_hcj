
import time


class tama:
    def __init__(self, name="tama", fitness=10, hunger=1):
        self.fitness = fitness
        self.name = name
        self.hunger = hunger
        self.dead = False

    def feed(self, food=2):
        self.hunger -= food
        print(":)")
    def gethungry(self):
        self.hunger += 1

def innerloop():
        step0 = time.time()
        print("step0   ",step0)
        step = step0
        
        return step

def timeloop(step):
    timegone = 0
    start0 = time.time()
    print(start0)
    start = start0
    print("start  ",start)
    start0 = 0
    print(start0)
    step = innerloop()
    print("step",step)
    

    if step - start > 5:
        print("5 seconds gone")
        timegone += (step - start)
        print(f"time gone {timegone}")
    elif timegone > 20:
        return print(f"time gone {timegone}")
    timegone += (step - start)
    print(f"time gone {timegone}")

timeloop(0)
time1 = time.time()+2
print("time : ", time1 , time.time())
if time.time() == time1:
    print("time2 : ",time.time())


#  time.sleep(secs)

#     Suspend execution of the calling thread for the given number of seconds. The argument may be a floating-point number to indicate a more precise sleep time.