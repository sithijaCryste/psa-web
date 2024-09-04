<?php require "admin/dist/config/connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <title>People’s Struggle Alliance - Support Us</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" />
    <link rel="shortcut icon" href="assets/media/icons/PSA logo.png" type="image/x-icon">

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
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
            <div class="spinner-border"></div>
            <div class="preloader-image">
                <img src="assets/media/icons/PSA logo.png" alt="PSA logo">
                <img src="assets/media/flaticon icons/umbrella (2).png" alt="Umbrella icon">
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
                <li class="list-group-item bg-danger"><a href="#">English</a></li>
                <li class="list-group-item bg-danger"><a href="sin/supportus.php">සිංහල</a></li>
                <li class="list-group-item bg-danger"><a href="tam/supportus.php">தமிழ்</a></li>
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
        style="background-image: url(assets/images/hero-area/img13.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h5 class="text-white">People’s Struggle Alliance</h5>
                    <h2>Support the People’s Struggle Alliance</h2>
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
                        <h1> People’s <span style="color: #ffc900;">Struggle</span> Alliance <img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="42px" alt=""></h1>
                        <h4>Support the People’s Struggle Alliance</h4>
                        <p>
                            The People’s Struggle Alliance (PSA) is a coalition of three leftist parties, the
                            Socialist People’s Forum, the Frontline Socialist Party and the New Democratic
                            Marxist-Leninist Party, and a group of left-identifying activists who emerged during
                            the 2022 mass People’s Struggle (Aragalaya/Porattam) in Sri Lanka.
                            We decided to form this Alliance due to our frustration with mainstream political
                            parties and politicians who have all failed or refused to address crucial social,
                            economic, political and geopolitical issues which are deeply impacting the people
                            in Sri Lanka. We believe there are multiple reasons for this, chief among them a
                            political system and culture operated by political elites in the interests of local and
                            global corporate elites. This has resulted in a politics that impoverishes, represses
                            and silences the people.
                            The PSA resolves to do politics differently, taking an approach based foremost on
                            principles and putting people first. Accordingly, we have released two programmes
                            in our Manifesto – one, a long term programme based on socialist principles, and
                            the other, a transitional programme to provide concrete solutions to the ongoing
                            grievances faced by the people. The following are some of our key proposals in
                            summary:
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
                            <img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            The PSA proposes an economy for the people decided by the
                            people. The IMF programme has resulted, among other things, in a further
                            contracting of the economy, rises in malnutrition and poverty levels and increased
                            deaths in hospitals. It has led to our economic structures being changed
                            undemocratically and unaccountably, in the interests of the few while
                            dispossessing the many. We propose in detail a plan to exit the IMF programme,
                            to restore economic sovereignty and to prevent and reverse the social degradation
                            we see now.
                        </p>
                        <h2>2. Resolve the National Question</h2>
                        <p>
                            <img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            Since independence, racism has been used
                            to divide and rule the working people of Sri Lanka. The plague of racism has led to

                            unimaginable violence and suffering, as encapsulated by a thirty year long civil
                            war ending in brutal genocide. To break the deadlock of divisive and zero-sum
                            race-based politics, we propose a system of regions with self-governing powers
                            which breaks away from the centralisation of power and where people regardless
                            of their ethnicity have control over their economy, environment and political
                            leadership.
                        </p>
                        <h2>3. Conserve the Environment for the future</h2>
                        <p>
                            <img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">
                            The PSA proposes a model of
sustainable development which breaks away from the capitalist model of
extracting surplus, which has resulted in the accelerating environmental
degradation we see today. We have proposed a development model where
sustaining the environment, our forests, our seas and our lands for the future
becomes central to the idea of development.
                        </p>
                        <h2>4. Abolish the Executive Presidency, Establish People’s Councils and
                        introduce the Right to Recall</h2>
                        <p>
                            <img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            The Executive Presidency has created a political
system and culture where authoritarianism, repression and undemocratic
governance reign supreme. Abolishing it was a key demand of the 2022 People’s
Struggle, during which People’s Councils also emerged as people-centred
mechanisms of participatory democracy. The Right to Recall elected officials who
violate their electoral mandates, was also a key demand of the people’s struggle.
We propose to respect these demands and outcomes of the People’s Struggle,
and provide for a system of true democratic governance for the people.                        </p>
                        <h2>5. Repeal Oppressive and Anti-Democratic Laws</h2>
                        <p>
                            <img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            such as the Prevention of
Terrorism Act (PTA), the Online Security Act (OSA), the Economic Transformation
Act (ETA) and Penal Code sections 365/365A. The law books in Sri Lanka contain
many laws which violate people’s civil rights, criminalise entire communities and
are anti-democratic. We propose to abolish these laws outright, instead of merely
amending them as many governments have done historically and many parties
propose to now.                        </p>
                        <h2>6. A state where everyone is treated equally without priority to one religion, one race or one language</h2>
                        <p>
                            <img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="18px" alt="">

                            Religion has no place in politics, even if it stands for people's right to believe or not believe in a religion. Further, we believe in equality for all races, languages ​​and religions and therefore treat all religions and races equally without giving any race or religion a prominent place in the Constitution. We recognize Sinhala, Tamil and English as the official languages ​​of Sri Lanka and enable people to access education and government services in all three languages.                        </p>
                        <h2>7. Build a Sri Lanka which places wealth in the hands of the working people
who earn it, and a society which safeguards the people’s fundamental rights
to food, health care, education and housing.</h2>


                        

<h5>If you believe in a Sri Lanka that is not for elites and where all people are free to live equally and enjoy a high standard of living regardless of race, gender, religion, caste and gender, then support us to spread our political message and support our campaign.</h5>


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
                        <h2> FOLLOW US. SUPPORT US. </h2>
                        <img src="assets/media/flaticon icons/PSA umb.png" class="umbIcon" width="32px" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                    <div class="about-content-ab">
                        <div class="row justify-content-center">
                        <h4> Like/Follow &amp; Share our Page on Facebook: </h4>
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
                            <h5> For more information contact us on: <a href="mailto:psalliancelk@gmail.com">psalliancelk@gmail.com</a></h5>
                        <h6>Bank details below:</h6>
                        <p><img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> Bank Name: People’s Bank</p>
                        <p><img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> Account No.: 014-200-150-015-070</p>
                        <p><img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> Branch: Union Place</p>
                        <p><img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> Branch No: 7135-14</p>
                        <p><img src="assets/media/flaticon icons/PSA red umb.png" class="umbIcon" width="14px" alt=""> SWIFT Code: PSBLKLX</p>
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