<?php
session_start();
if(isset($_COOKIE['flag']))
{
    $file= fopen('appointment_list.txt','r');
    $data = fread($file,filesize('appointment_list.txt'));
    echo $data;
    fclose($file);


}
else
{
    echo "Please Log in First!!";
}

?>