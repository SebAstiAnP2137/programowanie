<?php
$wzorzec = '/(ul\.)|(os\.) [A-z]+[0-9]+/';
$tekst ="ul. Wolnosci 177";
if( preg_match ($wzorzec,$tekst,$matches))
    echo "adres zamieszkania: " .$matches[0];
else       
    echo "nie znaleziono adresu zamieszkania ";
?>
