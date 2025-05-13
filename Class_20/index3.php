<?php

$fopen =  fopen("data.txt",  'a');  // stream
fwrite($fopen , " fwrite");
fclose($fopen);



$fopen =  fopen("data.txt" , "r");

$fileSize = filesize('data.txt');

echo $fileSize;

echo fread($fopen,$fileSize);

fclose($fopen);


?>