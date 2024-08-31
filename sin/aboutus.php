<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <title>Safs - HTML</title>

    <!-- ====== Google Fonts ====== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Gemunu+Libre:wght@200..800&family=Noto+Sans+Sinhala:wght@100..900&family=Noto+Sans+Tamil+Supplement&family=Noto+Sans+Tamil:wght@100&family=Noto+Serif+Sinhala:wght@100..900&family=Tiro+Tamil:ital@0;1&display=swap" rel="stylesheet">
    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="../assets/css/lightbox.min.css" />
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
</head>

<body data-spy="scroll" data-target=".navbar-nav" id="sin">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="spinner-border"></div>
            <img src="../assets/media/icons/PSA logo.png" alt="Preloader Image" class="preloader-image">
        </div>
    </div>


    <!-- // Preloader -->

    <!-- ====== Header ====== -->
    <!-- Header 1 -->
    <header class="bg-secondary header1">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                <img src="../assets/media/icons/PSA full logo.png" alt="Bootstrap" height="80" width="250" />
            </a>
            <div class="col-4 col-lg-auto mb-3 mb-lg-0 d-lg-flex d-none py-3 mx-2">
                <div class="d-flex">
                    <a href="" class="icons d-flex justify-content-center align-items-center mx-2"><img
                            src="../assets/media/flaticon icons/telephone.png" alt=""></a>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="mb-0">Contact Us</h6>
                        <div class="row">
                            <a href="" class="text-decoration-none">
                                <p class="mb-0">0712345678</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-lg-auto mb-3 mb-lg-0 d-lg-flex d-none py-3 mx-2">
                <div class="d-flex">
                    <a href="" class="icons d-flex justify-content-center align-items-center mx-2"><img
                            src="../assets/media/flaticon icons/message.png" alt=""></a>
                </div>
                <div class="row">
                    <div class="col">
                        <h6 class="mb-0">Email us</h6>
                        <a href="" class="text-decoration-none">
                            <p class="mb-0">psamail@gmail.com</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 col-lg-auto mb-3 mb-lg-0 d-lg-flex d-none py-3 mx-2">
                <!-- Social Link -->
                <div class="row">
                    <div class="social-bg">
                        <!-- Social Link -->
                        <div class="social-aria2">
                            <a target="_blank" href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="#" class="twit"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#" class="ins"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="#" class="yt"><i class="fab fa-youtube"></i></a>
                            <a target="_blank" href="#" class="tik"><i class="fab fa-tiktok"></i></a>

                        </div>
                        <!-- // Social Link -->

                        <!-- // Social Link -->
                    </div>
                </div>

            </div>
    </header>

    <!-- Header 1 -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-danger sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="aboutus.php">ABOUT US</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php">NEWS</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">GALLERY</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">OFFICIAL DOCUMENTS</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Q & A</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                </ul>
            </div>
            <ul class="list-group list-group-horizontal bg-danger">
                <li class="list-group-item bg-danger"><a href="../aboutus.php">English</a></li>
                <li class="list-group-item bg-danger"><a href="">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a href="../tam/aboutus.php">தமிழ்</a></li>
            </ul>
        </div>
        <a class="open-button " onclick="" href="https://wa.me/94740721180"><img src="assets/media/flaticon icons/help-desk.png" alt=""></a>
       
       
      
