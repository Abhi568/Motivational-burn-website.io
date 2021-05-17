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
            height: 400px;
            width: 400px;
            background-color: wheat;
            border: 2px solid whitesmoke;
        }

        input {
            margin: 10px;
            padding: 10px;
            font-size: 16px;
            border-color: yellow;

        }

        .contain {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        button {
            margin: 10px;
            padding: 10px;
            font-size: 14px;
            border-color: yellow;
        }
    </style>
</head>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
 include 'register.php';
}

?>
<body>
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <div class="container">
        <form id="form1" action="../uploads.php" method="post" enctype="multipart/form-data">
        <h1> Enter</h1>
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="text" name="username1" id="username" placeholder="Username">
            <input type="password" name="password1" id="password" autocomplete="additional-name" placeholder="Password">
            <div class="contain">
                <input type="file"  name="my_image">
                <input type="submit"  name="submit" value="Register">
</div>
        </form>
    </div>
   
    </script>

</body>

</html>