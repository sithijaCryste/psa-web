<?php

include "../admin/dist/config/connection.php";

$pageno = 0;
$page = $_POST["pg"];

$type = $_POST["type"];
// echo($product);



if($type == "newsSearch"){

    $news = $_POST["n"];
// echo($page);

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `news` WHERE `news`.`header` LIKE '%$news%' OR `news`.`content` LIKE '%$news%' OR `news`.`header_ta` LIKE '%$news%' OR `news`.`content_ta` LIKE '%$news%' OR `news`.`header_sin` LIKE '%$news%' OR `news`.`content_sin` LIKE '%$news%' ORDER BY `date` DESC";
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
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-blog">
                    <div class="blog-thumb" style="background-image: url(../admin/<?php echo ($news['main-img']) ?>)"></div>
                    <h4 class="blog-title"><a
                            href="single-news.php?n=<?php echo ($news['id']) ?>"><?php echo ($news['header_sin']) ?></a>
                    </h4>
                    <p class="blog-meta"><?php echo ($news['date']) ?></p>
                    <p class="truncateNews"><a href="single-news.php?n=<?php echo ($news['id']) ?>"><?php echo ($news['content_sin']) ?></a></p>
                    <a href="single-news.php?n=<?php echo ($news['id']) ?>" class="button">Read More</a>
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
}else if($type == "docSearch"){
    $document = $_POST["d"];

    if ($page != 0) {
        $pageno = $page;
    } else {
        $pageno = 1;
    }
    
    // Fetch all documents, with items having status_id = 2 appearing first
    $q = "SELECT * FROM `document` WHERE `document`.`name` LIKE '%$document%' OR `document`.`name_sin` LIKE '%$document%' OR `document`.`name_tam` LIKE '%$document%' ORDER BY `date` DESC";
    
    $rs = Database::search($q);
    $num = $rs->num_rows;
    
    $results_per_page = 6;
    $num_of_pages = ceil($num / $results_per_page);
    
    $page_results = ($pageno - 1) * $results_per_page;
    
    $q2 = $q . " LIMIT $results_per_page OFFSET $page_results";
    $rs2 = Database::search($q2);
    $num2 = $rs2->num_rows;
    
    if ($num2 == 0) {
        echo ("No Document Here..");
    } else {
        ?>
        <div class="row">
            <?php
            for ($i = 0; $i < $num2; $i++) {
                $doc = $rs2->fetch_assoc();
    
                $c = "SELECT * FROM `category` WHERE `cat_id` = '".$doc['category_id']."'";
                $cat = Database::search($c);
                $catD = $cat->fetch_assoc();
                // Determine if the item is pinned
                $isPinned = $doc['status_id'] == 2;
                ?>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="serviceBox boxHov">
                        
                            <div class="text-end<?php echo $isPinned ? ' pinned' : ''; ?>">
                            <?php if ($isPinned) { ?>
                                <i class="fa-solid fa-thumbtack"></i>
                                <?php } ?>
                            </div>
                        <div class="service-icon">
                            <span><a href="psa-document.php?d=<?php echo($doc['id']) ?>"><?php echo($catD['icon']) ?></a></span>
                        </div>
                        <h3><a href="psa-document.php?d=<?php echo($doc['id']) ?>" class="title"><?php echo($doc['name_sin']) ?></a></h3>
                        <h6><a href="psa-document.php?d=<?php echo($doc['id']) ?>" class="description"><?php echo($catD['cat_name_sin']) ?></a></h6>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-lg-6 text-center">
                <ul class="pagination d-flex justify-content-center align-items-center text-center">
                    <li class="page-item">
                        <a class="page-link" <?php if ($pageno <= 1) { echo("#"); } else { ?>onclick="loadDocument(<?php echo ($pageno - 1) ?>)"<?php } ?>><<</a>
                    </li>
    
                    <?php
                    for ($y = 1; $y <= $num_of_pages; $y++) {
                        if ($y == $pageno) {
                            ?>
                            <li class="page-item active">
                                <a class="page-link" onclick="loadDocument(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="page-item">
                                <a class="page-link" onclick="loadDocument(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                            </li>
                            <?php
                        }
                    }
                    ?>
    
                    <li class="page-item">
                        <a class="page-link" <?php if ($pageno >= $num_of_pages) { echo("#"); } else { ?>onclick="loadDocument(<?php echo ($pageno + 1) ?>);"<?php } ?>>>></a>
                    </li>
                </ul>
            </div>
        </div>
    
        <?php
    }
}else if($type == "BlogSearch"){

    $blog = $_POST["b"];
// echo($page);

if (0 != $page) {
    $pageno = $page;
} else {
    $pageno = 1;
}

$q = "SELECT * FROM `blog` WHERE `blog`.`title` LIKE '%$blog%' OR `blog`.`content` LIKE '%$blog%' ORDER BY `date` DESC";
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
                    <div class="blog-thumb" style="background-image: url(../admin/<?php echo ($blog['path']) ?>)"></div>
                    <h4 class="blog-title"><a
                            href="single-blog.php?n=<?php echo ($blog['id']) ?>"><?php echo ($blog['title_sin']) ?></a>
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
                    onclick="loadBlogSin(<?php echo ($pageno - 1) ?>)" ; <?php
                }
                ?>><<</a></li>



                <?php
                for ($y = 1; $y <= $num_of_pages; $y++) {
                    if ($y == $pageno) {

                        ?>
                        <li class="page-item active">
                            <a class="page-link" onclick="loadBlogSin(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                        </li>
                        <?php

                    } else {

                        ?>
                        <li class="page-item">
                            <a class="page-link" onclick="loadBlogSin(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
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
                            onclick="loadBlogSin(<?php echo ($pageno + 1) ?>);" <?php
                }
                ?>>>></a></li>
            </ul>
        </div>
    </div>


    <?php

}
}
?>



