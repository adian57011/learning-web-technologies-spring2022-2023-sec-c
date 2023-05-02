<html>
    <head>
        <title> updateEmployee</title>
    </head>

    <body>
        <center>
            <form action="updateEmployee.php" method = "POST" onsubmit = 'validate()'>
                <table>
                    <tr>
                        <th>ID </th>
                         <td> <input type="text" name = 'id' id = 'id'> </td>
                    </tr>
                    <tr>
                        <th>Name: </th>
                         <td> <input type="text" name = 'name' id = 'name'> </td>
                    </tr>
                    <tr>
                        <th>Age: </th>
                         <td> <input type="number" name = 'age' id = 'age'> </td>
                    </tr>

                    <tr>
                        <th>Contact Number: </th>
                         <td> <input type="text" name = 'contact' id = 'contact'> </td>
                    </tr>
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
            let name = document.getElementById('id').value;
            let age =document.getElementById('age').value;
            let contact = document.getElementById('contact').value;

            if(name == '')
            {
                alert('Please fill up name');
            }

            if(age == '')
            {
                alert('Please Enter Age'); 
            }

            if(contact == '')
            {
                alert('Please Enter Phone Number');
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
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    if($id == '' || $name == '' || $age == '' || $contact == '')
    {
        echo "Null Value Detected!!";
    }

    else
    {
        echo "In the chat";
        $res = updateEmployee($id,$name,$age,$contact);
        if($res)
        {
            echo "Employee updated!!";
        }
        else
        {
            echo "ERROORRRR!!!";
        }

    }
}

?>