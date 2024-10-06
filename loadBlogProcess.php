<?php

include "admin/dist/config/connection.php";

$pageno = 0;
$page = $_POST["n"];
// echo($page);

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `blog` ORDER BY `date` DESC";
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
    echo ("No blog Here..");
} else {
    // Load Stock
    ?>
    <div class="row">
        <?php
        for ($i = 0; $i < $num2; $i++) {
            $blog = $rs2->fetch_assoc();

            ?>
            <!-- card -->
            <!-- Single Blog -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog">
                    <div class="blog-thumb" style="background-image: url(admin/<?php echo ($blog['path']) ?>)"></div>
                    <h4 class="blog-title"><a
                            href="single-blog.php?n=<?php echo ($blog['id']) ?>"><?php echo ($blog['title']) ?></a>
                    </h4>
                    <p class="blog-meta"><?php echo ($blog['date']) ?></p>
                    
                    <a href="single-blog.php?n=<?php echo ($blog['id']) ?>" class="button">Read More</a>
                </div>
            </div>
            <!-- Single Blog -->
            <!-- card -->
            <?php
        }

        ?>
    </div>

 
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-lg-6  text-center">
            <ul class="pagination d-flex justify-content-center align-items-center text-center">
                <li class="page-item"><a class="page-link" <?php
                if ($pageno <= 1) {
                    echo ("#");
                } else {
                    ?>
                    onclick="loadBlog(<?php echo ($pageno - 1) ?>)" ; <?php
                }
                ?>><<</a></li>



                <?php
                for ($y = 1; $y <= $num_of_pages; $y++) {
                    if ($y == $pageno) {

                        ?>
                        <li class="page-item active">
                            <a class="page-link" onclick="loadBlog(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                        </li>
                        <?php

                    } else {

                        ?>
                        <li class="page-item">
                            <a class="page-link" onclick="loadBlog(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
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
                            onclick="loadBlog(<?php echo ($pageno + 1) ?>);" <?php
                }
                ?>>>></a></li>
            </ul>
        </div>
    </div>


    <?php

}
?>