<?php
$wzorzec= '/[0123]?\d + [-\.\/] + ([01]?\d) + [-\.\/] + (\d{4})/';
$tekst="10.10.2023r.";
if(preg_match($wzorzec,$tekst,$matches))
echo "znaleziono date".$matches[0];
else
echo "nie znaleziono daty";
?>