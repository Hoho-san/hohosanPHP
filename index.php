<?php require_once('header.php'); ?>

<div id="particles-js"></div>
        <section id="home" class="home">
            <div class="phase1">
                <h1>Jojo Javier
                    <img
                        src="assets/img/ghost-removebg-preview.png"
                        class="Ghost"
                    />
                    <div class="title_name">
                        <br>
                        Hello, I am a <span class="typed"></span>
                    </div>
                </h1>
                <div class="logo">
                    <?php
                        $query = "SELECT * FROM tbl_social";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                if ($row['social_url'] != '') {
                                    ?>
                                    <a href="<?php echo $row['social_url']; ?>" target="_blank" class="<?php echo $row['social_icon']; ?>"></a>
                                <?php
                                }
                            }
                        }
                    ?>   
                </div>

                <div class="download">
                    <button onclick="downloadCSV()"><i class="fa-solid fa-circle-chevron-down">  Download CV</i></button>
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
