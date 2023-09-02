





<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tomato-Online best food delivery service</title>
        <link rel="stylesheet" href="style_proj.css">
        <link href="https://fonts.googleapis.com/css2?family=Arima:wght@500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1114c28fb2.js" crossorigin="anonymous"></script>
    </head>
    <body  >
    <?php 
session_start();
if(isset($_SESSION['error'])){
    echo"<span class='Sign_error'><i class='fa-solid fa-circle-exclamation'></i> </span>";
}if(isset($_SESSION['success'])){
    echo"<span class='Sign_success'><i class='fa-solid fa-circle-check'></i> </span>";
    unset($_SESSION['success']);
}if(isset($_SESSION['error-1'])){
    echo"<script>alert('Invalid username or password')</script>";
    unset($_SESSION['error-1']);
}
?>
        <div class="container_1">
            <div class="navbar">
                <div class="navbar-s">
                <img  id="logo" class="logo" src="logo.png">
                <ol >
                    <li><a href="#">HOME</a> </li>
                    <li><a href="#">ADD RESTAURANT</a></li>
                    <li  id="login_up" onclick="open_close()"><a href="#">LOGIN</a></li>
                    <li onclick="open_close_2()"><a  href="#">SIGN UP</a></li>
                </ol></div>

            </div>
            <div class="back-page"  id="login_nav">
            <div class="login_nav">
                <form action="http://localhost/ITE_proj/login-page.php" method="post">
                    <i  id="close-icon" onclick="open_close()" class="fa-solid fa-xmark"></i>
                    <h2 class="input-element">Login</h2>
                    <input type="text" name="name" placeholder="Username">
                    <input type="password" name="pass" placeholder="password">
                    <button id="login-bt" type="submit">Login</button>
                </form>

            </div>
        </div>
        <div class="back-page-2"  id="signup_nav">
            <div class="signup_nav">
                <form action="page-2.php" method="post" name="fs" onsubmit="return validate_form()">
                    <i  id="close-icon" onclick="open_close_2()" class="fa-solid fa-xmark"></i>
                    <h2 class="input-element">sign up</h2><span class="al-error"><?php 
                    if(isset($_SESSION['error'])){

                        echo"$_SESSION[error]";
                
                        unset($_SESSION['error']);
                    }
                    ;?></span>
                  <input type="text" onkeyup="v_name()" name="name" placeholder="Username" required><span name="v_name" id='v-name'></span>
                    <input type="date" name="date"  required>
                    <input type="email"onkeyup="v_email()" name="email" placeholder="Email" required><span id="v_email"></span>
                   <input type="tel"  onkeyup="v_phone()" name="phone"placeholder="phone" ><span id="v-phone"></span>
                  <input type="password" onkeyup="v_pass()" name="password" placeholder="password" required><span id="v-password"></span>
                    <button id="login-bt" type="submit">Sign up</button><span id="v-submit"></span>
                </form>

            </div>
        </div>

            
        </div>
        <div class="search_div">
            <form  action="https://www.google.com/search" method="get" class="search_bar" target="_blank">
            <input type="search" class="s_bar" placeholder="Search for restaurant, cuisine or a dish "  >
            <button type="submit" ><img src="search_icon.png"></button>
        </form>
        </div>

        <div class="container_2" >
            <div class="container-s">
            <div class="container_2-head"><h2>Inspiration for your first order </h2></div>
            <div class="container_2-img"><img src="images/briyani.avif" >
            <a href="#"><img src="images/burger.avif" ></a>
            <a href="#"><img src="images/chicken.jpg" ></a>
            <a href="#"><img src="images/pizza.avif" ></a>
            <a href="#"><img src="images/sandwich.avif" ></a>
            <a href="#"><img src="images/shake.avif" ></a></div>
            
        <div class="container_2-foot">
            <span>Briyani</span>
            <span>Burger</span>
            <span>Chicken</span>
            <span>Pizza</span>
            <span>Sandwich</span>
            <span>Shake</span>
        </div></div></div>

        <div class="container_3">
            <div class="container-s">
            <div class="container_3-head">
                <h2>Top brands for you</h2>
            </div>
            <div class="container_3-img">
                <a  href="#"><img src="images/kfc.png" ></a>
                <a href="#"><img src="images/mc.avif" ></a>
                <a href="#"><img src="images/ssbriyani.avif" ></a>
                <a href="#"><img src="images/pizza_hut.avif" ></a>
                <a href="#"><img src="images/dominos.avif" ></a></div>
            <div class="container_3-foot">
               <span>KFC</span>
                <span>Mcdonald's</span>
                <span>SS hyderabad biryani</span>
                <span>Pizza hut</span>
                <span>Domino's</span></div>
        </div></div>

        <div class="row-head-1" >Order food online from anywhere</div>

        <div  class="container-4">

        <div class="container-4-s">

