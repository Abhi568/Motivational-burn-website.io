<?php
session_start();
if ( isset($_SESSION['uid']))
{
    echo '<button> <a href="Logout.php">Logout</a> </button>';

}
else {

    ?>
    <script>
        alert(" first login")
        window.open('Login_page.php','_self');
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
    <title>Logout</title>
</head>
<body>
   

</body>
</html>