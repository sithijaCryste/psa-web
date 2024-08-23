<?php

include "../admin/dist/config/connection.php";

$pageno = 0;
$page = $_POST["n"];
// echo($page);

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `news` ORDER BY `date` ASC";
$rs = Database::search($q);
$num = $rs->num_rows;
// echo($num);

$results_per_page = 4;
$num_of_pages = ceil($num / $results_per_page);
// echo($num_of_pages);

$page_results = ($pageno - 1) * $results_per_page;
// echo($page_results);

$q2 = $q . " LIMIT $results_per_page OFFSET $page_results";
$rs2 = Database::search($q2);
$num2 = $rs2->num_rows;
// echo ($num2);

if ($num2 == 0) {
    // Not Available Stock
    echo ("No News Here..");
} else {
    // Load Stock
    ?>
    <div class="row">
        <?php
        for ($i = 0; $i < $num2; $i++) {
            $news = $rs2->fetch_assoc();

            ?>
            <!-- card -->
            <!-- Single Blog -->
            <div class="col-12 col-md-6 col-lg-4" >
                <div class="single-blog">
                    <div class="blog-thumb" style="background-image: url(../admin/<?php echo ($news['main-img']) ?>)"></div>
                    <h4 class="blog-title"><a
                            href="single-news.php?n=<?php echo ($news['id']) ?>"><?php echo ($news['header_ta']) ?></a>
                    </h4>
                    <p class="blog-meta"><?php echo ($news['date']) ?></p>
                    <p class="truncateNews"><a href="single-news.php?n=<?php echo ($news['id']) ?>"><?php echo ($news['content_ta']) ?></a></p>
                    <a href="single-news.php?n=<?php echo ($news['id']) ?>" class="button">Read More</a>
                </div>
            </div>
            <!-- Single Blog -->
            <!-- card -->
            <?php
        }

        ?>
    </div>

 
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6  text-center">
            <ul class="pagination d-flex justify-content-center align-items-center text-center">
                <li class="page-item"><a class="page-link" <?php
                if ($pageno <= 1) {
                    echo ("#");
                } else {
                    ?>
                    onclick="loadNews(<?php echo ($pageno - 1) ?>)" ; <?php
                }
                ?>><<</a></li>



                <?php
                for ($y = 1; $y <= $num_of_pages; $y++) {
                    if ($y == $pageno) {

                        ?>
                        <li class="page-item active">
                            <a class="page-link" onclick="loadNews(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                        </li>
                        <?php

                    } else {

                        ?>
                        <li class="page-item">
                            <a class="page-link" onclick="loadNews(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                        </li>
                        <?php
                    }
                }
                ?>



                <li class="page-item"><a class="page-link" <?php
                if ($pageno >= $num_of_pages) {
                    echo ("#");
                } else {
                    ?>
                            onclick="loadNews(<?php echo ($pageno + 1) ?>);" <?php
                }
                ?>>>></a></li>
            </ul>
        </div>
    </div>


    <?php

}
?>