<?php
    session_start();

    $check_username = $_SESSION['username'];
    $check_password = $_SESSION['password'];

    if(isset($_REQUEST['submit']))
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($check_username == $username)
        {
            if($check_password == $password)
            {
                header('location:dashboard.php');
            }
            else
            {
                echo "Invalid Password!!";

            }
        }
        
    }

    else
    {
        echo "Invalid Operation!!!";

    }


?>