<?php

    session_start();

    if(isset($_REQUEST['submit']))
    {
        echo "Set Filled";

        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];

        if($username="" || $password = "")
        {
            echo "In the null";
            echo "Null data Found!";
            header("location:login.php");
        }

        else
        {
            if($username == $_SESSION['username'] && $_password == $_SESSION['password'])
            {
                echo "In the session check";
                $_SESSION['flag'] = "true";
                header("location:dashboard.php");
            }

            else
            {
                echo "Invalid Password";
            }

        }

  

    }

    else{
        echo "Invalid Operation!!";
    }



?>