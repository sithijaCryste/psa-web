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
                    <li class="nav-item ">
                        <a class="nav-link " href="blog.php" id="blog-page">PEOPLES'S BLOG</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php" id="gallery-page">GALLERY</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="policies-page">OFFICIAL DOCUMENTS</a>
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
                <li class="list-group-item bg-danger"><a  class="active" href="">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a  class="" href="../tam/index.php" >தமிழ்</a></li>
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
            <div class="slider-bg" style="background-image: url(../admin/<?php echo($newc['main-img']) ?>)">
                <div class="hero-aria" id="home">
                    <!-- Hero Area Content -->
                    <div class="container ">
                        <div class="hero-content  h-100">
                            <div class="d-table ">
                                <div class="d-table-cell ">
                                    <h2 class="fs-1 truncate  "><?php echo($newc['header_sin']) ?></h2>
                                    <p class=" text-white truncate1 mt-2">
                                    <?php echo($newc['content_sin']) ?>
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
                        <h2><img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""> අපි කවුද? <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""></h2>
                        <p>
                        ජන අරගල සන්ධානය යනු ගාලුමුවදොර අරගලයට සහ පෙර පැවති අරගල සහ ජනතා නැගිටීම්වලට සම්බන්ධ වූ ශ්‍රී ලංකාවේ ක්‍රියාකාරීන්, වෘත්තිකයන්, කලාකරුවන් සහ වාමාංශික පක්ෂ කිහිපයක්ද එක්ව සෑදුනු ජනතාවගේ සන්ධානයකි.
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
                        <h2>මොකක්ද මේ <span>PSA </span>හි අරමුණ?</h2>

                        <p>
                        ජන අරගල සන්ධානයේ අරමුණ වන්නේ සමාජවාදී සමාජයක් ගොඩනැගීම තුළින් ශ්‍රී ලංකාවේ වත්මන් සමාජ දේශපාලන හා ආර්ථික ක්‍රම පරිවර්තනය කිරීමයි. ජනගහනයෙන් බහුතරයකට බලපාන ගැටළු විසඳීම, දිගුකාලීන ජාතික ගැටළු විසඳීම, IMF වැනි බාහිර බලපෑම්වලට විරුද්ධ වීම සහ ඉන්දියාව සහ එක්සත් ජනපදය වැනි රටවල අනවශ්‍ය විදේශීය ඇඟිලි ගැසීම් වලට එරෙහි වීම අපගේ අරමුණයි. බහුතරයක් මුහුණ දෙන ගැටලුවලට විසඳුම් සෙවීමට සහ රාජ්‍ය ව්‍යුහය, ආර්ථිකය, සමාජ දේශපාලන ක්‍රමය වෙනස් කිරීම සඳහා ජන බලය ගොඩනැගීම අපගේ අරමුණයි. ඒ නිසා සමස්ත ක්‍රමයම පරිවර්තනය කරන සමාජවාදී සමාජයක් ගොඩනැගීමේ පුළුල් වැඩපිළිවෙළක් අපි යෝජනා කරනවා.
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
                        <h2><img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""> අපිව තෝරගතයුත්තේ ඇයි? <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""></h2>
                        
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/hard-work.png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h2>ජන අරගලයේ අභිලාෂයන් නියෝජනය කිරීම</h2>
                        <br>
                        <p class="lang" key="justice">
                        ජන අරගල සන්ධානයට සම්බන්ධ දේශපාන පක්ෂ සහ ක්‍රියාකාරීන් සියලු දෙනා පසුගිය කාලය පුරා ජනතා බලයක් ගොඩනැගීම මූලික කරගත් අරගල ක්‍රියාමාර්ග නිරත වුනු අය. මැතිවරණ ක්‍රියාවලිය ඇතුලෙත් අපි නියෝජනය කරන්නේ ජනතාවගේ ඉල්ලිම් සහ ඒවා දිනාගැනීම සඳහා වන ජනතා බලයක් ගොඩනැගීම. ඒ වගේම තමයි පසුගිය ගෝල්⁣ෆේස් අරගලය ඇතුලු අරගල ක්‍රියාමාර්ග තුල මතු වුනු යෝජනා‍, වැඩපිලිවෙල ක්‍රියාත්මක කිරීම වෙනුවෙන් අප පෙනී සිටිනවා.
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/exit.png" alt="" height="100px" width="100px">
                        </div>
                        <h2> Exit IMF වැඩපිලිවෙල</h2>
                        <br>
                        <p>
                        ආර්ථික අර්බුදය විසදීමේ මුවාවෙන් අප තවත් ණය උගුලකට ඇද දැමීම පමණක් ⁣නොවයි ඒ හරහා අපේ රටේ ආර්ථික, දේශපාලන ස්වාධිපත්‍යයට බලපෑම් සිදු කරන IMF වැඩපිලිවෙල පිලිගැනීම තමයි අනෙක් බහුතර අපේක්ෂකයන්ගේ ආර්ථික වැඩපිලිවෙල වෙලා තියෙන්නේ. නමුත් අපි යෝජනා කරනවා මේ IMF මර උගුලෙන් ඉවත් වෙලා ජනතාවාදි වැඩපිලිවෙලක් හරහා අර්බුදයට උත්තර සොයන වැඩපිලිවෙලක්.
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/protest.png" alt="" height="100px" width="100px">
                        </div>
                        <h2>ඉන්දියන් - ඇමරිකන් මැදිහත්වීම් වලට එරෙහි වැඩපිලිවෙලක්
                        </h2>
                        <br>
                        <p>
                        මේ වෙද්දි ලෝකයේ රටවල් අත්පත් කරගනිමින් ලෝකයේ ආර්ථික බලවතුන් වෙන්න ඇමරිකාව‍, ඉන්දියාව‍, චීනය ඇතුලු රටවල් සැලසුම් සකස් කරමින් ඉන්නවා. අපේ රටේ පාලකයන් ඉන්නේ මේ රටවල වැඩපිලිවෙගේ රූකඩ බවට පත්වෙලා. ඒ වගේම බලය ඉල්ලා සිටින අයත් මේ වැඩපිලිවෙල ප්‍රතික්ෂේප කරනවා වෙනුවට ඒවට යටවෙන තත්ත්වයක් තමා තියෙන්නේ. හැබැයි අපි යෝජනා කරනවා මේ බලහත්කාරී මැදිහත්වීමට වලට විරෝධය පල කරන ව⁣⁣ගේම ඊට එරෙහිව ලොව පුරා පීඩිතයන් එකට එක්වන වැඩපිලිවෙලක්. 
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/cooperation (3).png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h2>ජාතික ගැටලුවට සැබෑ විසදුමක්</h2>
                        <br>
                        <p>
                        උතුරු-නැගෙනහිරේ දශක ගණනාවක යුද්ධය භෞතිකව අවසන් වුවත් තවත් දශකයක් යනතුරු උතුරු-නැගෙනහිර ජනතාවගේ ගැටලු වලට විසදුම් දෙන්න අසමත් වුන⁣ා පහුගිය කිසිම පාලනයක් වත්. හැම වෙලේම සිද්ධ වුනේ දේශපාලන වුවමනා වෙනුවෙන් උතුරු-නැගෙනහිර ප්‍රශ්න ලැජ්ජා සහගත විදියට පාවිචිචි වුනු එක. ඒ නිසා අපි ජාතික ගැටලුව සඳහා උතුරු-නැගෙනහිර ජනතාවත් දකුණේ ජනතාවත්‍, බලය විමධ්‍යගත කිරීමක් සහිත ස්වයං-පාලන ප්‍රදේශ ‍සහ ඒවා සමිබන්ධිත ද්විමණ්ඩල ව්‍යුහයක් වගේම ජනතා බලය පිලිගනිමින් මහජන සභා සහිත ඓතිහාසික යෝජනාවලියක් අපි ඉදිරිපත් කරනවා.
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/social-justice (1).png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h2>ජන බලය සහතික කරන අලුත් ව්‍යවස්ථාවක්</h2>
                        <br>
                        <p>
                        ජනතා පරමාධිත්‍යයට මුවා වෙලා දැන් තියන ව්‍යවස්ථාව හරහා ජනතා බලය පැත්තකට දාලා තමයි ඇත්තටම තියෙන්නේ. විධායක ජනාධිපති ධුරයක් පවතිද්දි අපි පත්කරන නියෝජිතයන් නැවත කැදවීමේ බලයක් ජනතාවට නෑ. ජාතිවාදය, ආගම්වාදයට උඩගෙඩි දෙන ව්‍යවස්ථාවක් මේක. ඒ නිසා අපි යෝජනා කරනවා ජනතාවට තීරණ ගන්න බලය ලැබෙන විධායක ජනාධිපතිධූරය අහෝසි කරපු‍ ජනතා අයිතීන් ව්‍යවස්ථානුකූලව සහතික කරපු අලුත් ව්‍යවස්ථාවක්
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                 <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="../assets/media/flaticon icons/system.png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h2>ක්‍රම වෙනසක්</h2>
                        <br>
                        <p>
                        පහුගිය කොවිඩ් වසංගතය වෙලාවෙත්‍, ආර්ථික අර්බුදය වෙලාවෙත් මහා පරිමාණ සමාගම් ලාභ කඳු ගොඩ ගහද්දි, මේ රටේ සමාන්‍ය ජනතාව බරපතල විදියට වන්දි ගෙව්වා. අදටත් ණය කන්දක බර දරන්නේ මේ රටේ සාමාන්‍ය මිනිස්සු. මුලු සමාජයම බරපතල විෂමතාවකින් මිරිකිලා තියෙන්නේ. නරුමත්වයට යමින් තියෙන්නේ. ඉතින් මේ නරුම ධනවාදය වෙනු⁣වට අපි යෝජනා කරනවා සමාජවාදි සමාජ ක්‍රමයක් නිර්මාණය කිරීමේ වැඩපිලිවෙලක්.
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
                        <h2><img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""> අපව අමතන්න <img src="../assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""></h2>
                        <p>ප්‍රශ්න කරන්න, තර්ක කරන්න සහ පිලිතුරු ලබාගන්න</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <!-- Form -->
                    <div class="row g-2">
                        <div class="col-md-6">
                          <label for="sname" class="form-label">නම</label>
                          <input type="text" class="form-control" id="sname">
                        </div>
                        <div class="col-md-6">
                          <label for="semail" class="form-label">ඊමේල් ලිපිනය</label>
                          <input type="email" class="form-control" id="semail">
                        </div>
                        <div class="col-12">
                          <label for="ssubject" class="form-label">කාණ්ඩය</label>
                          <input type="text" class="form-control" id="ssubject" >
                        </div>
                        
                        <div class="col-12">
                            <label for="smessage" class="form-label">පණිවිඩය</label>
                            <textarea type="text" class="form-control" id="smessage" rows="10" ></textarea>
                          </div>
                          
                        
                          <div class="col-12 d-flex justify-content-center align-items-center">
                                <button onclick="sendEmailS();" class=" col-6 btn btn-warning " id="ssendbtn">‍පණිවිඩය යවන්න</button>
                                <button class="col-6 btn btn-warning " id="sloading" type="button" disabled>
                                    <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                    <span role="status">Sending...</span>
                                </button>
                            </div>
                      </div>
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
      const maxWords = 5; // Change this to the number of words you want to display

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