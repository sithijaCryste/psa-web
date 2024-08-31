<?php

include "../admin/dist/config/connection.php";

$pageno = 0;
$page = $_POST["doc"];

if ($page != 0) {
    $pageno = $page;
} else {
    $pageno = 1;
}

// Fetch all documents, with items having status_id = 2 appearing first
$q = "SELECT * FROM `document`  ORDER BY `status_id` = 2 DESC, `date` DESC";

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
                    <a class="page-link" <?php if ($pageno <= 1) { echo("#"); } else { ?>onclick="loadDocumentSi(<?php echo ($pageno - 1) ?>)"<?php } ?>><<</a>
                </li>

                <?php
                for ($y = 1; $y <= $num_of_pages; $y++) {
                    if ($y == $pageno) {
                        ?>
                        <li class="page-item active">
                            <a class="page-link" onclick="loadDocumentSi(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="page-item">
                            <a class="page-link" onclick="loadDocumentSi(<?php echo ($y) ?>);"><?php echo ($y) ?></a>
                        </li>
                        <?php
                    }
                }
                ?>

                <li class="page-item">
                    <a class="page-link" <?php if ($pageno >= $num_of_pages) { echo("#"); } else { ?>onclick="loadDocumentSi(<?php echo ($pageno + 1) ?>);"<?php } ?>>>></a>
                </li>
            </ul>
        </div>
    </div>

    <?php
}
?>
