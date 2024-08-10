<?php
    include('includes/header.php');
    include('includes/navbar.php');
    // include('includes/slider.php');
?>

<section class="banner">
    <h1>Services</h1>
</section>

<main>
    <section class="">
        <div class="servicesContainer top">
            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/funding.png" alt="">
                </div>
                <h3>Mutual funds</h3>
                <p>Put your money to work with our Mutual Funds and start earning competitive returns.</p>
            </div>

            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/trust.png" alt="">
                </div>
                <h3>Trust</h3>
                <p>Build your wealth and preserve your legacy to last for generations.</p>
            </div>

            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/growth.png" alt="">
                </div>
                <h3>Securities</h3>
                <p>Trade stocks like a pro on the floor of the US Exchange.</p>
            </div>

            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/agreement.png" alt="">
                </div>
                <h3>Real Estate Investments</h3>
                <p>We offer a lucrative opportunity for diversifying investment portfolios and building wealth in the Real Estate Sector.</p>
            </div>

            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/capital-venture.png" alt="">
                </div>
                <h3>Venture Capital</h3>
                <p>Trade stocks like a pro on the floor of the US Exchange.</p>
            </div>

            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/balance.png" alt="">
                </div>
                <h3>Private Equity</h3>
                <p>Trade stocks like a pro on the floor of the US Exchange.</p>
            </div>

            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/bond.png" alt="">
                </div>
                <h3>Bond</h3>
                <p>Enhance your investment portfolio as we provide reliable income and reduce risk.</p>
            </div>

            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/hedging.png" alt="">
                </div>
                <h3>Hedge Funds</h3>
                <p>Trade stocks like a pro on the floor of the US Exchange.</p>
            </div>

            <div class="eachservice">
                <div class="text-center">
                    <img src="assets/images/investment.png" alt="">
                </div>
                <h3>Agro Investment</h3>
                <p>Commit your finance into Agriculture, including crop cultivation and livestock raising to meets rising food demand to enhance productivity and profitability.</p>
            </div>
        </div>
    </section>

    <div id="faq"></div>

    <div class="faq">
        <h1>Frequently Asked Question</h1>

        <p class="questions" id="q">+ Can I switch my investment between fund providers?</p>
        
        <div class="" id="ans1">
            <p class="answer">Yes, your funds are not locked into any provider that we recommend. Diligent Wealth are constantly reviewing investment 
                providers and their funds performance, we can help guide you with where your money will be working hardest for you.</p>
        </div>

        <hr>

        <p class="questions" id="q2">+ Can I earn more than a regular savings account or term-deposit?</p>
        <div class="" id="ans2">
            <p class="answer">Currently with bank interest rates at historically low levels, you will find that the bank will not offer much on your 
                savings or term-deposits. We have a large range of investment options that will likely see much higher returns enabling you to achieve 
                regular income goals or retirement savings goals. Talk to us today to find out where we can make your money provide more favourable 
                returns than the banks.</p>
        </div>
        
        <hr>

        <p class="questions" id="q3">+ How do I withdraw funds?</p>
        <div class="" id="ans3">
            <p class="answer">Depending on the provider that your funds are invested in we can help you with the correct forms and liaise with the 
                fund provider on your behalf once we have your signed instructions.</p>
        </div>

        <a href="faq"><button class="button">See more</button></a>
    </div>

    <section class="visitationContainer">
        <div class="visitation">
            <div class="sectionTitle">
                <h1>Contact Us</h1>
                <div class="addressContainer">
                    <div class="iconsContainer">
                        <img src="assets/images/location.png" alt="">
                    </div>
                    <p>11649 Rutherford St,  
                        <br>
                        Detroit MI 48227,
                    </p>
                </div>

                <div class="addressContainer">
                    <div class="iconsContainer">
                        <img src="assets/images/call.png" alt="">
                    </div>
                    <p>+16283069676
                    </p>
                </div>

                <div class="addressContainer">
                    <div class="iconsContainer">
                        <img src="assets/images/email.png" alt="">
                    </div>
                    <p>
                        <a style="color: #fff;" href="mailto:info@westhillcrestddagrouphome.com">support@devingroup.com</a>
                    </p>
                </div>
            </div>
            <div class="visitform" style="width: 50%;">
                <h1>Contact Form</h1>
                <form action="" method="post">
                    <div>
                        <label for="">Full name</label>
                        <input type="text" name="fullname" required>
                    </div>

                    <div>
                        <label for="">Contact Number</label>
                        <input type="tel" name="contactno" required>
                    </div>

                    <div>
                        <label for="">Email</label>
                        <input type="email" name="email" required>
                    </div>

                    <div>
                        <label for="">Address</label>
                        <input type="address" name="address" required>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
    include('includes/footer.php');
?>