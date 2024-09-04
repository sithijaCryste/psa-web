<?php require "../admin/dist/config/connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <title>People’s Struggle Alliance - Support Us</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" />
    <link rel="shortcut icon" href="../assets/media/icons/PSA logo.png" type="image/x-icon">

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

<body data-spy="scroll" data-target=".navbar-nav">
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="spinner-border"></div>
            <div class="preloader-image">
                <img src="../assets/media/icons/PSA logo.png" alt="PSA logo">
                <img src="../assets/media/flaticon icons/umbrella (2).png" alt="Umbrella icon">
            </div>
        </div>
    </div>


    <!-- // Preloader -->

    <!-- ====== Header ====== -->
    <!-- Header 1 -->
    <header class="bg-secondary header1">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="index.php"
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
                            <a href="tel:0716487812" class="text-decoration-none">
                                <p class="mb-0">071 648 7812</p>
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
                        <a href="mailto:psalliancelk@gmail.com" class="text-decoration-none">
                            <p class="mb-0">psalliancelk@gmail.com</p>
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
                            <a target="_blank" href="https://www.facebook.com/peoplesstrugglealliance?mibextid=ZbWKwL" class="fb"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="#" class="twit"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://wa.me/94716487812" class="wtz"><i class="fa-brands fa-whatsapp"></i></a>
                            <a target="_blank" href="https://youtube.com/@peoplesstrugglealliance?si=Fj1v0Nxske7lMXXD" class="yt"><i class="fab fa-youtube"></i></a>
                            <a target="_blank" href="https://www.tiktok.com/@psa_lk?_t=8pL3TTMOKOX&_r=1" class="tik"><i class="fab fa-tiktok"></i></a>

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
                        <a class="nav-link" href="index.php">HOME</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="aboutus.php">ABOUT US</a>
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
                        <a class="nav-link" href="officialdocuments.php">OFFICIAL DOCUMENTS</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Q & A</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="supportus.php">SUPPORT US</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                </ul>
            </div>
            <ul class="list-group list-group-horizontal bg-danger">
                <li class="list-group-item bg-danger"><a href="../supportus.php">English</a></li>
                <li class="list-group-item bg-danger"><a class="active" href="supportus.php">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a href="../tam/supportus.php">தமிழ்</a></li>
            </ul>
        </div>

        <a class="cssbuttons-io-button text-decoration-none" href="https://wa.me/94716487812">
            Join Us
            <div class="icon">
                <svg
                    height="24"
                    width="24"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                        fill="currentColor"></path>
                </svg>
            </div>
        </a>

    </nav>
    <!-- Navbar -->
    <!-- Page Title -->
    <div class="page-title bg-img section-padding bg-overlay"
        style="background-image: url(../assets/images/hero-area/img13.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h5 class="text-white">People’s Struggle Alliance</h5>
                    <h2>ජන අරගලයට සහය දෙන්න</h2>
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
                        <h1> ජන <span style="color: #ffc900;">අරගල</span> සන්ධානය <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""></h1>
                        <h4>ජන අරගලයට ඔබේ සහය</h4>
                        <p>
                        ජන අරගල සන්ධානය (PSA) යනු සමාජවාදී ජනතා සංසදය, පෙරටුගාමී සමාජවාදී පක්ෂය සහ නව ප්‍රජාතන්ත්‍රවාදී මාක්ස් ලෙනින්වාදී පක්ෂය යන වාමාංශික පක්ෂ තුනක සහ 2022 ශ්‍රී ලංකාවේ මහජනයන්ගේ ජනතා අරගලයේදී මතු වූ වාම හඳුනාගැනීමේ ක්‍රියාකාරීන් පිරිසකගේ සන්ධානයකි. ශ්‍රී ලංකාවේ ජනතාවට දැඩි ලෙස බලපාන සමාජ, ආර්ථික, දේශපාලනික සහ භූ දේශපාලනික ගැටලු විසඳීමට අසමත් වූ හෝ ප්‍රතික්ෂේප කළ ප්‍රධාන ධාරාවේ දේශපාලන පක්ෂ සහ දේශපාලනඥයන් කෙරෙහි ඇති අපගේ කලකිරීම නිසා මෙම සන්ධානය පිහිටුවීමට අපි තීරණය කළෙමු. මේ සඳහා විවිධ හේතු ඇති බව අපි විශ්වාස කරමු, ඒවා අතර ප්‍රධාන වන්නේ දේශීය සහ ගෝලීය ආයතනික ප්‍රභූන්ගේ අවශ්‍යතා සඳහා දේශපාලන ප්‍රභූන් විසින් ක්‍රියාත්මක කරන දේශපාලන පද්ධතියක් සහ සංස්කෘතියකි. ජනතාව දුප්පත් කරන, මර්ධනය කරන, නිහඬ කරන දේශපාලනයක් මේකේ ප්‍රතිඵලයක් වෙලා තියෙනවා. PSA ප්‍රතිපත්ති මත පදනම් වූ ප්‍රවේශයක් සහ මිනිසුන්ට මුල් තැන දෙමින් වෙනස් ලෙස දේශපාලනය කිරීමට අධිෂ්ඨාන කරයි. ඒ අනුව, අපි අපගේ ප්‍රතිපත්ති ප්‍රකාශයේ වැඩසටහන් දෙකක් නිකුත් කර ඇත - එකක්, සමාජවාදී මූලධර්ම මත පදනම් වූ දිගුකාලීන වැඩසටහනක් සහ අනෙක, ජනතාව මුහුණ දෙන අඛණ්ඩ දුක්ගැනවිලි සඳහා ස්ථිර විසඳුම් ලබා දීමේ සංක්‍රාන්ති වැඩසටහනක්. සාරාංශයක් ලෙස අපගේ ප්‍රධාන යෝජනා කිහිපයක් පහත දැක්වේ.
                    </p>
                </div>
                </div>
            </div>
        </div>
        <!-- //Section Title -->
        <div class="container">
            <div class="row ">

                <div class="col-lg-12">
                    <div class="about-content-ab">
                        <h2>1. Exit IMF</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            PSA විසින් ජනතාව විසින් තීරණය කරනු ලබන ජනතාව සඳහා ආර්ථිකයක් යෝජනා කරයි. IMF වැඩසටහනේ ප්‍රතිඵලයක් ලෙස, අනෙකුත් දේවල් අතර, ආර්ථිකය තවදුරටත් හැකිලීමක් තුල, මන්දපෝෂණය සහ දරිද්‍රතා මට්ටම් ඉහල යාම සහ රෝහල්වල මරණ ඉහල යාමයි. එය බොහෝ දේ නෙරපා හරිමින් සුළු පිරිසකගේ අවශ්‍යතා සඳහා අපගේ ආර්ථික ව්‍යුහයන් ප්‍රජාතන්ත්‍ර විරෝධී හා වගකීම් විරහිත ලෙස වෙනස් කිරීමට හේතු වී තිබේ. ජාත්‍යන්තර මූල්‍ය අරමුදලේ වැඩපිළිවෙලෙන් ඉවත්වීම, ආර්ථික ස්වෛරීභාවය ප්‍රතිෂ්ඨාපනය කිරීම සහ දැන් අප දකින සමාජ පරිහානිය වැළැක්වීම සහ ආපසු හැරවීම සඳහා සැලැස්මක් අපි සවිස්තරාත්මකව යෝජනා කරමු.
                        </p>
                        <h2>2. ජාතික ප්‍රශ්නය විසඳීම</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            නිදහසින් පසු ශ්‍රී ලංකාවේ වැඩකරන ජනතාව බෙදීමට සහ පාලනය කිරීමට ජාතිවාදය භාවිතා කර ඇත. තිස් වසරක දීර්ඝ සිවිල් යුද්ධයකින් කුරිරු ජන සංහාරයකින් අවසන් වූ පරිදි ජාතිවාදයේ වසංගතය සිතාගත නොහැකි ප්‍රචණ්ඩත්වයට සහ දුක් වේදනාවලට තුඩු දී තිබේ. බෙදුම්වාදී සහ ශුන්‍ය එකතුව වර්ග පදනම් කරගත් දේශපාලනයේ අවහිරතා බිඳ දැමීම සඳහා, බලය මධ්‍යගත වීමෙන් බිඳී යන ස්වයං පාලන බලතල සහිත කලාප පද්ධතියක් අපි යෝජනා කරමු, එහිදී මිනිසුන්ට ඔවුන්ගේ වාර්ගිකත්වය නොසලකා ඔවුන්ගේ ආර්ථිකය, පරිසරය සහ දේශපාලන නායකත්වය පාලනය කළ හැකිය.
                        </p>
                        <h2>3. අනාගතය වෙනුවෙන් පරිසරය සුරකිමු</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            අද අප දකින වේගවත් පාරිසරික පරිහානියට හේතු වී ඇති අතිරික්තය නිස්සාරණය කිරීමේ ධනේශ්වර ආකෘතියෙන් බිඳී යන තිරසාර සංවර්ධන ආකෘතියක් PSA යෝජනා කරයි. අනාගතය සඳහා පරිසරය, අපේ වනාන්තර, අපේ මුහුද සහ අපේ ඉඩම් තිරසාර කිරීම සංවර්ධනය පිළිබඳ අදහසෙහි කේන්ද්‍රීය වන සංවර්ධන ආකෘතියක් අපි යෝජනා කර ඇත.
                        </p>
                        <h2>4. විධායක ජනාධිපති ක්‍රමය අහෝසි කිරීම, මහජන සභා ස්ථාපිත කිරීම සහ නැවත කැඳවීමේ අයිතිය හඳුන්වා දීම</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            විධායක ජනාධිපති ක්‍රමය විසින් ඒකාධිපතිවාදය, මර්දනය සහ ප්‍රජාතන්ත්‍ර විරෝධී පාලනය රජ කරන දේශපාලන ක්‍රමයක් සහ සංස්කෘතියක් නිර්මාණය කර ඇත. එය අහෝසි කිරීම 2022 ජනතා අරගලයේ ප්‍රධාන ඉල්ලීමක් වූ අතර, මහජන සභා ද සහභාගීත්ව ප්‍රජාතන්ත්‍රවාදයේ ජනතා කේන්ද්‍රීය යාන්ත්‍රණයන් ලෙස මතු විය. තම මැතිවරණ වරම උල්ලංඝනය කරන තේරී පත් වූ නිලධාරීන් නැවත කැඳවීමේ අයිතිය ද ජනතා අරගලයේ ප්‍රධාන ඉල්ලීමක් විය. මෙම ඉල්ලීම්වලට සහ ජන අරගලයේ ප්‍රතිඵලවලට ගරු කිරීමටත්, ජනතාවට සැබෑ ප්‍රජාතන්ත්‍රවාදී පාලන ක්‍රමයක් ලබාදීමටත් අපි යෝජනා කරමු.                       </p>
                        <h2>5. පීඩාකාරී සහ ප්‍රජාතන්ත්‍ර විරෝධී නීති අහෝසි කරන්න</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            ත්‍රස්තවාදය වැළැක්වීමේ පනත (PTA), මාර්ගගත ආරක්ෂක පනත (OSA), ආර්ථික පරිවර්තන පනත (ETA) සහ දණ්ඩ නීති සංග්‍රහයේ 365/365A වගන්ති වැනි. ශ්‍රී ලංකාවේ නීති පොත්වල මිනිසුන්ගේ සිවිල් අයිතිවාසිකම් උල්ලංඝනය කරන, සමස්ත ප්‍රජාවන් අපරාධ කරන සහ ප්‍රජාතන්ත්‍ර විරෝධී නීති රාශියක් අඩංගු වේ. බොහෝ ආණ්ඩු ඓතිහාසිකව සිදු කර ඇති පරිදි සහ දැන් බොහෝ පාර්ශවයන් යෝජනා කර ඇති පරිදි මෙම නීති සංශෝධනය කිරීම වෙනුවට මෙම නීති සම්පූර්ණයෙන්ම අහෝසි කිරීමට අපි යෝජනා කරමු.                        </p>
                        <h2>6. එක ආගමකට, එක ජාතියකට, එක භාෂාවකට ප්‍රමුඛතාවයකින් තොරව සැමව එක හා සමානව සලකන රාජ්‍යයක්</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            ආගමක් ඇදහීමට හෝ නොඇදහිලි කිරීමට මිනිසුන්ට ඇති අයිතිය වෙනුවෙන් පෙනී සිටියත් දේශපාලනයේ ආගමට තැනක් නැත. තවද, අපි සියලු ජාතීන්, භාෂා සහ ආගම් සඳහා සමානාත්මතාවය විශ්වාස කරන අතර එබැවින් ආණ්ඩුක්‍රම ව්‍යවස්ථාවේ කිසිදු ජාතියකට හෝ ආගමකට ප්‍රමුඛ ස්ථානයක් ලබා නොදී සියලු ආගම් සහ ජාතීන්ට සමානව සලකන්නෙමු. අපි ශ්‍රී ලංකාවේ නිල භාෂා ලෙස සිංහල, දෙමළ සහ ඉංග්‍රීසි පිළිගන්නා අතර භාෂා තුනෙන්ම අධ්‍යාපනය සහ රාජ්‍ය සේවාවන් වෙත ප්‍රවේශ වීමට මිනිසුන්ට හැකි වේ.                        </p>
                        <h2>7. උපයන ධනය වැඩකරන ජනතාව අතට පත් කරන ශ්‍රී ලංකාවක් සහ ආහාර, සෞඛ්‍ය, අධ්‍යාපනය සහ නිවාස සඳහා ජනතාවගේ මූලික අයිතිවාසිකම් සුරක්ෂිත කරන සමාජයක් ගොඩනැඟිම.</h2>


                        
