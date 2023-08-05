<!-- login_process.php -->
<?php
session_start();

$valid_username = 'Sara';
$valid_password = 'Sara123';

if (isset($_POST['Username']) && isset($_POST['Password'])) {
    $submitted_username = $_POST['Username'];
    $submitted_password = $_POST['Password'];

    if ($submitted_username === $valid_username && $submitted_password === $valid_password) {

        $_SESSION['is_logged_in'] = true;
        $_SESSION['Username'] = $submitted_username;

        header('Location:display_products.php');
        exit(); // Added to prevent further execution after redirect

    } else {
        // Invalid credentials, show an error message
        echo '<script>alert(" Invalied Username")</script>';

        header('Location:..\HTML\login.php');
        exit(); // Added to prevent further execution after redirect
    }
}
?>