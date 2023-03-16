<?php
 session_start();

 if(isset($_POST['submit']))
 {
     $username = $_POST['username'];
     $password = $_POST['password'];

    if($username == "" || $password == "")
    {
        echo "Invalid Data operation!!";
        header("location:login.php");
    }

    else if($username !== "" || $password !== "")
    {
        $file = fopen("user.txt",'r');
        $file1 = fopen("user1.txt","r");

        while(!feof($file))
        {
            $line = fgets($file);
            $line = trim($line);

            $credentials = explode("|",$line);

            if($credentials[0] == $username && $credentials[1] == $password)
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("location: dashboard.php");
                setcookie('flag','true',time()+300,'/');
            }


        }

        while(!feof($file1))
        {
            $line = fgets($file1);
            $line = trim($line);

            $credentials = explode("|",$line);

            if($credentials[0] == $username && $credentials[1] == $password)
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("location: patient_dashboard.php");
                setcookie('flag','true',time()+300,'/');
            }


        }


        fclose($file);
        fclose($file1);

        echo "Invalid Login Credentials!";

     }


}
?>