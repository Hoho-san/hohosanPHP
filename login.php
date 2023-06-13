<?php
// Connect to the database
include('header.php');

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform login validation
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 1) {
        // Start session and set loggedin variable
        session_start();
        $_SESSION["loggedin"] = true;
        
        // Redirect to the index.php page after successful login
        echo "<script>alert('Login successful')</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit;
    } else {
        // Display login failed message
        echo "<script>alert('Login failed')</script>";
    }
}
?>


   <form action="login.php" method="post" class="login-form">
    <input type="text" name="username" placeholder="Username" class="input-field">
    <input type="password" name="password" placeholder="Password" class="input-field">
    <input type="submit" name="submit" value="Login" class="submit-button">
    <div class="account-info">
        <p>
            need an account?
            <a href="register.php" class="register-link">click here</a>
        </p>
    </div>
</form>


<?php require_once('footer.php'); ?>