<?php
// Sample login.php file

session_start();

// Mock user data (replace with actual user validation logic)
$valid_username = 'user';
$valid_password = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        // Set session variable or any other login success actions
        $_SESSION['username'] = $username;
        // Redirect to the next page
        header('Location: nextpage.php');
        exit();
    } else {
        $error_message = 'Invalid username or password.';
    }
}
?>
