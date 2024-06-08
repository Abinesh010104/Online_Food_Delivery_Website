<!DOCTYPE html>
<?php
session_start();

?>

<html>

<head>
    <title>Order page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_proj.css">
    <link rel="stylesheet" href="style-proj-2.css">
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1114c28fb2.js" crossorigin="anonymous"></script>
    <style>
#add-cart{
    position: absolute;
    top:23vh;
    right: 20%;
}

    </style>
</head>
<script>
    document.getElementsByTagName("html")[0].className += " js";
</script>
<link rel="stylesheet" href="assets/css/style.css">

<body>
    <div class="container_1">
        <div class="navbar">
            <div class="navbar-s">
                <img id="logo" class="logo" src="logo.png">

                <ol>
                    <li onclick="open_close_3()"><a href="#"><i class="fa-brands fa-searchengin"></i> SEARCH</a> </li>
                    <li><a href="#"> <i class="fa-solid fa-percent"></i></i> OFFERS</a></li>
                    <li id="login_up" onclick="open_close()">
                    <a class="user-log" href="#"> <i class="fa-solid fa-user"></i>  <?php echo"$_SESSION[name]";?>
                    </li>
                    <li onclick="open_close_2()"><a href="#"><i class="fa-solid fa-circle-question"></i> HELP</a></li>
                </ol>
            </div>
        </div>
    </div>


    <div class="order-head">
        <p>Home/India/Chennai/Kodambakkam/Kfc/Kfc reviews</p>
    </div>
    <div class="order-cont">
        <div class="order-div-1">
            <div class="img-m1"><img src="images/kfc-img-1-orpg.jpg"> </div>
            <div class="img-m2">
                <div class="img-m21">
                    <div class="img-m211"> <img src="images/kfc-img-2-orpg.jpg"> </div>
                    <div class="img-m212"> <img src="images/kfc-img-3-orpg.jpg"> </div>
                </div>
                <div class="img-m22">
                    <div class="img-m221"> <img src="images/kfc-img-4-orpg.jpg"> </div>
                    <div class="img-m222"><img src="images/kfc-img-5-orpg.jpg"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-order-content">
        <div class="order-content">
            <div class="div-1">
                <p>KFC</P>
                <div class="div-1-1"><span class="span"> <span class="rat-box-1">4.0<i class="fa-solid fa-star"></i></span>108 Dinning Reviews</span>
                    <span class="span"><span class="rat-box-2">4.3 <i class="fa-solid fa-star"></i></span>5,757 Delivery Reviews</span>
                </div>
            </div>
            <div class="div-2">
                <p>South Indian, North Indian, Chinese, Street Food, Ice Cream, Beverages</p>
                <p>Kodambakkam, Chennai</p>
            </div>
            <div class="div-3">
                <p>Open now6am – 10:30pm (Today)</p>
            </div>
            <div class="div-4">
                <p><i class="fa-solid fa-star"></i> Add Review</p>
                <p><i class="fa-solid fa-location-arrow"></i> Direction</p>
                <p><i class="fa-solid fa-bookmark"></i> Bookmark</p>
                <p><i class="fa-solid fa-share"></i> Share</p>
            </div>
            <div >
                    <a href="#0" id="add-cart" class="cd-add-to-cart js-cd-add-to-cart" data-price="350">Add To Cart</a>
                </div>
            <div class="cd-cart cd-cart--empty js-cd-cart">
                <a href="#0" class="cd-cart__trigger text-replace">
                    Cart
                    <ul class="cd-cart__count">
                        <!-- cart items count -->
                        <li>0</li>
                        <li>0</li>
                    </ul> <!-- .cd-cart__count -->
                </a>

                <div class="cd-cart__content">
                    <div class="cd-cart__layout">
                        <header class="cd-cart__header">
                            <h2>Cart</h2>
                            <span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
                        </header>

                        <div class="cd-cart__body">
                            <ul>
                                <!-- products added to the cart will be inserted here using JavaScript -->
                            </ul>
                        </div>

                        <footer class="cd-cart__footer">
                            <a href="#0" class="cd-cart__checkout">
                                <em>Checkout - &#x20B9<span>0</span>
                                    <svg class="icon icon--sm" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor">
                                            <line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12" />
                                            <polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 " />
                                        </g>
                                    </svg>
                                </em>
                            </a>
                        </footer>
                    </div>
                </div> <!-- .cd-cart__content -->
            </div> <!-- cd-cart -->
            <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
            <script src="assets/js/main.js"></script>
        </div>
    </div>
    <div class="footer">
        <div class="footer-s">
            <div class="f-head">
                <p>Yummetto</h2>
            </div>
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
                </div>
            </div>
            <div class="line">
                <p></p>
            </div>

            <div class="f-bottom">By continuing past this page, you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies.
                All trademarks are properties of their respective owners. 2008-2022 © Yumettoo™ Ltd. All rights reserved.</div>
        </div>
    </div>

    <script src="script_proj.js"></script>
</body>

</html>