<?php
include "../admin/dist/config/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <title>People’s Struggle Alliance - Home</title>

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

<body data-spy="scroll" data-target=".navbar-nav" id="sin" >
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
                        <a class="nav-link active" aria-current="page" href="index.php" id="home-page">HOME</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php" id="about-page">ABOUT US</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news.php" id="news-page">NEWS</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php" id="gallery-page">GALLERY</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="officialdocuments.php" id="policies-page">OFFICIAL DOCUMENTS</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="qa-page">Q & A</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="supportus.php">SUPPORT US</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                </ul>
            </div>
            <ul class="list-group list-group-horizontal bg-danger">
                <li class="list-group-item bg-danger"><a  class="" href="../index.php" >English</a></li>
                <li class="list-group-item bg-danger"><a  class="" href="../sin/index.php">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a  class="active" href="" >தமிழ்</a></li>
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


<!-- HTML !-->


    </nav>
<!-- End Navbar -->
<?php
$nrs = Database::search("SELECT * FROM `notice` ");
$notice = $nrs->fetch_assoc();
if (empty($notice['path'])){
    ?>
<div class="container-fluid notify d-none" id="notify" >
    <?php
    
}else{
    ?>
    <div class="container-fluid notify" id="notify" >
        <?php  
}
?>

    <div class="d-flex row justify-content-center algin items center">
        <div class="col-md-12">
            <div class="notify-card card text-center">
                <div class="row d-flex text-end"><a class="notify-close" id="notify-close"><i class="fa-solid fa-circle-xmark" ></i></a></div>
                <a href="<?php echo($notice['url']) ?>"><img src="../admin/<?php echo($notice['path']) ?>" class="card-img-top" alt="..."></a>
                <div class="card-body d-none">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
