<?php

    $file = fopen("view_history.txt",'r');

    $data = fread($file,filesize("view_history.txt"));
    echo $data;

    fclose($file);
?>