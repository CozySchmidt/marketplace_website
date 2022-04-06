<?php
define('SALT', 'a_very_random_salt_for_this_app');
define('FILE_SIZE_LIMIT', 4000000);

define('DB_HOST',     '127.0.0.1');
define('DB_PORT',     '8889');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'comp3015');

function connect()
{
    $link = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
    if (!$link) {
        echo mysqli_connect_error();
        exit;
    }

    return $link;
}

function checkEmail($email)
{
    return preg_match('/^[a-z](([a-z]|[0-9])*(\.|\+)*([a-z]|[0-9])){7,}+@{1}(gmail\.com|bcit\.ca)$/i', $email);
}

function checkSignUp($data)
{
    $valid = true;

    $firstname = trim($data['firstname']);
    $lastname = trim($data['lastname']);
    $email = trim($data['email']);
    $password = trim($data['password']);
    $verifypassword = trim($data['verifypassword']);

    // if any of the fields are missing
    if (
        $firstname   == '' ||
        $lastname   == '' ||
        $email       == '' ||
        $password    == '' ||
        $verifypassword == ''
    ) {
        $valid = false;
    } elseif (!preg_match('/[a-zA-Z]{3,30}$/', $firstname)) {
        $valid = false;
    } elseif (!preg_match('/[a-zA-Z]{3,30}$/', $lastname)) {
        $valid = false;
    } elseif (!preg_match('/^[a-z](([a-z]|[0-9])*(\.|\+)*([a-z]|[0-9])){7,}+@{1}(gmail\.com|bcit\.ca)$/i', $email)) {
        $valid = false;
    } elseif (!preg_match('/((?=.*[a-z])(?=.*[0-9])(?=.*[!?|@])){8}/', $password)) {
        $valid = false;
    } elseif (!preg_match('/((?=.*[a-z])(?=.*[0-9])(?=.*[!?|@])){8}/', $verifypassword)) {
        $valid = false;
    } elseif ($data['password'] != $data['verifypassword']) {
        $valid = false;
    }

    return $valid;
}


function saveUser($data)
{
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $password = md5($data['password'] . SALT);

    $link = connect();
    $query = 'insert into users(firstname, lastname, email, password) values ("' . $firstname . '","' . $lastname . '","' . $email . '","' . $password . '")';
    $success = mysqli_query($link, $query);

    mysqli_close($link);

    return $success;
}

function findUser($email, $pass)
{
    $found = false;

    $link = connect();
    $hash = md5($pass . SALT);

    $query   = 'select * from users where email = "' . $email . '" and password = "' . $hash . '"';
    $results = mysqli_query($link, $query);

    if (mysqli_fetch_array($results)) {
        $found = true;
    }

    mysqli_close($link);
    return $found;
}

function protectPage()
{
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php');
        exit();
    }
}
function filterUserName($name)
{
    // if it's not alphanumeric, replace it with an empty string
    return preg_replace("/[^a-z0-9]/i", '', $name);
}

function checkPost($file)
{
    if ($file['picture']['size'] < FILE_SIZE_LIMIT && $file['picture']['type'] == 'image/jpeg') {
        return true;
    }

    return 'Unable to upload profile picture!';
}

function saveProfile($title, $price, $description, $email, $firstname, $lastname, $file)
{
    $picture = md5($title . time());
    $moved   = move_uploaded_file($file['picture']['tmp_name'], 'products/' . $picture);

    if ($moved) {
        $link   = connect();
        $query  = 'insert into profiles(title,price,description,email,picture) values("' . $title . '",' . $price . ',"' . $description . '","' . $email . '","' . $picture . '")';
        $result = mysqli_query($link, $query);
        mysqli_close($link);
        return $result;
    }

    return false;
}

function getAllProfiles()
{
    $link     = connect();
    $query    = 'select * from profiles';
    $profiles = mysqli_query($link, $query);

    mysqli_close($link);
    return $profiles;
}

function deleteProfile($id, $email)
{

    $link    = connect();
    $query   = 'delete from profiles where id = "' . $id . '" and email = "' . $email . '"';
    $success = mysqli_query($link, $query);

    mysqli_close($link);
    return $success;
}

function getPicture($id)
{

    $link = connect();
    $query = 'select picture from profiles where id = ' . $id;
    $success = mysqli_query($link, $query);

    $row = mysqli_fetch_array($success);

    print_r($row[0]);
}
function getTitle($id)
{

    $link = connect();
    $query = 'select title from profiles where id = ' . $id;
    $success = mysqli_query($link, $query);

    $row = mysqli_fetch_array($success);

    print_r($row[0]);
}
function getDesc($id)
{

    $link = connect();
    $query = 'select description from profiles where id = ' . $id;
    $success = mysqli_query($link, $query);

    $row = mysqli_fetch_array($success);

    print_r($row[0]);
}
function getEmail($id)
{

    $link = connect();
    $query = 'select email from profiles where id = ' . $id;
    $success = mysqli_query($link, $query);

    $row = mysqli_fetch_array($success);

    print_r($row[0]);
}
function getPrice($id)
{

    $link = connect();
    $query = 'select price from profiles where id = ' . $id;
    $success = mysqli_query($link, $query);

    $row = mysqli_fetch_array($success);

    print_r($row[0]);
}

function getID($email)
{

    $link = connect();
    $query = 'select id from profiles where email = "' . $email . '"';
    $success = mysqli_query($link, $query);

    $row = mysqli_fetch_array($success);

    return $row[0];
}
function getdownvoteID()
{
}
function getPicturewEmail($email)
{

    $link = connect();
    $query = 'select picture from profiles where email = "' . $email . '"';
    $success = mysqli_query($link, $query);

    $row = mysqli_fetch_array($success);

    return $row[0];
}
function updateDownvote($email)
{

    $link = connect();
    $query = 'update profiles set downvote = downvote + 1 where id =';
    $success = mysqli_query($link, $query);

    mysqli_close($link);
    return $success;
}
function checkDownvote($email)
{

    $link = connect();
    $query = 'select downvote from profiles where email = "' . $email . '"';
    $success = mysqli_query($link, $query);

    $row = mysqli_fetch_array($success);

    return $row[0];
}