</div>
    <!-- Navbar -->
    <!-- Navbar -->
    <!-- ====== // Header ====== -->
    
    <!-- ====== Hero Area ====== -->
    

    <!-- // Hero Area Content -->
    
    <!-- Hero Area Slider -->
    <div class="hero-area-slids owl-carousel ">
    <?php
            $ns = Database::search("SELECT * FROM `news` WHERE `status_id` = '2' ORDER BY `status_id` = 2 DESC, `date` DESC ");
            $numNs = $ns->num_rows;

            for($y = 0; $y < $numNs; $y++ ){
                $newc = $ns->fetch_assoc();
           
        ?>
        <div class="single-slider">
            <!-- Single Background -->
            <div class="slider-bg" style="background-image: url('../admin/<?php echo($newc['main-img']) ?>')">
                <div class="hero-aria" id="home">
                    <!-- Hero Area Content -->
                    <div class="container ">
                        <div class="hero-content  h-100">
                            <div class="d-table ">
                                <div class="d-table-cell ">
                                    <h2 class="text-uppercase truncate"><?php echo($newc['header_ta']) ?></h2>
                                    <p class=" text-white truncate1 ">
                                    <?php echo($newc['content_ta']) ?>
                                    </p>
    
                                    <a href="single-news.php?n=<?php echo ($newc['id']) ?>" class="btn btn-danger mt-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single Background -->
        </div>
        <?php } ?>
        
    </div>
    <!-- // Hero Area Slider -->
    </div>
    <!-- ====== //Hero Area ====== -->

    <!-- ====== Featured Area ====== -->

    <!-- ====== //Featured Area ====== -->

    <!-- ====== About Area ====== -->
    <section id="about" class="section-padding about-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2><img src="../assets/media/flaticon icons/umbrella (2).png" class="umbIcon" width="32px" alt=""> நாம் யார் <img src="../assets/media/flaticon icons/umbrella (2).png" class="umbIcon" width="32px" alt=""></h2>
                        <p>
                        மக்கள் போராட்ட முன்னணி என்பது Galle Face ஆர்ப்பாட்டத்துக்கு மற்றும் அதற்கு முன்பு நடைபெற்ற போராட்டங்களுக்கும் மக்கள் எழுச்சிகளுக்கும் தொடர்புடைய இலங்கையின் செயற்பாட்டாளர்கள், தொழில்முறைநபர்கள், கலைஞர்கள் மற்றும் இடதுசாரி கட்சிகள் சில இணைந்து உருவாக்கப்பட்ட மக்கள் கூட்டணியாகும்
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
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
                    <div class="about-content">
                    <h2>இந்த <span>PSA </span>யின் நோக்கம் என்ன?</h2>

                        <p>
                        சோசலிச சமூகத்தை கட்டியெழுப்புவதன் ஊடாக இலங்கையின் தற்போதைய சமூக அரசியல் பொருளாதார அமைப்புகளை மாற்றியமைப்பதே மக்கள் போராட்டக் கூட்டணியின் நோக்கமாகும். பெரும்பான்மையான மக்களைப் பாதிக்கும் பிரச்சினைகளைத் தீர்ப்பது, நீண்டகால தேசியப் பிரச்சினைகளைத் தீர்ப்பது, IMF போன்ற வெளிப்புற தாக்கங்களை எதிர்ப்பது மற்றும் இந்தியா மற்றும் அமெரிக்கா போன்ற நாடுகளில் தேவையற்ற வெளிநாட்டுத் தலையீடுகளை எதிர்ப்பதை நாங்கள் நோக்கமாகக் கொண்டுள்ளோம். பெரும்பான்மையினர் எதிர்கொள்ளும் பிரச்சினைகளுக்கு தீர்வு காணவும், அரச கட்டமைப்பு, பொருளாதாரம் மற்றும் சமூக அரசியல் அமைப்பை மாற்றவும் மக்கள் சக்தியை கட்டியெழுப்புவதே எமது நோக்கமாகும். எனவே, முழு அமைப்பையும் மாற்றும் ஒரு சோசலிச சமுதாயத்தை கட்டியெழுப்ப ஒரு விரிவான வேலைத்திட்டத்தை நாங்கள் முன்மொழிகிறோம்.
                        </p>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // About Area ====== -->



    <!-- ====== Service Section ====== -->
    <section id="service" class="section-padding pb-70 service-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h4><img src="../assets/media/flaticon icons/umbrella (2).png" class="umbIcon" width="32px" alt=""> Why Choose Us <img src="../assets/media/flaticon icons/umbrella (2).png" class="umbIcon" width="32px" alt=""></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service tam-serivce">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/hard-work.png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h4>மக்கள் போராட்டத்தின் அபிலாஷைகளை பிரதிநிதித்துவப்படுத்துதல்                        </h4>
                        <br>
                        <p class="lang" key="justice">
                        மக்கள் போராட்ட முன்னணியில் உள்ள அனைத்து அரசியல் கட்சிகளும், செயற்பாட்டாளர்களும் கடந்த காலங்களில் மக்கள் அதிகாரத்தைக் கட்டியெழுப்பும் நோக்கில் போராட்ட நடவடிக்கைகளில் ஈடுபட்டுள்ளனர். தேர்தல் நடவடிக்கைகளில் கூட, நாங்கள் மக்களின் கோரிக்கைகளை பிரதிநிதித்துவப்படுத்தி, அவற்றை வென்றெடுக்க ஒரு மக்கள் அதிகாரத்தை உருவாக்குகிறோம். அதேபோன்று, கடந்த காலிமுகத்திடல் போராட்டம் உள்ளிட்ட போராட்ட நடவடிக்கைகளின் போது உருவான முன்மொழிவுகள் மற்றும் திட்டங்களை செயல்படுத்துவதற்காக நாங்கள் முன் நிற்கிறோம்.
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service tam-serivce">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/exit.png" alt="" height="100px" width="100px">
                        </div>
                        <h4> Exit IMF வேலைத்திட்டம்
                        </h4>
                        <br>
                        <p>
                        பொருளாதார நெருக்கடியைத் தீர்ப்பது என்ற போர்வையில் நம்மை இன்னொரு கடன் பொறிக்குள் இழுப்பது மட்டுமல்ல, நமது நாட்டின் பொருளாதார, அரசியல் சுயாதீனத்தை பாதிக்கும் IMF திட்டத்தை ஏற்றுக்கொள்வதுதான் மற்றைய பெரும்பான்மை வேட்பாளர்களின் பொருளாதார வேலைத்திட்டம். ஆனால் இந்த IMF மரணப் பொறியிலிருந்து வெளியேறி, மக்கள் சார்ந்த திட்டத்தின் மூலம் நெருக்கடிக்குத் தீர்வு காணும் வேலைத்திட்டத்தை நாங்கள் முன்மொழிகிறோம்.
