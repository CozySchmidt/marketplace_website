<?php
require 'includes/functions.php';


if (count($_POST) > 0) {

    if ($_GET['from'] == 'login') {
        $found = false; // assume not found
        $email   = trim($_POST['email']);
        $pass = trim($_POST['password']);

        if (checkEmail($email)) {

            $found = findUser($email, $pass);

            if ($found) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("Location: index.php");
                exit();
            }
        }

        header('Location: index.php');
        exit();
    } elseif ($_GET['from'] == 'signup') {
        if (checkSignUp($_POST)  && saveUser($_POST)) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            header("Location: index.php");
            exit();
        }
    }
}
header('Location: index.php');
exit();
