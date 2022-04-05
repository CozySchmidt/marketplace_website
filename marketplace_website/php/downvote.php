<?php
require 'includes/functions.php';
session_start();

$email = $_SESSION['email'];
$id = $_GET['id'];

updateDownvote($email);

if (checkDownvote($email) > 5) {
    deleteProfile($id, $email);
}

header('Location: index.php');
