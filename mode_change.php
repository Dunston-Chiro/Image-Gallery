<?php
    $a = scandir(getcwd());

    foreach ($a as $i)
    {
        chmod($i,0777);   
    }
?>