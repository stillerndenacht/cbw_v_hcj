<?php
include_once 'Blog.class.php';

$blognames = Blog::getBlognames(); # oder leeres Array wenn nichts da ist?
var_dump($blognames);

// für jeden namen in blognames ein Feld im Dropdown zum Auswählen
// und dann bei Auswahl eine Ansicht aller Blog-Einträge laden

