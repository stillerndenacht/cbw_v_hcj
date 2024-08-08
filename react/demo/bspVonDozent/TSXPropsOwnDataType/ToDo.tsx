import React from "react";
import { TodoItem } from "./App";

// "Türsteher"
type Props = {
  item : TodoItem
}

const ToDo : React.FC<Props> = ({ item }) => {
    return (
        <li>{item.name}, {item.prio}</li>
    );
}

export default ToDo;