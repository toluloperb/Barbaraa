<footer>
    <div class="footer_links">
        <div class="footer_logo">
            <a href="index"><img src="assets/images/logo-white.png" alt=""></a>
        </div>
        <div class="each_links">
            <div class="linkscategories">
                <p><strong>Services</strong></p>
                <a href="">Mutual Funds</a>
                <a href="">Trust</a>
                <a href="">Securities</a>
            </div>

            <div class="linkscategories">
                <p><strong>Company</strong></p>
                <a href="">About</a>
                <a href="">Our Mission</a>
                <a href="">Our Vision</a>
            </div>

            <div class="linkscategories">
                <p><strong>Careers</strong></p>
                <a href="">Job Opportunities</a>
                <a href="">Benefits</a>
                <a href="">FAQ</a>
            </div>

            <div class="linkscategories">
               <p><strong>Contact</strong></p>
               <a href="mailto: ">Support</a>
               <a href="tel: +16283069676">+16283069676</a>
               <a>11649 Rutherford St, Detroit MI 48227.
               </a>
            </div>
        </div>
    </div>
    <br>
        <hr>
            <p>&copy; Devin Group LLC</p>
        <hr>
    <br>
</footer>
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
      <script src="assets/js/script.js"></script>

      <script>
         document.addEventListener('scroll', () => {
            const header = document.querySelector('.header');

            if (window.scrollY > 0) {
               header.classList.add('scrolled');
            } else {
               header.classList.remove('scrolled');
            }
         });
      </script>
      
      
   </body>
</html>