<button class="cssbuttons-io-button">
  Join Us
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
</button>

    </nav>
    <!-- Navbar -->
    <!-- Page Title -->
    <div class="page-title bg-img section-padding bg-overlay"
        style="background-image: url(../assets/images/hero-area/img13.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h5 class="text-white">ජන අරගල සන්ධානය</h5>
                    <h2>අපි කවුද</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- // Page Title -->
    <!-- ====== // Header ====== -->


    <!-- ====== About Area ====== -->
    <section id="about" class="section-padding about-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-start">
                <div class="col-lg-12">
                    <div class="section-title text-start">
                        <h1><img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""> ජන <span style="color: #ffc900;">අරගල</span> සන්ධානය <img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""></h1>
                        <h4>කවුද මේ ජන අරගල සන්ධානය(PSA)?</h4>
                        <p>
                        ජන අරගල සන්ධානය යනු ගාලුමුවදොර අරගලයට සහ පෙර පැවති අරගල සහ ජනතා නැගිටීම්වලට සම්බන්ධ වූ ශ්‍රී ලංකාවේ ක්‍රියාකාරීන්, වෘත්තිකයන්, කලාකරුවන් සහ වාමාංශික පක්ෂ කිහිපයක්ද එක්ව සෑදුනු ජනතාවගේ සන්ධානයකි.
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="container-fluid">
         <div class="row ">
            <div class="col-lg-6">
                <!-- <div class="about-bg" style="background-image: url(../assets/media/web-img/psa\ english.jpg)">
                       
                    </div> -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide "><img src="../assets/media/web-img/psa english.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="../assets/media/web-img/psa sinhala.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="../assets/media/web-img/psa tamil.jpg" alt=""></div>
                        <div class="swiper-slide"><img src="../assets/media/web-img/psa president-english.jpg" alt="">
                        </div>
                        <div class="swiper-slide"><img src="../assets/media/web-img/psa president-sinhala.jpg" alt="">
                        </div>
                        <div class="swiper-slide"><img src="../assets/media/web-img/psa president-tamil.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-ab">
                    <h2>මොකක්ද මේ <span>PSA </span>?</h2>
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                    පෙරටුගාමී සමාජවාදී පක්ෂය‍, නව ප්‍රජාතන්ත්‍රවාදී මාක්ස් ලෙනින්වාදී පක්ෂය‍, සමාජවාදී ජනතා සංසදය කියන වාමාංශික දේශපාලන පක්ෂ තුනත්‍, පසුගිය ගෝල්ෆේස් අරගලයත්‍, ඊට පෙර පැවති අරගල මහජන නැගිටීම් තුල සිටි ක්‍රියාකාරීන්‍, වෘත්තිකයන් ‍, කලාකරුවන්ගෙන් සමන්විත පුළුල් කණ්ඩායමක් තමයි ජන අරගල සන්ධානය නියෝජනය කරන්නේ.
                    </p>
                    
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                    මේ සන්ධානය ගොඩනැගෙන්නේ මූලික වශයෙන් ඉදිරි මැතිවරණ ක්‍රියාවලිය තුල පසුගිය අරගල වල මහජන අභිලාශය නියෝජනය කිරීම‍, සමස්ත රටක් බරපතල අර්බුදයකට ඇද දමන IMF මර උගුලින් ඉවත් වීම යෝජනා කරන‍, ඉන්දියන් ඇමරිකන් අත්තනෝමතික මැදිහත්වීමට එරෙහි වැඩපිලිවෙලක් යෝජනා කරන වමේ සන්ධානයක් විදියටයි.
                    </p>
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                    ඒ අනුව අපි ඉදිරිපත් කරන ප්‍රතිපත්තිය තමයි 'ජනතාවගේ ප්‍රතිපත්තිය'. <br>
                    මේ රටේ පීඩාවට පත්වන බහුතරයක් වන ජනතාව පෙලෙන ප්‍රශ්න වලට ජනතා බලයක් ගොඩ නැගීම හරහා රාජ්‍ය ව්‍යුහය‍, ආර්ථිකය හා සමාජ දේශපාලන ව්‍යුහය වෙනස් කිරීම සම්බන්ධ රැඩිකල් වැඩපිලිවෙලක් අපි යෝජනා කරනවා.
                    </p>
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                    මේ රටේ වසර ගණනාවක් පවතින තීරණාත්මක ප්‍රශ්නයක් වන ජාතික ගැටලුව සඳහා උතුරේ ජනතාවත් දකුණේ ජනතාවත් සම්බන්ධ කරගත් විසඳුමක් යෝජනා කරන්නට අපට හැකිව තිබෙනවා.
                    </p>
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                    පවතින සමාජ දේශපාලන අර්බුදය කියන්නේ තනි තනි පුද්ගලයින්ගේ ගැටලුවකට එහා ගිය සමස්ත ධනවාදී ක්‍රමයේ අර්බුදයක්. ඒ නිසා අපි යෝජනා කරන්නේ මේ සමස්ත ක්‍රමය වෙනස් කරන සමාජවාදි සමාජයක් ගොඩනගන වැඩපිලිවෙලක්. අපේ සංක්‍රමණීය වැඩපිලිවෙල සකස් වෙන්නේ ඒ සමාජවාදී වැඩපිලිවෙල මූලික පදනම බවට පත්කරගෙන.
                    </p>




                </div>
            </div>
        </div>
         </div>
        </div>
    </section>
    <!-- ====== // About Area ====== -->
    <!-- ====== Members ====== -->
    <!-- <section id="about-member" class="section-padding">
        <div class="container">
           
            <div class="row justify-content-start">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Our Members</h2>

                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-6 col-lg-3 col-md-4 ">
                    <div class="ab-hov ">
                        <img src="../assets/images/team/img-2.jpg" alt="">
                    </div>
                    <h6 class="text-center">Nuwan Bopage</h6>
                </div>
                <div class="col-6 col-lg-3 col-md-4 ">
                    <div class="ab-hov ">
                        <img src="../assets/images/team/img-2.jpg" alt="">
                    </div>
                    <h6 class="text-center">Nuwan Bopage</h6>
                </div>
                <div class="col-6 col-lg-3  col-md-4">
                    <div class="ab-hov ">
                        <img src="../assets/images/team/img-2.jpg" alt="">
                    </div>
                    <h6 class="text-center">Nuwan Bopage</h6>
                </div>
                <div class="col-6 col-lg-3  col-md-4">
                    <div class="ab-hov ">
                        <img src="../assets/images/team/img-2.jpg" alt="">
                    </div>
                    <h6 class="text-center">Nuwan Bopage</h6>
                </div>
                <div class="col-6 col-lg-3  col-md-4">
                    <div class="ab-hov ">
                       <img src="../assets/images/team/img-2.jpg" alt="">
                    </div>
                    <h6 class="text-center">Nuwan Bopage</h6>
               </div>
            </div>
        </div>
    </section> -->
    <!-- ====== // Members ====== -->

     <!-- ====== Partners ====== -->
     <section id="about-partners" class="section-padding">
        <div class="container">
            
            <div class="row justify-content-start">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2><img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""> අප හා සම්බන්ධ සංවිධාන සහ දේශපාලන පක්ෂ <img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""></h2>

                    </div>
                </div>
            </div>
            
            <div class="mx-5 row g-2 row-gap-0 text-end ">
                <div class="col-12 col-lg-3 col-md-6 ">

                    <p class="text-start"><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">පෙරටුගාමී සමාජවාදි පක්ෂය‍</p>
                </div>
                <div class="col-12 col-lg-3 col-md-6 ">

                    <p class="text-start"><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">නව ප්‍රජාතන්ත්‍රවාදී මාක්ස් ලෙනින්වාදී පක්ෂය‍</p>
                </div>
                <div class="col-12 col-lg-3 col-md-6 ">

                    <p class="text-start"><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">සමාජවාදී ජනතා සංසදය</p>
                </div>
               
            </div>
        </div>
    </section>
    <!-- ====== // Partners ====== -->



    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <img src="../assets/media/icons/PSA full logo-white.png" alt="Bootstrap" height="100"
                            width="250" />
                    </a>
                    <div class="row d-block">
                        <div class="col-8">
                            <p class="text-white">
                                <i class="fa-solid fa-location-dot"></i> Address: 123 Main St,
                                Anytown, USA
                            </p>
                        </div>

                        <div class="col-8">
                            <p class="text-white">
                                <i class="fa-solid fa-envelope"></i> Email:
                                <a href="mailto:info@example.com">info@psa.lk</a>
                            </p>
                        </div>

                        <div class="col-8">
                            <p class="text-white">
                                <i class="fa-solid fa-phone"></i> Phone: 555-555-5555,
                                0712345678, 0718765432
                            </p>
                        </div>
                        <div class="col-8">
                            <p class="text-white">
                                <i class="fa-solid fa-globe"></i> Fax: 555-555-5555
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row d-block">
                        <h3>Recent Post</h3>
                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home </a>
                        </div>

                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home</a>
                        </div>
                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home </a>
                        </div>
                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row d-block">
                        <h3>Navigate</h3>
                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home </a>
                        </div>

                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home</a>
                        </div>
                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home </a>
                        </div>
                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="row d-block">
                        <h3>Newsletter SignUp</h3>
                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home </a>
                        </div>

                        <div class="col-8">
                            <a href="" class="text-white text-decoration-none">Home</a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">
                            &copy; 2024
                            <a href="https://www.begindot.com/">People’s Struggle Alliance</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->

    <!-- ====== ALL JS ====== -->
    
      </script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/lightbox.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.mixitup.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/typed.js"></script>
    <script src="../assets/js/skill.bar.js"></script>
    <script src="../assets/js/fact.counter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="../assets/js/main.js"></script>

    <script src="https://kit.fontawesome.com/495854b60c.js" crossorigin="anonymous"></script>
</body>

</html>