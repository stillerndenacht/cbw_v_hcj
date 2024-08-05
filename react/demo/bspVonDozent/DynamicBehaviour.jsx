import { useState } from "react";
import ButtonService from "./ButtonService";

const heading = "Start";

function DynamicBehaviour() {
    const [showHeading, setShowHeading] = useState(heading);
    
    /* Wir nutzen einen ButtonService, um zwei verschiedene Verhalten 
            zu erzeugen */
    return (
        <div>
            {/*Alert-Aufruf*/}
            <ButtonService cap="alert" behaviour={() => alert("Hallo")} />
            <h2>{showHeading}</h2>
            {/*Aktualisierung der UI*/}
            <ButtonService cap="Überschrift" behaviour={() => 
                ( setShowHeading("Test") )
            } />
        </div>
    );
}

export default DynamicBehaviour;