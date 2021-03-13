<?php

include('connect.php');

$error = '';

$pattern = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/";
$patternCo = "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[co]{2,4}$/";

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
  if (empty($_POST['email'])) {
    $error = "Email address is required";
  } elseif (!preg_match($pattern, $_POST['email'])) {
    $error = "Please provide a valid e-mail address";
  } elseif (preg_match($patternCo, $_POST['email'])) {
    $error = "We are not accepting subscriptions from Colombia emails";
  } elseif (!isset($_POST['terms'])) {
    $error = "You must accept the terms and conditions";
  } else {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "INSERT INTO newsletter_emails (email) VALUES ('$email')";

    if (mysqli_query($conn, $sql)) {
      header("Location: success.php");
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
}
