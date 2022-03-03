<?php
require_once('load.php');

// Handle logins
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($login->verify_login($_POST)) {
        $login_status = $login->verify_login($_POST);
    } else {
        header('Location: login.php');
    }
}

// Verify session
if ($login->verify_session()) {
    $user = $login->user;

    include('home.php');
} else {
    include('register.php');
}
