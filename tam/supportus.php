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
                    <li class="nav-item ">
                        <a class="nav-link " href="blog.php" id="blog-page">PEOPLES'S BLOG</a>
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
                <li class="list-group-item bg-danger"><a href="../sin/supportus.php">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a class="active" href="supportus.php">தமிழ்</a></li>
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
                    <h2>மக்கள் போராட்டத்திற்கு ஆதரவு அளியுங்கள்</h2>
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
                    <h1> மக்கள் <span style="color: #ffc900;">போராட்ட</span> முன்னணி <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""></h1>
                    <h4>மக்கள் போராட்டத்திற்கு உங்கள் ஆதரவு!</h4>
                        <p>
                        மக்கள் போராட்ட முன்னணி (PSA) என்பது முன்னிலை சோஷலிஸக் கட்சி, சோசலிச மக்கள் மன்றம் மற்றும் புதிய ஜனநாயக மார்க்சிச-லெனினிசக் கட்சி ஆகிய மூன்று இடதுசாரிக் கட்சிகள் மற்றும் இலங்கையில் 2022 ஆம் ஆண்டு வெகுசன மக்கள் போராட்டத்தின் (அரகலய/போராட்டம்) போது உருவான, இடதுசாரிகளாக அடையாளப்படுத்தும் செயற்பாட்டாளர்களின் ஒரு கூட்டமைப்பாகும்.
                        இலங்கையிலுள்ள மக்களை ஆழமாகப் பாதிக்கும் முக்கியமான சமூக, பொருளாதார, அரசியல் மற்றும் பூகோள அரசியல் பிரச்சினைகளுக்கு தீர்வுகாணத் தவறியதும் மறுத்ததுமான பிரதான அரசியல் கட்சிகள் மற்றும் அரசியல்வாதிகள் மீதான விரக்தியின் காரணமாக இந்த முன்னணியை உருவாக்கத் தீர்மானித்தோம். இதற்குப் பல காரணங்கள் இருப்பதாக நாங்கள் நம்புகிறோம், அவற்றில் முதன்மையானது, உள்ளூர் மற்றும் உலகளாவிய பெருநிறுவன (corporate) உயரடுக்கினரின் நலன்களுக்காக அரசியல் உயரடுக்கினரால் இயக்கப்படும் அரசியல் அமைப்பு மற்றும் கலாச்சாரம் ஆகும். இதன் மூலம் மக்களை வறுமையாக்கி, அடக்கி ஒடுக்கி மௌனமாக்கும் அரசியல் உருவாகியுள்ளது.
                        P.S.A அரசியலை வித்தியாசமாகச் செய்யத் தீர்மானித்திருக்கிறது, கொள்கைகளின் அடிப்படையில் ஒரு அணுகுமுறையை எடுத்து, மக்களை அது முதன்மைப்படுத்துகிறது. அதன்படி, எமது தேர்தல் அறிக்கையில் இரண்டு வேலைத்திட்டங்களை வெளியிட்டுள்ளோம் – ஒன்று, சோசலிசக் கொள்கைகளை அடிப்படையாகக் கொண்ட நீண்ட கால வேலைத்திட்டம், மற்றொன்று, மக்கள் எதிர்நோக்கும் தொடர்ச்சியான குறைகளுக்கு உறுதியான தீர்வுகளை வழங்குவதற்கான நிலைமாறுகாலத் திட்டம். சுருக்கமாக எங்களின் சில முக்கிய முன்மொழிவுகள் பின்வருமாறு:
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
                        <h2>1. IMF இலிருந்து வெளியேறுதல்</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            மக்களால் தீர்மானிக்கப்பட்ட மக்களுக்கான பொருளாதாரத்தை ம.போ.மு முன்மொழிகிறது. IMF திட்டத்தின் விளைவாக, பொருளாதாரம் மேலும் சுருங்குதல், ஊட்டச்சத்து குறைபாடு மற்றும் வறுமை நிலைகள் மற்றும் மருத்துவமனைகளில் இறப்புகள் அதிகரிப்பு உள்ளிட்ட பல பிரச்சினைகள் உருவாகியுள்ளன. பலரை உடைமை இழக்கச் செய்யும் அதே வேளையில் ஒரு சிலரின் நலன்களுக்காக, நமது பொருளாதாரக் கட்டமைப்புகள் ஜனநாயகமற்ற முறையிலும் பொறுப்பற்ற முறையிலும் மாற்றப்பட இது வழிவகுத்திருக்கிறது. IMF திட்டத்திலிருந்து வெளியேறவும், பொருளாதார இறையாண்மையை மீட்டெடுக்கவும், இப்போது நாம் காணும் சமூகச் சீரழிவைத் தடுக்கவும், மாற்றவும் ஒரு திட்டத்தை விரிவாக நாம் முன்மொழிகிறோம். 

                        </p>
                        <h2>2. தேசிய இனப் பிரச்சினையை தீர்த்தல்</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            சுதந்திரம் பெற்றதில் இருந்து, இலங்கையின் உழைக்கும் மக்களைப் பிரித்து ஆள்வதற்கு இனவாதம் பயன்படுத்தப்பட்டது. கோரமான இனப்படுகொலையில் முடிவடைந்த முப்பது ஆண்டுகால உள்நாட்டுப் போரால் கற்பனை செய்ய முடியாத வன்முறை மற்றும் துன்பங்களுக்கு இனவாதத்தின் கொள்ளை நோய் வழிவகுத்தது. பிளவுபடுத்துவதும் ஒரு சாராரிற்கு கிடைப்பது மறு சாராருக்கு இழப்பாக கருதப்படுவதுமான இன அடிப்படையிலான அரசியலின் முட்டுக்கட்டையை உடைக்க, அதிகாரத்தின் மையப்படுத்தலில் இருந்து விலகி, மக்கள் தங்கள் பொருளாதாரம், சுற்றுச்சூழல் மற்றும் அரசியல் தலைமை மீது கட்டுப்பாட்டைக் கொண்டிருக்கும் சுயாட்சி அதிகாரங்களைக் கொண்ட பிராந்தியங்களின் அமைப்பை நாங்கள் முன்மொழிகிறோம். 

                        </p>
                        <h2>3. எதிர்காலத்திற்காக சுற்றுச்சூழலைப் பாதுகாத்தல்</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            P.S.A ஆனது உபரியைப் பிரித்தெடுப்பதும் இன்று நாம் காணும் சுற்றுச்சூழல் சீரழிவை துரிதப்படுத்துவதுமான முதலாளித்துவ மாதிரியிலிருந்து பிரிந்து செல்கின்ற நிலையான அபிவிருத்தியின் மாதிரியை முன்மொழிகிறது. சுற்றுச்சூழலையும், நமது காடுகளையும், நமது கடல்களையும், நமது நிலங்களையும் எதிர்காலத்தில் நிலைநிறுத்துவது அபிவிருத்தியின் யோசனையின் மையமாக இருக்கும் ஒரு அபிவிருத்தி மாதிரியை நாங்கள் முன்மொழிந்துள்ளோம்.

                        </p>
                        <h2>4. நிறைவேற்று அதிகாரம் கொண்ட ஜனாதிபதி முறையை ஒழித்தல், மக்கள் சபைகளை நிறுவுதல் மற்றும் மீள அழைக்கும் உரிமையை அறிமுகம் செய்தல்</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            நிறைவேற்று அதிகாரம் கொண்ட ஜனாதிபதி முறையானது எதேச்சாதிகாரம், அடக்குமுறை மற்றும் ஜனநாயகமற்ற ஆளுகை ஆகியவை கையோங்கும் அரசியல் முறைமை மற்றும் கலாச்சாரத்தை உருவாக்கியுள்ளது. அதை ஒழிப்பது என்பது 2022 மக்கள் போராட்டத்தின் முக்கிய கோரிக்கையாக இருந்தது, அதன் போது மக்கள் பேரவைகளும் பங்கேற்பு ஜனநாயகத்தின் மக்களை மையப்படுத்திய வழிமுறைகளாக உருவெடுத்தன. தேர்தல் ஆணையை மீறும் தேர்ந்தெடுக்கப்பட்ட பிரதிநிதிகளை திரும்ப அழைக்கும் உரிமை, மக்களின் போராட்டத்தின் முக்கிய கோரிக்கையாகவும் இருந்தது. இந்த கோரிக்கைகள் மற்றும் மக்கள் போராட்டத்தின் விளைவுகளுக்கு மதிப்பளித்து, மக்களுக்கான உண்மையான ஜனநாயக ஆட்சி முறையை வழங்குவதற்கு நாங்கள் முன்மொழிகிறோம்.

                       </p>
                        <h2>5. அடக்குமுறை மற்றும் ஜனநாயக விரோத சட்டங்களை ரத்து செய்யுங்கள்</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            
