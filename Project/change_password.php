
<?php

    session_start();
    if(isset($_COOKIE['flag']))
    {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

?>

<html>
    <head>
        <title>X Hospital</title>
        <style>
            table
            {
                width: 100%;
                height:50%;
            }

            .intro
            {
                border: 1px solid black;
                border-collapse: collapse;
            }

        </style>
    </head>



    <body>
        <center>
        <table class = "intro" >
            <tr>
                <th > X Hospital Limited    </th>

                <?php
                    for($i = 0; $i < 140; $i++)
                    {
                        echo " <th>  </th>";
                    }
                ?>

                <th> logged in as <?php echo $username; ?> </th>
                <th>      </th>
                <th> <a href="notification.php">Notification</a> </th>
                <th>      </th>
                <th> <a href="logout.php">Logout</a></th>
               
            </tr>

            <tr>
                <td colspan = "10" class="intro">
                    <label for="">Appoinment List</label> <br> <hr>
                    <ul>
                        <li><a href="view_appointment.php">View Appoinments</a></li>
                        <li><a href="postpone_appointment.php">Postpone Appointment</a></li>
                    </ul>
                    <label for="">Prescriptions</label> <br> <hr>
                    <ul>
                        <li><a href="create_prescription.php">Create Prescription</a></li>
                        <li><a href="edit_prescription.php">Edit Prescription</a></li>
                    </ul>
                    <label for="">Settings</label><br><hr>
                    <ul>
                        <li><a href="update_info.php">Update Information</a></li>
                        <li><a href="change_password.php">Change Password</a></li>
                    </ul>
                    
                    
                </td>

                <td colspan = '150' class = 'intro'>
                    <center>

                    <form action="change_password.php" method = "POST">

                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name = "username"></td>
                        </tr>
                        <tr>
                            <td>Old Password</td>
                            <td><input type="password" name = 'old_password'></td>
                        </tr>
                        <tr>
                            <td> New password</td>
                            <td><input type="password" name = 'new_password'></td>
                        </tr>
                        <tr>
                            <td> Confirm New password</td>
                            <td><input type="password" name = 'confirm_password'></td>
                        </tr>

                        <tr>
                            <td align = "right"><input type="submit" name = "submit" value = "Confirm"></td>
                            <td><input type="reset" name = "reset" value = "Reset"></td>
                        </tr>
                    </table>

                    </form>


                    <?php
                        $old_password = $_POST['old_password'];
                        $new_password = $_POST['new_password'];
                        $confirm_password = $_POST['confirm_password'];

                        if(isset($_POST['submit']))
                        {
                            if($confirm_password !== $new_password )
                            echo "The password doesnot match";

                            else if($password !== $old_password )
                            {
                                echo "Doesnot match with old password";

                            }

                            else
                            {
                                echo "Codes to permanently change the password!!";
                            }
                        }
                    
                    ?>
                        

                    </center>
                </td>
            </tr>
        </table>
        </center>

        <?php
    }else{
        echo "invalid request, please login first...";
    }

?>

    </body>
</html>