class Person {
  constructor(fname = "nobody", alter = 0) {
    this.fname = fname;
    this.alter = alter;
  }
  changeName(namechange) {
    this.fname = namechange;
    console.log("Hi my name is : ", this.fname);
  }
  changeAlter(alterchange) {
    this.alter = alterchange;
    console.log("I'am", this.alter, " years old ");
  }
}
let p1 = new Person("Vivaldi", 28);
console.log(p1);
console.log(p1.fname);
