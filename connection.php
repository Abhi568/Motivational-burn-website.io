<?php
$Server="localhost";
$username="root";
$password="";
$database_table="login_details";

$connection=mysqli_connect($Server,$username,$password,$database_table);
if ($connection)
{
    echo "";
}
else
{
    echo '<script type="text/javascript">';
    echo ' alert("Some problem in connection to the database")';  //not showing an alert box.
    echo '</script>';
}
?>
