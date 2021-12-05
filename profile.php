<?php include('./include/header.php'); ?>
<section class="account-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <?php include("./dashboard/dashboard-navbar.php") ?>
                    </div>
                    <div class="col-md-8">
                        <?php if (isset($_GET['active'])) {
                            $active = $_GET['active'];
                            if ($active == "profile") {
                                include("./dashboard/profile.php");
                            } else if ($active == "address") {
                                include("./dashboard/address.php");
                            } else if ($active == "orderlist") {
                                include("./dashboard/orders.php");
                            } else if ($active == "wishlist") {
                                include("./dashboard/wishlist.php");
                            }
                        } else{
                            session_destroy();
                            ?>
                            <script> location.replace("./");</script>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('./include/footer.php'); ?>