பயங்கரவாதத் தடுப்புச் சட்டம் (PTA), நிகழ்நிலை பாதுகாப்புச் சட்டம் (OSA), பொருளாதார நிலைமாற்றச் சட்டம் (ETA) மற்றும் தண்டனைச் சட்டப் பிரிவுகள் 365/365A போன்ற அடக்குமுறை மற்றும் ஜனநாயக விரோதச் சட்டங்களை ரத்துச் செய்ய வேண்டும். இலங்கையின் சட்டப் புத்தகங்களில் மக்களின் சிவில் உரிமைகளை மீறுவதும், முழு சமூகங்களையும் குற்றவாளிகளாக்குவதும், ஜனநாயக விரோதமானதுமான பல சட்டங்கள் உள்ளன. வரலாற்று ரீதியாக பல அரசாங்கங்கள் செய்ததைப் போலவும், பல கட்சிகள் இப்போது முன்மொழிந்ததைப் போலவும் இந்த சட்டங்களை வெறுமனே திருத்துவதற்குப் பதிலாக, இந்த சட்டங்களை முற்றிலும் ஒழிக்க நாங்கள் முன்மொழிகிறோம்.                        </p>
                        <h2>6. எந்த ஒரு மதத்திற்கோ, இனத்திற்கோ அல்லது மொழியினருக்கோ முதன்மையான இடமில்லாத மதச்சார்பற்ற அரசு</h2>
                        <p>
                            <img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            ஒரு மதத்தை பின்பற்றும் அல்லது பின்பற்றாத மக்களின் உரிமைக்காக நாம் நிற்கும் அதே வேளையில், அரசியலில் மதத்திற்கு எந்த இடமும் இல்லை என்ற நிலைப்பாட்டில் இருக்கிறோம். மேலும், அனைத்து இனங்கள், மொழிகள் மற்றும் மதங்களுக்கான சமத்துவத்தில் நாங்கள் நம்பிக்கை கொண்டுள்ளோம், எனவே அரசியலமைப்பில் எந்த இனத்திற்கும் அல்லது மதத்திற்கும் முதன்மையான இடத்தை வழங்க மாட்டோம். இலங்கையின் உத்தியோகபூர்வ மொழிகளாக சிங்களம், தமிழ் மற்றும் ஆங்கிலம் ஆகிய மொழிகளை சமமாக அங்கீகரிப்பதோடு, மூன்று மொழிகளிலும் கல்வி மற்றும் அரச சேவைகளை மக்கள் பெறுவதற்கான கட்டமைப்பை உருவாக்குவோம்.
                            </p>
                        <h2>7. 
