<?php
$myfile = fopen("fisier.txt", "r") or die("Nu poate fi deschis!");
echo fread($myfile,filesize("fisier.txt"));
fclose($myfile);
?>