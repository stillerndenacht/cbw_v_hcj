class tama:
    def __init__(self, fitness=10, name="tama", hunger=1):
        self.fitness = fitness
        self.name = name
        self.hunger = hunger
        self.dead = False

    def feed(self, food):
        self.hunger -= food
