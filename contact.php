<?php require_once('header.php'); ?>

<?php 
if (isset($_POST['submit'])) {
    $fname = $_POST['contact_fname'];
    $lname = $_POST['contact_lname'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];
    if (empty($fname) || empty($lname) || empty($email) || empty($message)) {
        echo "<script>alert('All input field must not be empty.')</script>";
    } else { // Insert data into the portfolio table
        $sql = "INSERT INTO tbl_contact (contact_fname, contact_lname, contact_email, contact_message) VALUES ('$fname', '$lname', '$email', '$message')";
         if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully')</script>";
         } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>
<div id="particles-js"></div>
<section data-aos="zoom-in-down" data-aos-offset="200" class="home-newsletter">
  
    <div class="container">
        <form action="" method="post">
            <h2>Get in touch</h2>
            <div class="input-main">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="First Name" name="contact_fname">
                    <input type="text" class="form-control" placeholder="Last Name" name="contact_lname">
                </div>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Email" name="contact_email">
                </div>
                  <div class="input-group">
                    <input type="text" class="messageform" placeholder="Message me" name="contact_message">
                </div>
                <span class="input-group-btn">
                    <button class="btn btn-theme fa-solid fa-paper-plane" type="submit" name="submit"> Send</button>
                </span>
            </div>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>