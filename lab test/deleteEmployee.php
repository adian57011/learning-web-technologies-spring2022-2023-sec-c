<html>
    <head>
        <title> Delete Employee</title>
    </head>

    <body>
        <center>
            <form action="deleteEmployee.php" method = "POST" onsubmit = 'validate()'>
                <table>
                    <tr>
                        <th>ID </th>
                         <td> <input type="text" name = 'id' id = 'id'> </td>
                    </tr>
                    <tr>
                        <th>Name: </th>
                         <td> <input type="text" name = 'name' id = 'name'> </td>
                  <tr>
                        <td></td>
                        <td> <input type = 'submit' name = 'submit' id = 'submit'> </td>
                    </tr>
                </table>

            </form>
        </center>

        <script>
           function validate()
           {
            let id =document.getElementById('id').value;
            let name = document.getElementById('id').value;
            let age =document.getElementById('age').value;
            let contact = document.getElementById('contact').value;
            
            if(id == '')
            {
                alert('Please Fill up ID');
            }
            if(name == '')
            {
                alert('Please fill up name');
            }

           }
        </script>

    </body>
</html>

<?php
require_once('db.php');
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
 
    if($id == '' || $name == '')
    {
        echo "Null Value Detected!!";
    }

    else
    {
        echo "In the chat";
        $res = deleteEmployee($id,$name);
        if($res)
        {
            echo "Employee deleted!!!";
        }
        else
        {
            echo "ERROORRRR!!!";
        }

    }
}

?>