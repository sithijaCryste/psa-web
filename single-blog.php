<?php
require "admin/dist/config/connection.php"; // Ensure the Database class is included

$newsId = $_GET["n"];
if (isset($newsId)) {
    $q = "SELECT * FROM `blog` WHERE `id` = ?";
    
    // Use prepared statements with the Database connection
    Database::setupConnection();
    $stmt = Database::$connection->prepare($q);

    if ($stmt) {
        $stmt->bind_param("i", $newsId);
        $stmt->execute();
        $result = $stmt->get_result();
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
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-K8E60D34NC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-K8E60D34NC');
</script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MVKCLB9B');</script>
<!-- End Google Tag Manager -->
     <!-- Basic Meta Tags -->
<!-- Basic Meta Tags -->
    <meta name="title" content="People's Struggle Alliance (PSA) - A Voice for the People">
    <meta name="description" content="The People's Struggle Alliance (PSA) is a political movement dedicated to social justice, equality, and empowering the working class. Join us in our fight for a fair and just society.">
    <meta name="keywords" content="People's Struggle Alliance, PSA, political left, socialism, communism, social justice, equality, working class, political movement, progressive politics, psallaince, people' struggle, struggle, sri lanka, ජන අරගල සන්ධානය, අරගල, අරගල පක්ෂය, ජනතා පක්ෂය ">
    <meta name="author" content="People's Struggle Alliance">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo htmlspecialchars($url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($data['title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($data['content']); ?>">
    <meta property="og:image" content="<?php echo $protocol . $host . '/admin/' . htmlspecialchars($data['path']); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="675">
    <meta property="og:image:alt" content="PSA Image">

    <!-- Twitter -->
    <meta name="twitter:text:title" content="<?php echo htmlspecialchars($data['title']); ?>">
    <meta name="twitter:image" content="<?php echo $protocol . $host . '/admin/' . htmlspecialchars($data['path']); ?>" />
    <meta name="twitter:card" content="summary_large_image" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <title><?php echo htmlspecialchars($data['title']); ?> - PSA</title>
<link rel="icon" href="assets/media/icons/PSA logo.png" type="image/x-icon">
<link rel="shortcut icon" href="assets/media/icons/PSA logo.png" type="image/x-icon">
<link rel="icon" href="assets/media/icons/PSA logo.png" sizes="192x192" />
<link rel="apple-touch-icon" href="assets/media/icons/PSA logo.png" />
<meta name="msapplication-TileImage" content="assets/media/icons/PSA logo.png" />
    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" />
    
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

<body data-spy="scroll" data-target=".navbar-nav">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MVKCLB9B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
       <!-- Preloader -->
       <div id="preloader">
        <div class="spinner">
            <div class="spinner-border"></div>
            <img src="assets/media/icons/PSA logo.png" alt="Preloader Image" class="preloader-image">
        </div>
    </div>


    <!-- // Preloader -->

    <!-- ====== Header ====== -->
    <!-- Header 1 -->
    <header class="bg-secondary header1">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/"
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
                            src="assets/media/flaticon icons/message.png" alt=""></a>
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
                        <a class="nav-link " aria-current="page" href="index.php" id="home-page">HOME</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php" id="about-page">ABOUT US</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="news.php" id="news-page">NEWS</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="blog.php" id="blog-page">PEOPLE'S BLOG</a>
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
                        <a class="nav-link " href="supportus.php">SUPPORT US</a>
                        <div class="nav-hover d-none"></div>
                    </li>
                </ul>
            </div>
            <ul class="list-group list-group-horizontal bg-danger">
                <li class="list-group-item bg-danger"><a href="#">English</a></li>
                <li class="list-group-item bg-danger"><a href="sin/news.php">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a class="" href="tam/news.php">தமிழ்</a></li>
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

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-post">
                        <h1 class="blog-title"><?php echo htmlspecialchars($data['title']); ?></h1>
                        <div class="row">
                            <ul class="social-u ">
                                <li class="">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($url); ?>" target="_blank">
                                        <i class="fab fa-facebook-f icon"></i> </a>
                                </li>

                                <li class="">
                                    <a href="https://www.facebook.com/dialog/share?link=<?php echo ($url); ?>&text=Hi!%0AThere%20is%20something%20may%20interesting%20you:%0A<?php echo($data['title']) ?>A"><i class="fa-brands fa-facebook-messenger icon"></i></a>
                                </li>
                                <li class="">
                                    <a href="https://wa.me/?text=<?php echo urlencode("Hi! Check this out: " . $data['title'] . " " . $url); ?>" target="_blank"><i class="fa-brands fa-whatsapp icon"></i></a>
                                </li>
                                <li class="">
                                    <a href="https://t.me/share/url?url=<?php echo urlencode($url); ?>&text=Hi!%0AThere%20is%20something%20may%20interesting%20you:%0A<?php echo($data['title']) ?>%0A"><i class="fa-brands fa-telegram icon"></i></a>
                                </li>
                                <li class="">
                                    <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode("Hi! Check this out: " . $data['title'] . " " . $url); ?>" target="_blank"><i class="fab fa-twitter icon"></i></a>
                                </li>
                                <li class="">
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($url); ?>&title=<?php echo($data['title']) ?>"><i class="fab fa-linkedin-in icon"></i></a>
                                </li>
                                <li class="">
                                <a href="mailto:?subject=[Latest News PSA]&body=[Hi!%0AThere%20is%20something%20may%20interesting%20you:%0<?php echo($data['title']) ?>%0A<?php echo urlencode($url); ?>]"><i class="fa-solid fa-envelope icon"></i></a>
                            </li>
                            <li class="">
                                <input type="text" class="d-none" value="<?php echo htmlspecialchars($url); ?>" id="myInput" disabled>
                                <a onclick="myFunction();"><i class="fa-solid fa-share icon"></i></a>
                                </li>


                            </ul>
                        </div>
                        <div class="row justify-content-center">
                        <div class="blog-mainImg">
                            <img src="admin/<?php echo htmlspecialchars($data['path']); ?>" alt="" class="blog-img">
                        </div>
                        </div>
                        
                        <p class="blog-meta"><span class="blog-date"><?php echo htmlspecialchars($data['date']); ?></span></p>
                        <div class="blog-main-content">
                            <?php echo ($data['content']); ?>
                        </div>
                        <div class="blog-content-footer"></div>
                        <div class="blog-content-footer"></div>
                        
                        <div class="blog-content-footer"></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

        
    <?php include "footer.php"?>
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


        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.bundle.js"></script>
        <script src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.mixitup.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/typed.js"></script>
        <script src="assets/js/skill.bar.js"></script>
        <script src="assets/js/fact.counter.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script src="assets/js/main.js"></script>

        <script src="https://kit.fontawesome.com/495854b60c.js" crossorigin="anonymous"></script>
    </body>

    </html>

    </body>

    </html>
<?php
 } else {
    // Log error if the statement couldn't be prepared
    error_log("Prepared Statement Error: " . Database::$connection->error);
}

}  else {
    echo "<script>alert('Invalid news ID.'); window.location.href = 'news.php';</script>";
    exit;
}

?>