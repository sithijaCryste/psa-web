<!-- ====== Footer Area ====== -->
<footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <a href="/"
                            class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                            <img src="../assets/media/icons/PSA full logo-white.png" alt="Bootstrap" height="100"
                                width="280" />
                        </a>
                        <div class="row d-block">
                            <div class="col-8">
                                <p class="text-white">
                                    <i class="fa-solid fa-location-dot"></i> Address: No.31/1 Kandawaththa Road, Nugegoda
                                </p>
                            </div>

                            <div class="col-8">
                                <p class="text-white">
                                    <i class="fa-solid fa-envelope"></i> Email:
                                    <a href="mailto:psalliancelk@gmail.com">psalliancelk@gmail.com</a>
                                </p>
                            </div>

                            <div class="col-8">
                                <p class="text-white">
                                    <i class="fa-solid fa-phone"></i> Phone: <a href="tel:+94716487812" class="text-decoration-none text-white">+94 71 648 7812</a> 
                                </p>
                            </div>
                            <div class="col-8">
                                <p class="text-white">
                                <i class="fa-brands fa-whatsapp"></i> Whatsapp: <a href="https://wa.me/94716487812" class="text-decoration-none text-white">071 648 7812</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row d-block">
                            <h3>Recent Post</h3>
                            <?php
$nf = "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 3";

$res = Database::search($nf);
$num = $res->num_rows;
for($y = 0; $y < $num; $y++ ){
    $gal = $res->fetch_assoc();


                            ?>
                            <div class="col-12">
                            <i class="fa-solid fa-circle-dot"></i>  <a href="" class="text-white truncatefoot"><?php echo($gal['header']) ?></a>
                            </div>
<?php
}
?>
                           
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row d-block">
                            <h3>Navigate</h3>
                            <div class="col-12">
                            <i class="fa-solid fa-circle-dot"></i>  <a href="index.php" class="text-white text-decoration-none">Home </a>
                            </div>

                            <div class="col-12">
                            <i class="fa-solid fa-circle-dot"></i>  <a href="aboutus.php" class="text-white text-decoration-none">About Us</a>
                            </div>
                            <div class="col-12">
                            <i class="fa-solid fa-circle-dot"></i>  <a href="news.php" class="text-white text-decoration-none">News </a>
                            </div>
                            <div class="col-12">
                            <i class="fa-solid fa-circle-dot"></i>  <a href="gallery.php" class="text-white text-decoration-none">Gallery </a>
                            </div>
                            <div class="col-12">
                            <i class="fa-solid fa-circle-dot"></i>  <a href="officialdocuments.php" class="text-white text-decoration-none">Official Documents </a>
                            </div>
                            <div class="col-12">
                            <i class="fa-solid fa-circle-dot"></i>  <a href="#" class="text-white text-decoration-none">Q & A </a>
                            </div>
                            <div class="col-12">
                            <i class="fa-solid fa-circle-dot"></i>  <a href="supportus.php" class="text-white text-decoration-none">Support Us </a>
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
            <script>
                 const truncateElements2 = document.querySelectorAll('.truncatefoot');
    
    truncateElements2.forEach((element) => {
      const text = element.textContent;
      const words = text.split(' ');
      const maxWords = 8; // Change this to the number of words you want to display

      if (words.length > maxWords) {
        const truncatedText = words.slice(0, maxWords).join(' ') + '...';
        element.textContent = truncatedText;
      }
    });
            </script>
        </footer>
        <!-- ====== // Footer Area ====== -->