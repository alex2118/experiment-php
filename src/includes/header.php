<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a id="signUpBtn" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a id="loginBtn" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>

<?php

  if (!isset($_SESSION['id'])) {
    include "login-form.php";
    include "sign-up-form.php";
  }

 ?>
