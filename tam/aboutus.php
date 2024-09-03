<?php require "../admin/dist/config/connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <title>People’s Struggle Alliance - About Us</title>

    <!-- ====== Google Fonts ====== -->
    <link rel="shortcut icon" href="../assets/media/icons/PSA logo.png" type="image/x-icon">
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
                        <a class="nav-link" href="officialdocuments.php">OFFICIAL DOCUMENTS</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Q & A</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="supportus.php">SUPPORT US</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                </ul>
            </div>
            <ul class="list-group list-group-horizontal bg-danger">
                <li class="list-group-item bg-danger"><a href="../aboutus.php">English</a></li>
                <li class="list-group-item bg-danger"><a href="../sin/aboutus.php">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a class="active" href="">தமிழ்</a></li>
            </ul>
        </div>
        <a class="cssbuttons-io-button text-decoration-none" href="https://wa.me/94716487812" > 
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
                    <h5 class="text-white"><img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""> மக்கள் போராட்ட முன்னணி <img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""></h5>
                    <h2>நாம் யார்</h2>
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
                        <h1><img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon d-none d-md-inline d-lg-inline" width="42px" alt=""> மக்கள் <span style="color: #ffc900;">போராட்ட</span> முன்னணி <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon d-none d-md-inline d-lg-inline" width="42px" alt=""></h1>
                        <h4>மக்கள் போராட்ட முன்னணி(PSA) யார்?</h4>
                        <p>
                        மக்கள் போராட்ட முன்னணி என்பது Galle Face ஆர்ப்பாட்டத்துக்கு மற்றும் அதற்கு முன்பு நடைபெற்ற போராட்டங்களுக்கும் மக்கள் எழுச்சிகளுக்கும் தொடர்புடைய இலங்கையின் செயற்பாட்டாளர்கள், தொழில்முறைநபர்கள், கலைஞர்கள் மற்றும் இடதுசாரி கட்சிகள் சில இணைந்து உருவாக்கப்பட்ட மக்கள் கூட்டணியாகும்
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
                        <?php 
                     $abrs = Database::search("SELECT * FROM `about_img` ORDER BY `date` ASC");
                     $abnum = $abrs->num_rows;
                     if($abnum == 0){
                        ?>
                       <div class="swiper-slide "><img src="../assets/media/web-img/psa english.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../assets/media/web-img/psa sinhala.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="../assets/media/web-img/psa tamil.jpg" alt=""></div>
                    <?php
                    }
                     for ($i = 0; $i < $abnum; $i++) {
                       $ab = $abrs->fetch_assoc();
                    ?>
                            <div class="swiper-slide "><img src="../admin/<?php echo($ab['path']) ?>" alt=""></div>
                            <?php
                     }
                            ?>
                            
                        </div>

                    </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-ab">
                    <h2><span>PSA </span>என்றால் என்ன?</h2>
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                    மக்கள் போராட்ட முன்னணியானது, முன்னிலை சோஷலிஸக் கட்சி, புதிய ஜனநாயக மாக்சிச-லெனினிசக் கட்சி, சோசலிச மக்கள் மன்றம் ஆகிய கட்சிகளுடன் கடந்த காலிமுகத்திடல் போராட்டம் மற்றும் முந்தைய போராட்டங்கள் மற்றும் பொது எழுச்சிகளில் ஈடுபட்ட ஆர்வலர்கள், தொழில் வல்லுநர்கள் மற்றும் கலைஞர்களின் பரந்த குழுவால் பிரதிநிதித்துவப்படுத்தப்படுகிறது.
                    </p>
                    
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                    இந்த கூட்டணி, வரவிருக்கும் தேர்தல் செயற்பாட்டில், கடந்த கால போராட்டங்களின் மக்களின் விருப்பத்தை பிரதிநிதித்துவப்படுத்தும், முழு நாட்டையும் கடுமையான நெருக்கடிக்கு இழுக்கும் IMF மரண பொறியை விட்டு வெளியேற அறிவுறுத்தும், இந்திய அமெரிக்க எதேச்சாதிகார தலையீடுகளுக்கு எதிரான திட்டத்தை முன்மொழியும் இடதுசாரிக் கூட்டணியாக உருவாக்கப்பட்டுள்ளது.
                    </p>
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                    அதன்படி நாங்கள் முன்வைக்கும் கொள்கை 'மக்கள் கொள்கை'. <br>
                     இந்த நாட்டில் பாதிக்கப்பட்டுள்ள பெரும்பான்மையான மக்கள் எதிர்கொள்ளும் பிரச்சினைகளுக்கு தீர்வு காண மக்கள் அதிகாரத்தைக் கட்டியெழுப்புவதன் ஊடாக அரச கட்டமைப்பையும் பொருளாதார மற்றும் சமூக அரசியல் கட்டமைப்பையும் மாற்றுவது தொடர்பான தீவிரமான வேலைத்திட்டத்தை நாங்கள் முன்மொழிகிறோம். 

                    </p>
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                    இந்த நாட்டில் பல வருடங்களாக முக்கியமான பிரச்சினையாக இருந்து வந்த தேசிய இனப் பிரச்சினைக்கு வடக்கு மக்களையும் தென்பகுதி மக்களையும் உள்ளடக்கிய தீர்வை முன்வைக்க எங்களால் முடிந்துள்ளது.
                    </p>
                    <p>
                    <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                    தற்போதைய சமூக-அரசியல் நெருக்கடி என்பது தனிப்பட்ட மக்களின் பிரச்சனைகளுக்கு அப்பால் முழு முதலாளித்துவ அமைப்பின் நெருக்கடியாகும். எனவே, இந்த முழு அமைப்பையும் மாற்றி ஒரு சோசலிச சமுதாயத்தை கட்டியெழுப்பும் வேலைத்திட்டத்தை நாங்கள் முன்மொழிகிறோம். அந்த சோசலிச வேலைத்திட்டத்தை அடிப்படையாகக் கொண்டு எமது நிலைமாறுகால வேலைத்திட்டம் தயாரிக்கப்பட்டுள்ளது.
                    </p>




                </div>
            </div>
        </div>
         </div>
        </div>
        <div class="blog-content-footer"></div>
        <div class="container">
            <div class="row ">
            <div class="col-lg-6">
                    <div class="about-content-ab">
                        <h2><span>போபேக்கு </span>ஏன் வாக்களிக்க வேண்டும்?</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            நுவன் சஞ்சீவ போபகே, மக்கள் போராட்ட முன்னணியால் (PSA) முன்னிறுத்தப்பட்ட ஜனாதிபதி வேட்பாளர் என்பதோடு அவர் அதன் செயற்குழு உறுப்பினர் ஆவார். கொழும்பில் உள்ள சட்டக் கல்லூரியில் சட்டத்தில் உயர் படிப்பைத் தொடர்ந்தோடு, அதைத் தொடர்ந்து கொழும்பு பல்கலைக்கழகத்தில் சட்டம் மற்றும் சர்வதேச உறவுகளில் முதுகலைப் பட்டம் பெற்றார். இவர் கொழும்பு டி.எஸ். சேனநாயக்க கல்லூரியின் பழைய மாணவர் ஆவார்.
                       </p>

                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            அவர் 2007 இல் சட்டத்தரணியாக சத்தியப்பிரமாணம் செய்துகொண்டார். அன்றிலிருந்து பொது நல வழக்குகளில் சிறப்பு கவனம் செலுத்தி சட்டத்தரணியாக பணியாற்றினார். நிலத்தடி நீரை மாசுபடுத்தும் சுன்னாகம் அனல் மின் நிலையத்திற்கு எதிராகவும், இலங்கை அரசாங்கத்தால் ICCPR சட்டத்தின் கீழ் தவறாகக் கைது செய்யப்பட்டு தடுத்து வைக்கப்பட்ட வலைப்பதிவாளர்/எழுத்தாளர் ரம்சி ரஸீக்கின் அடிப்படை உரிமை மனுவுக்காகவும் வாதாடினார்.
                        </p>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            2003 ஆம் ஆண்டு முதல் இடதுசாரி அரசியலில் தீவிரமாக ஈடுபட்டு வந்த அவர், மீதொட்டமுல்ல குப்பை மேட்டுக்கு எதிரான போராட்டம், 1000 ரூபாய் சம்பள இயக்கம் போன்ற பல மக்கள் போராட்டங்களில் பங்கேற்றவர். தோட்டத் தொழிலாளர்களுக்கு நாளாந்தம் 1000 சம்பளத்திற்கான போராட்டத்திலும் இணைந்தார்.

                        </p>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            அவர் மூன்று இளம் குழந்தைகளின் தந்தை, என்பதுடன் ஓய்வு நேரத்தில் கிட்டார் வாசிப்பதையும் பாடுவதையும் விரும்பும் ஒருவர்.
                        </p>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            நுவன் தனது இளமைக் கால வாழ்க்கையின் பெரும்பகுதியை சமத்துவம், நீதி மற்றும் ஒட்டுமொத்த அமைப்பு மாற்றத்திற்காகப் போராடுவதற்காக அர்ப்பணித்துள்ளார்.                        
                        </p>

                        <h5>
                            

                        போபகேவுக்கான வாக்கு என்பது மக்களின் வெற்றி!
                        </h5>


                    </div>
                    <div class="row text-center justify-content-center mb-5 mb-lg-0 ">
    <div class="col text-end ">

        <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon " width="64px" alt=""> 
    </div>
    <div class="col text-start">

        <i class="fa-solid fa-x" style="font-size: 60px;"></i>             
    </div>

</div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="about-bg" style="background-image: url(../assets/media/web-img/psa\ english.jpg)">
                       
                    </div> -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide "><img src="../assets/media/web-img/Bope Smiling.png" alt=""></div>

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
                        <h2><img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""> கூட்டாளர் அமைப்புகள் & அரசியல் கட்சிகள் <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""></h2>

                    </div>
                </div>
            </div>
            
            <div class="mx-5 row g-2 row-gap-0 text-end ">
                <div class="col-12 col-lg-4 col-md-6 ">

                    <p class="text-start"><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon m-2" width="18px" alt=""> முன்னிலை சோசலிசக் கட்சி</p>
                </div>
                <div class="col-12 col-lg-4 col-md-6 ">

                    <p class="text-start"><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon m-2" width="18px" alt=""> புதிய ஜனநாயக மாக்சிச-லெனினிசக் கட்சி</p>
                </div>
                <div class="col-12 col-lg-4 col-md-6 ">

                    <p class="text-start"><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon m-2" width="18px" alt=""> சோசலிச மக்கள் மன்றம் ஆகிய</p>
                </div>
              
            </div>
        </div>
    </section>
    <!-- ====== // Partners ====== -->



    <?php include "footer.php"?>

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