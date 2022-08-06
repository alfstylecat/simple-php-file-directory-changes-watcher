<?php

// Belirtilen dizini ac
$handle = opendir("/home/crypthfx/public_html/");

// dizini okuyup degiskene ata ve ekrana yazdir
while($fileName = readdir($handle)) {
   echo $fileName . "<br>";
}

// acilan dizini kapat
closedir($handle);
