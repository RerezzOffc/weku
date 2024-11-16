<?php
session_start();
session_destroy(); // Destroys the session
header("Location: login.html"); // Redirect to the login page
exit();
?>
