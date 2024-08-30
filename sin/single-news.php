<?php 
include "../admin/dist/config/connection.php";
$newsId = $_GET["n"];
if(isset($newsId)){
    $q = "SELECT * FROM `news` WHERE `id` = '".$newsId."'";

    $result = Database::search($q);
    $data = $result->fetch_assoc();
// Get the protocol (http or https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Get the host (domain name)
$host = $_SERVER['HTTP_HOST'];

// Get the URI (path and query string)
$uri = $_SERVER['REQUEST_URI'];

// Combine them to form the full URL
$url = $protocol . $host . $uri;
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
                    <a href="" class="icons d-flex justify-content-center align-items-center mx-2"><img src="../assets/media/flaticon icons/telephone.png" alt=""></a>
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
                    <a href="" class="icons d-flex justify-content-center align-items-center mx-2"><img src="../assets/media/flaticon icons/message.png" alt=""></a>
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
                        <a class="nav-link " aria-current="page" href="index.php" id="home-page">HOME</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php" id="about-page">ABOUT US</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="news.php" id="news-page">NEWS</a>
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
                </ul>
            </div>
            <ul class="list-group list-group-horizontal bg-danger">
                <li class="list-group-item bg-danger"><a href="../news.php">English</a></li>
                <li class="list-group-item bg-danger"><a href="">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a href="../tam/news.php">தமிழ்</a></li>
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
    <!-- ====== // Header ====== -->

    <!-- Page Title -->
    <!-- <div class="page-title bg-img section-padding bg-overlay"
            style="background-image: url(../assets/images/breadcrumb.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Single Blog</h2>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- // Page Title -->
    </header>
    <!-- ====== // Header ====== -->



    <section class="blog-section">
        <div class="container">
            <div class="row">
                <!-- Blog Main Content -->
                <div class="col-lg-12">
                    <div class="blog-post">
                        <h1 class="blog-title"><?php echo($data['header_sin']) ?></h1>
                        <div class="row">

                        <ul class="social-u ">
                                <li class="">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo ($url); ?>" target="_blank">
                                        <i class="fab fa-facebook-f icon"></i> </a>
                                </li>

                                <li class="">
                                    <a href="https://www.facebook.com/dialog/share?link=<?php echo ($url); ?>&text=Hi!%0AThere%20is%20something%20may%20interesting%20you:%0A<?php echo($data['header_sin']) ?>A"><i class="fa-brands fa-facebook-messenger icon"></i></a>
                                </li>
                                <li class="">
                                    <a href="https://wa.me/?text=Hi!%0AThere%20is%20something%20may%20interesting%20you:%0A<?php echo($data['header_sin']) ?>%0A<?php echo ($url); ?>" target="_blank"><i class="fa-brands fa-whatsapp icon"></i></a>
                                </li>
                                <li class="">
                                    <a href="https://t.me/share/url?url=<?php echo ($url); ?>&text=Hi!%0AThere%20is%20something%20may%20interesting%20you:%0A<?php echo($data['header_sin']) ?>%0A"><i class="fa-brands fa-telegram icon"></i></a>
                                </li>
                                <li class="">
                                    <a href="https://twitter.com/intent/tweet?text=Hi!%0AThere%20is%20something%20may%20interesting%20you:%0<?php echo($data['header_sin']) ?>%0A &url=<?php echo ($url); ?>" target="_blank"><i class="fab fa-twitter icon"></i></a>
                                </li>
                                <li class="">
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo ($url); ?>&title=<?php echo($data['header_sin']) ?>"><i class="fab fa-linkedin-in icon"></i></a>
                                </li>
                                <li class="">
                                <a href="mailto:?subject=[Latest News PSA]&body=[Hi!%0AThere%20is%20something%20may%20interesting%20you:%0<?php echo($data['header_sin']) ?>%0A<?php echo ($url); ?>]"><i class="fa-solid fa-envelope icon"></i></a>
                            </li>
                            <li class="">
                                <input type="text" class="d-none" value="<?php echo ($url); ?>" id="myInput" disabled>
                                <a onclick="myFunction();"><i class="fa-solid fa-share icon"></i></a>
                                </li>


                            </ul>


                        </div>
                        <div class="blog-mainImg">
                        <img src="../admin/<?php echo($data['main-img'])  ?>" alt="" class="blog-img">

                        </div>                        <p class="blog-meta"><span class="blog-date"><?php echo($data['date'])  ?></span></p>
                        <div class="blog-main-content">
                            <p><?php echo($data['content_sin'])  ?></p>

                            <div class="blog-content-footer">

                            </div>
                        </div>
                        <!--  Blog Photos -->
                        <div class="row">
                            <div class="col-12 col-lg-4 mt-2">
                                <div class="blog-photos">
                                    <img src="../admin/<?php echo($data['main-img'])  ?>" alt="" >
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mt-2">
                                <div class="blog-photos">
                                    <img src="../admin/<?php echo($data['img2'])  ?>" alt="" >
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mt-2">
                                <div class="blog-photos">
                                    <img src="../admin/<?php echo($data['img3'])  ?>" alt="" >
                                </div>
                            </div>

                        </div>



                        <!-- // Blog Photos -->


                    </div>
                </div>
                <!-- // Blog Main Content -->


            </div>
        </div>
    </section>


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
<script>
   function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the Url: " + copyText.value);
}
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

</body>

</html>
<?php 
}else{
    ?>
<script>
    alert("Something Went Wrong");
</script>

<?php
}

?>