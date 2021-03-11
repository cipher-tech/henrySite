 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=1024">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <title>Stockmutualinvest | Home</title>

     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
     <link rel="stylesheet" href="assets/css/odometer.css">
     <link rel="stylesheet" href="assets/css/nice-select.css">
     <link rel="stylesheet" href="assets/css/owl.min.css">
     <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
     <link rel="stylesheet" href="assets/css/magnific-popup.css">
     <link rel="stylesheet" href="assets/css/flaticon.css">
     <link rel="stylesheet" href="assets/css/main.css">

     <link rel="shortcut icon" href="assets/images/favicon2.png" type="image/x-icon">
 </head>

 <body>
     <div class="main--body">
         <!--========== Preloader ==========-->
         <div class="preloader">
             <div class="preloader-wrapper">
                 <div></div>
                 <div></div>
                 <div></div>
                 <div></div>
             </div>
         </div>
         <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
         <div class="overlay"></div>
         <!--========== Preloader ==========-->


         <!--=======Header-Section Starts Here=======-->
         <header class="header-section">
             <div class="header-top">
                 <div class="container">
                     <div class="row align-items-center">
                         <div class="col-6">
                             <ul class="support-area">
                                 <li>
                                     <a href="#0"><i class="flaticon-support"></i>Support</a>
                                 </li>
                                 <li>
                                     <a href="Mailto:support@Stockmutualinvest.net"><i
                                             class="flaticon-email"></i>support@Stockmutualinvest.net </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="header-bottom">
                 <div class="container">
                     <div class="header-area">
                         <div class="logo">
                             <a href="index-2.html">
                                 <img src="assets/images/logo/Stockmutualinvest.png" alt="logo">
                             </a>
                         </div>
                         <ul class="menu">
                             <li>
                                 <a href="{{ route('index') }}">Home</a>
                             </li>
                             <li>
                                 <a href="{{ route('about') }}">About</a>
                             </li>
                             <li>
                                 <!--investment-plan.php-->
                                 <a href="{{ route('account-types') }}">Plan</a>
                             </li>
                             <li>
                                 <a href="{{ route('faq') }}">Faqs</a>
                             </li>
                             <li>
                                 <a href="{{ route('terms') }}">Terms</a>
                             </li>
                             <li>
                                 <a href="{{ route('contact') }}">Contact</a>
                             </li>
                             <li class="pr-0">
                                 <a href="{{ route('register') }}" class="custom-button">Join Us</a>
                             </li>
                             <li class="pr-0">
                                 <a href="{{ route('login') }}" class="custom-button">Sign In</a>
                             </li>
                         </ul>
                         <div class="header-bar d-lg-none">
                             <span></span>
                             <span></span>
                             <span></span>
                         </div>
                     </div>
                 </div>
             </div>
         </header>
         <!--=======Banner-Section Starts Here=======-->
         <section class="bg_img hero-section-2"
             data-background="/assets/images/about/hero-bg2.jpg">
             <div class="container">
                 <div class="hero-content text-white">
                     <h1 class="title">Sign In</h1>
                     <ul class="breadcrumb">
                         <li>
                             <a href="/">Home</a>
                         </li>
                         <li>
                             Sign In
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="hero-shape">
                 <img class="wow slideInUp" src="assets/images/about/hero-shape2.png" alt="about"
                     data-wow-duration="1s">
             </div>
         </section>
         <!--=======Banner-Section Ends Here=======-->

         <!-- ========Contact-Section Starts Here ========-->
         <section class="contact-section padding-bottom padding-top">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6 d-none d-lg-block">
                         <div class="contact-thumb">
                             <img src="assets/images/contact/contact01.png" alt="faq">
                             <div class="mes1 wow slideInLeft">
                                 <img src="assets/images/contact/mes1.png" alt="faq">
                             </div>
                             <div class="mes2 wow slideInDown">
                                 <img src="assets/images/contact/mes2.png" alt="faq">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="contact-header">
                             <span>welcome to Stockmutualinvest</span>
                             <h4 class="title">login to account!</h4>
                         </div>
                         {{-- <form class="contact-form" id="contact_form_submit" action="#" method="POST">
                                                        <div class="form-group">
                                <input type="text" placeholder="Email" name="email" id="name">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" id="email">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="signinForm" value="login">
                            </div>
                        </form> --}}
                         <x-guest-layout>
                             <x-jet-authentication-card>
                                 <x-slot name="logo">
                                     {{-- <x-jet-authentication-card-logo /> --}}
                                     <img src="assets/images/logo/Stockmutualinvest.png" alt="logo">

                                 </x-slot>

                                 <x-jet-validation-errors class="mb-4" />

                                 @if (session('status'))
                                     <div class="mb-4 font-medium text-sm text-green-600">
                                         {{ session('status') }}
                                     </div>
                                 @endif

                                 <form method="POST" action="{{ route('login') }}">
                                     @csrf

                                     <div>
                                         <x-jet-label for="email" value="{{ __('Email') }}" />
                                         <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                             :value="old('email')" required autofocus />
                                     </div>

                                     <div class="mt-4">
                                         <x-jet-label for="password" value="{{ __('Password') }}" />
                                         <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                             name="password" required autocomplete="current-password" />
                                     </div>

                                     <div class="block mt-4">
                                         <label for="remember_me" class="flex items-center">
                                             <x-jet-checkbox id="remember_me" name="remember" />
                                             <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                         </label>
                                     </div>

                                     <div class="flex items-center justify-end mt-4">
                                         @if (Route::has('password.request'))
                                             <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                                 href="{{ route('password.request') }}">
                                                 {{ __('Forgot your password?') }}
                                             </a>
                                         @endif

                                         <x-jet-button class="ml-4">
                                             {{ __('Log in') }}
                                         </x-jet-button>
                                     </div>
                                 </form>
                             </x-jet-authentication-card>
                         </x-guest-layout>
                     </div>
                 </div>
             </div>
         </section>
         <!-- ========Contact-Section Ends Here ========-->


         <!-- Footer -->

         <!-- ==========Footer-Section Starts Here========== -->
         <footer class="footer-section">
             <div class="newslater-section padding-bottom">
                 <div class="container">
                     <div class="newslater-area">
                         <div class="newslater-content padding-bottom padding-top">
                             <span class="cate">SUBSCRIBE TO Stockmutualinvest</span>
                             <h3 class="title">To Get Exclusive Benefits</h3>
                             <form class="newslater-form">
                                 <input type="text" placeholder="Enter Your Email Here" required="">
                                 <button type="submit">subscribe</button>
                             </form>
                         </div>
                         <div class="newslater-thumb">
                             <img src="assets/images/footer/footer.png" alt="footer">
                             <div class="coin-1">
                                 <img src="assets/images/footer/Coin_01.png" alt="footer">
                             </div>
                             <div class="coin-2">
                                 <img src="assets/images/footer/Coin_02.png" alt="footer">
                             </div>
                             <div class="coin-3">
                                 <img src="assets/images/footer/Coin_03.png" alt="footer">
                             </div>
                             <div class="coin-4">
                                 <img src="assets/images/footer/Coin_04.png" alt="footer">
                             </div>
                             <div class="coin-5">
                                 <img src="assets/images/footer/Coin_05.png" alt="footer">
                             </div>
                             <div class="coin-6">
                                 <img src="assets/images/footer/Coin_06.png" alt="footer">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="container">
                 <div class="footer-top">
                     <div class="logo">
                         <a href="index-2.html">
                             <img src="assets/images/logo/Stockmutualinvest White - Copy.png" alt="logo">
                         </a>
                     </div>
                     <ul class="links">
                         <li>
                             <a href="about.html">About</a>
                         </li>
                         <li>
                             <a href="account-types.html">Plans</a>
                         </li>
                         <li>
                             <a href="faq.html">FAQ</a>
                         </li>
                         <li>
                             <a href="terms.html">Privacy Policy</a>
                         </li>
                     </ul>
                 </div>
                 <div class="footer-bottom">
                     <div class="footer-bottom-area">
                         <div class="left">
                             <p>&copy; 2020 <a href="#0">Login</a> | All right reserved</p>
                         </div>
                         <ul class="social-icons">
                             <li>
                                 <a href="#0">
                                     <i class="fab fa-facebook-f"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#0" class="active">
                                     <i class="fab fa-twitter"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#0">
                                     <i class="fab fa-pinterest-p"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#0">
                                     <i class="fab fa-instagram"></i>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </footer>

         <!-- ==========Footer-Section Ends Here========== -->

     </div>

     <script src="assets/js/jquery-3.3.1.min.js"></script>
     <script src="assets/js/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/magnific-popup.min.js"></script>
     <script src="assets/js/jquery-ui.min.js"></script>
     <script src="assets/js/wow.min.js"></script>
     <script src="assets/js/odometer.min.js"></script>
     <script src="assets/js/viewport.jquery.js"></script>
     <script src="assets/js/nice-select.js"></script>
     <script src="assets/js/owl.min.js"></script>
     <script src="assets/js/paroller.js"></script>
     <script src="assets/js/main.js"></script>

     <!--Start of Tawk.to Script-->
     <script type="text/javascript">
         var Tawk_API = Tawk_API || {},
             Tawk_LoadStart = new Date();
         (function() {
             var s1 = document.createElement("script"),
                 s0 = document.getElementsByTagName("script")[0];
             s1.async = true;
             s1.src = 'https://embed.tawk.to/604747e5385de407571e1df4/1f0b71nbh';
             s1.charset = 'UTF-8';
             s1.setAttribute('crossorigin', '*');
             s0.parentNode.insertBefore(s1, s0);
         })();

     </script>
     <!--End of Tawk.to Script-->
 </body>

 </html>
