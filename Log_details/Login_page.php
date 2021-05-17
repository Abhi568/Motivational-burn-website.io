<?php 
session_start();
if (isset($_SESSION['uid']))
{
    ?>
<script>
alert("First Logout from your Current Account");
window.open("Logout_page.php","_self");
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            border-radius: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {

            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height: 350px;
            width: 350px;
            background-color: wheat;
            border: 2px solid whitesmoke;
        }

        input {
            margin: 15px;
            padding: 10px;
            font-size: 14px;
            border-color: yellow;

        }

        .contain {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        button,  .contain input {
            margin: 10px;
            padding: 7px;
            font-size: 12px;
            border-color: yellow;
            border:2px solid yellow;
        }
        a
        {
            text-decoration: none;
            color:black;
        }

        
    </style>
</head>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
 include 'login.php';
}

?>
<body>
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <div class="container">
        <form id="form1"  method="post" enctype="multipart/form-data">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="text" name="username1" id="username" placeholder="Username">
            <input type="password" name="password1" id="password" autocomplete="additional-name" placeholder="Password">
        
            <div class="contain">
                <button class="btn" type="submit"> Login</button>
                <button class="btn" onclick="register()"> <a href="register_page.php">Register</a> </button>
            </div>
        </form>
    </div>
</body>

</html>
