<html>
    <head>
        <title>Registration Page</title>
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
                
                <th> Home </th>
                <th> Log in </th>
                <th> Registration</th>
                
            </tr>

            <tr>
                <td colspan = "180 ">
                     <center>
                        <form action="">
                            <fieldset>
                                <legend>Registration</legend>
                                Name                : <input type="text" name = "name"> <br><br>
                                Email               : <input type ="email" name = "email"><br><br>
                                Username           : <input type="text" name = "username"><br><br>
                                Password            : <input type="password"  name = "password"><br><br>
                                Confirm Password    : <input type="password" name = "password"><br><br>

                                <fieldset>
                                    <legend>Gender</legend>
                                    <input type="radio" name="gender"> Male
                                    <input type="radio" name="gender"> FeMale
                                    <input type="radio" name="gender"> Other
                                </fieldset>

                                <fieldset>
                                    <legend>Date of Birth</legend>
                                    <input type="date">
                                </fieldset>

                                <input type="submit">
                                <input type="reset">

                            </fieldset>
                        </form>
                     </center> 
                </td>
            </tr>

            <tr>
                <td colspan = "180"> <center>Copyright 2017c</center></td>
            </tr>


        </table>

      </center>

    </body>