<div class="row-1">

<div class="card-1">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#" ><img class="r1-imgs" src="images/kfc-card.avif "></a>
    <div class="off"><p>37% OFF</p> <span>27 min</span></div></div>
<div class="txt-content-1">
    <p style="font-size: 30px;">KFC</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
    </p></div>
<div class="txt-content-2"><p>Fast Food, Biryani,....</p>
    <p> ₹200 for one</p></div></div>

<div class="card-2">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img  class="r1-imgs" src="images/shawarmw-card.avif "></a>
        <div class="off"><p>45% OFF</p> <span>30 min</span></div></div>
    <div class="txt-content-1">
        <p style="font-size: 30px;">Zawarma </p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
        </p></div>
    <div class="txt-content-2"><p>Fast Food, shawarma,....</p>
        <p> ₹120 for one</p></div>
</div>

<div class="card-3">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img class="r1-imgs" src="images/lassi-card.avif "></a>
        <div class="off"><p>20% OFF</p> <span>35 min</span></div></div>
    <div class="txt-content-1">
        <p style="font-size: 30px;">Lassi shop</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
        </p></div>
    <div class="txt-content-2"><p>Fresh lassi,....</p>
        <p> ₹10 for one</p></div>
</div>

</div> 
<div class="row-2">

<div class="card-1">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"> <img class="r1-imgs" src="images/pizzahut-card.avif"></a>
        <div class="off"><p>30% OFF</p> <span>45 min</span></div></div>
<div class="txt-content-1">
    <p style="font-size: 30px;">Pizza Hut</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
    </p></div>
<div class="txt-content-2"><p>Pizza ,Burger....</p>
    <p> ₹250 for one</p></div></div>

<div class="card-2">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img  class="r1-imgs" src="images/briyani-card.avif "></a>
        <div class="off"><p>40% OFF</p> <span>30 min</span></div></div>
    <div class="txt-content-1">
        <p style="font-size: 30px;">YaMohaideen</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
        </p></div>
    <div class="txt-content-2"><p>Mutton Biryani,....</p>
        <p> ₹300 for one</p></div>
</div>

<div class="card-3">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img class="r1-imgs" src="images/choco-card.avif "></a>
        <div class="off"><p>42% OFF</p> <span>20 min</span></div></div>
    <div class="txt-content-1">
        <p style="font-size: 30px;">Choco Dream</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
        </p></div>
    <div class="txt-content-2"><p>Ice cream,....</p>
        <p> ₹150 for one</p></div>
</div>

</div> 
<div class="row-3">

<div class="card-1">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img class="r1-imgs" src="images/burger-king-card.avif "></a>
        <div class="off"><p>50% OFF</p> <span>33 min</span></div></div>
<div class="txt-content-1">
    <p style="font-size: 30px;">Burg King</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
    </p></div>
<div class="txt-content-2"><p>Burger,....</p>
    <p> ₹200 for one</p></div></div>

