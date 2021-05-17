<?php
include '../connection.php';

$user=$_POST['username1'];
$pass=$_POST['password1'];
$email=$_POST['email'];
$sql="SELECT * FROM `login` WHERE `username`='$user' AND `password`='$pass' AND `email`='$email'";
$result=mysqli_query($connection,$sql) ;
$total_rows=mysqli_num_rows($result);
if ($total_rows<1)
{
    ?>
    <script>
    alert("No data found");
    window.open("Login_page.php","_self");
    </script>
    <?php
}
else
{
    
    $data=mysqli_fetch_assoc($result);
    $id=$data['sno'];
    $_SESSION['uid']=$id; 
    $_SESSION['name']=$user;
    $image=$data['image_url'];
    $_SESSION['image']=$image;
    ?>
    <script>
    window.open("../index.php","_self");
    </script>
    <?php
}
?>