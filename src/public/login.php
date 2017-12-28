<?php

  require "../config/dbh.php";

  $email = $_POST["email"];
  $password = $_POST["password"];

  $error_arr = [
    "email" => NULL,
    "password" => NULL
  ];

  // email validation
  if (empty($email)) {
    $error_arr["email"] = "Please enter an email address.";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_arr["email"] = "Please enter a valid email address.";
  }

  // password validation
  if (empty($password)) {
    $error_arr["password"] = "Please enter a password.";
  }

  if (strlen($password) <  8) {
    $error_arr["password"] = "Password should be at least 8 characters long.";
  }

  if (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $password)) {
    $error_arr["password"] = "Password should only contain letters and numbers.";
  }

  echo json_encode($error_arr);

  // if (in_array()) {
  //
  // }
