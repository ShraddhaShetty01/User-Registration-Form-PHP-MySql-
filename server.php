<?php

session_start();

//initialising variables

$username = "";
$email = "";

//connect to db

$db = mysqli_connect('localhost:8888','root','','practice') or die("could not connect to the database");

// register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

// form validation 

if(empty($username)) {array_push($errors, "Username is required")};
if(empty($email)) {array_push($errors, "Email is required")};
if(empty($password_1)) {array_push($errors, "Password is required")};
if ($password_1 != $password_2) {array_push($errors, "Passwords do not match")};

// check db for existing user with same username

$user_check_query = "SELECT * from user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {
    if($user['username'] === $username{array_push($errors, "Username already exists");}
    if($user['email'] === $email{array_push($errors, "The email ID already has a registered username");}

}

// Register a user if there is no error 



































?>