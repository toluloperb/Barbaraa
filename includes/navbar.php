<?php
include("includes/header.php");
?>
      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="index.php" class="nav__logo">
                  <img src="assets/images/logo-white.png" alt="">
               </a>
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="." class="nav__link">Home</a></li>
                  <li><a href="about" class="nav__link">About</a></li>

                  <!--=============== DROPDOWN 1 ===============-->
                  <!-- <li class="dropdown__item">
                     <div class="nav__link">
                        About Us <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                  </li> -->

                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                         Plans <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="" class="dropdown__link">
                              Mutual Funds
                           </a>                          
                        </li>

                        <li>
                           <a href="" class="dropdown__link">
                              Trust
                           </a>
                        </li>

                        <li>
                           <a href="" class="dropdown__link">
                              Securities
                           </a>
                        </li>

                        <!-- <li>
                           <a href="services?s=Individual-Family-Counselling#tab" class="dropdown__link">
                              Individual & Family Counselling
                           </a>
                        </li>

                        <li>
                           <a href="services?s=Group Counselling#tab" class="dropdown__link">
                              Group Counselling
                           </a>
                        </li>

                        <li>
                           <a href="services?s=Medication Management#tab" class="dropdown__link">
                              Medication Management
                           </a>
                        </li>

                        <li>
                           <a href="services?s=Psychosocial Rehab#tab" class="dropdown__link">
                              Psychosocial Rehabilitation
                           </a>
                        </li> -->
                     </ul>
                  </li>

                  <!--=============== DROPDOWN 3 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Careers <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="" class="dropdown__link">
                              Job Opportunities
                           </a>                          
                        </li>

                        <li>
                           <a href="faq" class="dropdown__link">
                              FAQ
                           </a>                          
                        </li>
                     </ul>
                  </li>

                  <!-- <li><a href="about" class="nav__link">About Us</a></li> -->

                  <li><a href="" class="nav__link"><button>Contact us</button></a></li>
               </ul>
            </div>
         </nav>
      </header>

