
<?php

    session_start();
    if(isset($_COOKIE['flag']))
    {
        $username = $_SESSION['username'];

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
                    <label for="">Appoinment</label> <br> <hr>
                    <ul>
                        <li><a href="apply_appointment.php">Apply for Appoinments</a></li>
                        <li><a href="cancel_appointment.php">Cancel Appointment</a></li>
                    </ul>
                    <label for="">History</label> <br> <hr>
                    <ul>
                        <li><a href="view_history.php">View History</a></li>
                        <li><a href="check_report.php">Check Report</a></li>
                    </ul>
                    <label for="">Settings</label><br><hr>
                    <ul>
                        <li><a href="patient_update_info.php">Update Information</a></li>
                        <li><a href="patient_change_password.php">Change Password</a></li>
                    </ul>
                    
                    
                </td>

                <td colspan = '150' class = 'intro'>
                    <center>

                    
                    <form action="patient_change_password.php" method = "POST">

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