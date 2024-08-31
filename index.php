<?php
include "admin/dist/config/connection.php"

?>

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
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre&family=Gemunu+Libre:wght@200..800&family=Noto+Sans+Sinhala&family=Noto+Sans+Tamil+Supplement&family=Noto+Sans+Tamil:wght@100&family=Noto+Serif+Sinhala:wght@300&family=Tiro+Tamil:ital@0;1&display=swap" rel="stylesheet">    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" />

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/lightbox.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body data-spy="scroll" data-target=".navbar-nav" >
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="spinner-border"></div>
            <div class="preloader-image">
                <img src="assets/media/icons/PSA new.png" alt="PSA logo">
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
            <img src="assets/media/icons/PSA full logo.png" alt="Bootstrap" height="80" width="250" />
            </a>
            <div class="col-4 col-lg-auto mb-3 mb-lg-0 d-lg-flex d-none py-3 mx-2">
                <div class="d-flex">
                    <a href="" class="icons d-flex justify-content-center align-items-center mx-2"><img
                        src="assets/media/flaticon icons/telephone.png" alt=""></a>
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
                        src="assets/media/flaticon icons/message.png" alt=""></a>
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
                </ul>
            </div>
            <ul class="list-group list-group-horizontal bg-danger">
                <li class="list-group-item bg-danger"><a  class="translateLan" href="#" >English</a></li>
                <li class="list-group-item bg-danger"><a  class="translateLan" href="sin/index.php">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a  class="translateLan" href="tam/index.php">தமிழ்</a></li>
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
                <a href="<?php echo($notice['url']) ?>"><img src="admin/<?php echo($notice['path']) ?>" class="card-img-top" alt="..."></a>
                <div class="card-body d-none">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
