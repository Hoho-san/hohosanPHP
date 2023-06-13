<?php require_once('header.php'); ?>
<?php
    if (isset($_POST['form_subscribe'])) {
        if (empty($_POST['email_subscribe'])) {
            $valid = 0;
                echo "<script>alert('Email address can not be empty.')</script>";
        }else {
            $email = $_POST['email_subscribe'];
            $query = "SELECT * FROM tbl_subscriber WHERE subs_email='$email'";
            $result = $conn->query($query);
            $total = $result->num_rows;
            if ($total) {
                $valid = 0;
                echo "<script>alert('You have already subscribed.')</script>";
            }else {
                // Sending email to the requested subscriber for email confirmation
                // Getting activation key to send via email. also it will be saved to database untiluserclick on the activation link.
                 $key = md5(uniqid(rand(), true));
                // Getting current date
                $current_date = date('Y-m-d');

                // Getting current date and time
                $current_date_time = date('Y-m-d H:i:s');
                // Inserting data into the database
                $email = $_POST['email_subscribe'];
                $current_date = date("Y-m-d");
                $current_date_time = date("Y-m-d H:i:s");
                                // $key = generateKey(); // Function to generate the key, implement your own logic here

                    $query = "INSERT INTO tbl_subscriber (subs_email, subs_date, subs_date_time, subs_hash) VALUES ('$email', '$current_date', '$current_date_time', '$key')";
                    if ($conn->query($query) === true) {
                        echo "<script>alert('Subscriber added successfully!!')</script>";
                    } else {
                        echo "Error: " . $query . "<br>" . $conn->error;
                }
            }
        }
    }
                    
?>
<section class="home-newsletter">
    <div id="particles-js"></div>
    <div class="container">
        <form action="" method="post">
            <h2>Please feel free to share your social media link if you are a female who is 18 years old or older.</h2>
            <div class="input-group">
                <input type="link" class="form-control" placeholder="Enter a social media account" name="email_subscribe">
                <span class="input-group-btn">
                    <button class="btn btn-theme fa-solid fa-paper-plane" type="submit" name="form_subscribe"> Send</button>
                </span>
            </div>
        </form>
</section>

<?php include 'footer.php'; ?>