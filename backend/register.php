<?php
// This script processes the registration and redirects to login page

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user inputs from the form
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // You would likely hash the password before saving it in the database, for example:
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Perform your registration logic here (e.g., save to the database)
    // For example, inserting the user data into the database

    // After successful registration, redirect to the login page
    header("Location: login.html"); // Or 'login.php' if using PHP for login
    exit(); // Always call exit after the header redirect to stop further script execution
}
?>