</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service tam-serivce">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/protest.png" alt="" height="100px" width="100px">
                        </div>
                        <h4>இந்திய-அமெரிக்க தலையீட்டிற்கு எதிரான திட்டத்தை நாங்கள் முன்மொழிகிறோம்
                        </h4>
                        <br>
                        <p>
                        தற்போது அமெரிக்கா, இந்தியா, சீனா போன்ற நாடுகள் உலக நாடுகளை கைப்பற்றி உலகின் பொருளாதார வல்லரசாக மாற திட்டங்களை வகுத்து வருகின்றன. இந்நாடுகளின் வேலைத்திட்டத்தின் கைப்பாவைகளாக எமது நாட்டின் ஆட்சியாளர்கள் மாறிவிட்டனர். அத்துடன் இத்திட்டத்தை நிராகரிப்பதற்குப் பதிலாக அதிகாரத்தைக் கோருபவர்கள் அதற்கு அடிபணியும் நிலையும் உள்ளது. ஆனால் இந்த நிர்ப்பந்தமான தலையீட்டிற்கு எதிராக உலகெங்கிலும் உள்ள ஒடுக்கப்பட்டவர்கள் ஒன்று கூடி போராட்டம் நடத்தும் திட்டத்தை நாங்கள் முன்மொழிகிறோம்.
