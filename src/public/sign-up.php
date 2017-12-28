<?php

  require "../../config/dbh.php";

  $firstName = $_POST["firstName"];
  $lastName = $_POST["lastName"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirmPassword"];

  $error_arr = [
    "firstName" => NULL,
    "lastName" => NULL,
    "email" => NULL,
    "password" => NULL,
    "confirmPassword" => NULL
  ];

  // first name validation
  if (empty($firstName)) {
    $error_arr["firstName"] = "Please enter a first name.";
  } else if (strlen($firstName) < 2) {
    $error_arr["firstName"] = "First name should be at least 2 characters long.";
  } else if (!ctype_alpha($firstName)) {
    $error_arr["firstName"] = "First name should only contain letters.";
  }

  // last name validation
  if (empty($lastName)) {
    $error_arr["lastName"] = "Please enter a last name.";
  } else if (!ctype_alpha($lastName)) {
    $error_arr["lastName"] = "Last name should contain only letters and numbers.";
  }

  // email validation
  if (empty($email)) {
    $error_arr["email"] = "Please enter an email address.";
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_arr["email"] = "Please enter a valid email address.";
  }

  // password validation
  if (empty($password)) {
    $error_arr["password"] = "Please enter a password.";
  } else if (strlen($password) <  8) {
    $error_arr["password"] = "Password should be at least 8 characters long.";
  } else if (!ctype_alnum($password)) {
    $error_arr["password"] = "Password should only contain letters and numbers.";
  }

  // confirm password validation
  if (empty($confirmPassword)) {
    $error_arr["confirmPassword"] = "Please confirm your password.";
  } else if (strlen($confirmPassword) <  8) {
    $error_arr["confirmPassword"] = "Password should be at least 8 characters long.";
  } else if (!ctype_alnum($confirmPassword)) {
    $error_arr["confirmPassword"] = "Password should only contain letters and numbers.";
  } else if ($password != $confirmPassword) {
    $error_arr["confirmPassword"] = "Passwords do not match.";
  }



  echo json_encode($error_arr);

  if(count(array_filter($error_arr)) == 0) {
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ($firstName, $lastName, $email, $password)";
    $res = mysqli_query($conn, $sql);

    echo($res);
  }
