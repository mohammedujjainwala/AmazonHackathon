<?php
$handle = fopen("item", "r");
$handle1 = fopen("suggestion", "r");
if ($handle&&$handle1) {
    while (($line = fgets($handle)) !== false&&($line1=fgets($handle1))) {
	echo $line1;
	echo $line;
    }
//fclose($handle1);	
    fclose($handle);
} else {
	echo 'error';
    // error opening the file.
} 
?>