<div class="card-2">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img  class="r1-imgs" src="images/ibaco-card.avif "></a>
        <div class="off"><p>56% OFF</p> <span>56 min</span></div></div>
    <div class="txt-content-1">
        <p style="font-size: 30px;">Ibaco</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
        </p></div>
    <div class="txt-content-2"><p>Ice cream cakes..</p>
        <p> ₹500 for one</p></div>
</div>

<div class="card-3">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img class="r1-imgs" src="images/oreo-shake-card.avif "></a>
        <div class="off"><p>50% OFF</p> <span>35 min</span></div></div>
    <div class="txt-content-1">
        <p style="font-size: 30px;">Sweat Truth</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
        </p></div>
    <div class="txt-content-2"><p>Milk shakes,....</p>
        <p> ₹250 for one</p></div>
</div>

</div> 
<div class="row-4">

<div class="card-1">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img class="r1-imgs" src="images/brownie-card.avif "></a>
        <div class="off"><p>46% OFF</p> <span>30 min</span></div></div>
<div class="txt-content-1">
    <p style="font-size: 30px;">Brownie</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
    </p></div>
<div class="txt-content-2"><p>Black brownie,....</p>
    <p> ₹250 for one</p></div></div>

<div class="card-2">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img  class="r1-imgs" src="images/momo-card.avif "></a>
        <div class="off"><p>30% OFF</p> <span>45 min</span></div></div>
    <div class="txt-content-1">
        <p style="font-size: 30px;">Momo shop</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
        </p></div>
    <div class="txt-content-2"><p>Cakes,....</p>
        <p> ₹300 for one</p></div>
</div>

<div class="card-3">
    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
    <div class="img"><a href="#"><img class="r1-imgs" src="images/hungry-town-card.avif "></a>
        <div class="off"><p>40% OFF</p> <span>30 min</span></div></div>
    <div class="txt-content-1">
        <p style="font-size: 30px;">Hurry town</p><p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
        </p></div>
    <div class="txt-content-2"><p>Fast Food, Biryani,....</p>
        <p> ₹200 for one</p></div>
</div></div>

</div> 
        </div>    
        <div class="footer">
            <div class="footer-s">
         <div class="f-head"><p>Yummetto</h2></div>   
         <div class="f-content">
            <div class="f-col-1">
                    <p class="head">ABOUT Yumetto</p>
                    <p>Who we are</p>
                    <p>Blog</p>
                    <p>Work with us</p>
                    <p>Invester Relations</p>
                    <p>Report Fraud </p>
            </div>
            <div class="f-col-2">
                <p class="head">Yumeeverse</p>
                <p>Feeding India</p>
                <p>Hyperpure</p>
                
                <p>Yumland </p>
            </div>
            <div class="f-col-3">
                <div class="f-col-3-1">
                    <p class="head">FOR RESTAURANTS</p>
                    <p>Partner with us</p>
                    <p>Apps For You</p>
                
                </div>
                <div class="f-col-3-2">
                    <p class="head">FOR ENTERPRISES</p>
                    <p>Yumetto for work</p>
                   
                </div>

            </div>
            <div class="f-col-4">
                <p class="head">LEARN MORE</p>
                <p>Privary</p>
                <p>Security</p>
                <p>Terms</p>
                <p>Sitemap</p>
            </div>
            <div class="f-col-5">
                <p class="head">SOCIAL LINKS</p>
                <p><i class="fa-brands fa-instagram"></i></p>
                <p><i class="fa-brands fa-twitter"></i></p>
                <p><i class="fa-brands fa-youtube"></i></p>
                <p><i class="fa-brands fa-facebook"></i></p>
            </div> </div> <div class="line"> <p></p></div>
        
         <div class="f-bottom">By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. 
            All trademarks are properties of their respective owners. 2008-2022 © Yumettoo™ Ltd. All rights reserved.</div>
        </div> </div>
        
        <script src="script_proj.js"></script>

    </body>
</html>


    