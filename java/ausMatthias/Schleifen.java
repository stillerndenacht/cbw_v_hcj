package org.example;

public class Schleifen {

    int x =0;

    public int whileBeispiel(int n){

        //das Ergebnis
        int fak=1;
        fak =x;
        //die Laufvariable
        int i=1;
        while (i<=n){
            fak=fak*i;
            i++;
        }
    return fak;
    }

    /*
    i = 0
    while i < 5:
     print(i)
     i += 1
    */


    public void doWhileBeispiel(){
        boolean x=false;
        int i =0;

        while (x){
            System.out.println("Hallo");
        }

        do{
            x=true;
            i++;
            System.out.println(i);
        }while (x==true && i<3);
    }

    /* do while nachbau
        while True:
        # Code, der mindestens einmal ausgeführt wird
            user_input = input("Gib eine Zahl größer als 10 ein: ")
            zahl = int(user_input)

            # Bedingung überprüfen
            if zahl > 10:
                break
     */


    public void forBeispiel(){


        for (int i=1; i<15; i++){
            for (int j=1; j<=i; j++){
                System.out.print("_");
            }
            System.out.println();
        }

    }
    /*
    for i in range(5):
        print(i)
     */



    public void forEachBeispiel(){

        int[] intArray = {1,2,3,4,5};
        for (int x : intArray){
            System.out.println(x);
        }

    }

    /*
    fruechte = ["Apfel", "Banane", "Kirsche"]

    for frucht in fruechte:
        print(frucht)
     */



}
