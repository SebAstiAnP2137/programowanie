<?php
$wzorzec = '/[0-9]{11}/';
$tekst ="083234583212";
if( preg_match ($wzorzec,$tekst,$matches))
    echo "twoj PESEL: " .$matches[0];
else       
    echo "nie znaleziono PESELU ";
?>
