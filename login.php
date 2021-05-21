<?php
include '../connection.php';

$user=$_POST['username1'];
$pass=$_POST['password1'];
$email=$_POST['email'];
$hash_pass=password_hash($pass,PASSWORD_DEFAULT);
$sql="SELECT * FROM `login` WHERE `username`='$user' AND `email`='$email'";
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
  
    $pass_found=FALSE;
    while($row=mysqli_fetch_assoc($result))
    {
        if (password_verify($pass,$row['password']))
        {
            $pass_found=True;
            $data=mysqli_fetch_assoc($result);
            $id=$row['sno'];
            $_SESSION['uid']=$id; 
            $_SESSION['name']=$user;
            $image=$row['image_url'];
            $_SESSION['image']=$image;
            ?>
            <script>
            window.open("../index.php","_self");
            </script>
            <?php
            break;
            
            
        }
    }
    if ($pass_found==FALSE)
    {
        ?>
        <script>
         alert("password do not match");
        </script>
         <?php
    }

    
    
    
}
?>