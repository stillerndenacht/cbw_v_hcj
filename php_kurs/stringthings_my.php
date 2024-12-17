<?php

echo "----- Double und Single-Quotes ------<br>";
$einfuegung = "ICH bin eingefügt! ";

# "" liest Inhalte aus eingefügten Variablen
$stringnormale = "ich bin ganz normal, aber :$einfuegung";
echo "<br>".$stringnormale;

# '' liest KEINE Inhalte aus eingefügten Variablen
$stringnormale2 = 'ich bin ganz normal, aber :$einfuegung';
echo "<br>".$stringnormale2;

echo "<br><br>------- Heredoc und Nowdoc für Strings ------<br>";

// Syntax: <<<Schlüsselwort Absatz 
//              Text 
//          Absatz Schlüsselwort;
# Heredoc liest auch Variablen-Inhalte
$stringhere = <<<HEREDOC
texte .... bla bla "blub blub" 'Hallo aber :$einfuegung ' 
HEREDOC;
echo "<br>".$stringhere;
print "<br>".$stringhere;

#  so geht es nicht es fehlen die Absätze die das Schlüsselwort eindeutig abgrenzen

// $stringhere2 = <<<HEREDOC texte .... bla bla "blub blub" 'Hallo aber :$einfuegung ' HEREDOC;
// echo "<br>".$stringhere2;

# der Name des Schlüsselwortes ist beliebig
$stringhere2 = <<<hierText
texte .... bla bla "blub blub" 'Hallo aber :$einfuegung ' 
hierText;
echo "<br>".$stringhere2;


// Syntax: <<<'Schlüsselwort' Absatz 
//              Text 
//          Absatz Schlüsselwort;
# Nowdoc liest keine Variablen-Inhalte
$stringhere3 = <<<'NOWDOC'
texte .... bla bla "blub blub" 'Hallo aber :$einfuegung ' 
NOWDOC;
echo "<br>".$stringhere3;
print "<br>".$stringhere3;

$stringhere4 = <<<hierText
texte .... bla bla "blub blub" 'Hallo aber :$einfuegung ' Und was ist wenn man einen NowDoc in den NowDoc einfügt? das: $stringhere - also kein Problem!
hierText;
echo "<br>".$stringhere4;
