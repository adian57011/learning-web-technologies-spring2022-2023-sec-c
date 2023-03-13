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
                    <label for="">About us</label> <br> <hr>
                    <ul>
                        <li><a href="legal_policy.php">legal Policy</a></li>
                        <li><a href="vision.php">Mission & Vision</a></li>
                        
                    </ul>
                </td>

                <td colspan = '150' class = "intro">
                    <center>
                        <form action="login_check.php" method = 'POST'>
                        <table>
                            <tr>
                                <td> Username</td>
                                <td> <input type="text" name = 'username'></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name = 'password'></td>
                            </tr>

                            <tr>
                                <td align = "right" > <input type="submit" name = "submit"></td>
                                <td> <input type="reset" name = "reset"></td>
                            </tr>

                            <tr>
                                <td>
                                <a href="forget_pass.php"> Forget Password?</a>

                                </td>
                            </tr>

                        </table>
                        </form>
                    </center>
                </td>
            </tr>
        </table>
        </center>
    </body>
</html>