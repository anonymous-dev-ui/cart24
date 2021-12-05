<?php include("./include/header.php"); ?>
<?php
if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];
    $sql = "SELECT * FROM `products` WHERE `products`.`slug`='$slug'";
    if ($sql) {

        $query = mysqli_query($conn, $sql);
        $product = mysqli_fetch_assoc($query);
    } else {
        echo "query incorrect";
    }
}
?>
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span>
                <a href="#"><?php echo $product['cateGory']; ?></a> <span class="mdi mdi-chevron-right"></span>
                <a href="#"><?php echo $product['productName']; ?></a>
            </div>
        </div>
    </div>
</section>
<section class="shop-single section-padding pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="shop-detail-left">
                    <div class="shop-detail-slider">
                        <div class="favourite-icon">
                            <a class="fav-btn" title="" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="59% OFF"><i class="mdi mdi-tag-outline"></i></a>
                        </div>
                        <!-- Container for the image gallery -->
                        <div class="container productimages">
                            <!-- Full-width images with number text -->
                            <div class="mySlides">
                                <div class="numbertext">1 / 6</div>
                                <img src="./img/gallery/<?php echo $product['productImage']; ?>" style="width:100%">
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">2 / 6</div>
                                <img src="./img/gallery/<?php echo $product['productImage2']; ?>" style="width:100%">
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">3 / 6</div>
                                <img src="./img/gallery/<?php echo $product['productImage3']; ?>" style="width:100%">
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">4 / 6</div>
                                <img src="./img/gallery/<?php echo $product['productImage4']; ?>" style="width:100%">
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">5 / 6</div>
                                <img src="./img/gallery/<?php echo $product['productImage5']; ?>" style="width:100%">
                            </div>
                            <div class="mySlides">
                                <div class="numbertext">6 / 6</div>
                                <img src="./img/gallery/<?php echo $product['productImage6']; ?>" style="width:100%">
                            </div>
                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            <!-- Thumbnail images -->
                            <div class="row">
                                <div class="column">
                                    <img class="demo cursor" src="./img/gallery/<?php echo $product['productImage']; ?>" style="width:100%" onclick="currentSlide(1)" alt="<?php echo $product['alttag']; ?>">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="./img/gallery/<?php echo $product['productImage2']; ?>" style="width:100%" onclick="currentSlide(2)" alt="<?php echo $product['alttag2']; ?>">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="./img/gallery/<?php echo $product['productImage3']; ?>" style="width:100%" onclick="currentSlide(3)" alt="<?php echo $product['alttag3']; ?>">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="./img/gallery/<?php echo $product['productImage4']; ?>" style="width:100%" onclick="currentSlide(4)" alt="<?php echo $product['alttag4']; ?>">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="./img/gallery/<?php echo $product['productImage5']; ?>" style="width:100%" onclick="currentSlide(5)" alt="<?php echo $product['alttag5']; ?>">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="./img/gallery/<?php echo $product['productImage6']; ?>" style="width:100%" onclick="currentSlide(6)" alt="<?php echo $product['alttag6']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                // Next/previous controls
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                // Thumbnail image controls
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "flex";
                    dots[slideIndex - 1].className += " active";
                    captionText.innerHTML = dots[slideIndex - 1].alt;
                }
            </script>
            <div class="col-md-6">
                <div class="shop-detail-right">
                    <span class="badge badge-success"> <?php
                                                        $disc =  ((int)$product['MRP'] / (int)$product['SELL']) * 100;

                                                        echo (int)($disc);
                                                        ?>% OFF</span>
                    <h2><?php echo $product['productName']; ?></h2>
                    <h6><strong><span class="mdi mdi-approval"></span> Available in</strong> - 500 gm</h6>
                    <p class="regular-price"><i class="mdi mdi-tag-outline"></i> MRP : <?php echo $product['MRP']; ?> <i class="fas fa-indian-rupee"></i></p>
                    <p class="offer-price mb-0">Discounted price : <span class="text-success"><?php echo $product['SELL']; ?> <i class="fas fa-indian-rupee"></i> </span></p>
                    <a href="checkout.html"><button type="button" class="btn btn-secondary btn-lg"><i class="mdi mdi-cart-outline"></i> Add To Cart</button> </a>
                    <div class="short-description">
                        <h5>
                            Quick Overview
                            <p class="float-right">Availability: <span class="badge badge-success">In Stock</span>
                            </p>
                        </h5>
                        <?php echo $product['productDescription']; ?>
                    </div>
                    <h6 class="mb-3 mt-4">Why shop from Groci?</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="mdi mdi-truck-fast"></i>
                                <h6 class="text-info">Free Delivery</h6>
                                <p>Lorem ipsum dolor...</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box">
                                <i class="mdi mdi-basket"></i>
                                <h6 class="text-info">100% Guarantee</h6>
                                <p>Rorem Ipsum Dolor sit...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product-items-slider section-padding bg-white border-top">
    <div class="container">
        <div class="section-header">
            <h5 class="heading-design-h5">Best Offers View <span class="badge badge-primary">20% OFF</span>
                <a class="float-right text-secondary" href="shop.php">View All</a>
            </h5>
        </div>
        <?php include("./include/owl-carousel.php"); ?>
    </div>
</section>

<?php include("./include/footer.php"); ?>