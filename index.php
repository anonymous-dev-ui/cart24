<?php include('./include/header.php'); ?>
<section class="carousel-slider-main text-center border-top border-bottom bg-white">
    <div class="owl-carousel owl-carousel-slider">
        <div class="item">
            <a href="./shop.php"><img class="img-fluid" src="./img/slider/slider1.jpg" alt="First slide"></a>
        </div>
        <!-- <div class="item">
            <a href="./shop.html"><img class="img-fluid" src="./img/slider/slider2.jpg" alt="First slide"></a>
        </div>
        <div class="item">
            <a href="./shop.html"><img class="img-fluid" src="./img/slider/slider1.jpg" alt="First slide"></a>
        </div>
        <div class="item">
            <a href="./shop.html"><img class="img-fluid" src="./img/slider/slider2.jpg" alt="First slide"></a>
        </div> -->
    </div>
</section>
<section class="top-category section-padding">
    <div class="container">
        <div class="owl-carousel owl-carousel-category">
            <?php
            $catsql = "SELECT * FROM `category` WHERE `parent`='main' ORDER BY `category`.`id` DESC";
            $catquery = mysqli_query($conn, $catsql);
            if (mysqli_num_rows($catquery) > 0) {

                while ($category = mysqli_fetch_assoc($catquery)) {
            ?>
                    <div class="item">
                        <div class="category-item">
                            <a href="./shop.php?slug=<?php echo $category['slug']; ?>">
                                <img class="img-fluid" src="./img/gallery/<?php echo $category['image']; ?>">
                                <h6><?php echo $category['categoryname']; ?></h6>
                                <p>150 Items</p>
                            </a>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="item">
                    <div class="category-item">
                        <a href="./shop.php?slug=<?php echo $category['slug']; ?>">
                            <h6>No categories founded</h6>
                        </a>
                    </div>
                </div><?php
                    }
                        ?>

        </div>
    </div>
</section>
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">Top Savers Today <span class="badge badge-primary">20% OFF</span>
                <a class="float-right text-secondary" href="./shop.php">View All</a>
            </h5>
        </div>
        <?php include("./include/owl-carousel.php"); ?>
    </div>
</section>
<!-- <section class="offer-product">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6">
                <a href="#"><img class="img-fluid" src="./img/ad/banner1.jpg" alt=""></a>
            </div>
            <div class="col-md-6">
                <a href="#"><img class="img-fluid" src="./img/ad/banner2.jpg" alt=""></a>
            </div>
        </div>
    </div>
</section> -->
<section class="product-items-slider section-padding">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">Best Offers View <span class="badge badge-info">20% OFF</span>
                <a class="float-right text-secondary" href="shop.php">View All</a>
            </h5>
        </div>
        <?php include("./include/owl-carousel.php"); ?>
    </div>
</section>

<?php include('./include/footer.php'); ?>