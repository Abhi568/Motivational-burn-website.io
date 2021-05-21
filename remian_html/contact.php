<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="../css/conttact.css">
    <link rel="stylesheet" media="screen and (max-width:  1000px)" href="../responsive/contact_resp.css">
</head>

<body>
    <div class="navbar backimage h-nav-res">
        <ul class="nav-list v-class-res">
            <div class="logo"><img src="../pic/logo.jpg" alt="logo"> </div>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../remian_html/about.php">About</a></li>
            <li><a href="contact.php">Contact me</a></li>
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
                    <a href="../remian_html/vedio.html" target="_blank"><button class="btn1">Watch vedio</button></a> 
                </div>
            </div>

            <div class="second-half">
                <img src="../pic/pic1.jpg" alt="">
            </div>
        </div>
    </section>

    <div id="profile-container">
        
        <img id="logo" src="../pic/3.png" alt="pic">
        
        <div class="bottom">
            <h1>Abhishek Jaiswal</h1>
            <div class="image">
                <img src="../pic/home.png" alt="Phone image">
                <h2> 59 / 1 , Krishna nagar Unnao , Uttar Pradesh (Pin - code : 209801)</h2>
            </div>
            <div class="image">
                <img src="../pic/phone.png" alt="Phone image">
                <h2>(+91) 6386020024 , (+91) 7317658661 </h2>
            </div>
            
            <div class="image">

                <span style='font-size:40px;' ;> &#9993</span>
                <h2>aj556331@gmail.com</h2>
            </div>
            <div class="image">
                <img src="../pic/birth.jpg" alt="Phone image">
                <h2> 19-06-2000</h2>
            </div>
        </div>
    </div>


    <div class="contact">
        <h1>Contact me</h1>
        <div class="inputs">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
    
            <input type="text" name="name" id="name" placeholder="Enter Your Phone Number">
    
            <input type="text" name="name" id="name" placeholder="Enter Your Email">
    
            <textarea name="text" id="Query" cols="36" rows="10" placeholder="Please Enter Yout Queries"></textarea>
            <button class="btn">Submit</button>
    
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
