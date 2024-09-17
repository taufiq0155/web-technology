<?php 

session_start();
require "../models/User.php";

$fullName = sanitize($_POST['full_name']);
$email = sanitize($_POST['email']);
$password = sanitize($_POST['password']);
$confirmPassword = sanitize($_POST['confirm_password']);
$contactNumber = sanitize($_POST['contact_number']);
$gender = sanitize($_POST['gender']);
$isValid = true;

$_SESSION['full_name'] = $fullName;
$_SESSION['email'] = $email;
$_SESSION['contact_number'] = $contactNumber;
$_SESSION['gender'] = $gender;
$_SESSION['err1'] = "";
$_SESSION['err2'] = "";
$_SESSION['err3'] = "";
$_SESSION['err4'] = "";
$_SESSION['err5'] = "";
$_SESSION['err6'] = "";

if (empty($fullName)) {
    $_SESSION['err1'] = "Full Name is required";
    $isValid = false;
}

if (empty($email)) {
    $_SESSION['err2'] = "Email is required";
    $isValid = false;
} elseif (emailExists($email)) {
    $_SESSION['err2'] = "Email already exists";
    $isValid = false;
}

if (empty($password)) {
    $_SESSION['err3'] = "Password is required";
    $isValid = false;
}

if ($password !== $confirmPassword) {
    $_SESSION['err4'] = "Passwords do not match";
    $isValid = false;
}

if (empty($contactNumber)) {
    $_SESSION['err5'] = "Contact Number is required";
    $isValid = false;
}

if (empty($gender)) {
    $_SESSION['err6'] = "Gender is required";
    $isValid = false;
}

if ($isValid) {
    registerUser($fullName, $email, $password, $contactNumber, $gender);
    header("Location: ../views/index.php");
} else {
    header("Location: ../views/register.php");
}
