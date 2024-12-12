<?php
$notenwort = [
    1 => "sehr gut",
    2 => "gut",
    3 => "befriedigend",
    4 => "genügend",
    5 => "ungenügend",
    6 => "mangelhaft"
];
$note = "2";

# das funktioniert nicht....
// foreach ($notenwort as $key => $value) {
//     if ($note == $key) {
//         echo "die $note entspricht $value";
//     } else {
//         echo "$note ist keine gültige Schulnote";
//     }
// }

if (isset($notenwort[$note])) {
    echo "die $note entspricht $notenwort[$note]";
} else {
    echo "$note ist keine gültige Schulnote";
}
