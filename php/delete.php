<?php
require 'includes/functions.php';

session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit();
}

deleteProfile($_GET['id'], $_SESSION['email']);

header('Location: index.php');
exit();