<h5>ප්‍රභූ පන්තියක් සඳහා නොවන ශ්‍රී ලංකාවක් ගැන ඔබ විශ්වාස කරන්නේ නම්, ජාති, ස්ත්‍රී පුරුෂ භාවය, ආගම්, කුලය සහ ස්ත්‍රී පුරුෂ භේදයකින් තොරව සියලු මිනිසුන්ට එක හා සමානව ජීවත් වීමට නිදහස ඇති ශ්‍රී ලංකාවක් ගැන ඔබ විශ්වාස කරන්නේ නම්, අපගේ දේශපාලන පණිවිඩය සහ සහයෝගය බෙදා හැරීමට අප සමග අරගලයට සහය වන්න</h5>



                    </div>
                </div>
            </div>
        </div>
        <div class="blog-content-footer"></div>
        


    </section>
   

    <!-- ====== Partners ====== -->
    <section id="about-partners" class="section-padding">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2> එකතුවෙන්න.සහය දෙන්න.</h2>
                        <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                    <div class="about-content-ab">
                        <div class="row justify-content-center">
                            
                        <h4> Like/Follow &amp; Share our Page on Facebook: </h4>
                        <a href="https://www.facebook.com/peoplesstrugglealliance?mibextid=ZbWKwL" target="_blank" >People&#39;s Struggle Alliance - ජන අරගල සන්ධානය - மக்கள் போராட்ட முன்னணி</a>
                          <br>
                          <br>  
                        <h4> Visit our youtube channel: </h4>
                        <a href="https://www.youtube.com/@peoplesstrugglealliance" target="_blank" >PSA Lanka (People’s Struggle Alliance)</a>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="section-title text-start text-lg-center">
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 justify-content-start text-start">
                            <h5>  වැඩි විස්තර සදහා: <a href="mailto:psalliancelk@gmail.com">psalliancelk@gmail.com</a></h5>
                        <h6>ගිණුම් තොරතුරු පහතින්:</h6>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> බැංකුවේ නම: 014-200-150-015-070</p>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> ගිණුම් අංකය.: 014-200-150-015-070</p>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> ශාඛාව: යූනියන් පෙදෙස</p>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> ශාඛා අංකය: 7135-14</p>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> SWIFT කේතය: PSBLKLX</p>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>

        </div>
    </section>
    <!-- ====== // Partners ====== -->


    <?php include "footer.php" ?>
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