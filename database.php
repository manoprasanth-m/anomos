<!--database connection-->
<?php

$host='localhost';
$username='freedbtech_anonchat';
$user_pass='chatanon';
$database_in_use='freedbtech_anonchat';

$con = mysqli_connect($host,$username,$user_pass,$database_in_use);
if (!$con)
{
    echo"not connected";
}
if (!mysqli_select_db($con,$database_in_use))
{
    echo"database not selected";
}
?>
