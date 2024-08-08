import React from "react";

// "Türsteher"
type Props = {
    name : string;
    prio : string;
}

const ToDo : React.FC<Props> = ({ name, prio }) => {
    return (
        <li>{name}, {prio}</li>
    );
}

export default ToDo;