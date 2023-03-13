<?php

if(isset($_POST['submit']))
{
    session_start();


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password)
    {
        echo "password Matched!!";
        if(strpos($email,'@') !== false && strpos($email,'.') !== false)
        {
           echo "Email checked";
           $file = fopen("doctor_list.txt","a");

            fwrite($file,$_POST['name']);
            fwrite($file, "|");
            fwrite($file,$username);
            fwrite($file,"|");
            fwrite($file,$_POST['email']);
            fwrite($file,"|");
            fwrite($file,$_POST['password']);
            fwrite($file,"\r\n");
            fclose($file);
            echo "Registration Complete";

            $file2 = fopen("user.txt","a");
            fwrite($file2,$_POST['username']);
            fwrite($file2,"|");
            fwrite($file2,$_POST['password']);
            fwrite($file2,"\r\n");
            fclose($file2);

            echo "Credentials Saved";

            

            header("location:home.php");
        } 

        else
        {
            echo "Invalid Email";
        }
        
    }

    else
    {
        "Please check your password!!";
        header('location: registration.php');
    }
}

?>


