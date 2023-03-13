<html>
    <head>
    <title>X Hospital</title>
        
        <style>
            table
            {
                width: 100%;
                height:50%;
            }

            table,td
            {
                border: 1px solid black;
                border-collapse: collapse;
            }

        </style> 
    </head>

    <body>
        <center>
        <table >
            <tr>
                <th > X Hospital Limited    </th>

                <?php
                    for($i = 0; $i < 140; $i++)
                    {
                        echo " <th>  </th>";
                    }
                ?>

                <th> <a href="home.php">Home</a> </th>
                <th>      </th>
                <th> <a href="registration.php">Registraion</a> </th>
                <th>      </th>
                <th> <a href="login.php">Login</a></th>
            </tr>

            <tr>
                <td colspan = "10">
                    <label for="">About us</label> <br> <hr>
                    <ul>
                        <li><a href="legal_policy.php">legal Policy</a></li>
                        <li><a href="vision.php">Mission & Vision</a></li>
                        
                    </ul>
                </td>

                <td colspan = '150'><center>Welcome to the x hospital</center></td>
            </tr>
        </table>
        </center>
    </body>
</html>