import random

import tamamodulemy


class tama:
    def __init__(self, name="tama", fitness=10, hunger=1,x=0):
        self.fitness = fitness
        self.name = name
        self.hunger = hunger
        self.dead = False
        self.x = x
    
    def lifeloop(self):
        while True:
            what = self.question()
            if what == "exit":
                print("break lifeloop")
                break
            break

    def question(self):
        
            what = tamamodulemy.what
            if what == "f":
                self.feed(3)
                self.gethungry()
                return
            elif what == "exit":
                tamamodulemy.exitmsg()
                return what
            else:
                exit()
            
            #self.gethungry()

    def feed(self, food=2):
        self.hunger -= food
        print(":)", food)

    def gethungry(self):
        #x = 0
        self.randomx()
        if self.x == 2:
            self.hunger += 1
            print("getting hungrier =(")
        print(f"mein Hunger : {self.hunger}")

    def randomx(self):
        x = random.randint(1,10)
        print("x in randomx",x)
        self.x = x
        #return x
    
    #question()

tama1 = tama("gochi")
tama1.lifeloop()