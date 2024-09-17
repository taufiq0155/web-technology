<?php

// Function to sanitize data
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Function to match credentials for login
function matchCredentials($email, $password) {
    $conn = mysqli_connect("localhost", "root", "", "mvc_example");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    $isUser = (mysqli_num_rows($result) === 1);
    mysqli_close($conn);

    return $isUser;
}

// Function to register a new user
function registerUser($fullName, $email, $password, $contactNumber, $gender) {
    $conn = mysqli_connect("localhost", "root", "", "mvc_example");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $fullName = mysqli_real_escape_string($conn, $fullName);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
    $gender = mysqli_real_escape_string($conn, $gender);

    $sql = "INSERT INTO users (full_name, email, password, contact_number, gender) 
            VALUES ('$fullName', '$email', '$password', '$contactNumber', '$gender')";

    $success = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $success;
}

// Function to check if email already exists
function emailExists($email) {
    $conn = mysqli_connect("localhost", "root", "", "mvc_example");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($conn, $email);

    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    $exists = (mysqli_num_rows($result) > 0);
    mysqli_close($conn);

    return $exists;
}

?>
