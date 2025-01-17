<?php
// TERNARY / short hand if statement

$is_admin = false;
echo $is_admin ? "Welcome, Admin!" : "Access denied";

echo "<br>";
echo "<br>";

$is_logged_in = true;
$message = ($is_logged_in) ? "Welcome back" : "Please login";
echo $message;

echo "<br>";
echo "<br>";

$age = 18;
$status = ($age >= 18) ? "Adult" : "Minor";
echo $status;