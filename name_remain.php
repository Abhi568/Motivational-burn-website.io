<?php
session_start();
    if (isset($_SESSION['uid']))
    {
        ?>
            <script>
                var output = '<?php echo $_SESSION['name']; ?>';
                var image = '<?php echo '../upload/'.$_SESSION['image']; ?>';
                document.getElementById("name").innerHTML=output;
                console.log(image);
                document.getElementById("images").src=image;
                console.log(image);
            </script>
        <?php
    }
?>
