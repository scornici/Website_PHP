<?php
$myfile = fopen("fisier.txt", "a") or die("Nu poate fi deschis!");
$txt = "Laborator nr.4 TW, Scornici Ivan\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
