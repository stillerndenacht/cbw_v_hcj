<?php

$note = 3;
echo "<br><h3>Schulnoten mit verschachteltem IF ELSE</h3>";


if ($note == 1) {
    echo "Note : sehr gut";
} else {
    if ($note == 2) {
        echo "Note : gut";
    } else {
        if ($note == 3) {
            echo "Note : befriedigend";
        } else {
            if ($note == 4) {
                echo "Note : genügend";
            } else {
                if ($note == 5) {
                    echo "Note : ungenügend";
                } else {
                    echo "Die angebene Note : " . $note . " ist keine gültige Schulnote";
                }
            }
        }
    }
}


echo "<br><h3>Schulnoten mit verschachteltem ELSEIF</h3>";

if ($note == 1) {
    echo "Note : sehr gut";
} elseif ($note == 2) {
    echo "Note : gut";
} elseif ($note == 3) {
    echo "Note : befriedigend";
} elseif ($note == 4) {
    echo "Note : genügend";
} elseif ($note == 5) {
    echo "Note : ungenügend";
} else {
    echo "Die angebene Note : " . $note . " ist keine gültige Schulnote";
}

echo "<br><h3>Schulnoten mit SWITCH</h3>";

switch ($note) {
    case 1:
        echo "Note : sehr gut";
        break;
    case 2:
        echo "Note : gut";
        break;
    case 3:
        echo "Note : befriedigend";
        break;
    case 4:
        echo "Note : genügend";
        break;
    case 5:
        echo "Note : ungenügend";
        break;
    default:
        echo "Die angebene Note : " . $note . " ist keine gültige Schulnote";
}

echo "<br><h3>Schulnoten mit MATCH</h3>";

$matchnote = match (true) {
    ($note == 1) =>    "Note : sehr gut",
    ($note == 2) =>    "Note : gut",
    ($note == 3) =>    "Note : befriedigend",
    ($note == 4) =>    "Note : genügend",
    ($note == 5) =>    "Note : ungenügend",
    default =>    "Die angebene Note : " . $note . " ist keine gültige Schulnote",
};
echo $matchnote;
