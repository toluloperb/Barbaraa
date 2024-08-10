<?php
    // include('config/dbcon.php');
?>

<style>
    .mySlides {
    display: none
    }


    /* Slideshow container */

    .slideshow-container {
    max-width: 100%;
    /* position: relative; */
    margin: auto;
    height: 600px;
    background-color: #000;
    }


    /* Next & previous buttons */

    .prev,
    .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    }


    /* Position the "next button" to the right */

    /* .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    } */


    /* On hover, add a black background color with a little bit see-through */

    /* .prev:hover,
    .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
    } */


    /* Caption text */

    .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    /* position: absolute; */
    bottom: 8px;
    width: 100%;
    text-align: center;
    }


    /* Number text (1/3 etc) */

    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }

    .numbertext img {
        width: 100%;
        height: 100%;
    }


    /* The dots/bullets/indicators */

    /* .dot {
    cursor: pointer;
    height: 13px;
    width: 13px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    } */

    .active,
    .dot:hover {
    background-color: #717171;
    }

    .imgSlide {
        position: relative;
        text-align: center;
    }

    .imgSlide img {
        object-fit: cover;
        filter: opacity(40%);
    }

    .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 20pt;
    }


    /* Fading animation */

    .effect {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 5s;
    animation-name: fade;
    animation-duration: 5s;
    }

    @-webkit-keyframes fade {
    from {
        opacity: .4
    }
    to {
        opacity: 1
    }
    }

    @keyframes fade {
    from {
        opacity: .4
    }
    to {
        opacity: 1
    }
    }


    /* On smaller screens, decrease text size */

    @media only screen and (max-width: 720px) {
        .centered
        {
            width: 90%;
            top: 60%;
            font-size: 14pt;
            text-align: left;
        }
    }
</style>

<div class="slideshow-container">
  
    <div class="mySlides effect">
        <div class="imgSlide">
            <img src="assets/images/happy home.jpg" style="width:100%; height: 600px;">
            <div class="centered">
                <h1>Investing Made Easy</h1>
            </div>
        </div>
    </div>

    <div class="mySlides effect">
        <div class="imgSlide">
            <img src="assets/images/bkg2.jpg" style="width:100%; height: 600px;">
            <div class="centered">
                <h1>Put your money to work with our Mutual Funds and start earning competitive returns.</h1>
            </div>
        </div>
    </div>

    <div class="mySlides effect">
        <div class="imgSlide">
            <img src="assets/images/bkg3.jpg" style="width:100%; height: 600px;">
            <div class="centered">
                <h1>Lifelong Support from Devin Group</h1>
            </div>
        </div>
    </div>

    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
    slideIndex = 1
    }
    if (n < 1) {
    slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    }

    setInterval(function() {
    slideIndex++;
    showSlides(slideIndex);
    }, 5000);
</script>