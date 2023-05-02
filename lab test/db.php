<?php

$hostname = "127.0.0.1";
$user ="root";
$password = "";
$db_name = "test";

function connection()
{
    global $hostname;
    global $user;
    global $password;
    global $db_name;
    $con = mysqli_connect($hostname,$user,$password,$db_name);

    return $con;
}

function checkCon()
{
    $con = connection();

    if($con)
    {
        echo "Connection Successfull!";
    }
    else
    {
        echo "Connection Failed";
    }
}

function addEmployee($id,$name,$age,$contact)
{
    $con = connection();

    $sql = "INSERT INTO employee(id,name,age,contact) VALUES ('$id','$name','$age','$contact')";

    $status = mysqli_query($con,$sql);

    if($status)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function updateEmployee($id,$name,$age,$contact)
{
    $con = connection();
    $sql = "UPDATE employee SET name = '$name',age = '$age',contact = '$contact' where id = '$id'";

    $status = mysqli_query($con,$sql);

    if($status)
    {
        return true;
    }

    else
    {
        return false;
    }
}

function deleteEmployee($id,$name)
{
    $con = connection();
    $sql = "DELETE FROM employee where id = '$id' AND name = '$name'";
    
    $status = mysqli_query($con,$sql);

    if($status)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function searchEmployee($id)
{
    $con = connection();
    $sql = "SELECT * FROM employee where id = '$id'";
    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($query);

    return $row;
}
?>