<?php

/*
 * DON'T WRITE YOUR WIDGETS HERE,
 * YOU SHOULD CREATE a WIDGET FILE WITHIN WIDGETS DIRECTORY AND DISPĹAY ALL YOUR magic THERE ;) 
 * */


$dir = ACTIVE_CAMOUFLAGE_PATH . "/widgets"; 
$files = scandir($dir); // returns array of files, sorted alphabetically

foreach($files as $file) {
    if(is_file($dir.'/'.$file)) {
        include($dir. "/" . $file);
    }
}
