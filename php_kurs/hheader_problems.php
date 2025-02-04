<?php
# wenn im php.ini output_buffering = OFF
# dann gibt das hier Probleme

# - weil die erste Ausgabe führt dazu, dass der header rausgeschickt wird
# also ist vor dem echo der header noch nicht gesendet
# nach dem echo ist der header schon weg

var_dump((headers_sent()));

echo 'ok<br>';

var_dump((headers_sent()));

# jetzt noch schnell einen Cookie setzen ? das geht bei buffering=OFF nicht...
setcookie('test','test', time()+60);
var_dump((headers_list()));

# mögliche Lösung output_buffering = 4096 im php.ini
# ist aber auch die normale Einstellung obwohl output_buffering = OFF geringfügig performanter ist

# wenn buffering=4096 (oder größer), kann man den Cookie sogar noch ändern / überschreiben
header('Set-Cookie: test=testneu');
var_dump((headers_list()));

# oder wenn man ihn nicht überschreiben will, wird er doppelt angelegt
header('Set-Cookie: test=testneu2', false);
var_dump((headers_list()));
