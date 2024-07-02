{
  let x = true;
  let y = true;
  let z = true;
  console.log("\v Vergleich von || und ^ als oder-Operatoren");
  console.log("\vlet x = true", "\vlet y = true", "\vlet z = true");
  //normales oder - mindestens eines muss true sein um Ausgabe true zu bekommen
  console.log("console.log(x || y || z) : ", x || y || z);
  //ausschließliches oder - nur eines darf true sein???, um Ausgabe 1 zu bekommen
  console.log("console.log(x ^ y ^ z) : ", x ^ y ^ z);
}
{
  let x = false;
  let y = true;
  let z = true;

  console.log("\vlet x = false", "\vlet y = true", "\vlet z = true");
  console.log("console.log(x || y || z) : ", x || y || z);
  console.log("console.log(x ^ y ^ z) : ", x ^ y ^ z);
}
{
  let x = false;
  let y = false;
  let z = true;

  console.log("\vlet x = false", "\vlet y = false", "\vlet z = true");
  console.log("console.log(x || y || z) : ", x || y || z);
  console.log("console.log(x ^ y ^ z) : ", x ^ y ^ z);
}
{
  let x = false;
  let y = false;
  let z = false;

  console.log("\vlet x = false", "\vlet y = false", "\vlet z = false");
  console.log("console.log(x || y || z) : ", x || y || z);
  console.log("console.log(x ^ y ^ z) : ", x ^ y ^ z, "\v");
}
