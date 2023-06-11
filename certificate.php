<?php require_once('header.php'); ?>
 <h1 class="certheader">My Certificates</h1>
 <section id="certificate" class="certificate" >    
        <?php
        $statement = $pdo->prepare("SELECT * FROM tbl_certificate");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
        ?>
            <div class="myCertificate">
                <div class="certificate_title">
                    <h1><?php echo $row['title']; ?></h1>
                    <img class="cert_image" src="assets/uploads/<?php echo $row['photo']; ?>"  alt="<?php echo $row['title']; ?>"/>
                </div>
            </div>
        <?php
        }
        ?>
    <div class="popup-image">
        <span>&times;</span>
        <img alt="certificate"/>
    </div>
</section>


<?php require_once('footer.php'); ?>