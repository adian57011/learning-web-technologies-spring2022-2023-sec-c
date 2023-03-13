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

                <th> <a href="home.php">Home</a> </th>
                <th>      </th>
                <th> <a href="registration.php">Registraion</a> </th>
                <th>      </th>
                <th> <a href="login.php">Login</a></th>
            </tr>

            <tr>
                <td colspan = "10" class = "intro">

                </td>

                <td colspan = '150' class = "intro">
                    <center>
                        <form action="forget_pass.php" method = 'POST'>
                        <table>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name = email></td>
                            </tr>

                            <tr>
                                <td align = "right"> <input type="submit" name = "submit"></td>
                            </tr>

                        </table>
                        </form>

                        <?php

                        if(isset($_POST['submit']))
                        {
                            $email = $_POST['email'];

                            if($email == "")
                            {
                                echo "null email detected!!";
                            }
                        }
                        
                        ?>
                    </center>
                </td>
            </tr>
        </table>
        </center>
    </body>
</html>