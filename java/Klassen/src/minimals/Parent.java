package minimals;

public class Parent {
    private String famName = "Master";
    private String sureName = "Nobody";
    private int alter;

    public Parent() {
        super();
    }

    public Parent(String famName, String sureName, int alter) {
        super();
        this.famName = famName;
        this.sureName = sureName;
        this.alter = alter;
    }

    public void print() {

        System.out.printf("%nClassName : %s", this.getClass().getName());
        System.out.printf("%nfamName :  %20s", famName);
        System.out.printf("%nsureName : %20s", sureName);
        System.out.printf("%nalter : %20d", alter);
    }

}
