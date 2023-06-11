<?php require_once('header.php'); ?>

<div id="particles-js"></div>
        <section id="home" class="home">
            <div class="phase1">
                <h1>
                    Jojo Javier
                    <img
                        src="assets/img/ghost-removebg-preview.png"
                        class="Ghost"
                    />
                    <br>
                    <div class="title_name">
                        Hello, I am a <span class="typed"></span>
                    </div>
<<<<<<< HEAD
                </h1>
                <div class="logo">
                    <?php
                            $statement = $pdo->prepare("SELECT * FROM tbl_social");
                            $statement->execute();
                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($result as $row) {
                            ?>
                                <?php if ($row['social_url'] != '') : ?>
                                    <a href="<?php echo $row['social_url']; ?>" target="_blank" class="<?php echo $row['social_icon']; ?>"></a>
                                <?php endif; ?>
                            <?php
                            }
                            ?>
                </div>
            </div>

            <div class="image">
                <img
                    src="assets/img/IMG_20221210_204646_494-02-01-removebg.png"
                    alt="Profile"
                />
            </div>
        </section>
<?php require_once('footer.php'); ?>
=======
                </div>
            </div>
        <?php
            $i++;
            }   
        ?>
    </div>

    <!-- Slider Left Control -->
    <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <!-- Slider Right Control -->
    <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<div class="product pt_70 pb_70" id="#products">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class="headline">
                        <h2>AICOM Rice Store</h2>
                        <h3>Our list of well grained rice</h3>
                    </div>
                </div>
            </div>
            <?php
                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_featured=?");
                    $statement->execute(array(1));
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $row) {
                    ?>
                       <div class="col-md-4 item item-search-result">
                            <div class="inner">
                                <div class="thumb">
                                    <div class="photo" style="background-image:url(assets/uploads/<?php echo $row['p_featured_photo']; ?>);"></div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></a></h3>
                                    <h4>
                                    Php <?php echo $row['p_current_price']; ?>
                                    </h4>
                                    <?php if ($row['p_qty'] == 0) : ?>
                                        <div class="out-of-stock">
                                            <div class="inner">
                                                Out Of Stock
                                            </div>
                                        </div>
                                    <?php else : ?>
                                    <p><a href="product.php?id=<?php echo $row['p_id']; ?>" style="border-radius: 1rem;"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
        </div>
    </div>
</div>



<?php require_once('footer.php'); ?>
>>>>>>> 83b1e762d57ca68568e08d5e86fb7d759ad07c33
