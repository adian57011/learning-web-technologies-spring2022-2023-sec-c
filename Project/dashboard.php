
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

                    Welcome <?php echo $username;?>
                        

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