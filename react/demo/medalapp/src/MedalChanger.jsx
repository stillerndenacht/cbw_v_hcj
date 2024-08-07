import { useState } from "react";
import ButtonFill from "./ButtonFill";
import laender from "./Laender";

function MedalChanger(landx) {
  const [medalcount, setMedalcount] = useState(landx);
  console.log(medalcount);
  function MedalAdd(x) {
    console.log("this is x", x);
    let newcount = x.landx.gold + 1;
    return newcount;
  }
  switch (landx.medaltype) {
    case "gold":
      console.log("case gold");
      return (
        <ButtonFill
          symbol=" + "
          filler={() =>
            setMedalcount(
              MedalAdd(medalcount),
              console.log(medalcount, landx.medaltype, medalcount.landx.gold)
            )
          }
        />
      );
  }
}
export default MedalChanger;


