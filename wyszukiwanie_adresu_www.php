<?php
$wzorzec = '/((\bhtts?:\/\/)|(\bwww\.))\S*/';
$tekst ="www.forumgrzybiarskie.pl";
if( preg_match ($wzorzec,$tekst,$matches))
    echo "znaleziono strone: " .$matches[0];
else
    echo "nie znaleziono  ";
?>
