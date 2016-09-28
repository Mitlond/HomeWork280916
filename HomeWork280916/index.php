<?php
$f=fopen("C:\\OpenServer\\domains\\LabaFiles\\Domino.txt","a+");
fwrite($f,"Take me");
$str=fread($f,200);
echo ($str);
$f=fgets($f,400);
echo ($f);
//fclose("Domino.txt");
copy("C:\\OpenServer\\domains\\LabaFiles\\Domino.txt" ,"C:\\OpenServer\\domains\\LabaFiles\\JessieJ.txt" );
rename("C:\\OpenServer\\domains\\LabaFiles\\Domino.txt","C:\\OpenServer\\domains\\LabaFiles\\Moonlight.txt");
unlink("C:\\OpenServer\\domains\\LabaFiles\\Moonlight.txt");
?>