உழைக்கும் மக்களின் கைகளில் செல்வத்தை வைக்கும் இலங்கையையும், உணவு, சுகாதாரம், கல்வி மற்றும் வீட்டுவசதிக்கான மக்களின் அடிப்படை உரிமைகளைப் பாதுகாக்கும் ஒரு சமூகத்தையும் கட்டியெழுப்ப வேண்டும்.
</h2>
<h5>
உயரடுக்கினருக்காக இல்லாமல், இனம், பால், மதம், சாதி மற்றும் பாலின வேறுபாடின்றி அனைத்து மக்களும் சமமாக வாழக்கூடிய மற்றும் உயர்ந்த வாழ்க்கைத் தரத்தை அனுபவிக்கும் சுதந்திரம் கொண்ட ஒரு இலங்கையை நீங்கள் நம்பினால், எங்கள் அரசியல் செய்தியை பரப்ப எங்களுக்கு ஆதரவளியுங்கள், எங்கள் பிரச்சாரத்தை ஆதரியுங்கள். </h5>

                        




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
                        <h2> எங்களைப் பின்தொடருங்கள். எங்களை ஆதரியுங்கள்.</h2>
                        <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                    <div class="about-content-ab">
                        <div class="row justify-content-center">
                        <h4> Facebook இல் எங்கள் பக்கத்தை பின்தொடர்வதோடு பக்கத்தை பகிருங்கள்:  </h4>
                        <a href="">People&#39;s Struggle Alliance - ජන අරගල සන්ධානය - மக்கள் போராட்ட முன்னணி</a>
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
                            <h5> 
                            மேலும் தகவலுக்கு எங்களைத் தொடர்பு கொள்ளவும்: <a href="mailto:psalliancelk@gmail.com">psalliancelk@gmail.com</a></h5>
                        <h6>வங்கி விவரங்கள் கீழே:</h6>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> வங்கியின் பெயர்: மக்கள் வங்கி (People’s Bank)</p>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> கணக்கு எண்: 014-200-150-015-070</p>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> கிளை: யூனியன் பிளேஸ்</p>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> கிளை எண்: 7135-14</p>
                        <p><img src="../assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> SWIFT குறியீடு: PSBLKLX</p>
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