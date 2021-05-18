<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" media="screen and (max-width:  1000px)" href="../responsive/about_res.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar backimage h-nav-res">
        <ul class="nav-list v-class-res">
            <div class="logo"><img src="../pic/logo.jpg" alt="logo"> </div>
            <li><a href="../index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="../remian_html/contact.php">Contact me</a></li>
            <li><a href="../remian_html/more.php">More</a></li>
        </ul>
        <div class="rightNav v-class-res">
            <input type="text" name="search" id="search">
            <button class="btn-sm" id="btn" onclick="login()">Login or Register</button>
            <button class="btn-sm" id="btn1" onclick="logout()">Logout</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <section class="backimage firstsection">
        <div class="box-main">
            <div class="first-half">
                <p class="text-big">
                    Motivation Burn
                </p>
                <p class="text-small">
                    When Someone Eagerly Want Something then Motivaton Automatic Comes From Inner Soul
                    , Believe Me At That Time "No One Can Stop You , No One Means No One Except You"
                <div class="writer">
                    <i id="name"> --- Abhishek Jaiswal</i>
                    <img id="images" src="" alt="Image" style="height: 40px; width: 27px; border-radius: 3px;">
                </div>
                <?php
                include '../name_remain.php';
                ?>
                </p>
                <div class="buttons">
                    <button class="btn1"> Like</button>
                    <a href="../remian_html/vedio.html" target="=_blank"><button class="btn1">Watch vedio</button></a>
                </div>
            </div>

            <div class="second-half">
                <img src="../pic/pic1.jpg" alt="">
            </div>
        </div>
    </section>

    <div class="about">
        <div class="description">
            <p class="into">
                Hey Everyone , I am <strong class="color">Abhishek Jaiswal</strong> who is always happy &#128512 &#128512 , Hope all you are not taking it as a joke
                because I am always trying to make myself Happy and Motivated. Now you're thinking If I am motivated,
                why did I build this website ? . Yeah, you are correct but it is my hobby which means I am a
                Motivational Speaker . Apart from studies I am doing <strong class="color">Painting , Sketching , Anchoring , little bit
                Astrology and comedy </strong>.
            <p class="into">
                In this website some lines are mine which I have learned so far and applied in my life and it also
                includes all those lines and speeches which changed my life fully.
            </p>
            <p class="into">
                I hope this Website<strong class="color">"Motivation Burn”</strong> is giving you insight and deep meaning of motivation ,also
                introducing you to real life challenges and also helping you in overcoming from your fear and
                depression.
            </p>
            <p>
                &#128073 <a class="color" href="https://drive.google.com/drive/folders/1NIlNdGU9kfOIjeSPrN9H2n_Cnh3KxlsK?usp=sharing"> You can
                    View my painting, just click it </a>&#128515
            </p>
        </div>
    </div>
    <footer>
        <p class="footer">
            Copyright &copy; All rights are reserved
        </p>
    </footer>
    <script src="../js/index_js.js"></script>

    <script src="../js/log_files_remain.js"></script>
</body>

</html>
