<?php
require "config/constants.php";
// destroy all session and redirect user to homepage
session_destroy();
header('location: ' . ROOT_URL);
die();
?>