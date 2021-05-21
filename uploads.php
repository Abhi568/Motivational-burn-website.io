<?php 
session_start();
if (isset($_SESSION['uid']))
{
    header('location:index.php');
    exit();
}
if (isset($_POST['submit']) && isset($_FILES['my_image']))
 {
    include "connection.php";
	// echo "<pre>";
	// print_r($_FILES['my_image']);
	// echo "</pre>";
        $user=$_POST['username1'];
        $pass=$_POST['password1'];
        $email=$_POST['email'];
        $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];


	if ($error === 0)
        {
		if ($img_size >= 1025000) 
        {
            ?>
            <script>
            alert("Image size can't be larger than 1 MB");
            window.open("Log_details/register_page.php","_self");
            </script>
            <?php
        }

        else
        {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            // echo ($img_ex)extension give;
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png"); 
    
    			if (in_array($img_ex_lc, $allowed_exs)) 
                        {
    				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
    				$img_upload_path = 'upload/'.$new_img_name;
    				move_uploaded_file($tmp_name, $img_upload_path);
                    // move_uploaded_file(filename, destination);

    				// Insert into Database
                    $sql="SELECT * FROM `login` WHERE `email`='$email'";
                    $result=mysqli_query($connection,$sql) ;
                    $total_rows=mysqli_num_rows($result);            
                    
                    if (empty($user) or empty($pass) or empty($email))
                    {
                        ?>
                        <script>
                        alert("Fields should not empty");
                        window.open("Log_details/register_page.php","_self");
                        </script>
                        <?php
                    }
                    else if ($total_rows>0)
                    {
                        ?>
                        <script>
                        alert("Email already exist");
                        window.open("Log_details/register_page.php","_self");
                        </script>
                        <?php
                        
                    }
                    else
                    {
			$hass_pass=password_hash($pass,PASSWORD_DEFAULT);
			$sql ="INSERT INTO `login` (`username`, `password` , `image_url`,`email`) VALUES ('$user', '$hass_pass','$new_img_name','$email')";
			mysqli_query($connection, $sql);
			?>
                    <script>
                    alert("Sucessfully Registered");
                    window.open("index.php","_self");
                    </script>
                    <?php
                     }
                    }
                else
                {
                    ?>
                    <script>
                    alert("You can not Enter this type of Image");
                    window.open("Log_details/register_page.php","_self");
                    </script>
                    <?php
                }
                
        }
    }
    else
    {
        ?>
        <script>
        alert("Image is compulsory");
        window.open("Log_details/register_page.php","_self");
        </script>
        <?php
    }
}

else {
    ?>
    <script>
    window.open("Log_details/Login_page.php","_self");
    </script>
    <?php
    }
    

    ?>
		
