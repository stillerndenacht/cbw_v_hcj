// import in MedalChanger.jsx
import LaenderItem from "./LaenderItem";
function MedalAdd(x) {
    console.log("that's overhanded", x);
    //  x.landx = x;
    x.landx.gold = x.landx.gold +1;
    console.log("that's new", x.landx);
    // let newcount = x.landx.gold + 1;
    const land = x.landx;
    const key = x.landx.id;
    console.log("that's new too", land);
    // const land = [...newland];
    LaenderItem({land});
    //  return land;
  }
  export default MedalAdd;