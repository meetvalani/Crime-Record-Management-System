<?php
$server="localhost";
$username="root";
$password="";
$database="crms";
try{
    $connection= mysqli_connect($server,$username,$password,$database);
    }
catch(Exception $errormsg)
{
    echo $errormsg->getMessage();
}
?>