
<section class="home-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="single">
                    <?php
                    if (isset($_POST['form_subscribe'])) {

                        if (empty($_POST['email_subscribe'])) {
                            $valid = 0;
                            $error_message1 .= "Email address can not be empty.";
                        } else {
                            
                                $statement = $pdo->prepare("SELECT * FROM tbl_subscriber WHERE subs_email=?");
                                $statement->execute(array($_POST['email_subscribe']));
                                $total = $statement->rowCount();
                                if ($total) {
                                    $valid = 0;
                                    $error_message1 .= "You have already subscribed.";
                                } else {
                                    // Sending email to the requested subscriber for email confirmation
                                    // Getting activation key to send via email. also it will be saved to database until user click on the activation link.
                                    $key = md5(uniqid(rand(), true));

                                    // Getting current date
                                    $current_date = date('Y-m-d');

                                    // Getting current date and time
                                    $current_date_time = date('Y-m-d H:i:s');

                                    // Inserting data into the database
                                    $statement = $pdo->prepare("INSERT INTO tbl_subscriber (subs_email,subs_date,subs_date_time,subs_hash) VALUES (?,?,?,?)");
                                    $statement->execute(array($_POST['email_subscribe'], $current_date, $current_date_time, $key));

                                    $success_message1 = "You have successfully subscribed";
                                }
                            
                        }
                    }
                    if ($error_message1 != '') {
                        echo "<script>alert('" . $error_message1 . "')</script>";
                    }
                    if ($success_message1 != '') {
                        echo "<script>alert('" . $success_message1 . "')</script>";
                    }
                    ?>
                    <form action="" method="post">
                        <?php $csrf->echoInputField(); ?>
                        <h2>Please feel free to share your social media link if you are a female who is 18 years old or older.</h2>
                        <div class="input-group">
                            <input type="link" class="form-control" placeholder="Enter a social media account" name="email_subscribe">
                            <span class="input-group-btn">
                                <button class="btn btn-theme" type="submit" name="form_subscribe">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>






<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 copyright">

                <p>&copy; <?php echo date('Y'); ?> Copyright - Developed By <a href="https://github.com/Hoho-san" target="_blank" style="text-decoration: none; font-weight:bold;">Hoho-san</a> </p>

            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
<script src="assets/script/script.js"></script>
<script src="assets/script/typed.js"></script>
<script src="assets/script/particles.js"></script>
<script src="assets/script/app.js"></script>

</body>

</html>