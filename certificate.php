<?php
session_start();
require_once('header.php');


?>


 <div id="particles-js"></div>
<div class="navcert">
    <h1 class="certheader">My Certificates</h1>
    <a class="addcert fa-solid fa-file-circle-plus" href="certificate-add.php"> Add Certificate</a>
</div>

<section id="certificate" class="certificate" >    
    <?php
        $query = "SELECT * FROM tbl_certificate";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            ?>
            <div class="myCertificate">
                <div class="certificate_title">
                    <h1><?php echo $row['title']; ?></h1>
                    <img class="cert_image" src="assets/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['title']; ?>"/>
                </div>
            </div>
            
        <?php }
        }else {
            echo "No certificates found.";
        }
    ?> 
    <div class="popup-image">
        <span>&times;</span>
        <img alt="certificate"/>
    </div>
</section>


<?php require_once('footer.php'); ?>