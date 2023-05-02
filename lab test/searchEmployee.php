<html>
    <head>
        <title> Search Employee</title>
    </head>

    <body>
        <center>
            <form>
                <table>
                    <tr>
                        <th>ID </th>
                         <td> <input type="text" name = 'id' id = 'id'> </td>
                    </tr>
                  
                  <tr>
                        <td></td>
                        <td> <input type = 'button' name = 'button' id = 'button'> </td>
                    </tr>
                </table>

            </form>
        </center>
    </body>
    <script>
        let button =document.getElementById('button');
        button.addEventListener('click',function()
        {
            let id = document.getElementById('id').value;
            let user = {
                'id' : id,
            }
            let data = JSON.stringify(user);
            

            if(id == '')
            {
                alert('Please Enter ID');
            }

            xhttp = new XMLHttpRequest();
            xhttp.open('POST','searchController.php');
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('user='+data);

            xhttp.onreadystatechange() =function()
            {
                alert(this.responseText);
            };


        });
    </script>
</html>
