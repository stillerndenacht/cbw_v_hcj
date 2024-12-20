<?php
# ---------- Includes -------------------
# die Benennung der datei mit inc.php ist optional
include 'includes/datei.inc.php'; # include ist wie import, wirft Fehler wenn eine Funktion aus der datei.inc.php verwendet wird
require 'includes/datei2.inc.php'; # require ist wie include nur wirft es sofort Fehler, wenn es nicht funktioniert
// Alternativen:
// include_once
// require_once