</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service tam-serivce">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/cooperation (3).png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h4>தேசிய பிரச்சனைக்கு உண்மையான தீர்வு
                        </h4>
                        <br>
                        <p>
                        வட-கிழக்கில் பல தசாப்தகால யுத்தம் முடிவுக்கு வந்தாலும் இன்னும் ஒரு தசாப்த காலமாக வடக்கு மக்களின் பிரச்சினைகளை தீர்க்க முன்னைய எந்த நிர்வாகமும் முன்வரவில்லை. அரசியல் நலன்களுக்காக வடக்கின் பிரச்சினைகள் வெட்கக்கேடான வகையில் புறக்கணிக்கப்படுவதுதான் எப்போதும் நடந்தது. எனவே, தேசிய இனப் பிரச்சினைக்காக, வடக்கு - கிழக்கு மக்களுக்கும் தெற்கு மக்களுக்கும், அதிகாரப் பரவலாக்கம் உள்ள தன்னாட்சிப் பிரதேசங்களை ஏற்படுத்துவதோடு அவற்றுடன் தொடர்புடைய இருசபைக் கட்டமைப்புடன் மக்கள் அதிகாரத்தை மக்கள் சபைகள் ஏற்றுக்கொள்ளும் வரலாற்றுத் தீர்மானத்தை முன்வைத்திருக்கிறோம்.</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service tam-serivce">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/social-justice (1).png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h4>மக்கள் அதிகாரத்தை உறுதி செய்யும் புதிய அரசியலமைப்பு</h4>
                        <br>
                        <p>
                        உண்மையில் மக்கள் இறைமை என்ற போர்வையில் தற்போதைய அரசியலமைப்பின் ஊடாக மக்கள் அதிகாரம் ஒதுக்கிவைக்கப்பட்டுள்ளது. நிறைவேற்று அதிகாரம் கொண்ட ஜனாதிபதி முறை இருக்கும் போது நாம் நியமிக்கும் பிரதிநிதிகளை மீள அழைக்கும் அதிகாரம் மக்களுக்கு இல்லை. இது இனவாதத்தையும் மதவெறியையும் ஊக்குவிக்கும் அரசியலமைப்பாகும். எனவே, நிறைவேற்று அதிகாரம் கொண்ட ஜனாதிபதி முறைமையை ஒழித்து, தீர்மானங்களை எடுக்கும் அதிகாரத்தை மக்களுக்கு வழங்கும், அரசியலமைப்பு ரீதியாக மக்களின் உரிமைகளை உறுதிப்படுத்தும் புதிய அரசியலமைப்பை உருவாக்கும் திட்டத்தை முன்வைக்கிறோம்.</p>
                    </div>
                </div>
                <!-- //Single Service -->
                 <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service tam-serivce">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/system.png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h4>முறைமை மாற்றம்</h4>
                        <br>
                        <p>
                        கடந்த கோவிட் பெருந்தொற்று மற்றும் பொருளாதார நெருக்கடியின் போது, பெரிய அளவிலான கம்பனிகள் இலாப மலைகளைக் குவித்தபோது, இந்த நாட்டின் சாதாரண மக்கள் கடுமையான இழப்புக்களை எதிர்கொண்டனர். இன்றும் இந்நாட்டுப் பொது மக்கள் மலையளவு கடன் சுமையை சுமக்கிறார்கள். ஒட்டுமொத்த சமூகமும் கடுமையான ஏற்றத்தாழ்வில் சிக்கித் தவிக்கிறது; சுயநலன்களால் உந்தப்படும் நிலைக்கு செல்கிறது. எனவே, இந்த இழிந்த முதலாளித்துவத்திற்கு பதிலாக, ஒரு சோசலிச சமூக அமைப்பை உருவாக்கும் திட்டத்தை நாங்கள் முன்மொழிகிறோம்.
                        </p>
                        </div>
                </div>
                <!-- //Single Service -->
            </div>
        </div>
    </section>
    <!-- ====== //Service Section ====== -->



   

   



    <!-- ====== Contact Area ====== -->
    <section id="contact" class="section-padding contact-section bg-secondary">
        <div class="container ">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2><img src="../assets/media/flaticon icons/umbrella (2).png" class="umbIcon" width="32px" alt=""> எங்களை தொடர்பு <img src="../assets/media/flaticon icons/umbrella (2).png" class="umbIcon" width="32px" alt=""></h2>
                        <p>கேள்விகளைக் கேளுங்கள், வாதிடுங்கள் மற்றும் பதில்களைப் பெறுங்கள்.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <!-- Form -->
                    <form class="row g-2">
                        <div class="col-md-6">
                          <label for="inputName" class="form-label">பெயர்</label>
                          <input type="email" class="form-control" id="inputName">
                        </div>
                        <div class="col-md-6">
                          <label for="inputEmail" class="form-label">மின்னஞ்சல் முகவரி</label>
                          <input type="password" class="form-control" id="inputEmail">
                        </div>
                        <div class="col-12">
                          <label for="inputSubject" class="form-label">கேள்விகளின் வகை</label>
                          <input type="text" class="form-control" id="inputSubject" >
                        </div>
                        
                        <div class="col-12">
                            <label for="inputMessage" class="form-label">கேள்வி</label>
                            <textarea type="text" class="form-control" id="inputMessage" rows="10" ></textarea>
                          </div>
                          
                        
                        <div class="col-12 d-flex justify-content-center align-items-center">
                          <button type="submit" class=" col-6 btn btn-warning">சமர்ப்பிக்</button>
                        </div>
                      </form>
                    <!-- // Form -->
                </div>
            </div>
            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== -->

    <?php include "footer.php"?>
    <!-- ====== ALL JS ====== -->

    <script>
        const truncateElements = document.querySelectorAll('.truncate');
    
    truncateElements.forEach((element) => {
      const text = element.textContent;
      const words = text.split(' ');
      const maxWords = 6; // Change this to the number of words you want to display

      if (words.length > maxWords) {
        const truncatedText = words.slice(0, maxWords).join(' ') + '...';
        element.textContent = truncatedText;
      }
    });
        
            </script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/lightbox.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.mixitup.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/typed.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="../assets/js/main.js"></script>

    <script src="https://kit.fontawesome.com/495854b60c.js" crossorigin="anonymous"></script>
  
</body>

</html>