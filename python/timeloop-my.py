import time


clock = 0
while True:
    
    exitmsg = input("exit für exit1 :")
    if exitmsg == "exit":
        print("end clock :", clock)
        break
    
    def timeloop(clock, exitmsg):
        timegone = 0
        def innerloop(clock, exitmsg):
            nonlocal timegone
            global step
            global start
            
            start0 = time.time()
            print(start0)
            start = start0
            time.sleep(5)
            print("start  ",start)
            step0 = time.time()
            print("step0   ",step0)
            step = step0    
            print("step",step)
            print("5 seconds gone?")
            timegone += (step - start)                  

            if step - start > 5:
                print("5 seconds gone!!")
                timegone += (step - start)
                print(f"time gone {timegone}")
                clock +=1
                print("step clock :", clock)

            if timegone > 20:
                print(f"time gone over 20 {timegone}")
                timegone = 0
                clock += 5
                print("timegone clock :", clock)
                exitmsg = input("exit für exit2 :")
                if exitmsg == "exit":
                    return exitmsg, clock        
            
            innerloop(clock, exitmsg)
            return exitmsg, clock 
        innerloop(clock, exitmsg)
        return exitmsg, clock
    

    timeloop(clock, exitmsg)