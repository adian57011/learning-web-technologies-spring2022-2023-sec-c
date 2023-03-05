<html>
    <head>
        <title>Home Page</title>
        <style>
            table
            {
                width:100%;
                
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
        
        <table height = "50%">
                <th>X company</th>
                
                <?php 
                    for($i = 0; $i < 150;$i++)
                    {
                        echo "<th> </th>";
                    }                 
                ?>
                
                <th> <a href = "home.php">Home </a></th>
                <th> <a href = "login.php">Log in </a> </th>
                <th> <a href = "registration.php">Registration</a></th>
                
            </tr>

            <tr>
                <td colspan = "180 ">
                     <center>
                       <fieldset>
                        <legend> Forget Password</legend>
                        <form action="" >
                            Email: <input type="email" name = "email"><br><br>
                            <input type="submit">
                        </form>
                       </fieldset>
                    </center>
                </td>
            </tr>

            <tr>
                <td colspan = "180"> <center>Copyright 2017c</center></td>
            </tr>


        </table>
        




      </center>

    </body>