</div>
    <!-- Navbar -->
    <!-- ====== // Header ====== -->
    
    <!-- ====== Hero Area ====== -->
    

    <!-- // Hero Area Content -->
    
    <!-- Hero Area Slider -->
    <div class="hero-area-slids owl-carousel ">
        <div class="single-slider">
            <!-- Single Background -->
            <div class="slider-bg" style="background-image: url(assets/images/hero-area/img10.jpg)">
                <div class="hero-aria" id="home">
                    <!-- Hero Area Content -->
                    <div class="container ">
                        <div class="hero-content  h-100">
                            <div class="d-table ">
                                <div class="d-table-cell ">
                                    <h2 class="text-uppercase  ">People's Struggle Alliance vision</h2>
                                    <p class=" text-white truncate1 ">
                                        At PSA, we're redefining prosperity for Sri Lanka. Our vision is
                                        a united future where economic growth, social well-being, and
                                        environmental sustainability go hand in hand. We empower
                                        individuals, strengthen communities, and champion innovation.
                                        Our commitment to education and sustainable practices ensures a
                                        prosperous tomorrow for all generations. Join us in this journey
                                        of reshaping the future, where no one is left behind, and
                                        together, we set new standards for success.
                                    </p>
    
                                    <a href="#about" class="btn btn-danger mt-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single Background -->
        </div>
        <div class="single-slider">
            <!-- Single Background -->
            <div class="slider-bg" style="background-image: url(assets/images/hero-area/img7.jpg)">
                <div class="hero-aria" id="home">
                    <!-- Hero Area Content -->
                    <div class="container ">
                        <div class="hero-content  h-100">
                            <div class="d-table ">
                                <div class="d-table-cell ">
                                    <h2 class="text-uppercase  ">People's Struggle Alliance vision</h2>
                                    <p class=" text-white truncate1">
                                        At PSA, we're redefining prosperity for Sri Lanka. Our vision is a united future where economic growth, social well-being, and environmental sustainability go hand in hand. We empower individuals, strengthen communities, and champion innovation. Our commitment to education and sustainable practices ensures a prosperous tomorrow for all generations. Join us in this journey of reshaping the future, where no one is left behind, and together, we set new standards for success.
                                    </p>
    
                                    <a href="#about" class="btn btn-danger mt-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single Background -->
        </div>
        <div class="single-slider">
            <!-- Single Background -->
            <div class="slider-bg" style="background-image: url(assets/images/hero-area/img9.jpg)">
                <div class="hero-aria" id="home">
                    <!-- Hero Area Content -->
                    <div class="container ">
                        <div class="hero-content  h-100">
                            <div class="d-table ">
                                <div class="d-table-cell ">
                                    <h2 class="text-uppercase  ">People's Struggle Alliance vision</h2>
                                    <p class=" text-white truncate1">
                                        At PSA, we're redefining prosperity for Sri Lanka. Our vision is a united future where economic growth, social well-being, and environmental sustainability go hand in hand. We empower individuals, strengthen communities, and champion innovation. Our commitment to education and sustainable practices ensures a prosperous tomorrow for all generations. Join us in this journey of reshaping the future, where no one is left behind, and together, we set new standards for success.
                                    </p>
    
                                    <a href="#about" class="btn btn-danger mt-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single Background -->
        </div>
        <div class="single-slider">
            <!-- Single Background -->
            <div class="slider-bg" style="background-image: url(assets/images/hero-area/img6.jpg)">
                <div class="hero-aria" id="home">
                    <!-- Hero Area Content -->
                    <div class="container ">
                        <div class="hero-content  h-100">
                            <div class="d-table ">
                                <div class="d-table-cell ">
                                    <h2 class="text-uppercase  ">People's Struggle Alliance vision</h2>
                                    <p class=" text-white truncate1">
                                        At PSA, we're redefining prosperity for Sri Lanka. Our vision is
                                        a united future where economic growth, social well-being, and
                                        environmental sustainability go hand in hand. We empower
                                        individuals, strengthen communities, and champion innovation.
                                        Our commitment to education and sustainable practices ensures a
                                        prosperous tomorrow for all generations. Join us in this journey
                                        of reshaping the future, where no one is left behind, and
                                        together, we set new standards for success.
                                    </p>
    
                                    <a href="#about" class="btn btn-danger mt-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single Background -->
        </div>
        <div class="single-slider">
            <!-- Single Background -->
            <div class="slider-bg" style="background-image: url(assets/images/hero-area/img12.jpg)">
                <div class="hero-aria" id="home">
                    <!-- Hero Area Content -->
                    <div class="container ">
                        <div class="hero-content  h-100">
                            <div class="d-table ">
                                <div class="d-table-cell ">
                                    <h2 class="text-uppercase  ">People's Struggle Alliance vision</h2>
                                    <p class=" text-white truncate1">
                                        At PSA, we're redefining prosperity for Sri Lanka. Our vision is
                                        a united future where economic growth, social well-being, and
                                        environmental sustainability go hand in hand. We empower
                                        individuals, strengthen communities, and champion innovation.
                                        Our commitment to education and sustainable practices ensures a
                                        prosperous tomorrow for all generations. Join us in this journey
                                        of reshaping the future, where no one is left behind, and
                                        together, we set new standards for success.
                                    </p>
    
                                    <a href="#about" class="btn btn-danger mt-2">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Single Background -->
        </div>
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
                        <h2><img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""> Who Are We <img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""></h2>
                        <p>
                        The People's Struggle Alliance is a people’s alliance of activists, professionals, artists and several left-wing parties in Sri Lanka who were involved in the Galle Face struggle and the previous struggles and popular uprisings.   
                        </p>         
                    </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- <div class="about-bg" style="background-image: url(assets/media/web-img/psa\ english.jpg)">
                       
                    </div> -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide "><img src="assets/media/web-img/psa english.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="assets/media/web-img/psa sinhala.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="assets/media/web-img/psa tamil.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="assets/media/web-img/psa president-english.jpg" alt="">
                            </div>
                            <div class="swiper-slide"><img src="assets/media/web-img/psa president-sinhala.jpg" alt="">
                            </div>
                            <div class="swiper-slide"><img src="assets/media/web-img/psa president-tamil.jpg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>What is <span>PSA </span>Aim ?</h2>

                        <p>
                        The aim of the People's Struggle Alliance is to transform the current socio-political and economic systems of Sri Lanka by building a socialist society. We aim to address the problems affecting the majority of the population, solve long-term national issues, oppose external influences such as the IMF, and resist unnecessary foreign interference from countries like India and the United States. Our goal is to build people power to find solutions to the problems faced by the majority and to change the state structure, economy, and socio-political system. Therefore, we propose a comprehensive program to build a socialist society that will transform the entire system.
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
                        <h2><img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""> Why Choose Us <img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""></h2>
                        
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="assets/media/flaticon icons/hard-work.png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h2>The Aspirations of The People's Struggle</h2>
                        <br>
                        <p class="lang" key="justice">
                        All the political parties and activists involved in the People's Struggle Alliance (PSA) have been actively involved in struggles to build people's power over the years. So, even in the election process, we represent the demands of the people and to build people's power to win their demands. Likewise, we stand for the implementation of the proposals and demands that have been put forward by numerous struggles, including the Galle Face People’s Struggle.
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="assets/media/flaticon icons/exit.png" alt="" height="100px" width="100px">
                        </div>
                        <h2>Exit IMF Programme</h2>
                        <br>
                        <p>
                        The economic programme of a majority of the other candidates is not only to drag us into another debt trap under the guise of solving the economic crisis, but also to accept the IMF programme, which affects the economic and political autonomy of our country. But we propose to get out of this IMF death trap, and find a solution to the crisis through a people-oriented programme.
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="assets/media/flaticon icons/protest.png" alt="" height="100px" width="100px">
                        </div>
                        <h2>A Programme Against Indian-American Intervention
                        </h2>
                        <br>
                        <p>
                        Currently, countries like America, India and China are making plans to become the world's economic power by taking over countries around the world. The rulers of our country have become puppets of their programmes. Also, others who are demanding power, instead of rejecting these programmes, seem to be complying with them. But we propose a programme where the oppressed from around the world come together to protest against these forced interventions.
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="assets/media/flaticon icons/cooperation (3).png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h2>A Real Solution To The National Question</h2>
                        <br>
                        <p>
                        Although it’s been over a decade since the war in the North-East came to a physical stop, all past administrations have failed to resolve the grievances of the people of the North-East. What has always happened is that the North-East issues have been shamefully ignored for the sake of political interests. Therefore, we present a historic proposal to resolve the national question for the people of the North-East and the people of the South. We propose a decentralisation of power, self-governing regions, along with a bicameral (two chambers) structure, which recognises people’s power. 
                        </p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="assets/media/flaticon icons/social-justice (1).png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h2>A new Constitution That Guarantees People’s Power</h2>
                        <br>
                        <p>
                        In reality, people's power has been set aside by the current Constitution under the guise of people's sovereignty. When there is an Executive Presidency, the people do not have the power to recall the representatives they appoint. This is a Constitution that promotes racism and bigotry. Therefore, we propose a new constitution that constitutionally guarantees the rights of the people, which abolishes the Executive Presidency, and gives the people the power to make decisions.
                    </p>
                    </div>
                </div>
                <!-- //Single Service -->
                 <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="assets/media/flaticon icons/system.png" alt="" height="100px"
                                width="100px">
                        </div>
                        <h2>System Change                        </h2>
                        <br>
                        <p>
                        During the COVID epidemic and the economic crisis, when large-scale companies piled up mountains of profits, the general public of this country was made to face the brunt of these crises. Even today, the regular people of this country bear the burden of a mountain of debt. The entire society is mired in serious disparity. Resulting in cynicism.So, instead of this cynical capitalism, we propose a programme to create a socialist social system.                    </p>
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
                        <h2><img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""> Contact Us <img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt=""></h2>
                        <p>Ask questions, argue and get answers.</p>
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
                          <label for="inputName" class="form-label">Name</label>
                          <input type="email" class="form-control" id="inputName">
                        </div>
                        <div class="col-md-6">
                          <label for="inputEmail" class="form-label">Email</label>
                          <input type="password" class="form-control" id="inputEmail">
                        </div>
                        <div class="col-12">
                          <label for="inputSubject" class="form-label">Subject</label>
                          <input type="text" class="form-control" id="inputSubject" >
                        </div>
                        
                        <div class="col-12">
                            <label for="inputMessage" class="form-label">Message</label>
                            <textarea type="text" class="form-control" id="inputMessage" rows="10" ></textarea>
                          </div>
                          
                        
                        <div class="col-12 d-flex justify-content-center align-items-center">
                          <button type="submit" class=" col-6 btn btn-warning">Send Message</button>
                        </div>
                      </form>
                    <!-- // Form -->
                </div>
            </div>
            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== -->

    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <img src="assets/media/icons/PSA full logo-white.png" alt="Bootstrap" height="100"
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


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="https://kit.fontawesome.com/495854b60c.js" crossorigin="anonymous"></script>
    <script>
        var arrLang = {
            'sin' :{
                'justice' : 'අපගේ මෙහෙවර සමාජ සාධාරණත්වය මත කේන්ද්‍රගත වේ. සමාන අවස්ථා සාධාරණ ප්‍රතිඵල ලබා දෙන සමාජයක් අපි අපේක්ෂා කරමු. පංතිය, වාර්ගිකත්වය, ආගම, භාෂාව, කුලය, ස්ථානය හෝ ස්ත්‍රී පුරුෂ භාවයේ වෙනස්කම් ජීවිත සපුරාලීමට සහ සමාන සහභාගීත්වයට බාධාවක් නොවන ලෝකයක් අපි ඉලක්ක කරමු. අපගේ ඉලක්කය වන්නේ අවස්ථා, සම්පත් සහ වරප්‍රසාද සාධාරණ ලෙස බෙදා හැරීම, සැබෑ ඇතුළත් කිරීම් සහ යුක්තිය ඇති සමාජයක් ගොඩනැගීමයි. උපදේශනය, අධ්‍යාපනය සහ සහයෝගීතාවය තුළින්, බාධක ඉවත් කිරීමට සහ සැමට දීප්තිමත්, සාධාරණ අනාගතයක් ගොඩනැගීමට අපි වෙහෙස නොබලා කටයුතු කරමු.'
            },
            'eng' :{
                'justice' : 'Our mission is to build a society based on social equality. We aspire  a society where equal opportunities lead to equal outcomes. We believe that social barriers such as caste, ethnicity, religion, language, class, location or gender should not hinder people from living their lives to the fullest and participating equally. Our goal is to distribute opportunities, resources and rewards fairly, to promote inclusivity and to build a just society through education, guidance and cooperation, removing barriers and creating a bright, equal future for all.'
                },
                
            'ta' :{
                'justice' : 'எங்கள் நோக்கம் சமூக நீதியை மையமாகக் கொண்டுள்ளது. சம வாய்ப்புகள் சமமான விளைவுகளை அளிக்கும் ஒரு சமூகத்தை நாங்கள் கற்பனை செய்கிறோம். வர்க்கம், இனம், மதம், மொழி, சாதி, இருப்பிடம் அல்லது பாலினம் ஆகியவற்றில் உள்ள வேறுபாடுகள் வாழ்க்கையை நிறைவு செய்வதற்கும் சமமான பங்கேற்பிற்கும் இடையூறாக இல்லாத ஒரு உலகத்தை நாங்கள் நோக்கமாகக் கொண்டுள்ளோம். எங்கள் இலக்கு வாய்ப்புகள், வளங்கள் மற்றும் சலுகைகளை சமமாகப் பகிர்ந்தளித்து, உண்மையான உள்ளடக்கம் மற்றும் நீதியுள்ள சமூகத்தை உருவாக்குவது. வக்காலத்து, கல்வி மற்றும் ஒத்துழைப்பு மூலம், தடைகளை அகற்றி, அனைவருக்கும் பிரகாசமான, நேர்மையான எதிர்காலத்தை உருவாக்க நாங்கள் அயராது உழைக்கிறோம்.' 
            }
        };
        
        $(function(){
            $('.translateLan').click(function(){
                var lang = $(this).attr('id');
        
                $('.lang').each(function(index, element){
                    $(this).text(arrLang[lang][$(this).attr('key')]);
                });
            });
        });
        
            </script>
</body>

</html>