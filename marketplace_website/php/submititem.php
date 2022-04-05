<?php

require 'includes/functions.php';
session_start();


if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit();
}


$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];


if (count($_FILES) > 0) {
    $check = checkPost($_FILES);
    if ($check !== true) {
        $message = '
        <div class="alert alert-danger text-center">
            ' . $check . '
        </div>
        ';
    } else {
        saveProfile($title, $price, $description, $email, $firstname, $lastname, $_FILES);
    }
    header('Location: index.php');
}
