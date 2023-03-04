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
                
                <th> Home </th>
                <th> Log in </th>
                <th> Registration</th>
                
            </tr>

            <tr>
                <td colspan = "180 "> <center>Welcome to X company</center> </td>
            </tr>

            <tr>
                <td colspan = "180"> <center>Copyright 2017c</center></td>
            </tr>


        </table>
        




      </center>

    </body>